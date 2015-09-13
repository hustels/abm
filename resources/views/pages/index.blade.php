@extends('report_layout')

@section('content')
<script src="/libs/jquery/jquery-1.11.3.js"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
	<div class="container" >
	<br><br>
		<h1>Lista de reportes</h1>
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
	</div>
	
@stop
