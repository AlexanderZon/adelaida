@extends ('layouts.master')

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
					<a href="{{ $module['route'] }}" class="btn tooltips" data-toggle="Añadir un nuevo registro" data-container="body" data-placement="left" data-html="true"  data-original-title="Volver al Listado de Roles"><i class="icon-arrow-left"></i></a>
				</div>
				<!-- END THEME PANEL -->
			</div>
			<!-- END PAGE TOOLBAR -->
		</div>
		<!-- END PAGE HEAD -->
		<!-- BEGIN PAGE BREADCRUMB -->
		<ul class="page-breadcrumb breadcrumb">
			@foreach( $module['breadcrumbs'] as $breadcrumb )
			<li>
				<a href="{{ $breadcrumb['route'] }}">{{ $breadcrumb['name'] }}</a><i class="fa fa-circle"></i>
			</li>
			@endforeach
			<li class="active">
				{{ $module['sections']['create'] }}
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
							<i class="fa fa-lock"></i>Creación de Roles
						</div>
						<div class="tools">
							<a href="{{ $module['route'] }}" class="label bg-green-haze"><i class="fa fa-arrow-circle-left"></i> Volver</a>
						</div>
					</div>
					<div class="portlet-body form">
						<!-- BEGIN FORM-->
						<form action="" method="post" class="form-horizontal">
							<div class="form-body">
								<h3 class="form-section">Información de Rol</h3>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3">Descripción</label>
											<div class="col-md-9">
												<input name="description" type="text" class="form-control" placeholder="Ingrese la Descripción del Rol" value="{{ $role->description }}">
												<!-- <span class="help-block">This is inline help</span> -->
											</div>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group {{ false ? 'has-error' : '' }}">
											<label class="control-label col-md-3">Nombre</label>
											<div class="col-md-9">
												<input name="name" type="text" class="form-control" placeholder="Ingrese el Nombre del Rol" value="{{ $role->name }}" readonly>
												<!-- <span class="help-block">This is inline help</span> -->
											</div>
										</div>
									</div>
									<!--/span-->
								</div>
								<!-- <h3 class="form-section">Información de Sistema</h3> -->
								<!--/row-->
								<!-- <div class="row">
									<div class="col-md-6">
										<div class="form-group {{ $module['msg_warning']['name'] == 'capability_name_err' ? 'has-error' : '' }}">
											<label class="control-label col-md-3">Slug</label>
											<div class="col-md-9">
												<div class="input-icon right">
													<i class="fa fa-code"></i>
													<input name="name" type="text" class="form-control" placeholder="Ingrese el nombre del Rol" required>
												</div>
												<span class="help-block"><em>e.j.: name_of_capability</em></span> 
											</div>
										</div>
									</div>
									/span
									<div class="col-md-6">
										<div class="form-group {{ $module['msg_warning']['name'] == 'capability_controller_err' ? 'has-error' : '' }}">
											<label class="control-label col-md-3">Controlador</label>
											<div class="col-md-9">
												<div class="input-icon right">
													<i class="fa fa-crosshairs"></i>
													<input name="controller" type="text" class="form-control" placeholder="Ingrese el nombre para mostrar">
												</div>
												<span class="help-block"><em>e.j.: ControllerName@actionName</em></span>
											</div>
										</div>
									</div>
									/span
								</div> -->
								<!--/row-->
								<!--
								<div class="row">
									<div class="col-md-6">
										<div class="form-group {{ $module['msg_warning']['name'] == 'capability_route_err' ? 'has-error' : '' }}">
											<label class="control-label col-md-3">Ruta</label>
											<div class="col-md-9">
												<div class="input-icon right">
													<i class="fa fa-bullseye"></i>
													<input name="route" type="text" placeholder="Ingrese el Correo Electrónico" class="form-control" required>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group {{ $module['msg_warning']['name'] == 'capability_method_err' ? 'has-error' : '' }}">
											<label class="control-label col-md-3">Método</label>
											<div class="col-md-9">
												<div class="input-group ">
													<span class="input-group-addon">
													<i class="fa fa-sliders"></i>
													</span>
													<select name="method" class="form-control select2me" data-placeholder="Seleccione un rol de capacidad..." required>
														<option value="0">--- SELECCIONE UN MÉTODO DE ACCESO ---</option>
														<option value="GET">GET</option>
														<option value="POST">POST</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								-->
								<!--/row-->
							</div>
							<div class="form-actions">
								<div class="row">
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" class="btn green">Actualizar</button>
												<a href="{{ $module['route'] }}" class="btn default">Volver</a>
											</div>
										</div>
									</div>
									<div class="col-md-6">
									</div>
								</div>
							</div>
						</form>
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
	<script type="text/javascript">
        jQuery(document).ready(function() {  
           	Metronic.init(); // init metronic core components
			Layout.init(); // init current layout
			Demo.init(); // init demo features
        });
	</script>
@stop