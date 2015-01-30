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
							<i class="fa fa-key"></i>Edición de Clientes
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
												<input name="name" type="text" class="form-control" placeholder="Ingrese el título de la Cliente" required value="{{ $client->name }}">
												<!-- <span class="help-block">This is inline help</span> -->
											</div>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group {{ $module['msg_warning']['name'] == 'clients_identification_err' ? 'has-error' : '' }}">
											<label class="control-label col-md-3">RIF</label>
											<div class="col-md-9">
												<input name="identification_number" type="text" class="form-control" placeholder="Ingrese la RIF de la Cliente" required value="{{ $client->identification_number }}">
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
												<input name="email" type="email" class="form-control" placeholder="Ingrese el Email de la Cliente" required value="{{ $client->email }}">
												<!-- <span class="help-block">This is inline help</span> -->
											</div>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group {{ false ? 'has-error' : '' }}">
											<label class="control-label col-md-3">Teléfono</label>
											<div class="col-md-9">
												<input name="phone" type="text" class="form-control" placeholder="Ingrese el Teléfono de la Cliente" required value="{{ $client->phone }}">
												<!-- <span class="help-block">This is inline help</span> -->
											</div>
										</div>
									</div>
									<!--/span-->
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group" id="form-group-representant">
											<label class="control-label col-md-3">Representante</label>
											<div class="col-md-9">
												<a href="{{ $module['route'] }}/representant" class="btn default fancybox fancybox.ajax" id="add-representant" style="display:none; ">Ingresar un representante</a>
								            	<input class="form-control" value="" type="hidden" name="id_person" readonly required>
								            	<div id="form-display-representant" style="font-size:12pt;padding-top:3px;">
								            		<span id="form-display-representant-span">{{ $client->representant->identification_number }} - {{ $client->representant->first_name }} {{ $client->representant->last_name }}</span>
								            		<a href="#" id="delete-representant" class="btn danger bg-red" style="margin-left: 10px;margin-top: -5px;">x</a>
								            	</div>
											</div>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group {{ $module['msg_warning']['name'] == 'clients_location_err' ? 'has-error' : '' }}" id="form-group-location">
											<label class="control-label col-md-3">Localidad</label>
											<div class="col-md-9">
												<div class="input-group ">
													<span class="input-group-addon">
													<i class="fa fa-user"></i>
													</span>
													<select name="id_location" class="form-control select2me" data-placeholder="Seleccione una localidad..." required>
														<option value="0">--- SELECCIONE UNA LOCALIDAD ---</option>
														@foreach( $locations as $location )
															<option value="{{ $location->id }}" {{ $client->location->id == $location->id ? 'selected' : '' }}>{{ $location->name }}</option>
														@endforeach
													</select>
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

    <script type="text/javascript">
    $(document).on('ready', function(){
    	$("#delete-representant").click(function(e){
			$('input[name=id_person]').val('');
			$('#form-display-representant').css({
				'display':'none'
			});
			$('#add-representant').css({
				'display':'block'
			});
    	});
    	$("#delete-location").click(function(e){
			$('input[name=id_person]').val('');
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