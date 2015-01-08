@extends ('layouts.master')

@extends('users.edit')

@yield('data')

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
				{{ $module['sections']['index'] }}
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

		@if( $module['msg_active'] != null )
			<div class="note note-active">
				<h4>{{ $module['msg_active']['title'] }}</h4>
				<p>{{ $module['msg_active']['description'] }}</p>
			</div>
		@endif

		<!-- <div class="row">
				<div class="col-md-12">
					Begin: life time stats
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Record Listing</span>
								<span class="caption-helper">manage records...</span>
							</div>
							<div class="actions">
								<a href="#" class="btn btn-default btn-circle">
								<i class="fa fa-plus"></i>
								<span class="hidden-480">
								New Order </span>
								</a>
								<div class="btn-group">
									<a class="btn btn-default btn-circle" href="#" data-toggle="dropdown">
									<i class="fa fa-share"></i>
									<span class="hidden-480">
									Tools </span>
									<i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li>
											<a href="#">
											Export to Excel </a>
										</li>
										<li>
											<a href="#">
											Export to CSV </a>
										</li>
										<li>
											<a href="#">
											Export to XML </a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="#">
											Print Invoices </a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-container">
								<div class="table-actions-wrapper">
									<span>
									</span>
									<select class="table-group-action-input form-control input-inline input-small input-sm">
										<option value="">Seleccione...</option>
										<option value="Cancel">Cancel</option>
										<option value="Hold">Hold</option>
										<option value="On Hold">On Hold</option>
										<option value="Close">Close</option>
									</select>
									<button class="btn btn-sm yellow table-group-action-submit"><i class="fa fa-check"></i> Submit</button>
								</div>
								<table class="table table-striped table-bordered table-hover" id="datatable_ajax">
								<thead>
								<tr role="row" class="heading">
									<th width="2%">
										<input type="checkbox" class="group-checkable">
									</th>
									<th width="5%">
										 Nombre
									</th>
									<th width="15%">
										 Apellido
									</th>
									<th width="15%">
										 Usuario
									</th>
									<th width="15%">
										 Email
									</th>
									<th width="10%">
										 Rol
									</th>
									<th width="10%">
										 Estado
									</th>
									<th width="10%">
										 Actions
									</th>
								</tr>
								<tr role="row" class="filter">
									<td>
									</td>
									<td>
										<input type="text" class="form-control form-filter input-sm" name="order_first_name">
									</td>
									<td>
										<input type="text" class="form-control form-filter input-sm" name="order_last_name">
									</td>
									<td>
										<input type="text" class="form-control form-filter input-sm" name="order_username">
									</td>
									<td>
										<input type="text" class="form-control form-filter input-sm" name="order_email">
									</td>
									<td>
										<input type="text" class="form-control form-filter input-sm" name="order_role">
									</td>
									<td>
										<select name="order_status" class="form-control form-filter input-sm">
											<option value="">Select...</option>
											<option value="active">Activo</option>
											<option value="inactive">Inactivo</option>
										</select>
									</td>
									<td>
										<div class="margin-bottom-5">
											<button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search"></i> Search</button>
											<button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i> Reset</button>
										</div>
									</td>
								</tr>
								</thead>
								<tbody>
								</tbody>
								</table>
							</div>
						</div>
					</div>
					End: life time stats
				</div>
		</div> -->
		<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-hoki">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Datatable with TableTools
							</div>
							<div class="tools">
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
								<th>
									 Rendering engine
								</th>
								<th>
									 Browser
								</th>
								<th>
									 Platform(s)
								</th>
								<th>
									 Engine version
								</th>
								<th>
									 CSS grade
								</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 4.0
								</td>
								<td>
									 Win 95+
								</td>
								<td>
									 4
								</td>
								<td>
									 X
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 5.0
								</td>
								<td>
									 Win 95+
								</td>
								<td>
									 5
								</td>
								<td>
									 C
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 5.5
								</td>
								<td>
									 Win 95+
								</td>
								<td>
									 5.5
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 6
								</td>
								<td>
									 Win 98+
								</td>
								<td>
									 6
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 7
								</td>
								<td>
									 Win XP SP2+
								</td>
								<td>
									 7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 AOL browser (AOL desktop)
								</td>
								<td>
									 Win XP
								</td>
								<td>
									 6
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Firefox 1.0
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Firefox 1.5
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Firefox 2.0
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Firefox 3.0
								</td>
								<td>
									 Win 2k+ / OSX.3+
								</td>
								<td>
									 1.9
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Camino 1.0
								</td>
								<td>
									 OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Camino 1.5
								</td>
								<td>
									 OSX.3+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Netscape 7.2
								</td>
								<td>
									 Win 95+ / Mac OS 8.6-9.2
								</td>
								<td>
									 1.7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Netscape Browser 8
								</td>
								<td>
									 Win 98SE+
								</td>
								<td>
									 1.7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Netscape Navigator 9
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.0
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.1
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.1
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.2
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.2
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.3
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.3
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.4
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.4
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.5
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.5
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.6
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.6
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.7
								</td>
								<td>
									 Win 98+ / OSX.1+
								</td>
								<td>
									 1.7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.8
								</td>
								<td>
									 Win 98+ / OSX.1+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Seamonkey 1.1
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Epiphany 2.20
								</td>
								<td>
									 Gnome
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 Safari 1.2
								</td>
								<td>
									 OSX.3
								</td>
								<td>
									 125.5
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 Safari 1.3
								</td>
								<td>
									 OSX.3
								</td>
								<td>
									 312.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 Safari 2.0
								</td>
								<td>
									 OSX.4+
								</td>
								<td>
									 419.3
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 Safari 3.0
								</td>
								<td>
									 OSX.4+
								</td>
								<td>
									 522.1
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 OmniWeb 5.5
								</td>
								<td>
									 OSX.4+
								</td>
								<td>
									 420
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 iPod Touch / iPhone
								</td>
								<td>
									 iPod
								</td>
								<td>
									 420.1
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 S60
								</td>
								<td>
									 S60
								</td>
								<td>
									 413
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 7.0
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 7.5
								</td>
								<td>
									 Win 95+ / OSX.2+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 8.0
								</td>
								<td>
									 Win 95+ / OSX.2+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 8.5
								</td>
								<td>
									 Win 95+ / OSX.2+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 9.0
								</td>
								<td>
									 Win 95+ / OSX.3+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 9.2
								</td>
								<td>
									 Win 88+ / OSX.3+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 9.5
								</td>
								<td>
									 Win 88+ / OSX.3+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera for Wii
								</td>
								<td>
									 Wii
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Nokia N800
								</td>
								<td>
									 N800
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Nintendo DS browser
								</td>
								<td>
									 Nintendo DS
								</td>
								<td>
									 8.5
								</td>
								<td>
									 C/A<sup>1</sup>
								</td>
							</tr>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box green-haze">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Datatable with TableTools
							</div>
							<div class="tools">
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_2">
							<thead>
							<tr>
								<th>
									 Rendering engine
								</th>
								<th>
									 Browser
								</th>
								<th>
									 Platform(s)
								</th>
								<th>
									 Engine version
								</th>
								<th>
									 CSS grade
								</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 4.0
								</td>
								<td>
									 Win 95+
								</td>
								<td>
									 4
								</td>
								<td>
									 X
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 5.0
								</td>
								<td>
									 Win 95+
								</td>
								<td>
									 5
								</td>
								<td>
									 C
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 5.5
								</td>
								<td>
									 Win 95+
								</td>
								<td>
									 5.5
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 6
								</td>
								<td>
									 Win 98+
								</td>
								<td>
									 6
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 7
								</td>
								<td>
									 Win XP SP2+
								</td>
								<td>
									 7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 AOL browser (AOL desktop)
								</td>
								<td>
									 Win XP
								</td>
								<td>
									 6
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Firefox 1.0
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Firefox 1.5
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Firefox 2.0
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Firefox 3.0
								</td>
								<td>
									 Win 2k+ / OSX.3+
								</td>
								<td>
									 1.9
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Camino 1.0
								</td>
								<td>
									 OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Camino 1.5
								</td>
								<td>
									 OSX.3+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Netscape 7.2
								</td>
								<td>
									 Win 95+ / Mac OS 8.6-9.2
								</td>
								<td>
									 1.7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Netscape Browser 8
								</td>
								<td>
									 Win 98SE+
								</td>
								<td>
									 1.7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Netscape Navigator 9
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.0
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.1
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.1
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.2
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.2
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.3
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.3
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.4
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.4
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.5
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.5
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.6
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.6
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.7
								</td>
								<td>
									 Win 98+ / OSX.1+
								</td>
								<td>
									 1.7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.8
								</td>
								<td>
									 Win 98+ / OSX.1+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Seamonkey 1.1
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Epiphany 2.20
								</td>
								<td>
									 Gnome
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 Safari 1.2
								</td>
								<td>
									 OSX.3
								</td>
								<td>
									 125.5
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 Safari 1.3
								</td>
								<td>
									 OSX.3
								</td>
								<td>
									 312.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 Safari 2.0
								</td>
								<td>
									 OSX.4+
								</td>
								<td>
									 419.3
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 Safari 3.0
								</td>
								<td>
									 OSX.4+
								</td>
								<td>
									 522.1
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 OmniWeb 5.5
								</td>
								<td>
									 OSX.4+
								</td>
								<td>
									 420
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 iPod Touch / iPhone
								</td>
								<td>
									 iPod
								</td>
								<td>
									 420.1
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 S60
								</td>
								<td>
									 S60
								</td>
								<td>
									 413
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 7.0
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 7.5
								</td>
								<td>
									 Win 95+ / OSX.2+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 8.0
								</td>
								<td>
									 Win 95+ / OSX.2+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 8.5
								</td>
								<td>
									 Win 95+ / OSX.2+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 9.0
								</td>
								<td>
									 Win 95+ / OSX.3+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 9.2
								</td>
								<td>
									 Win 88+ / OSX.3+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 9.5
								</td>
								<td>
									 Win 88+ / OSX.3+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera for Wii
								</td>
								<td>
									 Wii
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Nokia N800
								</td>
								<td>
									 N800
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Nintendo DS browser
								</td>
								<td>
									 Nintendo DS
								</td>
								<td>
									 8.5
								</td>
								<td>
									 C/A<sup>1</sup>
								</td>
							</tr>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box red-intense">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Show/Hide Columns
							</div>
							<div class="actions">
								<div class="btn-group">
									<a class="btn default" href="#" data-toggle="dropdown">
									Columns <i class="fa fa-angle-down"></i>
									</a>
									<div id="sample_4_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
										<label><input type="checkbox" checked data-column="0">Rendering engine</label>
										<label><input type="checkbox" checked data-column="1">Browser</label>
										<label><input type="checkbox" checked data-column="2">Platform(s)</label>
										<label><input type="checkbox" checked data-column="3">Engine version</label>
										<label><input type="checkbox" checked data-column="4">CSS grade</label>
									</div>
								</div>
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_4">
							<thead>
							<tr>
								<th>
									 Rendering engine
								</th>
								<th>
									 Browser
								</th>
								<th class="hidden-xs">
									 Platform(s)
								</th>
								<th class="hidden-xs">
									 Engine version
								</th>
								<th class="hidden-xs">
									 CSS grade
								</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 4.0
								</td>
								<td>
									 Win 95+
								</td>
								<td>
									 4
								</td>
								<td>
									 X
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 5.0
								</td>
								<td>
									 Win 95+
								</td>
								<td>
									 5
								</td>
								<td>
									 C
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 5.5
								</td>
								<td>
									 Win 95+
								</td>
								<td>
									 5.5
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 6
								</td>
								<td>
									 Win 98+
								</td>
								<td>
									 6
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 7
								</td>
								<td>
									 Win XP SP2+
								</td>
								<td>
									 7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 AOL browser (AOL desktop)
								</td>
								<td>
									 Win XP
								</td>
								<td>
									 6
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Firefox 1.0
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Firefox 1.5
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Firefox 2.0
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Firefox 3.0
								</td>
								<td>
									 Win 2k+ / OSX.3+
								</td>
								<td>
									 1.9
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Camino 1.0
								</td>
								<td>
									 OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Camino 1.5
								</td>
								<td>
									 OSX.3+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Netscape 7.2
								</td>
								<td>
									 Win 95+ / Mac OS 8.6-9.2
								</td>
								<td>
									 1.7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Netscape Browser 8
								</td>
								<td>
									 Win 98SE+
								</td>
								<td>
									 1.7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Netscape Navigator 9
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.0
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.1
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.1
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.2
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.2
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.3
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.3
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.4
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.4
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.5
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.5
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.6
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.6
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.7
								</td>
								<td>
									 Win 98+ / OSX.1+
								</td>
								<td>
									 1.7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.8
								</td>
								<td>
									 Win 98+ / OSX.1+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Seamonkey 1.1
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Epiphany 2.20
								</td>
								<td>
									 Gnome
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 Safari 1.2
								</td>
								<td>
									 OSX.3
								</td>
								<td>
									 125.5
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 Safari 1.3
								</td>
								<td>
									 OSX.3
								</td>
								<td>
									 312.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 Safari 2.0
								</td>
								<td>
									 OSX.4+
								</td>
								<td>
									 419.3
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 Safari 3.0
								</td>
								<td>
									 OSX.4+
								</td>
								<td>
									 522.1
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 OmniWeb 5.5
								</td>
								<td>
									 OSX.4+
								</td>
								<td>
									 420
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 iPod Touch / iPhone
								</td>
								<td>
									 iPod
								</td>
								<td>
									 420.1
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 S60
								</td>
								<td>
									 S60
								</td>
								<td>
									 413
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 7.0
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 7.5
								</td>
								<td>
									 Win 95+ / OSX.2+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 8.0
								</td>
								<td>
									 Win 95+ / OSX.2+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 8.5
								</td>
								<td>
									 Win 95+ / OSX.2+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 9.0
								</td>
								<td>
									 Win 95+ / OSX.3+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 9.2
								</td>
								<td>
									 Win 88+ / OSX.3+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 9.5
								</td>
								<td>
									 Win 88+ / OSX.3+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera for Wii
								</td>
								<td>
									 Wii
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Nokia N800
								</td>
								<td>
									 N800
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Nintendo DS browser
								</td>
								<td>
									 Nintendo DS
								</td>
								<td>
									 8.5
								</td>
								<td>
									 C/A<sup>1</sup>
								</td>
							</tr>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box green-haze">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Scroller
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-hover" id="sample_5">
							<thead>
							<tr>
								<th>
									 Rendering engine
								</th>
								<th>
									 Browser
								</th>
								<th class="hidden-xs">
									 Platform(s)
								</th>
								<th class="hidden-xs">
									 Engine version
								</th>
								<th class="hidden-xs">
									 CSS grade
								</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 4.0
								</td>
								<td>
									 Win 95+
								</td>
								<td>
									 4
								</td>
								<td>
									 X
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 5.0
								</td>
								<td>
									 Win 95+
								</td>
								<td>
									 5
								</td>
								<td>
									 C
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 5.5
								</td>
								<td>
									 Win 95+
								</td>
								<td>
									 5.5
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 6
								</td>
								<td>
									 Win 98+
								</td>
								<td>
									 6
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 7
								</td>
								<td>
									 Win XP SP2+
								</td>
								<td>
									 7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 AOL browser (AOL desktop)
								</td>
								<td>
									 Win XP
								</td>
								<td>
									 6
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Firefox 1.0
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Firefox 1.5
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Firefox 2.0
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Firefox 3.0
								</td>
								<td>
									 Win 2k+ / OSX.3+
								</td>
								<td>
									 1.9
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Camino 1.0
								</td>
								<td>
									 OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Camino 1.5
								</td>
								<td>
									 OSX.3+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Netscape 7.2
								</td>
								<td>
									 Win 95+ / Mac OS 8.6-9.2
								</td>
								<td>
									 1.7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Netscape Browser 8
								</td>
								<td>
									 Win 98SE+
								</td>
								<td>
									 1.7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Netscape Navigator 9
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.0
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.1
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.1
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.2
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.2
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.3
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.3
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.4
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.4
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.5
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.5
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.6
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.6
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.7
								</td>
								<td>
									 Win 98+ / OSX.1+
								</td>
								<td>
									 1.7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.8
								</td>
								<td>
									 Win 98+ / OSX.1+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Seamonkey 1.1
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Epiphany 2.20
								</td>
								<td>
									 Gnome
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 Safari 1.2
								</td>
								<td>
									 OSX.3
								</td>
								<td>
									 125.5
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 Safari 1.3
								</td>
								<td>
									 OSX.3
								</td>
								<td>
									 312.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 Safari 2.0
								</td>
								<td>
									 OSX.4+
								</td>
								<td>
									 419.3
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 Safari 3.0
								</td>
								<td>
									 OSX.4+
								</td>
								<td>
									 522.1
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 OmniWeb 5.5
								</td>
								<td>
									 OSX.4+
								</td>
								<td>
									 420
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 iPod Touch / iPhone
								</td>
								<td>
									 iPod
								</td>
								<td>
									 420.1
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 S60
								</td>
								<td>
									 S60
								</td>
								<td>
									 413
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 7.0
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 7.5
								</td>
								<td>
									 Win 95+ / OSX.2+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 8.0
								</td>
								<td>
									 Win 95+ / OSX.2+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 8.5
								</td>
								<td>
									 Win 95+ / OSX.2+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 9.0
								</td>
								<td>
									 Win 95+ / OSX.3+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 9.2
								</td>
								<td>
									 Win 88+ / OSX.3+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 9.5
								</td>
								<td>
									 Win 88+ / OSX.3+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera for Wii
								</td>
								<td>
									 Wii
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Nokia N800
								</td>
								<td>
									 N800
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Nintendo DS browser
								</td>
								<td>
									 Nintendo DS
								</td>
								<td>
									 8.5
								</td>
								<td>
									 C/A<sup>1</sup>
								</td>
							</tr>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box red-intense">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Columns Reorder
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_6">
							<thead>
							<tr>
								<th>
									 Rendering engine
								</th>
								<th>
									 Browser
								</th>
								<th class="hidden-xs">
									 Platform(s)
								</th>
								<th class="hidden-xs">
									 Engine version
								</th>
								<th class="hidden-xs">
									 CSS grade
								</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 4.0
								</td>
								<td>
									 Win 95+
								</td>
								<td>
									 4
								</td>
								<td>
									 X
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 5.0
								</td>
								<td>
									 Win 95+
								</td>
								<td>
									 5
								</td>
								<td>
									 C
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 5.5
								</td>
								<td>
									 Win 95+
								</td>
								<td>
									 5.5
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 6
								</td>
								<td>
									 Win 98+
								</td>
								<td>
									 6
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 Internet Explorer 7
								</td>
								<td>
									 Win XP SP2+
								</td>
								<td>
									 7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Trident
								</td>
								<td>
									 AOL browser (AOL desktop)
								</td>
								<td>
									 Win XP
								</td>
								<td>
									 6
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Firefox 1.0
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Firefox 1.5
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Firefox 2.0
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Firefox 3.0
								</td>
								<td>
									 Win 2k+ / OSX.3+
								</td>
								<td>
									 1.9
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Camino 1.0
								</td>
								<td>
									 OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Camino 1.5
								</td>
								<td>
									 OSX.3+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Netscape 7.2
								</td>
								<td>
									 Win 95+ / Mac OS 8.6-9.2
								</td>
								<td>
									 1.7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Netscape Browser 8
								</td>
								<td>
									 Win 98SE+
								</td>
								<td>
									 1.7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Netscape Navigator 9
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.0
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.1
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.1
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.2
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.2
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.3
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.3
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.4
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.4
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.5
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.5
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.6
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 1.6
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.7
								</td>
								<td>
									 Win 98+ / OSX.1+
								</td>
								<td>
									 1.7
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Mozilla 1.8
								</td>
								<td>
									 Win 98+ / OSX.1+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Seamonkey 1.1
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Gecko
								</td>
								<td>
									 Epiphany 2.20
								</td>
								<td>
									 Gnome
								</td>
								<td>
									 1.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 Safari 1.2
								</td>
								<td>
									 OSX.3
								</td>
								<td>
									 125.5
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 Safari 1.3
								</td>
								<td>
									 OSX.3
								</td>
								<td>
									 312.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 Safari 2.0
								</td>
								<td>
									 OSX.4+
								</td>
								<td>
									 419.3
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 Safari 3.0
								</td>
								<td>
									 OSX.4+
								</td>
								<td>
									 522.1
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 OmniWeb 5.5
								</td>
								<td>
									 OSX.4+
								</td>
								<td>
									 420
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 iPod Touch / iPhone
								</td>
								<td>
									 iPod
								</td>
								<td>
									 420.1
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 S60
								</td>
								<td>
									 S60
								</td>
								<td>
									 413
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 7.0
								</td>
								<td>
									 Win 95+ / OSX.1+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 7.5
								</td>
								<td>
									 Win 95+ / OSX.2+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 8.0
								</td>
								<td>
									 Win 95+ / OSX.2+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 8.5
								</td>
								<td>
									 Win 95+ / OSX.2+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 9.0
								</td>
								<td>
									 Win 95+ / OSX.3+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 9.2
								</td>
								<td>
									 Win 88+ / OSX.3+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera 9.5
								</td>
								<td>
									 Win 88+ / OSX.3+
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Opera for Wii
								</td>
								<td>
									 Wii
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Nokia N800
								</td>
								<td>
									 N800
								</td>
								<td>
									 -
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Presto
								</td>
								<td>
									 Nintendo DS browser
								</td>
								<td>
									 Nintendo DS
								</td>
								<td>
									 8.5
								</td>
								<td>
									 C/A<sup>1</sup>
								</td>
							</tr>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>

		
		<!-- END PAGE CONTENT INNER -->
	</div>
</div>
<!-- END CONTENT -->
@stop

@section('javascripts')
	
	<script src="/assets/global/scripts/datatable.js"></script>
	<script type="text/javascript">	

var TableAdvanced = function () {

    var initTable1 = function () {
        var table = $('#sample_1');

        /* Table tools samples: https://www.datatables.net/release-datatables/extras/TableTools/ */

        /* Set tabletools buttons and button container */

        $.extend(true, $.fn.DataTable.TableTools.classes, {
            "container": "btn-group tabletools-dropdown-on-portlet",
            "buttons": {
                "normal": "btn btn-sm default",
                "disabled": "btn btn-sm default disabled"
            },
            "collection": {
                "container": "DTTT_dropdown dropdown-menu tabletools-dropdown-menu"
            }
        });

        var oTable = table.dataTable({

            // Internationalisation. For more info refer to http://datatables.net/manual/i18n
            "language": {
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                },
                "emptyTable": "No data available in table",
                "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                "infoEmpty": "No entries found",
                "infoFiltered": "(filtered1 from _MAX_ total entries)",
                "lengthMenu": "Show _MENU_ entries",
                "search": "Search:",
                "zeroRecords": "No matching records found"
            },

            "order": [
                [0, 'asc']
            ],
            
            "lengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] // change per page values here
            ],
            // set the initial value
            "pageLength": 10,

            "dom": "<'row' <'col-md-12'T>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable

            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js). 
            // So when dropdowns used the scrollable div should be removed. 
            //"dom": "<'row' <'col-md-12'T>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",

            "tableTools": {
                "sSwfPath": "../../assets/global/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
                "aButtons": [{
                    "sExtends": "pdf",
                    "sButtonText": "PDF"
                }, {
                    "sExtends": "csv",
                    "sButtonText": "CSV"
                }, {
                    "sExtends": "xls",
                    "sButtonText": "Excel"
                }, {
                    "sExtends": "print",
                    "sButtonText": "Print",
                    "sInfo": 'Please press "CTR+P" to print or "ESC" to quit',
                    "sMessage": "Generated by DataTables"
                }]
            }
        });

        var tableWrapper = $('#sample_1_wrapper'); // datatable creates the table wrapper by adding with id {your_table_jd}_wrapper

        tableWrapper.find('.dataTables_length select').select2(); // initialize select2 dropdown
    }

    var initTable2 = function () {
        var table = $('#sample_2');

        /* Table tools samples: https://www.datatables.net/release-datatables/extras/TableTools/ */

        /* Set tabletools buttons and button container */

        $.extend(true, $.fn.DataTable.TableTools.classes, {
            "container": "btn-group tabletools-btn-group pull-right",
            "buttons": {
                "normal": "btn btn-sm default",
                "disabled": "btn btn-sm default disabled"
            }
        });

        var oTable = table.dataTable({

            // Internationalisation. For more info refer to http://datatables.net/manual/i18n
            "language": {
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                },
                "emptyTable": "No data available in table",
                "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                "infoEmpty": "No entries found",
                "infoFiltered": "(filtered1 from _MAX_ total entries)",
                "lengthMenu": "Show _MENU_ entries",
                "search": "Search:",
                "zeroRecords": "No matching records found"
            },

            "order": [
                [0, 'asc']
            ],
            "lengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] // change per page values here
            ],

            // set the initial value
            "pageLength": 10,
            "dom": "<'row' <'col-md-12'T>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable

            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js). 
            // So when dropdowns used the scrollable div should be removed. 
            //"dom": "<'row' <'col-md-12'T>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",

            "tableTools": {
                "sSwfPath": "../../assets/global/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
                "aButtons": [{
                    "sExtends": "pdf",
                    "sButtonText": "PDF"
                }, {
                    "sExtends": "csv",
                    "sButtonText": "CSV"
                }, {
                    "sExtends": "xls",
                    "sButtonText": "Excel"
                }, {
                    "sExtends": "print",
                    "sButtonText": "Print",
                    "sInfo": 'Please press "CTRL+P" to print or "ESC" to quit',
                    "sMessage": "Generated by DataTables"
                }, {
                    "sExtends": "copy",
                    "sButtonText": "Copy"
                }]
            }
        });

        var tableWrapper = $('#sample_2_wrapper'); // datatable creates the table wrapper by adding with id {your_table_jd}_wrapper
        tableWrapper.find('.dataTables_length select').select2(); // initialize select2 dropdown
    }

    var initTable3 = function () {
        var table = $('#sample_3');

        /* Formatting function for row details */
        function fnFormatDetails(oTable, nTr) {
            var aData = oTable.fnGetData(nTr);
            var sOut = '<table>';
            sOut += '<tr><td>Platform(s):</td><td>' + aData[2] + '</td></tr>';
            sOut += '<tr><td>Engine version:</td><td>' + aData[3] + '</td></tr>';
            sOut += '<tr><td>CSS grade:</td><td>' + aData[4] + '</td></tr>';
            sOut += '<tr><td>Others:</td><td>Could provide a link here</td></tr>';
            sOut += '</table>';

            return sOut;
        }

        /*
         * Insert a 'details' column to the table
         */
        var nCloneTh = document.createElement('th');
        nCloneTh.className = "table-checkbox";

        var nCloneTd = document.createElement('td');
        nCloneTd.innerHTML = '<span class="row-details row-details-close"></span>';

        table.find('thead tr').each(function () {
            this.insertBefore(nCloneTh, this.childNodes[0]);
        });

        table.find('tbody tr').each(function () {
            this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
        });

        /*
         * Initialize DataTables, with no sorting on the 'details' column
         */
        var oTable = table.dataTable({

            // Internationalisation. For more info refer to http://datatables.net/manual/i18n
            "language": {
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                },
                "emptyTable": "No data available in table",
                "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                "infoEmpty": "No entries found",
                "infoFiltered": "(filtered1 from _MAX_ total entries)",
                "lengthMenu": "Show _MENU_ entries",
                "search": "Search:",
                "zeroRecords": "No matching records found"
            },

            "columnDefs": [{
                "orderable": false,
                "targets": [0]
            }],
            "order": [
                [1, 'asc']
            ],
            "lengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] // change per page values here
            ],
            // set the initial value
            "pageLength": 10,

            "tableTools": {
                "sSwfPath": "../../assets/global/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
                "aButtons": [{
                    "sExtends": "pdf",
                    "sButtonText": "PDF"
                }, {
                    "sExtends": "csv",
                    "sButtonText": "CSV"
                }, {
                    "sExtends": "xls",
                    "sButtonText": "Excel"
                }, {
                    "sExtends": "print",
                    "sButtonText": "Print",
                    "sInfo": 'Please press "CTRL+P" to print or "ESC" to quit',
                    "sMessage": "Generated by DataTables"
                }, {
                    "sExtends": "copy",
                    "sButtonText": "Copy"
                }]
            }
            
        });
        var tableWrapper = $('#sample_3_wrapper'); // datatable creates the table wrapper by adding with id {your_table_jd}_wrapper

        tableWrapper.find('.dataTables_length select').select2(); // initialize select2 dropdown

        /* Add event listener for opening and closing details
         * Note that the indicator for showing which row is open is not controlled by DataTables,
         * rather it is done here
         */
        table.on('click', ' tbody td .row-details', function () {
            var nTr = $(this).parents('tr')[0];
            if (oTable.fnIsOpen(nTr)) {
                /* This row is already open - close it */
                $(this).addClass("row-details-close").removeClass("row-details-open");
                oTable.fnClose(nTr);
            } else {
                /* Open this row */
                $(this).addClass("row-details-open").removeClass("row-details-close");
                oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
            }
        });
    }

    var initTable4 = function () {
        var table = $('#sample_4');

        /* Formatting function for row expanded details */
        function fnFormatDetails(oTable, nTr) {
            var aData = oTable.fnGetData(nTr);
            var sOut = '<table>';
            sOut += '<tr><td>Platform(s):</td><td>' + aData[2] + '</td></tr>';
            sOut += '<tr><td>Engine version:</td><td>' + aData[3] + '</td></tr>';
            sOut += '<tr><td>CSS grade:</td><td>' + aData[4] + '</td></tr>';
            sOut += '<tr><td>Others:</td><td>Could provide a link here</td></tr>';
            sOut += '</table>';

            return sOut;
        }

        /*
         * Insert a 'details' column to the table
         */
        var nCloneTh = document.createElement('th');
        nCloneTh.className = "table-checkbox";
        
        var nCloneTd = document.createElement('td');
        nCloneTd.innerHTML = '<span class="row-details row-details-close"></span>';

        table.find('thead tr').each(function () {
            this.insertBefore(nCloneTh, this.childNodes[0]);
        });

        table.find('tbody tr').each(function () {
            this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
        });

        var oTable = table.dataTable({

            // Internationalisation. For more info refer to http://datatables.net/manual/i18n
            "language": {
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                },
                "emptyTable": "No data available in table",
                "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                "infoEmpty": "No entries found",
                "infoFiltered": "(filtered1 from _MAX_ total entries)",
                "lengthMenu": "Show _MENU_ entries",
                "search": "Search:",
                "zeroRecords": "No matching records found"
            },

            "columnDefs": [{
                "orderable": false,
                "targets": [0]
            }],
            "order": [
                [1, 'asc']
            ],
            "lengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] // change per page values here
            ],
            // set the initial value
            "pageLength": 10,

            "tableTools": {
                "sSwfPath": "/assets/global/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
                "aButtons": [{
                    "sExtends": "pdf",
                    "sButtonText": "PDF"
                }, {
                    "sExtends": "csv",
                    "sButtonText": "CSV"
                }, {
                    "sExtends": "xls",
                    "sButtonText": "Excel"
                }, {
                    "sExtends": "print",
                    "sButtonText": "Print",
                    "sInfo": 'Please press "CTRL+P" to print or "ESC" to quit',
                    "sMessage": "Generated by DataTables"
                }, {
                    "sExtends": "copy",
                    "sButtonText": "Copy"
                }]
            }
        });

        var tableWrapper = $('#sample_4_wrapper'); // datatable creates the table wrapper by adding with id {your_table_jd}_wrapper
        var tableColumnToggler = $('#sample_4_column_toggler');

        /* modify datatable control inputs */
        tableWrapper.find('.dataTables_length select').select2(); // initialize select2 dropdown

        /* Add event listener for opening and closing details
         * Note that the indicator for showing which row is open is not controlled by DataTables,
         * rather it is done here
         */
        table.on('click', ' tbody td .row-details', function () {
            var nTr = $(this).parents('tr')[0];
            if (oTable.fnIsOpen(nTr)) {
                /* This row is already open - close it */
                $(this).addClass("row-details-close").removeClass("row-details-open");
                oTable.fnClose(nTr);
            } else {
                /* Open this row */
                $(this).addClass("row-details-open").removeClass("row-details-close");
                oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
            }
        });

        /* handle show/hide columns*/
        $('input[type="checkbox"]', tableColumnToggler).change(function () {
            /* Get the DataTables object again - this is not a recreation, just a get of the object */
            var iCol = parseInt($(this).attr("data-column"));
            var bVis = oTable.fnSettings().aoColumns[iCol].bVisible;
            oTable.fnSetColumnVis(iCol, (bVis ? false : true));
        });
    }

    var initTable5 = function () {

        var table = $('#sample_5');

        /* Fixed header extension: http://datatables.net/extensions/scroller/ */

        var oTable = table.dataTable({
            "dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // datatable layout without  horizobtal scroll
            "scrollY": "300",
            "deferRender": true,
            "order": [
                [0, 'asc']
            ],
            "lengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] // change per page values here
            ],
            "pageLength": 10 // set the initial value            
        });


        var tableWrapper = $('#sample_5_wrapper'); // datatable creates the table wrapper by adding with id {your_table_jd}_wrapper
        tableWrapper.find('.dataTables_length select').select2(); // initialize select2 dropdown
    }

    var initTable6 = function () {

        var table = $('#sample_6');

        /* Fixed header extension: http://datatables.net/extensions/keytable/ */

        var oTable = table.dataTable({

            // Internationalisation. For more info refer to http://datatables.net/manual/i18n
            "language": {
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                },
                "emptyTable": "No data available in table",
                "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                "infoEmpty": "No entries found",
                "infoFiltered": "(filtered1 from _MAX_ total entries)",
                "lengthMenu": "Show _MENU_ entries",
                "search": "Search:",
                "zeroRecords": "No matching records found"
            },

            "order": [
                [0, 'asc']
            ],
            "lengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] // change per page values here
            ],
            "pageLength": 10, // set the initial value,
            "columnDefs": [{  // set default column settings
                'orderable': false,
                'targets': [0]
            }, {
                "searchable": false,
                "targets": [0]
            }],
            "order": [
                [1, "asc"]
            ]           
        });

        var oTableColReorder = new $.fn.dataTable.ColReorder( oTable );

        var tableWrapper = $('#sample_6_wrapper'); // datatable creates the table wrapper by adding with id {your_table_jd}_wrapper
        tableWrapper.find('.dataTables_length select').select2(); // initialize select2 dropdown
    }

    return {

        //main function to initiate the module
        init: function () {

            if (!jQuery().dataTable) {
                return;
            }

            console.log('me 1');

            initTable1();
            initTable2();
            initTable3();
            initTable4();
            initTable5();
            initTable6();

            console.log('me 2');
        }

    };

}();
	</script>
	<!-- END PAGE LEVEL SCRIPTS -->

	<script>
        jQuery(document).ready(function() {  
           	Metronic.init(); // init metronic core components
			Layout.init(); // init current layout
			Demo.init(); // init demo features
   			TableAdvanced.init();

        });

	</script>

@stop
