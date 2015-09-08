@extends('master')

@section('content')

	<div class="container" >
	<br><br>
		<h1>Lista de reportes</h1>
		@foreach($reports as $report)
			<ul>
				<li>{{$report->sm_num}}-
				 <a href="#">{{$report->link}}-</a>
				  {{$report->date}}-
				  {{$report->employer_id}}-
				  {{$report->group}}-
				  {{$report->application}}-
				  {{$report->created_at}}-
				  {{$report->updated_at}}- 
				  <a href="/reports/destroy/{{$report->id}}" class="btn btn-danger">Borrar</a>
				  <button class="btn btn-success">Editar</button>
				</li>
			</ul>
			<!--  -->
		@endforeach
	</div>

@stop
