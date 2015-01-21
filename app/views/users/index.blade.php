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
					<a href="{{ $module['route'] }}/create" class="btn tooltips" data-toggle="Añadir un nuevo registro" data-container="body" data-placement="left" data-html="true"  data-original-title="Añadir un nuevo usuario"><i class="icon-plus"></i></a>
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
		<!-- END PAGE CONTENT INNER -->

		@if( $module['msg_active'] != null )
			<div class="note note-active">
				<h4>{{ $module['msg_active']['title'] }}</h4>
				<p>{{ $module['msg_active']['description'] }}</p>
			</div>
		@endif

		<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box green-haze">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-user"></i>Listado de Usuarios
							</div>
							<div class="tools">
								<a href="{{ $module['route'] }}/create" class="label bg-green-haze"><i class="fa fa-plus-circle"></i> Añadir Nuevo</a>
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="datatable">
							<thead>
							<tr>
								<th>
									 Nombre
								</th>
								<th>
									 Apellido
								</th>
								<th>
									 Usuario
								</th>
								<th>
									 Correo
								</th>
								<th>
									 Rol
								</th>
								<th>
									 Estado
								</th>
								<th>
									 Acciones
								</th>
							</tr>
							</thead>
							<tbody>
							@foreach( $users as $user )
							<tr>
								<td>
									{{ $user->first_name }}
								</td>
								<td>
									{{ $user->last_name }}
								</td>
								<td>
									{{ $user->username }}
								</td>
								<td>
									{{ $user->email }}
								</td>
								<td>
									{{ $user->role->description }}
								</td>
								<td>
									@if( $user->status == 'active' )
										<a href="{{ $module['route'] . '/deactivate/' . Crypt::encrypt($user->id) }}" class="tooltips" data-container="body" data-placement="bottom" data-html="true"  data-original-title="Desactivar"><span class="label bg-blue">{{ 'Activo' }}</span></a>
									@elseif( $user->status == 'inactive' )
										<a href="{{ $module['route'] . '/activate/' . Crypt::encrypt($user->id) }}" class="tooltips" data-container="body" data-placement="bottom" data-html="true"  data-original-title="Activar"><span class="label bg-yellow-saffron">{{ 'Inactivo' }}</span>
									@endif
								</td>
								<td>
									@if( $user->status == 'active' )
										&nbsp;&nbsp;
										<a class="font-blue-steel tooltips fancybox fancybox.ajax" href="{{ $module['route'] . '/show/' . Crypt::encrypt($user->id) }}" data-container="body" data-placement="bottom" data-html="true"  data-original-title="Visualizar"> <i class="fa fa-eye"></i> </a> 
									@elseif( $user->status == 'inactive' )
										&nbsp;&nbsp;
										<a class="font-blue-steel tooltips" href="{{ $module['route'] . '/show/' . Crypt::encrypt($user->id) }}" data-container="body" data-placement="bottom" data-html="true"  data-original-title="Visualizar"> <i class="fa fa-eye"></i> </a> 
										&nbsp;&nbsp;
										<a class="font-yellow-crusta tooltips" href="{{ $module['route'] . '/edit/' . Crypt::encrypt($user->id) }}" data-container="body" data-placement="bottom" data-html="true"  data-original-title="Editar"> <i class="fa fa-pencil"></i> </a> 
										&nbsp;&nbsp;
										<a class="font-red-sunglo tooltips" href="{{ $module['route'] . '/delete/' . Crypt::encrypt($user->id) }}" data-container="body" data-placement="bottom" data-html="true"  data-original-title="Eliminar"> <i class="fa fa-trash-o"></i> </a>
									@endif
								</td>
							</tr>
							@endforeach
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

		    var initDataTable = function () {
		        var table = $('#datatable');

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
		                "emptyTable": "No hay datos disponibles en la tabla",
		                "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
		                "infoEmpty": "Ningún registro encontrado",
		                "infoFiltered": "(filtrando de _MAX_ registros totales)",
		                "lengthMenu": "Ver _MENU_ registros",
		                "search": "Buscar:",
		                "zeroRecords": "Ninguna coincidencia encontrada"
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
		            "dom": "<'row'<'col-md-6 col-sm-4'l><'col-md-4'T><'col-md-2' f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable

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

		    return {

		        //main function to initiate the module
		        init: function () {

		            if (!jQuery().dataTable) {
		                return;
		            }

		            initDataTable();

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

   			jQuery('.fancybox').fancybox();
   			
        });

	</script>

@stop
