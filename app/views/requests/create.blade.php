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
					<a href="{{ $module['route'] }}" class="btn tooltips" data-toggle="Añadir un nuevo registro" data-container="body" data-placement="left" data-html="true"  data-original-title="Volver al Listado de Usuarios"><i class="icon-arrow-left"></i></a>
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
							<i class="fa fa-cubes"></i>Creación de Solicitud de Material
						</div>
						<div class="tools">
							<a href="{{ $module['route'] }}" class="label bg-green-haze"><i class="fa fa-arrow-circle-left"></i> Volver</a>
						</div>
					</div>
					<div class="portlet-body form">
						<!-- BEGIN FORM-->
						<form action="" method="post" class="form-horizontal">
							<div class="form-body">
								<h3 class="form-section">Búsqueda en Stock</h3>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group {{ $module['msg_warning']['name'] == 'user_role_err' ? 'has-error' : '' }}">
											<label class="control-label col-md-3">Stock</label>
											<div class="col-md-9">
												<div class="input-group ">
													<span class="input-group-addon">
													<i class="fa fa-cubes"></i>
													</span>
													<select name="id_stock" class="form-control select2me" data-placeholder="Seleccione un rol de usuario..." required>
														<option value="0">--- SELECCIONE DE MATERIALES DISPONIBLES EN STOCK ---</option>
														@foreach( $stock as $item )
															<option value="{{ $item->id }}" data-quantity="{{ $item->units }}" data-unit="{{ $item->measurement_unit->symbol }}">{{ $item->name }}</option>
														@endforeach
													</select>
												</div>
											</div>
											<label class="control-label col-md-3">Cantidad Disponible</label>
											<div class="form-control-static col-md-9">
												<span id="quantity">0</span> <span id="measurement_unit">Unidades</span>
												<!-- <span class="help-block">This is inline help</span> -->
											</div>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3">Cantidad a Solicitar</label>
											<div class="col-md-9">
												<div class="input-icon right">
													<i class="fa fa-cubes"></i>
													<input id="unit_top" name="unit_top" type="number" class="form-control" placeholder="Ingrese el nombre para mostrar" readonly min="0">
													<span class="help-block" style="display:none"> <i class="fa  fa-warning"></i> Si se requiere una cantidad de material mayor al que esta en stock deberá crear la solicitud de dicho material en la seccion de Stock. </span>
												</div>
												<!-- <span class="help-block">This is inline help</span> -->
											</div>
										</div>
									</div>
									<!--/span-->
								</div>
								<h3 class="form-section">Crear Nuevo item de Stock <input type="checkbox" id="new_stock" name="new_stock" class="make-switch" data-on-text="Si" data-off-text="No"></h3> 

								<div class="row">
									<div class="col-md-6">
										<div class="form-group {{ $module['msg_warning']['name'] == 'stock_name_err' ? 'has-error' : '' }}">
											<label class="control-label col-md-3">Nombre</label>
											<div class="col-md-9">
												<input name="name" type="text" placeholder="Ingrese el Nombre del Item" class="form-control">
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
													<select name="id_category" class="form-control select2me" data-placeholder="Seleccione una categoria...">
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
												<input name="unit_bottom" type="number" min="0" placeholder="Ingrese las unidades en Stock" class="form-control" value="0">	
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
													<select name="id_measurement_unit" class="form-control select2me" data-placeholder="Seleccione una unidad de medida...">
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
								<!--/row-->
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
		function resetTop(){
			$('select[name=id_stock]').attr('readonly', 'readonly');
			$('#unit_top').attr('readonly','readonly');
			$('#unit_top').val(0);
			$('#unit_top').parents('.form-group').removeClass('has-warning');
			$('#unit_top').siblings('.help-block').css({'display':'none'});

			$('input[name=name]').attr('readonly',false);
			$('select[name=id_category]').attr('readonly',false);
			$('input[name=unit_bottom]').attr('readonly',false);
			$('select[name=id_measurement_unit]').attr('readonly',false);
			$('textarea[name=description]').attr('readonly',false);
		}
		function resetBottom(){
			$('input[name=name]').attr('readonly','readonly');
			$('input[name=name]').val('');
			$('select[name=id_category]').attr('readonly','readonly');
			$('input[name=unit_bottom]').attr('readonly','readonly');
			$('input[name=unit_bottom]').val(0);
			$('select[name=id_measurement_unit]').attr('readonly','readonly');
			$('textarea[name=description]').attr('readonly','readonly');
			$('textarea[name=description]').val('');

			$('select[name=id_stock]').attr('readonly', false);
			$('#unit_top').attr('readonly',false);
			$('#unit_top').val(0);
		}
        jQuery(document).ready(function() {  
           	Metronic.init(); // init metronic core components
			Layout.init(); // init current layout
			Demo.init(); // init demo features
			var new_stock = false;
			$('input[name=name]').attr('readonly','readonly');
			$('select[name=id_category]').attr('readonly','readonly');
			$('input[name=unit_bottom]').attr('readonly','readonly');
			$('select[name=id_measurement_unit]').attr('readonly','readonly');
			$('textarea[name=description]').attr('readonly','readonly');
        	$('select[name=id_stock]').on('change', function(e){
        		var quantity = $('select[name=id_stock] option[value='+$('select[name=id_stock]').val()+']').attr('data-quantity');
        		var measurement_unit = $('select[name=id_stock] option[value='+$('select[name=id_stock]').val()+']').attr('data-unit');
        		$('#quantity').html(quantity);
        		$('#measurement_unit').html(measurement_unit);
        		if($('select[name=id_stock]').val() == 0) $('#unit_top').attr('readonly','readonly');
        		else $('#unit_top').attr('readonly', false);
        		$('#unit_top').val(0);
        	});
        	$('#unit_top').on('change', function(e){
        		if( parseFloat($('#unit_top').val()) > parseFloat($('select[name=id_stock] option[value='+$('select[name=id_stock]').val()+']').attr('data-quantity'))){
        			$('#unit_top').parents('.form-group').addClass('has-warning');
        			$('#unit_top').siblings('.help-block').css({'display':'block'});
        		}
        		else{
        			$('#unit_top').parents('.form-group').removeClass('has-warning');
        			$('#unit_top').siblings('.help-block').css({'display':'none'});
        		}
        	});
        	$('.bootstrap-switch-container').on('click', function(e){
        		new_stock = !new_stock;
        		if(new_stock){
        			resetTop();
        		}
        		else{
        			resetBottom();
        		}
        	});
        });
	</script>
@stop