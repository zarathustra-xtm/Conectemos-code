<?php 
    ob_start();
    session_start();
    require_once 'config.php'; 
    if(!isset($_SESSION['logged_in'])){
    header('Location: index.php');
}
?>
<?php if($_SESSION['logged_in']) { ?>
    <?php $pipe = $_SESSION['roola']; ?>
    <?php $aid = $_SESSION['user_id']; ?>
<?php } ?> 
<!DOCTYPE html>
<html lang="es">
  <head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="muni">
    <title>Página de inicio</title>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    <script type="text/javascript" src="tablo/datatables.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>    
    <link rel="stylesheet" href="tablo/buttons.bootstrap.min.css" />            
    <link rel="stylesheet" href="tablo/dataTables.bootstrap.min.css" />                           
    <script src="tablo/buttons.bootstrap.min.js"></script>                
    <script src="tablo/buttons.colVis.min.js"></script>                
    <script src="tablo/buttons.html5.min.js"></script>                
    <script src="tablo/buttons.print.min.js"></script>                
    <script src="tablo/dataTables.bootstrap.min.js"></script>                
    <script src="tablo/dataTables.buttons.min.js"></script>                
    <script src="tablo/jszip.min.js"></script>                
    <script src="tablo/pdfmake.min.js"></script>    
    <script src="tablo/vfs_fonts.js"></script>      
 	</head>
 	<body>
    <!-- Static navbar -->
	<div role="navigation" class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" data-toggle="collapse"
					data-target=".navbar-collapse" class="navbar-toggle collapsed">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
			</div>
			<?php $uri = end( explode("/",$_SERVER['REQUEST_URI'])); ?>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li <?php if($uri == 'home.php') echo "class='active'"; ?>><a href="home.php">Inicio</a></li>
	<?php if ($pipe == 'Administrador' ) { ?>               
            <li><a href="?enc=_0">Usuarios</a></li>           
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Generales<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="?enc=_6">Secciones</a></li>
                <li><a href="?enc=_8">Todas las Secciones</a></li>                  
                <li role="separator" class="divider"></li>                
                <li><a href="?enc=_12">Tipos de Organización</a></li>                  
                <li><a href="?enc=_13">Objetivo de la Org.</a></li>                                  
                <li><a href="?enc=_14">Fuentes de Financiamiento.</a></li>                                                  
              </ul>
            </li>            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proyectos<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="?enc=_16">&Aacute;reas</a></li>               
                <li><a href="?enc=_17">Instituciones</a></li>                               
                <li role="separator" class="divider"></li>                
                <li><a href="?enc=_15">Ingresar Proyectos</a></li>
              </ul>
            </li>            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Campa&ntilde;a<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="?enc=_1">Ingresar</a></li>
                <li role="separator" class="divider"></li>
              </ul>
            </li>
	<?php
                } else {
      ?>               
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Encuestas<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="?enc=_1">Ingresar</a></li>
                <li role="separator" class="divider"></li>
              </ul>
            </li>
	<?php    
        };
      ?>           
    	</ul>
		<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle">
							Hola,  
							<?php if($_SESSION['logged_in']) { ?>
							<?php echo $_SESSION['name']; ?>
							<span class="caret"></span>
						</a>
						<ul role="menu" class="dropdown-menu">
							<li> <a href="account.php">Mi cuenta</a> </li>
							<li class="divider"></li>
							<li> <a href="logout.php">Salir</a> </li>
						</ul>
						<?php } ?>
					</li>
		</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>