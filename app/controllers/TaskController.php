<?php

class TaskController extends \BaseController {

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
			'route' => self::getRoute(Request::path()),
			'parent' => 'projects',
			'name' => 'tasks',
			'title' => 'Tareas',
			'description' => 'Gestión de Tareas del Sistema',
			'breadcumbs' => $this->getBreadcumbs(),
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
	public function getIndex( $idProject )
	{

		$args = array(
			'tasks' => Tasks::all(),
			'module' => $this->module,
			);
		Audits::add(Auth::user(), array(
			'name' => 'task_get_index',
			'title' => 'Tareas',
			'description' => 'Vizualización de Tareas'
			), 'READ');
		return View::make('tasks.index')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /tasks/create
	 *
	 * @return Response
	 */
	public function getCreate( $idProject )
	{
		$args = array(
			'tasks' => Tasks::all(),
			'module' => $this->module,
			);
		Audits::add(Auth::user(), array(
			'name' => 'task_get_create',
			'title' => 'Añadir tareas',
			'description' => 'Adición de tareas'
			), 'READ');
		return View::make('tasks.create')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * POST /tasks/create
	 *
	 * @return Response
	 */
	public function postCreate( $idProject )
	{

		$task = new Tasks();
		$task->description = Input::get('description');
		$task->name = Input::get('name');
		$task->type = 'stock';
		
		if( $task->save() ):

			$args = array(
				'msg_success' => array(
					'name' => 'task_create',
					'title' => 'Tarea agregada',
					'description' => 'La tarea ' . $task->title . ' fue agregada exitosamente'
					)
				);
			Audits::add(Auth::user(), $args['msg_success'], 'CREATE');
			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'task_create_err',
					'title' => 'Error al agregar la tarea',
					'description' => 'Hubo un error al agregar la tarea ' . $task->title
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
	public function getEdit( $idProject, $id)
	{
		$args = array(
			'task' => Tasks::find( Crypt::decrypt($id) ),
			'module' => $this->module,
			);
		Audits::add(Auth::user(), array(
			'name' => 'task_get_edit',
			'title' => 'Editar tareas',
			'description' => 'Edición de tareas'
			), 'READ');

		return View::make('tasks.edit')->with($args);

	}

	/**
	 * Show the form for editing the specified resource.
	 * POST /tasks/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postEdit( $idProject,  $idProject, $id)
	{
		
		$task = Tasks::find( Crypt::decrypt($id) );

		$task->description = Input::get('description');
		$task->name = Input::get('name');
		
		if( $task->save() ):

			$args = array(
				'msg_success' => array(
					'name' => 'task_edit',
					'title' => 'Tarea editada',
					'description' => 'La tarea ' . $task->title . ' fue editada exitosamente'
					)
				);

			Audits::add(Auth::user(), $args['msg_success'], 'UPDATE');
			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'task_edit_err',
					'title' => 'Error al editar la tarea',
					'description' => 'Hubo un error al editar la tarea ' . $task->title
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'UPDATE');
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
	public function getDelete( $idProject, $id)
	{

		$args = array(
			'task' => Tasks::find( Crypt::decrypt($id) ),
			'module' => $this->module,
			);
		Audits::add(Auth::user(), array(
			'name' => 'task_get_delete',
			'title' => 'Eliminar tareas',
			'description' => 'Vizualización del tareas a eliminar'
			), 'READ');

		return View::make('tasks.delete')->with($args);

	}

	/**
	 * Show the form for deleting the specified resource.
	 * POST /tasks/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postDelete( $idProject, $id)
	{
		$task =  Tasks::find( Crypt::decrypt($id) );

		if($task->delete()):

			$args = array(
				'msg_success' => array(
					'name' => 'task_delete',
					'title' => 'Tarea eliminada',
					'description' => 'La tarea ' . $task->title . ' fue eliminada exitosamente'
					)
				);

			Audits::add(Auth::user(), $args['msg_success'], 'UPDATE');
			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'task_delete_err',
					'title' => 'Error al eliminar la tarea',
					'description' => 'Hubo un error al eliminar la tarea ' . $task->title
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'UPDATE');
			return Redirect::to( $this->module['route'].'/delete/'.Crypt::encrypt($task->id) )->with( $args );

		endif;
	}

	private function getBreadcumbs(){

		$self_breadcumb = array(
			'name' => 'Tareas',
			'route' => '/tasks'
			);

		array_push( $this->breadcumbs, $self_breadcumb);

		return $this->breadcumbs;

	}

	private static function getRoute( $path ){

		$route = strstr(str_replace('/', '', strstr($path, '/') ), 'tasks', true);

		return 'projects/'.$route.'/tasks';

	}

}
