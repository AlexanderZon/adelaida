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
							<i class="fa fa-cubes"></i>Solicitar Material
						</div>
						<div class="tools">
							<a href="{{ $module['route'] }}" class="label bg-green-haze"><i class="fa fa-arrow-circle-left"></i> Volver</a>
						</div>
					</div>
					<div class="portlet-body form">
						<!-- BEGIN FORM-->
						<form action="" method="post" class="form-horizontal">
							<div class="form-body">
								<h3 class="form-section">Información del Material</h3> 
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3">Nombre del Material</label>
											<div class="form-control-static col-md-9">
												<span>{{ $material->stock->name}}</span>
												<!-- <span class="help-block">This is inline help</span> -->
											</div>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group {{ false ? 'has-error' : '' }}">
											<label class="control-label col-md-3">Descripción</label>
											<div class="form-control-static col-md-9">
												<span>{{ $material->stock->description != '' ? $material->stock->description : '<em>Sin Descripción</em>' }}</span>
												<!-- <span class="help-block">This is inline help</span> -->
											</div>
										</div>
									</div>
									<!--/span-->
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group {{ false ? 'has-error' : '' }}">
											<label class="control-label col-md-3">Cantidad Disponible</label>
											<div class="form-control-static col-md-9">
												<span id="available">{{ $material->stock->units }}</span> <span id="measurement_unit">{{ $material->stock->measurement_unit->symbol }}</span>
												<!-- <span class="help-block">This is inline help</span> -->
											</div>
											<label class="control-label col-md-3">Cantidad Requerida</label>
											<div class="form-control-static col-md-9">
												<span id="needed">{{ $material->units }}</span> <span id="measurement_unit">{{ $material->stock->measurement_unit->symbol }}</span>
												<!-- <span class="help-block">This is inline help</span> -->
											</div>
											<label class="control-label col-md-3">Cantidad Solicitada</label>
											<div class="form-control-static col-md-9">
												<span id="requested">{{ $material->stock->requested() }}</span> <span id="measurement_unit">{{ $material->stock->measurement_unit->symbol }}</span>
												<!-- <span class="help-block">This is inline help</span> -->
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3">Cantidad a Solicitar {{ $material->stock->measurement_unit->symbol != '' ? '('.$material->stock->measurement_unit->symbol.')' : ''}}</label>
											<div class="col-md-9">
												<div class="input-icon right">
													<i class="fa fa-cubes"></i>
													<input id="units" name="units" type="number" class="form-control" placeholder="Ingrese el nombre para mostrar" value="{{ ($material->units - $material->stock->units - $material->stock->requested()) > 0 ? $material->units - $material->stock->units - $material->stock->requested() : '0'}}" min="0">
													<span id="help-warning" class="help-block" style="display:none"> <i class="fa fa-warning"></i> Se requiere una cantidad mayor de material al que se procederá a solicitar. </span>
													<span id="help-info" class="help-block" style="display:none"> <i class="fa fa-info-circle"></i> La cantidad a solicitar es mayor a la necesaria. </span>
												</div>
												<!-- <span class="help-block">This is inline help</span> -->
											</div>
										</div>
									</div>
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
        jQuery(document).ready(function() {  
           	Metronic.init(); // init metronic core components
			Layout.init(); // init current layout
			Demo.init(); // init demo features
			var new_stock = false;
        	$('#units').on('change', function(e){
        		if( parseFloat($('#units').val()) < (parseFloat($('#needed').html()) - parseFloat($('#requested').html()) - parseFloat($('#available').html()))){
        			console.log(parseFloat($('#units').val()) + ' :warning: ' + (parseFloat($('#needed').html()) - parseFloat($('#requested').html()) - parseFloat($('#available').html())));
        			$('#units').parents('.form-group').addClass('has-warning');
        			$('#units').siblings('#help-warning').css({'display':'block'});
        		}
        		else if( parseFloat($('#units').val()) > (parseFloat($('#needed').html()) - parseFloat($('#requested').html()) - parseFloat($('#available').html()))){
        			console.log(parseFloat($('#units').val()) + ' :info: ' + (parseFloat($('#needed').html()) - parseFloat($('#requested').html()) - parseFloat($('#available').html())));
        			$('#units').siblings('#help-info').css({'display':'block'});
        			$('#units').siblings('#help-info').css({'display':'block'});
        		}
        		else{
        			$('#units').parents('.form-group').removeClass('has-warning');
        			$('#units').siblings('#help-warning').css({'display':'none'});
        			$('#units').siblings('#help-info').css({'display':'none'});
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