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
					<a href="{{ $module['route'] }}" class="btn tooltips" data-toggle="Añadir un nuevo registro" data-container="body" data-placement="left" data-html="true"  data-original-title="Volver al Listado de Proyectos"><i class="icon-arrow-left"></i></a>
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
					<div class="portlet box green-haze" id="form_wizard_1">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-send-o"></i> Añadir Proyecto - <span class="step-title">
								Paso 1 de 4 </span>
							</div>
							<div class="tools hidden-xs">
								<a href="{{ $module['route'] }}" class="label bg-green-haze"><i class="fa fa-arrow-circle-left"></i> Volver</a>
							</div>
						</div>
						<div class="portlet-body form">
							<form class="form-horizontal" id="submit_form" method="post">
								<div class="form-wizard">
									<div class="form-body">
										<ul class="nav nav-pills nav-justified steps">
											<li>
												<a href="#tab1" data-toggle="tab" class="step">
												<span class="number">
												1 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Datos de Proyecto </span>
												</a>
											</li>
											<li>
												<a href="#tab2" data-toggle="tab" class="step">
												<span class="number">
												2 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Facturación </span>
												</a>
											</li>
											<li>
												<a href="#tab3" data-toggle="tab" class="step active">
												<span class="number">
												3 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Confirmación </span>
												</a>
											</li>
										</ul>
										<div id="bar" class="progress progress-striped" role="progressbar">
											<div class="progress-bar progress-bar-success">
											</div>
										</div>
										<div class="tab-content">
											<div class="alert alert-danger display-none">
												<button class="close" data-dismiss="alert"></button>
												Usted tiene algunos errores en el formulario. Por favor, verifique más abajo.
											</div>
											<div class="alert alert-success display-none">
												<button class="close" data-dismiss="alert"></button>
												Your form validation is successful!
											</div>
											<div class="tab-pane active" id="tab1">
												<h3 class="block">Indique Los Datos del Proyecto</h3>
												<div class="form-group">
													<label class="control-label col-md-3">Nombre <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="name"/>
														<span class="help-block">
														Introduzca el Nombre del Proyecto </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Código <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="code"/>
														<span class="help-block">
														Introduzca el Código del Proyecto </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Descripción</label>
													<div class="col-md-4">
														<textarea class="form-control" rows="3" name="description"></textarea>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab2">
												<h3 class="block">Indique Los Datos de Facturación</h3>
												<div class="form-group {{ $module['msg_warning']['name'] == 'projects_client_err' ? 'has-error' : '' }}">
														<label class="control-label col-md-3">Cliente</label>
														<div class="col-md-6">
															<!-- <div class="input-group "> -->
																<!-- <span class="input-group-addon">
																<i class="fa fa-user"></i>
																</span> -->
																<select id="id_client" name="id_client" class="form-control select2me" required>
																	<option value="">--- SELECCIONE UN CLIENTE ---</option>
																	@foreach( $clients as $client )
																		<option value="{{ $client->id }}">{{ $client->name }} ({{ $client->identification_number }})</option>
																	@endforeach
																</select>
															<!-- </div> -->
														</div>
													</div>
												<!-- <div class="form-group">
													<label class="control-label col-md-3">Cliente <span class="required">
													* </span></label>
													<div class="col-md-4">
														<select name="id_client" id="id_client" class="form-control">
															<option value=""></option>
															@foreach( $clients as $client )
																<option value="{{ $client->id }}">{{ $client->name }} ({{ $client->identification_number }})</option>
															@endforeach
														</select>
													</div>
												</div> -->
												@if( !Auth::user()->isSeller())
													<div class="form-group {{ $module['msg_warning']['name'] == 'projects_seller_err' ? 'has-error' : '' }}">
														<label class="control-label col-md-3">Vendedor</label>
														<div class="col-md-6">
															<!-- <div class="input-group "> -->
																<!-- <span class="input-group-addon">
																<i class="fa fa-user"></i>
																</span> -->
																<select id="id_seller" name="id_seller" class="form-control select2me" required>
																	<option value="">--- SELECCIONE UN VENDEDOR ---</option>
																	@foreach( $sellers as $seller )
																		<option value="{{ $seller->id }}">{{ $seller->first_name }} {{ $seller->last_name }} ({{ $seller->displayname }})</option>
																	@endforeach
																</select>
															<!-- </div> -->
														</div>
													</div>
													<!-- <div class="form-group">
														<label class="control-label col-md-3">Vendedor <span class="required">
														* </span></label>
														<div class="col-md-4">
															<select name="id_seller" id="id_seller" class="form-control">
																<option value=""></option>
																@foreach( $sellers as $seller )
																	<option value="{{ $seller->id }}">{{ $seller->first_name }} {{ $seller->last_name }} ({{ $seller->displayname }})</option>
																@endforeach
															</select>
														</div>
													</div> -->
												@endif
												<div class="form-group">
													<label class="control-label col-md-3">Correlativo de Orden de Compra<span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="correlative"/>
														<span class="help-block">
														Introduzca el Correlativo de La Orden de Compra </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Fecha de Orden de Compra<span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control date-picker" name="date"/>
														<span class="help-block">
														Introduzca la Fecha de La Orden de Compra </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Diás de Trabajo <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" placeholder="" class="form-control" name="period_days" value="0"/>
														<span class="help-block">
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Presupuesto <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<div class="input-group">
															<input type="text" placeholder="" class="form-control" name="budget" value="0"/>
															<span class="input-group-addon">Bsf.</span>
														</div>
														<span class="help-block">
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Adelanto <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<div class="input-group">
															<input type="text" placeholder="" class="form-control" name="advancement" value="0"/>
															<span class="input-group-addon">Bsf.</span>
														</div>
														<span class="help-block">
														</span>
													</div>
												</div>
												<div class="form-group {{ $module['msg_warning']['name'] == 'projects_invoice_account_err' ? 'has-error' : '' }}">
													<label class="control-label col-md-3">Cuenta<span class="required">
													* </span></label>
													<div class="col-md-6">
														<div class="input-group ">
															<span class="input-group-addon">
															<i class="fa fa-university"></i>
															</span>
															<select name="id_invoice_account" class="form-control select2me" required>
																<option value="0">--- SELECCIONE UNA CUENTA DE FACTURACIÓN ---</option>
																@foreach( $invoice_accounts as $invoice_account )
																	<option value="{{ $invoice_account->id }}">{{ $invoice_account->name }} ({{ $invoice_account->type }})</option>
																@endforeach
															</select>
														</div>
													</div>
												</div>
												<div class="form-group {{ $module['msg_warning']['name'] == 'projects_payment_method_err' ? 'has-error' : '' }}">
													<label class="control-label col-md-3">Método de Pago<span class="required">
													* </span></label>
													<div class="col-md-6">
														<div class="input-group ">
															<span class="input-group-addon">
															<i class="fa fa-credit-card"></i>
															</span>
															<select name="id_payment_method" class="form-control select2me" required>
																<option value="0">--- SELECCIONE UN MÉTODO DE PAGO ---</option>
																@foreach( $payment_methods as $payment_method )
																	<option value="{{ $payment_method->id }}">{{ $payment_method->description }}</option>
																@endforeach
															</select>
														</div>
													</div>
												</div>
												<!-- <div class="form-group">
													<label class="control-label col-md-3">Presupuesto<span class="required">
													* </span> 
													</label>
													<div class="col-md-4">
														<div class="input-group">
															<input type="text" class="form-control" name="budget "/>
															<span class="input-group-addon">Bsf.</span>
														</div>
													</div>
												</div> -->
												<!-- <div class="form-group">
													<label class="control-label col-md-3">Adelanto<span class="required">
													* </span> 
													</label>
													<div class="col-md-4">
														<div class="input-group">
															<input type="text" class="form-control" name="advancement "/>
															<span class="input-group-addon">Bsf.</span>
														</div>
													</div>
												</div> -->
											</div>
											<div class="tab-pane" id="tab3">
												<h3 class="block">Confirma los Datos</h3>
												<h4 class="form-section">Datos de Proyecto</h4>
												<div class="form-group">
													<label class="control-label col-md-3">Nombre:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="name">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Descripción:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="description">
														</p>
													</div>
												</div>
												<h4 class="form-section">Datos de Facturación</h4>
												<div class="form-group">
													<label class="control-label col-md-3">Cliente:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="id_client">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Vendedor:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="id_seller">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Dias de Trabajo:</label>
													<div class="col-md-4">
														<span class="form-control-static" data-display="period_days">
														</span> Días
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Presupuesto:</label>
													<div class="col-md-4">
														<span class="form-control-static" data-display="budget">
														</span> Bsf.
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Adelanto:</label>
													<div class="col-md-4">
														<span class="form-control-static" data-display="advancement">
														</span> Bsf.
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-actions">
										<div class="row">
											<div class="col-md-offset-3 col-md-9">
												<a href="javascript:;" class="btn default button-previous">
												<i class="m-icon-swapleft"></i> Atrás </a>
												<a href="javascript:;" class="btn blue button-next">
												Continuar <i class="m-icon-swapright m-icon-white"></i>
												</a>
												<input type="submit" class="btn green button-submit" value="Guardar">
											</div>
										</div>
									</div>
								</div>
							</form>
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

	<script type="text/javascript" src="/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="/assets/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
	<script type="text/javascript" src="/assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

	<script src="/assets/admin/pages/scripts/form-wizard.js"></script>
	<script src="/assets/admin/pages/scripts/components-pickers.js"></script>


	<script type="text/javascript">
        jQuery(document).ready(function() {  
           	Metronic.init(); // init metronic core components
			Layout.init(); // init current layout
			Demo.init(); // init demo features
   			FormWizard.init({
	            name: {
	                required: true
	            },
	            code: {
	                required: true
	            },
	            period_days: {
	                required: true,
	                min: 0,
	            },
	            budget: {
	                required: true,
	                min: 0,
	            },
	            correlative: {
	                required: true
	            },
	            date: {
	                required: true
	            },
	            advancement: {
	                required: true,
	                min: 0,
	            },
	            id_seller: {
	                required: true
	            },
	            id_client: {
	                required: true
	            },
	            id_payment_method: {
	                required: true
	            },
	            id_invoice_account: {
	                required: true
	            }
	        });
   			$('.button-submit').on('click',function(){
   				$('#submit_form').submit();
   			});
           ComponentsPickers.init();

        });
	</script>
@stop