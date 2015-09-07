<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro de altas</title>

</head>
<body role="document">
<div class="container">
	@yield('header')
	    <!-- Comienzo navbar-->
	    <nav class="navbar navbar-inverse navbar-fixed-top" id="menu_navegacion">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="#" >Registro de altas</a>
	        </div>
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav">
	            <li ><a href="/">Home</a></li>
	            <li><a href="/reports/create">Alta | baja usuarios</a></li>
	            <li><a href="/reports">Consulta usuarios</a></li>
	          </ul>
				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="/auth/login">Login</a></li>
						<li><a href="/auth/register">Registrase</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/auth/logout">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
	        </div>
	      </div>
	    </nav>
	    <!-- Fin navbar -->
	
	

	
	@yield('content')
	<!-- Archivos css personalizado  -->
	<link rel="stylesheet" href="/css/custom.css">
	<!-- Boostrap css -->
	<link rel="stylesheet" href="/libs/bootstrap/css/bootstrap.css">
	
	<!-- Jquery  -->
	<script src="/libs/jquery/jquery-1.11.3.js"></script>
	<!-- Bootstrap JS -->
	<script src="/libs/bootstrap/js/bootstrap.js"></script>
	<!-- Angular JS -->
	<script src="/libs/angular/angular.min.js"></script>
	
	<!-- Javascript personalizado  -->
	<script src="/js/main.js"></script>

	@yield('footer')
		<footer class="footer">
        <p>&copy; Prosegur 2015 | Altas bajas modificaciones</p>
     	 </footer>
    </div>
</body>
</html>