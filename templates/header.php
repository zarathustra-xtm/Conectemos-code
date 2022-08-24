<?php 
header('Content-Type: text/html; charset=utf-8');
    ob_start();
    session_start();
    require_once 'config.php'; 
    if(!isset($_SESSION['logged_in'])){
    header('Location: index.php');
}
?>
<?php if($_SESSION['logged_in']) { 
    
   $pipe = $_SESSION['roola']; 
   $aid = $_SESSION['user_id'];
   $ema = $_SESSION['email'];     
   $ses = $_SESSION['current_session'];     
   $on =  $_SESSION['online'];  
   $cicus =  $_SESSION['social_id'];      
   $eje =  $_SESSION['picture'];          
    
}
 if ( $on == '0') {
            $sql = "UPDATE ".$tutu."_susu SET online = '1'  WHERE user_id like ".$aid."";
            if ($db->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $db->error;
            }
 } else {
 }


     $queryu = "SELECT * FROM ".$tutu."_org where ema_org like '$ema' order by id_org ASC limit 1 ";
    $resultu = mysqli_query($db, $queryu) or trigger_error("Query Failed! SQL: $queryu - Error: ". mysqli_error($db), E_USER_ERROR);
    if($resultu) { 
        $ssu = 0 ;
        while($rowu = mysqli_fetch_assoc($resultu)) {
            $idorg = $rowu['id_org'] ;
        }
    }
    mysqli_free_result($resultu);
                                                
?> 
<!DOCTYPE html>
<html lang="es">
  <head>
 		<!-- basic scripts -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>	
		<!--[if !IE]> -->
		<!-- <![endif]-->
		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>		
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>Enlazando Guatemala </title>

        <!-- bootstrap & tables -->
		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="_tooltips.css" />
		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="assets/css/chosen.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="assets/css/daterangepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-colorpicker.min.css" />
		
		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="assets/css/mergas.css" class="ace-main-stylesheet" id="main-ace-style" />		

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
		<script src="assets/js/grid.locale-en.js"></script>		

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->

 	</head>
 	<body class="skin-1">
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
                <li><a href="?enc=_20">Tipos de Ayuda</a></li>                   
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
           <li>
              <a href="?enc=_user" class="dropdown-toggle tooltipss"  role="button" aria-haspopup="true" aria-expanded="false">Informaci&oacute;n institucional
                <div class="bottom">
                    <p>Aqu&iacute; encontrar&aacute;s tu informaci&oacute;n personal o institucional. </p>
                </div>	
              </a> 
           </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acciones<span class="caret"></span>
                </a>
                 
              <ul class="dropdown-menu">
                <li class="tooltipss"><a href="?enc=_ayuda">Solicitar Ayuda</a>
                     <div class="right">
                           <p>Aquí podras solicitar ayuda en base a las necesidades de tus proyectos</p>
                      </div>	
                </li>               
                <li class="tooltipss"><a href="?enc=_cont">Ingresar Contribuci&oacute;n</a>
                     <div class="right">
                           <p>Aquí podras ingresar contribuciones relacionadas a tus acctividades o bien lo que quieras aportar al p&uacute;blico en general</p>
                      </div>	                
                </li>
                <li class="tooltipss"><a href="?enc=_donado">Donaciones Recibidas</a>
                     <div class="right">
                           <p>Aquí econtraras las donaciones, que los usuarios te asignan</p>
                      </div>	                
                </li>                  
<!--                <li><a href="?enc=_recib">Contribuciones Recibidas ?</a></li>                -->
                <li role="separator" class="divider"></li>
              </ul>
            </li>
	<?php    
        };
      ?>           
    	</ul>
		<ul class="nav navbar-nav navbar-right">
						<li class="purple dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle tooltipss" href="#">Mis Donaciones
								<i class="ace-icon fa fa-bell icon-animated-bell"></i> 
                        <?php 
                            $sql="SELECT id_dona,org_dona FROM ".$tutu."_dona where org_dona like '$idorg'";
                            if ($result=mysqli_query($db,$sql))
                              {
                              // Return the number of rows in result set
                              $rowcount=mysqli_num_rows($result);
                              // Free result set
                              mysqli_free_result($result);
                              }    
                        ?>                                
								<span class="badge badge-important"><?php echo $rowcount ; ?></span>
                                <div class="bottom">
                                    <p>Consulta todas tus donaciones, haciendo clic en este boton</p>
                                </div>								
							</a>
							<ul class="dropdown-menu-right dropdown-navbar navbar-inverse dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									<?php echo $rowcount ; ?> Donaciones
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar navbar-inverse">
                                       <li><a href="?enc=_cont" target="_self">Ver mis Donaciones</a></li>
									</ul>
								</li>
								<li class="dropdown-footer">
								</li>
							</ul>
						</li>              
						<li class="purple dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle tooltipss" href="#">Mis Solicitudes
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
                        <?php
                            $sql="SELECT id_solayu,org_solayu FROM ".$tutu."_solayu where org_solayu like '$idorg'";
                            if ($result=mysqli_query($db,$sql))
                              {
                              // Return the number of rows in result set
                              $rowcount=mysqli_num_rows($result);
                              // Free result set
                              mysqli_free_result($result);
                              }    
                        ?>                                
								<span class="badge badge-important"><?php echo $rowcount ; ?></span>
                                <div class="bottom">
                                    <p>Consulta todos tus solicitudes de ayuda, haciendo clic en este boton</p>
                                </div>								
							</a>
							<ul class="dropdown-menu-right dropdown-navbar navbar-inverse dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									<?php echo $rowcount ; ?> Solicitudes
								</li>
								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar navbar-inverse">
                                       <li><a href="?enc=_ayuda" target="_self">Ver mis Solicitudes</a></li>
									</ul>
								</li>
								<li class="dropdown-footer">
								</li>
							</ul>
						</li>            
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle">
							Hola,  
							<?php if($_SESSION['logged_in']) { ?>
							<?php echo $_SESSION['name']; ?>
							<span class="caret"></span>
						</a>
						<ul role="menu" class="dropdown-menu">
							<li> <a href="account.php">Cambiar Contrase&ntilde;a</a> </li>
							<li class="divider"></li>
							<li> <a href="logout.php?O=<?php echo $aid;?>">Salir</a> </li>
						</ul>
						<?php } ?>
					</li>
            
		</ul>
                
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>