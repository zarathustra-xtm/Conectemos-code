<?php
        if ( isset($_POST['silvis']) )
            {	 

             		$sql = "UPDATE silvia_fotos SET n_foto='$_POST[n_fotos]', n_fotoen='$_POST[n_fotos2]' WHERE id_foto like '".htmlspecialchars($_GET['foto'])."' ";   
    if ($mysqli->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
         
 //exit();
        ?>
<script language="Javascript">
    window.location = "?enc=_subir-sol&con=<?php echo "".htmlspecialchars($_GET['con'])."";  ?>";
</script>    
        <?php 
            }
?>	
<?php
        if ( isset($_POST['intrado']) )
            {	 
 $add = "INSERT INTO ".$tutu."_fotos (n_foto,n_fotoen,foto_foto) VALUES ('$_POST[n_foto]','$_POST[n_fotoen]','$_POST[foto_foto]')";
                            if ($mysqli->query($add) === TRUE) {
                                echo "New record created successfully";
                                    } else {
                                        echo "Error: " . $add . "<br>" . $mysqli->error;
                                    }
             		

         
// exit();
        ?>
<script language="Javascript">
    window.location = "?enc=_subir-sol&con=<?php echo "".htmlspecialchars($_GET['con'])."";  ?>";
</script>    
        <?php 
            }
?>	

<?php if (! isset($_GET['del']))
	{
?>		
<?php
$file = "_sol/sol_".htmlspecialchars($_GET['con'])."/";
if(is_dir($file))
  {
  echo ("");
  }
else
  {
  mkdir("_sol/sol_".htmlspecialchars($_GET['con'])."/", 0777);
  }

?>
<?php 
$count = 0;
$dir = opendir( "_sol/sol_".htmlspecialchars($_GET['con'])."/");
if (isset ($_FILES["files"])) {
while (false !== ($fname = readdir( $dir ))) {
	for($i=0; $i < count($_FILES['files']['name']); $i++) {
	  $tmpFilePath = $_FILES['files']['tmp_name'][$i];
	  if ($tmpFilePath != ""){
		$fecha = date("Ymdhis");

		$realname = $fecha."-".$_FILES['files']['name'][$i];
		$newFilePath = "_sol/sol_".htmlspecialchars($_GET['con'])."/" .$fecha."-".$_FILES['files']['name'][$i];
		$resizeWidth = 650;
		$thumbWidth = 650;

		if(move_uploaded_file($tmpFilePath, "_sol/sol_".htmlspecialchars($_GET['con'])."/".$realname)) {

			$img = imagecreatefromjpeg( $newFilePath );
			$width = imagesx( $img );
			$height = imagesy( $img );
			$new_width = $thumbWidth;
			$new_height = floor( $height * ( $thumbWidth / $width ) );
			$tmp_img = imagecreatetruecolor( $new_width, $new_height );
			imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
			imagejpeg( $tmp_img, "_sol/sol_".htmlspecialchars($_GET['con'])."/".$realname, 100 );
	
//			if($width > $resizeWidth){
//			  $img = imagecreatefromjpeg( $newFilePath );
//			  $anchura = imagesx( $img );
//			  $altura = imagesy( $img );
//			  $nueva_anchura = $resizeWidth;
////			  $nueva_altura = floor( $altura * ( $nueva_anchura / $anchura ) );
//			  $tmp_img = imagecreatetruecolor( $nueva_anchura, $nueva_altura );
//			  imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $nueva_anchura, $nueva_altura, $anchura, $altura);
//			  imagejpeg( $tmp_img, "_sol/sol_".htmlspecialchars($_GET['con'])."/".$realname, 100 );
//			}
	$fechasinhora = date("Y/m/d");
$count++; // Number of successfully uploaded files
//	mysql_query("INSERT INTO ".$user."_img (name_file,autor,dated) VALUES ('".$realname."','".$autor."','".$fechasinhora."')");

		}
	  }
	  

		}
		
}
	echo "Carga exitosa. ".$count." ";
closedir( $dir );
}
?>
<div class="container">
<div class="space-20"></div>                      
    <label class="pull-right inline">
        <a href="?enc=_ayuda" class="btn btn-danger btn-sm">
            <i class="ace-icon fa fa-reply icon-only"></i>
        </a>
    </label>

<div class="page-header">
    <h1>
        Administrador
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            de Archivos
        </small>
    </h1>
</div>
<div class="row">
  <div class="col-md-4">
<div class="space-20"></div>  
  <h4 >Seleccione los archivos que desea agregar</h4>
    	<form action="" enctype="multipart/form-data" method="post" >
       <div class="form-group">
        <input type="file" multiple name="files[]" id="files[]" />
        </div>
		<div class="form-group">        
        <button type="submit" class="btn btn-primary btn-info-full">Cargar Archivos Necesarios</button>
        </div>
        </form>  
<div class="space-20"></div>          
<ul>
    <li>Puede agragar todos los archivos que crea convenientes</li>
    <li>Si desea eliminar alguno , puede hacerlo haciendo clic en la X roja que aparece cuando usted se posicione sobre el archivo a eliminar</li>
    <li>Toda informaci&oacute;n que usted agregue a esta herramienta es confidencial y segura.</li>
</ul>        	
  </div>
  <style>
      .ls{
          float: left !important;
          margin: 2px 6px !important;
          height: auto!important;
          min-width: 120px !important;
          border-radius:0px !important;
      }
    </style>
<!-- /.page-header -->     
  <div class="col-md-8">
<div class="space-20"></div>
<div class="widget-box transparent">
    <div class="widget-header widget-header-small">
        <h4 class="widget-title blue smaller">
            <i class="ace-icon fa fa-rss orange"></i>
            Archivos o im&aacute;genes de referencia
        </h4>
        <div class="widget-toolbar action-buttons">

        </div>
    </div>
    <div class="widget-body">
        <div class="widget-main padding-8">
            <div id="profile-feed-1" class="profile-feed">
                <?php
                $ruta = "_sol/sol_".htmlspecialchars($_GET['con'])."/"; // Indicar ruta
                echo " $ruta  ";
                $filehandle = opendir($ruta); // Abrir archivos
                while ($file = readdir($filehandle)) {
                        if ($file != "." && $file != "..") {
                                $tamanyo = GetImageSize($ruta . $file);
                                // mostramos la extensi�n del archivo
                                $archivo = $file; 
                                $trozos = explode(".", $archivo); 
                                $extension = end($trozos); 
                                // mostramos la extensi�n del archivo
                            $maso = $file ;
                                    if ($extension == 'xlsx' or $extension == 'xls' or $extension == 'csv' or $extension == 'doc' or $extension == 'docx' or $extension == 'pdf')
                                        {
                                        ?>
                                    <div class="profile-activity clearfix">
                                        <div>
                                            <i class="pull-left thumbicon fa fa-pencil-square-o btn-pink no-hover"></i>
                                            <?php echo $file ; ?>
                                            <div class="time">
                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                            </div>
                                        </div>
                                        <div class="tools action-buttons">
                                                <a target="_blank" href="<?php echo "$ruta$file";?>" class="blue">
                                                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                </a>
                                                <a href="?enc=_subir-sol&del=_1&con=<?php echo "".htmlspecialchars($_GET['con'])."" ;?>&nom=<?php echo $file ;?>" class="red"><i class="ace-icon fa fa-times bigger-125"></i>
                                                </a>
                                        </div>
                                    </div>                                
                                           <?php
                                        }
                                    else
                                        {
        ?>
                                    <div class="profile-activity clearfix">
                                        <div>
                                            <img class="ls" alt="" src="<?php echo "$ruta$file";?>"  />
                                            <?php echo $file ; ?>
                                            <div class="time">
                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                            </div>
                                        </div>

                                        <div class="tools action-buttons">
                                                <a target="_blank" href="<?php echo "$ruta$file";?>" class="blue">
                                                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                </a>
                                                <a href="?enc=_subir-sol&del=_1&con=<?php echo "".htmlspecialchars($_GET['con'])."" ;?>&nom=<?php echo $file ;?>" class="red"><i class="ace-icon fa fa-times bigger-125"></i>
                                                </a>
                                        </div>
                                    </div>      

              <hr>
            <?php
                                        }
                        } 
                } 
                closedir($filehandle); // Fin lectura archivos
                ?>
            </div>
        </div>
    </div>
</div>

<div class="hr hr2 hr-double"></div>  
  
  
  </div>

</div>
</div>    
		<?php
    } else 
		{    
        $page = $_GET['del'];  
        switch($page)
			{
				case '_1':
					unlink("_sol/sol_".htmlspecialchars($_GET['con'])."/".htmlspecialchars($_GET['nom'])."");
                ?>
<script language="Javascript">
    window.location = "?enc=_subir-sol&con=<?php echo "".htmlspecialchars($_GET['con'])."";  ?>";
</script>
 <?php 
				break;  			  																	 	
			}
		}
?>




