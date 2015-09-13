@extends('report_layout')

@section('content')
 <!-- Datatables CSS  and JS-->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.0.1/css/select.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="/datatables/editor/editor.dataTables.min.css">
	<!-- Datatable Javascript -->
	<script src="/libs/jquery/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/select/1.0.1/js/dataTables.select.min.js"></script>
	<script type="text/javascript" src="/datatables/editor/editor.dataTables.min.js"></script>
	

<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
	
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
	$(function() {
	    $('#users-table').DataTable({
	        processing: true,
	        serverSide: true,
	        ajax: '{!! route('datatables.data') !!}',
	        columns: [
	            { data: 'sm_num', name: 'sm_num' },
	            { data: 'link', name: 'link' },
	            { data: 'date', name: 'date' },
	            { data: 'employer_id', name: 'employer_id' },
	            { data: 'group', name: 'group' },
	            { data: 'application', name: 'application' },


	        ]
	    });
	});
	</script>



@stop
