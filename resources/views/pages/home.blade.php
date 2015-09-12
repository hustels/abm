@extends('layout')


@section('content')

<script type="text/javascript" src="/chartjs/Chart.js"></script>
  <br><br>
		<h1>Welcome {{$usuario_autenticado->name }}</h1>
	<canvas id="myChart" width="500" height="400"></canvas>
	<script type="text/javascript">
	
	(function(){
    var ctx = document.getElementById("myChart").getContext("2d");
    var chart=  {
    	labels: ["Enero" , "Febrero" , "Marzo"],
    	datasets: [{
    		data: [100,500,30] ,
    		bezierCurve : true, 
    	}]
    }
    new Chart(ctx).Line(chart);
	})();
	</script>	

@stop
@section('footer')
@stop