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
					<a href="{{ $module['route'] }}" class="btn tooltips" data-toggle="Añadir un nuevo registro" data-container="body" data-placement="left" data-html="true"  data-original-title="Volver al Listado de Stock"><i class="icon-arrow-left"></i></a>
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
							<i class="fa fa-cubes"></i>Creación de Item de Stock
						</div>
						<div class="tools">
							<a href="{{ $module['route'] }}" class="label bg-green-haze"><i class="fa fa-arrow-circle-left"></i> Volver</a>
						</div>
					</div>
					<div class="portlet-body form">
						<!-- BEGIN FORM-->
						<form action="" method="post" class="form-horizontal">
							<div class="form-body">
								<h3 class="form-section">Información de Item de Stock</h3>
								<!--/row-->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group {{ $module['msg_warning']['name'] == 'stock_name_err' ? 'has-error' : '' }}">
											<label class="control-label col-md-3">Nombre</label>
											<div class="col-md-9">
												<input name="name" type="text" placeholder="Ingrese el Nombre del Item" class="form-control" required>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group {{ $module['msg_warning']['name'] == 'stock_category_err' ? 'has-error' : '' }}">
											<label class="control-label col-md-3">Categoria</label>
											<div class="col-md-9">
												<div class="input-group ">
													<span class="input-group-addon">
													<i class="fa fa-database"></i>
													</span>
													<select name="id_category" class="form-control select2me" data-placeholder="Seleccione una categoria..." required>
														<option value="0">--- SELECCIONE UNA CATEGORIA ---</option>
														@foreach( $categories as $category )
															<option value="{{ $category->id }}">{{ $category->name }}</option>
														@endforeach
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/row-->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group {{ $module['msg_warning']['name'] == 'stock_unit_err' ? 'has-error' : '' }}">
											<label class="control-label col-md-3">Unidades</label>
											<div class="col-md-9">
												<input name="units" type="number" min="0" placeholder="Ingrese las unidades en Stock" class="form-control" value="0" required>	
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group {{ $module['msg_warning']['name'] == 'stock_measurement_unit_err' ? 'has-error' : '' }}">
											<label class="control-label col-md-3">Unidad de Medida</label>
											<div class="col-md-9">
												<div class="input-group ">
													<span class="input-group-addon">
													<i class="fa fa-sliders"></i>
													</span>
													<select name="id_measurement_unit" class="form-control select2me" data-placeholder="Seleccione una unidad de medida..." required>
														<option value="0">--- SELECCIONE UNA UNIDAD DE MEDIDA ---</option>
														@foreach( $measurement_units as $measurement_unit )
															<option value="{{ $measurement_unit->id }}">{{ $measurement_unit->name }} ({{ $measurement_unit->symbol }})</option>
														@endforeach
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/row-->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group {{ $module['msg_warning']['name'] == 'stock_description_err' ? 'has-error' : '' }}">
											<label class="control-label col-md-3">Descripción</label>
											<div class="col-md-9">
												<div class="input-icon right">
													<i class="fa fa-category"></i>
													<textarea name="description" type="text" class="form-control" placeholder="Ingrese el nombre del Usuario"></textarea>
												</div>
												<!-- <span class="help-block">This is inline help</span> -->
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
												<button type="submit" class="btn green">Agregar</button>
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