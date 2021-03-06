<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pagina de administración abm</title>
    <!-- Datatables CSS -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

   <!-- Boostrap css -->
    <link rel="stylesheet" href="/libs/bootstrap/css/bootstrap.css">

    <!-- Custom CSS -->
    <link href="/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/font-awesome/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <!-- Cargar archivo socketjs -->
   

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
           
                <a class="navbar-brand" href="index.html">ABM</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- <li class="dropdown">
                Para el icono de mensajes
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>

                    
                </li> -->
                <!-- /.dropdown -->
      
                <!-- /.dropdown -->
                <a href="/reports/create"  class="glyphicon glyphicon-plus"></a> &nbsp;
                <a href=""  class="glyphicon glyphicon-remove"></a> &nbsp;
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i>
                                    
                                    <span class="pull-right text-muted small">Hace 4 minutos</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>

                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> Nueva tarea
                                    <span class="pull-right text-muted small">Hace 4 minutos</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>

                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Todas las alertas</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                         @if (Auth::user())
                            <li><a href="#"><i class="fa fa-user fa-fw"></i>
                            {{Auth::user()->name}}
                            </a>
                            
                        @endif
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/auth/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Buscar...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="/"><i class="fa fa-dashboard fa-fw"></i>Inicio</a>
                        </li>
                        <li>
                            <a href="/reports/altas"><i class="fa fa-bar-chart-o fa-fw"></i> Reporte<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Reportes</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <!-- /.row -->
            <div class="row">
            @yield('chart')
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Grafica de reportes
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart">
                                @yield('content')
                                    <!-- Cuando se cargue la vista create se situara el formulario aqui -->
                                @show
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->

                 
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">

                    <div class="panel panel-default"> 

                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Notificationes
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" id="notification-panel">
                            <div class="list-group" >
                                <a href="#" class="list-group-item" id="notifications-list">
                                    <i class="fa fa-comment fa-fw"></i> 
                                    <span class="pull-right text-muted small">
                                    </span>
                                    @yield('notification')
                                    <p id="evento"></p><em>Hace 23 minutos</em>
                                </a>

                                <!--<a href="#" class="list-group-item">
                                    <i class="fa fa-envelope fa-fw"></i> Mensajes enviados
                                    <span class="pull-right text-muted small"><em>Hace 23 minutos</em>
                                    </span>
                                </a> -->
                                <a href="#" class="list-group-item" id="tasks-list">
                                    <i class="fa fa-tasks fa-fw"></i> Nueva tarea
                                    <span class="pull-right text-muted small"><em>Hace 23 minutos</em>
                                    </span>
                                </a>
                            </div>
                        
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->

                    <!--<div class="chat-panel panel panel-default"> beginchat 
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i>
                            Chat
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>

                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-check-circle fa-fw"></i> Disponible
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-times fa-fw"></i> Ocupado
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-sign-out fa-fw"></i> Desconectar
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                       
                        <div class="panel-body">
                            <ul class="chat">
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Cheikh Ndiaye</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> Hace 10 minutos
                                            </small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                       

                            </ul>
                        </div>
                        
                        <div class="panel-footer">
                            <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Escribir mensaje..." />
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Enviar
                                    </button>
                                </span>
                            </div>
                        </div>
                        
                    </div> // endcaht -->
                    
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>

 
    <!-- /#wrapper -->

    <!-- Jquery  -->
    
    <script src="/libs/jquery/jquery-1.11.3.js"></script>
    <!-- Datatables js -->
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="/libs/bootstrap/js/bootstrap.js"></script>

    <!-- Cargar arhivo sweetalert css y sweetalert.js -->
    <script src="/sweetalert-master/dist/sweetalert.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="/sweetalert-master/dist/sweetalert.css">
     @include('flash')



     <script type="text/javascript">
    $(document).ready(function(){


        });
    </script>
     
</body>

</html>
