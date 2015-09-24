@extends('report_layout')

@section('content')
 <!-- Datatables CSS -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/TableTools/css/dataTables.tableTools.min.css">
<script src="/libs/jquery/jquery-1.11.3.js"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/TableTools/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="/js/socket.io.js"></script>

	
	<br><br>
		
		<table class="table table-bordered" id="users-table">
        <thead>
            <tr>
            	
                <th>Incidencia</th>
                <th>Link</th>
                <th>Fecha</th>
                <th>Empleado</th>
                <th>Grupo</th>
                <th>Application</th>
            </tr>
        </thead>
    </table>
      <script>
      		//La parte de cliente de socket.io
		    var socket = io('http://localhost:3000');
		    socket.on("user_create_report_chanel:App\\Events\\UserCreateReport", function(message){
		         console.log(message);
		     });
    </script>


    <script>
    $.fn.dataTable.TableTools.defaults.aButtons = [ "copy", "csv", "xls" ];
	$(function() {
		
	    $('#users-table').DataTable({
	  
	        processing: true,
	        serverSide: true,
	          	"dom": 'T<"clear">lfrtip',
        "tableTools": {
            "sSwfPath": "/TableTools/swf/copy_csv_xls_pdf.swf"
        },
	        ajax: '{!! route('datatables.data') !!}',
	        columns: [
	            { data: 'sm_num', name: 'sm_num' },
	            { data: 'link', name: 'link' },
	            { data: 'created_at', name: 'created_at' },
	            { data: 'employer_id', name: 'employer_id' },
	            { data: 'group', name: 'group' },
	            { data: 'application', name: 'application' },
	        ],
	        // Idioma
	        "oLanguage": {
                "sZeroRecords": "No hay registros",
                "sEmptyTable": "No hay datos en la tabla",
                "sLoadingRecords": "Cargando datos...",
                "sInfo": "Mostrando _TOTAL_ entradas (_START_ de _END_)",
                "sLengthMenu": "Mostrar _MENU_ entrdas",
                "sSearch": "Buscar:",
                        }
	    });
	});

	$(document).ready(function(){

	});
	</script>

	
@stop
