<?php require_once 'config.php'; ?>
<?php 
	if(!empty($_POST)){
		try {
			$user_obj = new Cl_Usero();
			$data = $user_obj->registration( $_POST );
			if($data)$success = USER_REGISTRATION_SUCCESS;
		} catch (Exception $e) {
			$error = $e->getMessage();
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario de registro de usuarios</title>

    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
	<div class="container">
		<?php require_once 'templates/ads.php';?>
		<div class="login-form">
			<?php require_once 'templates/message.php';?>
			
			
			<div class="form-header">
			<style>
                .gg {
                    width: 100%;
                }
    .tezo{
        text-align: center;
        font-size: 1.2em;
        color: white;
    }
    .ttvb{
        max-height: 80px;
    }    
    .teta{
        width: 100%;
    }
    .nutu{
        text-align: center;
    }
    .nutiz{
        text-align: left;
    }
    .nutder{
        text-align: right;
    }
    .tezo{
        text-align: center;
        font-size: 1.2em;
        color: white;
    }
    .ttvb{
        max-height: 80px;
    }              
                </style>
			<img class="gg" src="../img/_logo_.jpeg">    
			</div>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-register" role="form" id="register-form">
				<div>
					<input name="name" id="name" type="text" class="form-control" placeholder="Nombres"> 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="email" id="email" type="email" class="form-control" placeholder="Correo electrónico" > 
					<span class="help-block"></span>
                    <input name="roola" id="roola" type="hidden" value="orga" class="form-control" placeholder="Correo electrónico" >                     
				</div>
				<div>
                    Tu correo es importante, para que recibas la confirmaci&oacute;n de tu registro, Gracias.
					<input name="password" id="password" type="hidden" value="enlazando.2021" class="form-control" placeholder="Contraseña"> 
					<span class="help-block"></span>
				</div>
                            <div class="appointment-form">

                                        <div class="form-row"><br><br>    
                                            <table class="teta">
                                                <tr>
                                                    <td class="nutder">
                                            <div class="form-check form-check-inline">
                                                <img class="ttvb" src="https://enlazando.gt/assets/images/dinero.png"><br>
                                              <input class="form-check-input" type="radio" name="que_org" id="inlineRadio1" value="dinero">
                                              <label class="form-check-label" for="inlineRadio1">Dinero</label>
                                            </div>
                                                        
                                                    </td>
                                                    <td class="nutu">
                                            <div class="form-check form-check-inline">
                                                <img class="ttvb" src="https://enlazando.gt/assets/images/tiempo.png"><br>
                                              <input class="form-check-input" type="radio" name="que_org" id="inlineRadio2" value="tiempo">
                                              <label class="form-check-label" for="inlineRadio2">Tiempo</label>
                                            </div>
                                                        
                                                    </td>
                                                    <td class="nutiz">
                                            <div class="form-check form-check-inline">
                                                <img class="ttvb" src="https://enlazando.gt/assets/images/mano.png"><br>                                                                                     
                                              <input class="form-check-input" type="radio" name="que_org" id="inlineRadio3" value="recurso">
                                              <label class="form-check-label" for="inlineRadio3">Recursos</label>
                                            </div>                                                    
                                                    </td>                                                    
                                                </tr>
                                            </table>
 
                                        </div>
 

                                <div class="nutu">
                                    <h3>Eje Tem&aacute;tico</h3>                                         
                                        <br><br>
                                          <div class="form-group">
                                            <select class="form-control" name="eje_org" id="exampleFormControlSelect2">
                                              <option value="ani" selected>Animales</option>
                                              <option value="covi" selected>Construcci&oacute;n Vial</option>
                                              <option value="depo" selected>Deportes</option>
                                              <option value="emco" selected>Empoderamiento Econ&oacute;mico</option>
                                              <option value="errvio" selected>Erradicaci&oacute;n de la Violencia</option>
                                              <option value="meamn" selected>Medio Ambiente</option>                                                
                                              <option value="muj" selected>Mujeres</option>
                                              <option value="nin">Ni&ntilde;ez</option>
                                              <option value="priin">Primera infancia</option>                                                
                                              <option value="tree">Tercera Edad</option>                                                                                                
                                              <option value="otros">Otros</option>                                                                                                                                              
                                            </select>
                                          </div>  
                                    </div>
                                </div>                
				<div>
					<input name="confirm_password" id="confirm_password" type="hidden" value="enlazando.2021" class="form-control" placeholder="Confirmar Contraseña"> 
					<span class="help-block"></span>
				</div>
				<button class="btn btn-block bt-login" type="submit" id="submit_btn" data-loading-text="Registrando....">Registrarse</button>
			</form>
			<div class="form-footer">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-lock"></i>
						<a href="forget_password.php"> Olvidó su contraseña? </a>
					
					</div>
					
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-check"></i>
						<a href="index.php">  Iniciar sesión  </a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /container -->

	
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/register.js"></script>
  </body>
</html>