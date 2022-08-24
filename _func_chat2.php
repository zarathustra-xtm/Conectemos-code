<?php
	if(isset($_POST['sender_userid'])){
		$campos = array("dona_id"=>$_POST['dona_id'], "sender_userid"=>$_POST['sender_userid'], "reciever_userid"=>$_POST['reciever_userid'], "message"=>$_POST['message']);
		$tabla = "enla_chat2";//Tabla en base de datos
		insertar($tabla,$campos);
	}
    
//Conexion con la base de datos
function db_query($query) {
    $connection = mysqli_connect("localhost","zelayaca_ccm","!05_K]{kfo;g","zelayaca_data_cm");
    $result = mysqli_query($connection,$query);
    return $result;
mysqli_close($connection);    
}
// Crear La función Insertar
 function insertar($tblname,$form_data){
	$fields = array_keys($form_data);
	$sql="INSERT INTO ".$tblname."(".implode(',', $fields).")  VALUES('".implode("','", $form_data)."')";
	return db_query($sql);
}
//Seleccionar los datos de la tabla para mostrarlos.
function select_datos($tblname,$field_name,$field_id){
	$sql = "Select * from ".$tblname." where ".$field_name." = ".$field_id."";
	$db=db_query($sql);
	$GLOBALS['row'] = mysqli_fetch_object($db);
	return $sql;
}

?>