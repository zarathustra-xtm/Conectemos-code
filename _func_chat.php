<?php
	if(isset($_POST['sender_userid'])){
		$campos = array("ayu_id"=>$_POST['ayu_id'], "sender_userid"=>$_POST['sender_userid'], "reciever_userid"=>$_POST['reciever_userid'], "message"=>$_POST['message']);
		$tabla = "enla_chat";//Tabla en base de datos
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
$db = new mysqli('localhost', 'zelayaca_ccm', '!05_K]{kfo;g', 'zelayaca_data_cm');
		$sqlah = "SELECT id_org,n_org,ema_org FROM enla_org where id_org like '$_POST[sender_userid]'";
		$resultah = $db->query($sqlah);
		if ($resultah->num_rows > 0) {
			// output data of each row
			while($rowah = $resultah->fetch_assoc()) {
				$sen_ido = $rowah['id_org'];
				$sen_nomo = $rowah['n_org'] ;
				$sen_emo = $rowah['ema_org'] ;
				 }
		} else {
			"0 results";
		}
		mysqli_free_result($resultah);		
		$sqlah = "SELECT id_org,n_org,ema_org FROM enla_org where id_org like '$_POST[reciever_userid]'";
		$resultah = $db->query($sqlah);
		if ($resultah->num_rows > 0) {
			// output data of each row
			while($rowah = $resultah->fetch_assoc()) {
				$rec_ido = $rowah['id_org'];
				$rec_nomo = $rowah['n_org'] ;
				$rec_emo = $rowah['ema_org'] ;
				 }
		} else {
			"0 results";
		}
		mysqli_free_result($resultah);			
                    $email = "ormaprime@gmail.com";    
//                  $email = $invoema;
                    $who  =  $sen_nomo.' para '.$rec_nomo;         
                    $para  = $email; //. ', '; // atención a la coma
                    // Asunto
                    $titulo = $who;
                    // Cuerpo o mensaje
                    $men1 = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Enlazando.gt</title></head><body>";
                    $men2 .= "<table style='width: 100%;'>";
                    $men3 .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
                    $men4 .= "<br><br>";
                    $men5 .= "</td></tr></thead><tbody>";
                    $men6 .= "<tr><td style='border:none; text-align: center;'><div class='topo'><a href='http://enlazando.gt' target='_blank'><img src='http://enlazando.gt/assets/images/_logo.png' style='width:200px;' alt=''>    </a></div></td></tr>";
                    $men7 .= "<tr><td colspan='2' style='border:none; text-align: center;'>Te han enviado el siguiente mensaje:</td></tr>";
                    $men7 .= "<tr><td colspan='2' style='border:none; text-align: center;'>".$_POST['message']."</td></tr>";
                    $men7 .= "<tr><td colspan='2' style='border:none; text-align: center;'><a href='http://enlazando.gt' target='_blank'>Enl&aacute;zate</a></td></tr>";
                    $men8 .= "</tbody></table>";
                    $men9 .= "</body></html>";
                    $fullmensaje = $men1.$men2.$men3.$men4.$men5.$men6.$men7.$men8.$men9;
                    $cabeceras .= 'MIME-Version: 1.0' . "\r\n";
                    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $cabeceras .= 'From: enlazando.gt  <info@enlazando.gt>' . "\r\n";
                    $cabeceras .= 'Cc: ormaprime2@gmail.com' . "\r\n";
//                    $cabeceras .= 'Bcc: omoran@cang.org.gt' . "\r\n";
                    mail($para, $titulo, $fullmensaje, $cabeceras); 	 
?>