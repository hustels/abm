{{-- Scripts vuejs --}}



@extends('report_layout')

@section('content')
	<link rel="stylesheet" type="text/css" href="/js/vue/app.css">
	<div id="table-report">
	<input v-model="search" class="form-control"  >
		<table class="table table-hover">
		<thead>
			<tr >
			
			<th ><a  v-class="active: ordenarpor=='sm_num'" v-on="click: sortBy('sm_num') ">#Peticion</a></th>
			<th ><a v-class="active: ordenarpor=='link'"  v-on="click: sortBy('link') ">Link</a></th>
			<th ><a  v-class="active: ordenarpor=='employer_id'" v-on="click: sortBy('employer_id') ">Usuario</a></th>
			<th ><a  v-class="active: ordenarpor=='group'" v-on="click: sortBy('group') ">Grupo</a></th>
			<th ><a v-class="active: ordenarpor=='application'"  v-on="click: sortBy('application') ">Aplicacion</a></th>
			<th ><a  v-class="active: ordenarpor=='created_at'" v-on="click: sortBy('created_at') ">Fecha</a></th>
			</tr>
		</thead>
		<tbody>
			<tr v-repeat="reports |filterBy search| orderBy ordenarpor reverso">
				<td>@{{ sm_num}}</td>
				<td>@{{ link}}</td>
				<td>@{{employer_id }}</td>
				<td>@{{ group}}</td>
				<td>@{{ application}}</td>
				<td>@{{ created_at}}</td>
				
			</tr>
		</tbody>
	</table>
	

	<pre>@{{$data | json}}</pre>
	</div>


<script src="http://cdnjs.cloudflare.com/ajax/libs/vue/0.12.15/vue.min.js"></script>
<script type="text/javascript" src="/js/vue/vue-resource.js"></script>
<script type="text/javascript" src="/js/vue/app.js"></script>
@stop