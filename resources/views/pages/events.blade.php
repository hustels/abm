<!DOCTYPE html>
<html>
<head>
	<title>Events</title>
	<script src="https://js.pusher.com/2.2/pusher.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.1/jquery.js"></script>
</head>
<body>
	<h1>LOS EVENTOS DEL SERVER</h1>
	<div id="evento">
		
	</div>
	<script type="text/javascript">
	

	  /*	(function(){

	  		  var pusher = new Pusher('c11a7922b8fb5af481e2', {
			      encrypted: true
			    });
	  		  var channel = pusher.subscribe('test_channel');

	  		   channel.bind('App\\Events\\UserHasRegistred', function(data) {
			      console.log(data);
			    });
	  	})();*/
		
		$(document).ready(function(){
				 var pusher = new Pusher('c11a7922b8fb5af481e2', {
			      encrypted: true
			    });
	  		  var channel = pusher.subscribe('test_channel');

	  		   channel.bind('App\\Events\\UserHasRegistred', function(data) {
			      //console.log(data.name);
			      $( "#evento" ).append(data.name);
			      $( "#evento" ).append('<br>');
			    });
			
		});

	  </script>
</body>
</html>