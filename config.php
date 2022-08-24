<?php
require_once 'messages.php';

define( 'BASE_PATH', 'localhost');//Ruta base donde se encuentra
define( 'DB_HOST', 'localhost' );//Servidor de la base de datos
define( 'DB_USERNAME', 'zelayaca_ccm');//Usuario de la base de datos
define( 'DB_PASSWORD', '!05_K]{kfo;g');//Contraseña de la base de datos
define( 'DB_NAME', 'zelayaca_data_cm');//Nombre de la base de datos


spl_autoload_register("banshee_autoload");
function banshee_autoload($class)
{
	$parts = explode('_', $class);
	$path = implode(DIRECTORY_SEPARATOR,$parts);
	require_once $path . '.php';
}
date_default_timezone_set('America/Guatemala');
$tutu = "enla";
$tutua = "trad";
$fechita = date("Y-m-d  /  G:i:s");
$fechitas = date("Y-m-d G:i:s");
$ingtoday = date("d");
$ingtoday2 = date("m");
$ingtoday3 = date("Y");
$fecho = date("Y-m-d  /  G:i");
$fechidioy = date("d-m-Y");
$feca = date("Y-m-d");
$db = new mysqli('localhost', 'zelayaca_ccm', '!05_K]{kfo;g', 'zelayaca_data_cm');
spl_autoload_register("banshee_autoload");