<?php       
$query = "SELECT id_org,n_org,ema_org FROM ".$tutu."_org where ema_org = '".$ema."' group by ema_org";
$result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
if($result) {
    while($fila = mysqli_fetch_assoc($result)) {
    $cuko =  $fila['id_org'] ;
    }
} 
mysqli_free_result($result);
$count = 0;
$file = "../imggall/org_".$cuko."/";
if(is_dir($file))
  {
  echo ("");
  }
else
  {
  mkdir("../imggall/org_".$cuko."/", 0777);
}
$dir = opendir( "../imggall/org_".$cuko."/");
if (isset ($_FILES["files"])) {
while (false !== ($fname = readdir( $dir ))) {
	for($i=0; $i < count($_FILES['files']['name']); $i++) {
	  $tmpFilePath = $_FILES['files']['tmp_name'][$i];
	  if ($tmpFilePath != ""){
		$fecha = date("Ymdhis");

		$realname = $fecha."-".$_FILES['files']['name'][$i];
		$newFilePath = "../imggall/org_".$cuko."/".$fecha."-".$_FILES['files']['name'][$i];
		$resizeWidth = 650;
		$thumbWidth = 650;

		if(move_uploaded_file($tmpFilePath, "../imggall/org_".$cuko."/".$realname)) {

//			$img = imagecreatefromjpeg( $newFilePath );
//			$width = imagesx( $img );
//			$height = imagesy( $img );
//			$new_width = $thumbWidth;
//			$new_height = floor( $height * ( $thumbWidth / $width ) );
//			$tmp_img = imagecreatetruecolor( $new_width, $new_height );
//			imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
//			imagejpeg( $tmp_img, "../imggall/nota_".htmlspecialchars($_GET['n'])."/".$realname, 100 );
	
//			if($width > $resizeWidth){
//			  $img = imagecreatefromjpeg( $newFilePath );
//			  $anchura = imagesx( $img );
//			  $altura = imagesy( $img );
//			  $nueva_anchura = $resizeWidth;
////			  $nueva_altura = floor( $altura * ( $nueva_anchura / $anchura ) );
//			  $tmp_img = imagecreatetruecolor( $nueva_anchura, $nueva_altura );
//			  imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $nueva_anchura, $nueva_altura, $anchura, $altura);
//			  imagejpeg( $tmp_img, "../imggall/nota_".htmlspecialchars($_GET['n'])."/".$realname, 100 );
//			}
            	$fechasinhora = date("Y/m/d");
                $count++; // Number of successfully uploaded files
                $sql = "UPDATE ".$tutu."_org SET logo_org='".$realname."' WHERE id_org like '".$cuko."'";

                if ($db->query($sql) === TRUE) {
                    echo "Record updated successfully";
                } else {
                    echo "Error updating record: " . $conn->error;
                }            

		}
	  }
	  

		}
		
}
	echo "Carga exitosa. ".$count." ";
closedir( $dir );
}
// 301 Moved Permanently
header("Location: ?enc=_user", true, 301);
exit();
?>