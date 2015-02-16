<?php

class MyTaskController extends \BaseController {

	protected $sections = array(
		'index' => 'Todos',
		'create' => 'Nuevo',
		'edit' => 'Editar',
		'delete' => 'Eliminar'
		);

	public function __construct(){

		$this->beforeFilter('auth');

		$this->beforeFilter('tasks');

		$this->module = array(
			'route' => '/my/tasks',
			'name' => 'tasks',
			'title' => 'Tareas',
			'description' => 'Gestión de Tareas del Sistema',
			'breadcrumbs' => $this->getBreadcumbs(),
			'sections' => $this->sections,
			'msg_danger' => Session::get('msg_danger'),
			'msg_warning' => Session::get('msg_warning'),
			'msg_success' => Session::get('msg_success'),
			'msg_active' => Session::get('msg_active'),
			);

	}

	/**
	 * Display a listing of the resource.
	 * GET /tasks
	 *
	 * @return Response
	 */
	public function getIndex()
	{

		$args = array(
			'tasks' => Auth::user()->tasks,
			'module' => $this->module,
			);
		Audits::add(Auth::user(), array(
			'name' => 'my_task_get_index',
			'title' => 'Mis Tareas',
			'description' => 'Vizualización de Tareas'
			), 'READ');
		return View::make('my.tasks.index')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /tasks/create
	 *
	 * @return Response
	 */
	public function getCreate()
	{

		$args = array(
			'tasks' => Auth::user()->tasks,
			'users' => Users::getActive(),
			'module' => $this->module,
			);
		Audits::add(Auth::user(), array(
			'name' => 'my_task_get_create',
			'title' => 'Añadir tareas',
			'description' => 'Adición de tareas'
			), 'READ');
		return View::make('my.tasks.create')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * POST /tasks/create
	 *
	 * @return Response
	 */
	public function postCreate()
	{

		if( $task_parent = Tasks::find( Input::get('id_parent') )):

			$task = new Tasks();
			$task->name = Input::get('name');
			$task->description = Input::get('description');
			$task->hours = Input::get('hours');
			$task->id_project = $task_parent->project->id;
			$task->id_parent = $task_parent->id;
			$task->status = 'inactive';
			
			if( $task->save() ):

				$users = array( Auth::user()->id );
		
				if($task->users()->sync($users)):

					$args = array(
						'msg_success' => array(
							'name' => 'my_task_create',
							'title' => 'Tarea agregada',
							'description' => 'La tarea ' . $task->title . ' fue agregada exitosamente'
							)
						);

					Audits::add(Auth::user(), $args['msg_success'], 'CREATE');
					return Redirect::to( $this->module['route'] )->with( $args );

				else:

					$task->delete();

					$args = array(
						'msg_danger' => array(
							'name' => 'my_task_assign_err',
							'title' => 'Error al agregar la tarea',
							'description' => 'Hubo un error al asignar los responsables'
							)
						);

					Audits::add(Auth::user(), $args['msg_danger'], 'UPDATE');
					return Redirect::to( $this->module['route'].'/create' )->with( $args );

				endif;

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'my_task_create_err',
						'title' => 'Error al agregar la tarea',
						'description' => 'Hubo un error al agregar la tarea ' . $task->title
						)
					);

				Audits::add(Auth::user(), $args['msg_danger'], 'CREATE');
				return Redirect::to( $this->module['route'].'/create' )->with( $args );

			endif;

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'my_task_create_err',
					'title' => 'Error al agregar la tarea',
					'description' => 'Debe Seleccionar una Tarea Padre.'
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'CREATE');
			return Redirect::to( $this->module['route'].'/create' )->with( $args );

		endif;

	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /tasks/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{

		$task = Tasks::find( Crypt::decrypt($id) );

		$args = array(
			'task' => $task,
			'tasks' => $task->project->tasks,
			'users' => Users::getActive(),
			'module' => $this->module,
			);

		Audits::add(Auth::user(), array(
			'name' => 'task_get_edit',
			'title' => 'Editar tareas',
			'description' => 'Edición de tareas'
			), 'READ');

		return View::make('my.tasks.edit')->with($args);

	}

	/**
	 * Show the form for editing the specified resource.
	 * POST /tasks/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postEdit($id)
	{
		
		if( $task = Tasks::find( Crypt::decrypt( $id ) ) ):

			$task->name = Input::get('name');
			$task->description = Input::get('description');
			$task->hours = Input::get('hours');
			$task->id_parent = Input::get('id_parent');
			$task->status = 'inactive';
			
			if( $task->save() ):

				$args = array(
					'msg_success' => array(
						'name' => 'my_task_edit',
						'title' => 'Tarea editada',
						'description' => 'La tarea ' . $task->title . ' fue editada exitosamente'
						)
					);

				Audits::add(Auth::user(), $args['msg_success'], 'CREATE');
				return Redirect::to( $this->module['route'] )->with( $args );

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'my_task_edit_err',
						'title' => 'Error al editar la tarea',
						'description' => 'Hubo un error al editar la tarea ' . $task->title
						)
					);

				Audits::add(Auth::user(), $args['msg_danger'], 'CREATE');
				return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($task->id) )->with( $args );

			endif;

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'my_task_edit_err',
					'title' => 'Error al editar la tarea',
					'description' => 'Hubo un error al editar la tarea ' . $task->title . ', no se encuetra la tarea.'
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'CREATE');
			return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($task->id) )->with( $args );

		endif;

	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /tasks/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDelete($id)
	{

		$args = array(
			'task' => Tasks::find( Crypt::decrypt($id) ),
			'module' => $this->module,
			);
		Audits::add(Auth::user(), array(
			'name' => 'my_task_get_delete',
			'title' => 'Eliminar tareas',
			'description' => 'Vizualización de tareas a eliminar'
			), 'READ');

		return View::make('my.tasks.delete')->with($args);

	}

	/**
	 * Show the form for deleting the specified resource.
	 * POST /tasks/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postDelete( $id )
	{
		$task =  Tasks::find( Crypt::decrypt($id) );

		if($task->delete()):

			$args = array(
				'msg_success' => array(
					'name' => 'my_task_delete',
					'title' => 'Tarea eliminada',
					'description' => 'La tarea ' . $task->title . ' fue eliminada exitosamente'
					)
				);

			Audits::add(Auth::user(), $args['msg_success'], 'UPDATE');
			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'my_task_delete_err',
					'title' => 'Error al eliminar la tarea',
					'description' => 'Hubo un error al eliminar la tarea ' . $task->title
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'UPDATE');
			return Redirect::to( $this->module['route'].'/delete/'.Crypt::encrypt($task->id) )->with( $args );

		endif;
	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /tasks/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getActivate($id)
	{

		$task = Tasks::find( Crypt::decrypt($id) );

		$task->status = 'active';

		if($task->save()):

			$args = array(
				'msg_success' => array(
					'name' => 'my_tasks_activate',
					'title' => 'Tarea iniciada satisfactoriamente',
					'description' => 'La tarea ' . $task->name . ' ha sido iniciada exitosamente'
					)
				);

			Audits::add(Auth::user(), $args['msg_success'], 'UPDATE');

			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'my_tasks_activate_err',
					'title' => 'Error al activar tarea',
					'description' => 'hubo un error al activar la tarea ' . $task->name
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'UPDATE');

			return Redirect::to( $this->module['route'] )->with( $args );

		endif;

	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /tasks/done/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDone($id)
	{

		$task = Tasks::find( Crypt::decrypt($id) );

		$task->status = 'done';

		if($task->save()):

			$args = array(
				'msg_success' => array(
					'name' => 'my_tasks_done',
					'title' => 'Tarea finalizada satisfactoriamente',
					'description' => 'El tarea ' . $task->name . ' ha sido finalizada exitosamente'
					)
				);

			Audits::add(Auth::user(), $args['msg_success'], 'UPDATE');

			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'my_tasks_done_err',
					'title' => 'Error al finalizar tarea',
					'description' => 'hubo un error al finalizar la tarea ' . $task->name
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'UPDATE');

			return Redirect::to( $this->module['route'] )->with( $args );

		endif;

	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /tasks/undone/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getUndone($id)
	{

		$task = Tasks::find( Crypt::decrypt($id) );

		$task->status = 'active';

		if($task->save()):

			$args = array(
				'msg_success' => array(
					'name' => 'my_tasks_undone',
					'title' => 'Tarea regresada satisfactoriamente',
					'description' => 'La tarea ' . $task->name . ' ha sido regresada exitosamente'
					)
				);

			Audits::add(Auth::user(), $args['msg_success'], 'UPDATE');

			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'my_tasks_undone_err',
					'title' => 'Error al regresar tarea',
					'description' => 'hubo un error al regresar la tarea ' . $task->name
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'UPDATE');

			return Redirect::to( $this->module['route'] )->with( $args );

		endif;

	}

	private function getBreadcumbs(){

		$self_breadcumb = array(
			'name' => 'Tareas',
			'route' => '/my/tasks'
			);

		array_push( $this->breadcrumbs, $self_breadcumb);

		return $this->breadcrumbs;

	}

}
