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
					<a href="{{ $module['route'] }}" class="btn tooltips" data-toggle="Añadir un nuevo registro" data-container="body" data-placement="left" data-html="true"  data-original-title="Volver al Listado de Personas"><i class="icon-arrow-left"></i></a>
				</div>
				<!-- END THEME PANEL -->
			</div>
			<!-- END PAGE TOOLBAR -->
		</div>
		<!-- END PAGE HEAD -->
		<!-- BEGIN PAGE BREADCRUMB -->
		<ul class="page-breadcrumb breadcrumb">
			@foreach( $module['breadcumbs'] as $breadcumb )
			<li>
				<a href="{{ $breadcumb['route'] }}">{{ $breadcumb['name'] }}</a><i class="fa fa-circle"></i>
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
    <div class="col-md-12">
        <div class="portlet box green-haze">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-male"></i>Añadir Persona
				</div>
			</div>
			<div class="portlet-body form">
				<!-- BEGIN FORM-->
				<form action="#" id="form-representant" class="form-horizontal" method="post">
					<div class="form-body">
						<h3 class="form-section">Información de Unidad de Medida</h3>
						<div class="form-group">
				            <label class="control-label col-md-2">Cédula</label>
				            <div class="col-md-4">
				              <input id="representant-identification_number" class="form-control" placeholder="Escriba La Cédula de la persona" name="identification_number" type="text" required>
				            </div>	
						</div>
						<div class="form-group">
				            <label class="control-label col-md-2">Nombre</label>
				            <div class="col-md-4">
				              <input id="representant-first_name" class="form-control" placeholder="Escriba el Nombre de la persona" name="first_name" type="text" required/>
				            </div>
				            <label class="control-label col-md-2">Apellido</label>
				            <div class="col-md-4">
				              <input id="representant-last_name" class="form-control" placeholder="Escriba el Apellido de la persona" name="last_name" type="text" required/>
				            </div>
						</div>
						<div class="form-group">
				            <label class="control-label col-md-2">Teléfono</label>
				            <div class="col-md-4">
				              <input id="representant-phone" class="form-control" placeholder="Escriba el Teléfono de la persona" name="phone" type="text" required/>
				            </div>
				            <label class="control-label col-md-2">Email</label>
				            <div class="col-md-4">
				              <input id="representant-email" class="form-control" placeholder="Escriba el Email de la persona" name="email" type="text" required/>
				            </div>
						</div>
					</div>
					<div class="form-actions">
						<div class="row">
							<div class="col-md-offset-3 col-md-9">
								<button type="submit" class="btn green">Crear</button>
								<a href="#" class="btn default" id="go-back">Volver</a>
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