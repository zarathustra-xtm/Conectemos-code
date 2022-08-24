<?php
class Cl_User
{
	/**
	 * @var va a contener la conexión de base de datos
	 */
	protected $_con;
	
	/**
	 * Inializar DBclass
	 */
	public function __construct()
	{
		$db = new Cl_DBclass();
		$this->_con = $db->con;
	}
	
	/**
	 * Registro de usuarios
	 * @param array $data
	  */
	public function registration( array $data )
	{
		if( !empty( $data ) ){
			
			// Trim todos los datos entrantes:
			$trimmed_data = array_map('trim', $data);
			
			
			
			// escapar de las variables para la seguridad
			$name = mysqli_real_escape_string( $this->_con, $trimmed_data['name'] );
			$password = mysqli_real_escape_string( $this->_con, $trimmed_data['password'] );
			$cpassword = mysqli_real_escape_string( $this->_con, $trimmed_data['confirm_password'] );
            $roola = mysqli_real_escape_string( $this->_con, $trimmed_data['roola'] );            
			
			
			// Verifica la direccion de correo electrónico:
			if (filter_var( $trimmed_data['email'], FILTER_VALIDATE_EMAIL)) {
				$email = mysqli_real_escape_string( $this->_con, $trimmed_data['email']);
			} else {
				throw new Exception( "Por favor, introduce una dirección de correo electrónico válida!" );
			}
			
			
			if((!$name) || (!$email) || (!$password) || (!$cpassword) ) {
				throw new Exception( FIELDS_MISSING );
			}
			if ($password !== $cpassword) {
				throw new Exception( PASSWORD_NOT_MATCH );
			}
			$password = md5( $password );
			$query = "INSERT INTO enla_susu (user_id, name, email, roola, password, created) VALUES (NULL, '$name', '$email', '$roola', '$password', CURRENT_TIMESTAMP)";
			if(mysqli_query($this->_con, $query)){
				mysqli_close($this->_con);

                    $para  = $email; //. ', '; // atención a la coma
                  //  $para .= 'czelaya@enlazando.gt';
                    // Asunto
                    $titulo = 'Aviso de Activación de Usuario para: '.$email;
                    // Cuerpo o mensaje
                    $mensaje = '
                    <html>
                    <head>
                      <title>Aviso de Activación de Usuario</title>
                    <style>
                        .aa {
                                color: red;
                            }
                        .bb {
                                color: #014423;
                            }
                        .cc {
                                text-align: center;
                            }
                        .dd {
                                color: #47F941;
                            }
                        .gg {
                                width: 200px;
                            }
                        .hh a{
                                color: #014423;
                        }

                    </style>
                    </head>
                    <body class="cc">
                    <img class="gg" src="http://enlazando.gt/img/_logo_.jpeg">
                      <p>Estimado amigo, hemos activado tu usuario para que puedas interactuar en nuestra herramienta.<br></p>
                      <p><strong>Usuario</strong>: '.$email.'</p>
                      <p><strong>Contraseña Genérica</strong>: <span class="aa">enlazando.2021</span></p>
                      <p class="hh"><a href="http://enlazando.gt/it" target="_blank" title="enlazando.gt">Accede a la herramienta haciento clic aqu&iacute;</a></p>
                      <hr>
                      &#9679; &nbsp; Este es un correo automático generado por <span class="bb">Enlazando</span><span class="dd">.gt</span>, para informar la activación de su usuario, el cual permitirá interactuar en nuestra herramienta. &nbsp;&nbsp; &#9679; &nbsp; Este usuario es unico e instrasterible. &nbsp;&nbsp; &#9679; &nbsp; <span class="bb">Enlazando</span><span class="dd">.gt</span> no se hace responsable por el uso mal intencionado de este usuario por terceros. &nbsp;&nbsp; &#9679; &nbsp; Se recomienda cambiar la contraseña, al momento de ingresar a la plataforma.   
                    </body>
                    </html>
                    ';
                    // Cabecera que especifica que es un HMTL
                    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
                    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    // Cabeceras adicionales
                    $cabeceras .= 'From: Enlazando.gt  <info@enlazando.gt>' . "\r\n";
                    $cabeceras .= 'Cc: czelaya@enlazando.gt.' . "\r\n";
//                    $cabeceras .= 'Bcco: ormaprime@gmail.com' . "\r\n";

                    // enviamos el correo!
                    mail($para, $titulo, $mensaje, $cabeceras); 
                
   				return true;             
			};
		} else{
			throw new Exception( USER_REGISTRATION_FAIL );
		}
	}
	/**
	 * Este metodo para iniciar sesión
	 * @param array $data
	 * @return retorna falso o verdadero
	 */
	public function login( array $data )
	{
		$_SESSION['logged_in'] = false;
		if( !empty( $data ) ){
			
			// Trim todos los datos entrantes:
			$trimmed_data = array_map('trim', $data);
			
			// escapar de las variables para la seguridad
			$email = mysqli_real_escape_string( $this->_con,  $trimmed_data['email'] );
			$password = mysqli_real_escape_string( $this->_con,  $trimmed_data['password'] );
				
			if((!$email) || (!$password) ) {
				throw new Exception( LOGIN_FIELDS_MISSING );
			}
			$password = md5( $password );
			$query = "SELECT user_id, name, email, roola, status, created, current_session, online FROM enla_susu where email = '$email' and password = '$password' and status = '1'";
			$result = mysqli_query($this->_con, $query);
			$data = mysqli_fetch_assoc($result);
			$count = mysqli_num_rows($result);
			mysqli_close($this->_con);
			if( $count == 1){
				$_SESSION = $data;
				$_SESSION['logged_in'] = true;
				return true;
			}else{
				throw new Exception( LOGIN_FAIL );
			}
		} else{
			throw new Exception( LOGIN_FIELDS_MISSING );
		}
	}
	
	/**
	 * El siguiente metodo para verificar los datos de la cuenta para el cambio de contraseña
	 * @param array $data
	 * @throws Exception
	 * @return boolean
	 */
	
	public function account( array $data )
	{
		if( !empty( $data ) ){
			// Trim todos los datos entrantes:
			$trimmed_data = array_map('trim', $data);
			
			// escapar de las variables para la seguridad
			$password = mysqli_real_escape_string( $this->_con, $trimmed_data['password'] );
			$cpassword = $trimmed_data['confirm_password'];
			$user_id = mysqli_real_escape_string( $this->_con, $trimmed_data['user_id'] );
			
			if((!$password) || (!$cpassword) ) {
				throw new Exception( FIELDS_MISSING );
			}
			if ($password !== $cpassword) {
				throw new Exception( PASSWORD_NOT_MATCH );
			}
			$password = md5( $password );
			$query = "UPDATE enla_susu SET password = '$password' WHERE user_id = '$user_id'";
			if(mysqli_query($this->_con, $query)){
				mysqli_close($this->_con);
				return true;
			}
		} else{
			throw new Exception( FIELDS_MISSING );
		}
	}
	
	/**
	 * Este metodo para cerrar las sesión
	 */
	public function logout()
	{
		session_unset();
		session_destroy();
		header('Location: index.php');
	}
	
	/**
	 * Esto restablece la contraseña actual y la nueva contraseña para enviar correo
	 * @param array $data
	 * @throws Exception
	 * @return boolean
	 */
	public function forgetPassword( array $data )
	{
		if( !empty( $data ) ){
			
			// escapar de las variables para la seguridad
			$email = mysqli_real_escape_string( $this->_con, trim( $data['email'] ) );
			
			if((!$email) ) {
				throw new Exception( FIELDS_MISSING );
			}
			$password = $this->randomPassword();
			$password1 = md5( $password );
			$query = "UPDATE enla_susu SET password = '$password1' WHERE email = '$email'";
			if(mysqli_query($this->_con, $query)){
				mysqli_close($this->_con);
				$to = $email;
				$subject = "Nueva solicitud de contraseña";
				$txt = "Su nueva contraseña ".$password;
				$headers = "From: info@enlazando.gt" . "\r\n" .
//						"CC: ocrammcal@gmail.com";
					
				mail($to,$subject,$txt,$headers);
				return true;
			}
		} else{
			throw new Exception( FIELDS_MISSING );
		}
	}
	
	/**
	 * Esto generará una contraseña aleatoria
	 * @return string
	 */
	
	private function randomPassword() {
		$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
		$pass = array(); //recuerde que debe declarar $pass como un array
		$alphaLength = strlen($alphabet) - 1; //poner la longitud -1 en caché
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass); //convertir el array en una cadena
	}
}