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
					<a href="{{ $module['route'] }}" class="btn tooltips" data-toggle="Añadir un nuevo registro" data-container="body" data-placement="left" data-html="true"  data-original-title="Volver al Listado de Clientes"><i class="icon-arrow-left"></i></a>
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
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="portlet box green-haze">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-user"></i>Creación de Clientes
						</div>
						<div class="tools">
							<a href="{{ $module['route'] }}" class="label bg-green-haze"><i class="fa fa-arrow-circle-left"></i> Volver</a>
						</div>
					</div>
					<div class="portlet-body form">
						<!-- BEGIN FORM-->
						<form action="" method="post" class="form-horizontal">
							<div class="form-body">
								<h3 class="form-section">Información de Cliente</h3>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3">Nombre</label>
											<div class="col-md-9">
												<input name="name" type="text" class="form-control" placeholder="Ingrese el título de la Cliente">
												<!-- <span class="help-block">This is inline help</span> -->
											</div>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group {{ false ? 'has-error' : '' }}">
											<label class="control-label col-md-3">RIF</label>
											<div class="col-md-9">
												<input name="identification_num" type="text" class="form-control" placeholder="Ingrese la RIF de la Cliente">
												<!-- <span class="help-block">This is inline help</span> -->
											</div>
										</div>
									</div>
									<!--/span-->
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3">Email</label>
											<div class="col-md-9">
												<input name="email" type="email" class="form-control" placeholder="Ingrese el Email de la Cliente">
												<!-- <span class="help-block">This is inline help</span> -->
											</div>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group {{ false ? 'has-error' : '' }}">
											<label class="control-label col-md-3">Teléfono</label>
											<div class="col-md-9">
												<input name="phone" type="text" class="form-control" placeholder="Ingrese el Teléfono de la Cliente">
												<!-- <span class="help-block">This is inline help</span> -->
											</div>
										</div>
									</div>
									<!--/span-->
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3">Representante</label>
											<div class="col-md-9">
												<a href="{{ $module['route'] }}/representant" class="btn default fancybox fancybox.ajax" id="add-representant">Ingresar un representante</a>
								            	<input class="form-control" value="" type="hidden" name="id_person" readonly>
								            	<div id="form-display-representant" style="display:none">
								            		<span id="form-display-representant-span"></span>
								            		<a href="#" id="delete-representant" class="btn danger">x</a>
								            	</div>
											</div>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3">Localización</label>
											<div class="col-md-9">
												<a href="{{ $module['route'] }}/location" class="btn default fancybox fancybox.ajax" id="add-location">Ingresar una Localización</a>
								            	<input class="form-control" value="" type="hidden" name="id_location" readonly>
								            	<div id="form-display-location" style="display:none">
								            		<span id="form-display-location-span"></span>
								            		<a href="#" id="delete-location" class="btn danger">x</a>
								            	</div>
											</div>
										</div>
									</div>
									<!--/span-->
								</div>
							</div>
							<div class="form-actions">
								<div class="row">
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" class="btn green">Crear</button>
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

    <script type="text/javascript">
    $(document).on('ready', function(){
    	$("#delete-representant").click(function(e){
			$('input[name=id_persona]').val('');
			$('#form-display-representant').css({
				'display':'none'
			});
			$('#add-representant').css({
				'display':'block'
			});
    	});
    	$("#delete-location").click(function(e){
			$('input[name=id_persona]').val('');
			$('#form-display-location').css({
				'display':'none'
			});
			$('#add-location').css({
				'display':'block'
			});
    	});
    });
    </script>
@stop