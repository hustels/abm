@extends('layout')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
	
	<br><br>
		<h1>Crear nuevo reporte</h1>
		<form method="post" action="/reports/store">
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="form-group">
                	<label for="num_sm">Num SM</label>
                	<input type="text" class="form-control" id="num_sm" name="sm_num">
                </div>
                <div class="form-group">
                	<label for="link">Link de incidencia</label>
                	<input type="text" class="form-control" id="link" name="link">
                </div>
              <div class="form-group">
                <label for="application">Aplicación</label><br>
                  <select id="apps" class="form-control" name="application">
                  <option value="recurso">Seleccionar recurso</option>
                 @foreach(App\Http\Utilities\Application::applications() as $key => $appName)
					<option value="{{$key}}">{{$appName}}</option>
                 @endforeach
              
                </select>
              </div>
              <div class="form-group">
                <label for="employer_id">ID empleado</label>
                <input type="text" class="form-control" id="employer_id" name="employer_id">
              </div>
              <div class="form-group">
                <label for="group">Grupo OU</label>
                <input type="text" class="form-control" id="group" name="group">
              </div>
     
            <input type="submit" class="btn btn-primary btn-lg" value="Añadir registro">
        </form>
		    @if($errors->any())
          <ul class="alert alert-danger">
              @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
              @endforeach
          </ul>
        @endif



@stop


