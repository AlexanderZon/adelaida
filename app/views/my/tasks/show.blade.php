@extends ('layouts.master')

@section("css")
	<link rel="stylesheet" type="text/css" href="/assets/global/plugins/jquery-multi-select/css/multi-select.css"/>
@stop

@section ("content")
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<div class="page-content">
		<!-- BEGIN PAGE HEAD -->
		<div class="page-head">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>{{ $module['title'] }} <small>{{ $module['description'] }}</small></h1>
			</div>
			<!-- END PAGE TITLE -->
			<!-- BEGIN PAGE TOOLBAR -->
			<div class="page-toolbar">
				<!-- BEGIN THEME PANEL -->
				
				<div class="btn-group btn-theme-panel">
					<a href="{{ $module['route'] }}" class="btn tooltips" data-toggle="Añadir un nuevo registro" data-container="body" data-placement="left" data-html="true"  data-original-title="Volver al Listado de Categorías"><i class="icon-arrow-left"></i></a>
				</div>
				<!-- END THEME PANEL -->
			</div>
			<!-- END PAGE TOOLBAR -->
		</div>
		<!-- END PAGE HEAD -->
		<!-- BEGIN PAGE BREADCRUMB -->
		<ul class="page-breadcrumb breadcrumb">
			@foreach( $module['breadcrumbs'] as $breadcumb )
			<li>
				<a href="{{ $breadcumb['route'] }}">{{ $breadcumb['name'] }}</a><i class="fa fa-circle"></i>
			</li>
			@endforeach
			<li class="active">
				{{ $module['sections']['edit'] }}
			</li>
		</ul>
		<!-- END PAGE BREADCRUMB -->
		<!-- BEGIN PAGE CONTENT INNER -->
		@if( $module['msg_danger'] != null )
			<div class="note note-danger">
				<h4>{{ $module['msg_danger']['title'] }}</h4>
				<p>{{ $module['msg_danger']['description'] }}</p>
			</div>
		@endif

		@if( $module['msg_warning'] != null )
			<div class="note note-warning">
				<h4>{{ $module['msg_warning']['title'] }}</h4>
				<p>{{ $module['msg_warning']['description'] }}</p>
			</div>
		@endif

		@if( $module['msg_success'] != null )
			<div class="note note-success">
				<h4>{{ $module['msg_success']['title'] }}</h4>
				<p>{{ $module['msg_success']['description'] }}</p>
			</div>
		@endif
		<!-- END PAGE CONTENT INNER -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="portlet box green-haze">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-thumb-tack"></i>Visualización  de Mis Tareas
						</div>
						<div class="tools">
							<a href="{{ $module['route'] }}" class="label bg-green-haze"><i class="fa fa-arrow-circle-left"></i> Volver</a>
						</div>
					</div>
					<div class="portlet-body form">
						<!-- BEGIN FORM-->
							<div class="form-body">
								<h3 class="form-section">Información de Tarea</h3>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label col-md-5">Título</label>
											<div class="form-control-static col-md-7">
												{{ $task->name }}
												<!-- <span class="help-block">This is inline help</span> -->
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-5">Horas de Trabajo</label>
											<div class="form-control-static col-md-7">
												{{ $task->hours }}
												<!-- <span class="help-block">This is inline help</span> -->
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-5">Tarea Padre</label>
											<div class="form-control-static col-md-7">
												@if($task->id_parent == 0)
													Ninguna
												@else
													@foreach( $tasks as $tsk )
														@if($task->id_parent == $tsk->id)
															{{ $tsk->name }}
														@endif
													@endforeach
												@endif
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-5">Responsables</label>
											<div class="form-control-static col-md-7">
												<ul>
													@foreach( $users as $user )
														@if($task->hasResponsable($user))
															<li>{{ $user->first_name }} {{ $user->last_name }}</li>
														@endif
													@endforeach
												</ul>
											</div>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<div class="col-md-12">
												{{ $task->description }}
											</div>
										</div>
									</div>
									<!--/span-->
								</div>
								<!-- <div class="row">
									/span
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3">Tarea Padre</label>
											<div class="form-control-static col-md-9">
												@if($task->id_parent == 0)
													Ninguna
												@else
													@foreach( $tasks as $tsk )
														@if($task->id_parent == $tsk->id)
															{{ $tsk->name }}
														@endif
													@endforeach
												@endif
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3">Responsables</label>
											<div class="form-control-static col-md-9">
												<ul>
													@foreach( $users as $user )
														@if($task->hasResponsable($user))
															<li>{{ $user->first_name }} {{ $user->last_name }}</li>
														@endif
													@endforeach
												</ul>
											</div>
										</div>
									</div>
									/span
								</div> -->
								<!-- <div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label col-md-1">Descripcion</label>
											<div class="col-md-11">
												{{ $task->description }}
											</div>
										</div>
									</div>
								</div> -->
								<!-- <div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label col-md-3">Responsables de Tarea</label>
											<div class="col-md-9">
												<select id="select2_sample2" name="users[]" class="form-control select2" placeholder="Seleccione los Responsables de esta Tarea" multiple>
													@foreach( $users as $user )
														<option value="{{ $user->id }}" {{ $task->hasResponsable($user) ? 'selected' : '' }}>{{ $user->first_name }} {{ $user->last_name }}</option>
													@endforeach
												</select>
											</div>
										</div>
									</div>
								</div> -->
							</div>
							<div class="form-actions">
								<div class="row">
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-offset-3 col-md-9">
												@if($task->status == 'inactive')
													<a href="{{ $module['route'] . '/activate/' . Crypt::encrypt($task->id) }}" class="btn red">Iniciar</a>
												@elseif($task->status == 'active')
													<a href="{{ $module['route'] . '/done/' . Crypt::encrypt($task->id) }}" class="btn yellow">Finalizar</a>
												@elseif($task->status == 'done')
													<a href="{{ $module['route'] . '/undone/' . Crypt::encrypt($task->id) }}" class="btn blue">Continuar Tarea</a>
												@endif
												<a href="{{ $module['route'] }}" class="btn default">Volver</a>
											</div>
										</div>
									</div>
									<div class="col-md-6">
									</div>
								</div>
							</div>
						<!-- END FORM-->
					</div>
				</div>
			</div>
		</div>
		<!-- END PAGE CONTENT INNER -->
	</div>
</div>
<!-- END CONTENT -->
@stop

@section('javascripts')

	<script type="text/javascript" src="/assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
	<script src="/assets/admin/pages/scripts/components-dropdowns.js"></script>

	<script type="text/javascript">
        jQuery(document).ready(function() {  
           	Metronic.init(); // init metronic core components
			Layout.init(); // init current layout
			Demo.init(); // init demo features
        	ComponentsDropdowns.init();
        });
	</script>
@stop