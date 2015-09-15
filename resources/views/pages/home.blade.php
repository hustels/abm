@extends('layout')


@section('content')

<script type="text/javascript" src="/chartjs/Chart.js"></script>

  <br><br>
		<h4>Reporte mensual</h4>
	<canvas id="myChart" width="500" height="400"></canvas>


	<script type="text/javascript">
	
	(function(){
    var ctx = document.getElementById("myChart").getContext("2d");
    var chart=  {
    	//labels: ["Enero" , "Febrero" , "Marzo"],
        labels: {!! json_encode($report) !!}, // Funciona de maravilla menudo problemas me ha dado :(
    	datasets: [{
    		data: [100,500,40] ,
    		bezierCurve : true, 
    	}]
    }
    new Chart(ctx).Line(chart);
	})();
	</script>	

@stop
@section('footer')
@stop