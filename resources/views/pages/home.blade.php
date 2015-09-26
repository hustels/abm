@extends('layout')


@section('content')

<script type="text/javascript" src="/chartjs/Chart.js"></script>
 <script type="text/javascript" src="/js/socket.io.js"></script>
  <br><br>
		<h4>Reporte mensual</h4>
	<canvas id="myChart" width="500" height="400"></canvas>

    @section('notification')
        @foreach($reports as $report)
            <div id="list">
            
                <li>{{$report->sm_num}} </li>
                
            </div>
        @endforeach

    @endsection
	<script type="text/javascript">
	
	(function(){
    var ctx = document.getElementById("myChart").getContext("2d");
    var chart=  {
    	//labels: ["Enero" , "Febrero" , "Marzo"],
        labels: {!! json_encode($dates) !!}, // Funciona de maravilla menudo problemas me ha dado :(
    	datasets: [{
    		data: [100,500,40] ,
    		bezierCurve : true, 
    	}]
    }
    new Chart(ctx).Line(chart);
	})();

    (function(){

            //La parte de cliente de socket.io
            var socket = io('http://localhost:3000');
            socket.on("user_create_report_chanel:App\\Events\\UserCreateReport", function(message){
                 console.log(message.data.sm_num);
                 //console.log(localStorage.setItem(message.data.user.name))
                 $( "#list" ).prepend("<li>" + message.data.sm_num + "</li>");

             });
    })();
	</script>	

@stop
@section('footer')
@stop