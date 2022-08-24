<?php
        if ( isset($_POST['silvis']) )
            {	 

             		$sql = "UPDATE ".$tutu."_fotos SET n_foto='$_POST[n_fotos]', n_fotoen='$_POST[n_fotos2]' WHERE id_foto like '".htmlspecialchars($_GET['foto'])."' ";   
    if ($db->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
         
 //exit();
        ?>
<script language="Javascript">
    window.location = "?enc=_9&n=<?php echo "".htmlspecialchars($_GET['n'])."";  ?>";
</script>    
        <?php 
            }
?>	
<?php
        if ( isset($_POST['intrado']) )
            {	 
 $add = "INSERT INTO ".$tutu."_fotos (n_foto,n_fotoen,foto_foto) VALUES ('$_POST[n_foto]','$_POST[n_fotoen]','$_POST[foto_foto]')";
                            if ($db->query($add) === TRUE) {
                                echo "New record created successfully";
                                    } else {
                                        echo "Error: " . $add . "<br>" . $db->error;
                                    }
             		

         
// exit();
        ?>
<script language="Javascript">
    window.location = "?enc=_9&n=<?php echo "".htmlspecialchars($_GET['n'])."";  ?>";
</script>    
        <?php 
            }
?>	

<?php if (! isset($_GET['del']))
	{
?>		
<?php
if ( isset($_POST['imo']) ) {    
        $file = "../imggall/org_".htmlspecialchars($_GET['n'])."/pp";
        if(is_dir($file))
          {
          echo ("");
          }
        else
          {
          mkdir("../imggall/org_".htmlspecialchars($_GET['n'])."/pp", 0777);
          }
        $dir = opendir( "../imggall/org_".htmlspecialchars($_GET['n'])."/pp");    
    } else {
        $file = "../imggall/org_".htmlspecialchars($_GET['n'])."/";
        if(is_dir($file))
          {
          echo ("");
          }
        else
          {
          mkdir("../imggall/org_".htmlspecialchars($_GET['n'])."/", 0777);
        }
        $dir = opendir( "../imggall/org_".htmlspecialchars($_GET['n'])."/");    
    }
?>
<?php 
$count = 0;
$dir = opendir( "../imggall/org_".htmlspecialchars($_GET['n'])."/");        
if (isset ($_FILES["files"])) {
while (false !== ($fname = readdir( $dir ))) {
	for($i=0; $i < count($_FILES['files']['name']); $i++) {
	  $tmpFilePath = $_FILES['files']['tmp_name'][$i];
	  if ($tmpFilePath != ""){
		$fecha = date("Ymdhis");

//		$realname = $fecha."-".$_FILES['files']['name'][$i];
		$realname = $_FILES['files']['name'][$i];          
		$newFilePath = "../imggall/org_".htmlspecialchars($_GET['n'])."/" .$fecha."-".$_FILES['files']['name'][$i];
		$resizeWidth = 650;
		$thumbWidth = 650;

		if(move_uploaded_file($tmpFilePath, "../imggall/org_".htmlspecialchars($_GET['n'])."/".$realname)) {

//			$img = imagecreatefromjpeg( $newFilePath );
//			$width = imagesx( $img );
//			$height = imagesy( $img );
//			$new_width = $thumbWidth;
//			$new_height = floor( $height * ( $thumbWidth / $width ) );
//			$tmp_img = imagecreatetruecolor( $new_width, $new_height );
//			imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
//			imagejpeg( $tmp_img, "../imggall/org_".htmlspecialchars($_GET['n'])."/".$realname, 100 );
	
//			if($width > $resizeWidth){
//			  $img = imagecreatefromjpeg( $newFilePath );
//			  $anchura = imagesx( $img );
//			  $altura = imagesy( $img );
//			  $nueva_anchura = $resizeWidth;
////			  $nueva_altura = floor( $altura * ( $nueva_anchura / $anchura ) );
//			  $tmp_img = imagecreatetruecolor( $nueva_anchura, $nueva_altura );
//			  imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $nueva_anchura, $nueva_altura, $anchura, $altura);
//			  imagejpeg( $tmp_img, "../imggall/org_".htmlspecialchars($_GET['n'])."/".$realname, 100 );
//			}
	$fechasinhora = date("Y/m/d");
$count++; // Number of successfully uploaded files
            if ( isset($_POST['imo']) ) {
               $add = "INSERT INTO ".$tutu."_fotos (not_foto,n_foto) VALUES ('".htmlspecialchars($_GET['n'])."','$realname')";
                            if ($db->query($add) === TRUE) {
                                echo "New record created successfully";
                                    } else {
                                        echo "Error: " . $add . "<br>" . $db->error;
                                    }        
            }
//	mysql_query("INSERT INTO ".$user."_img (name_file,autor,dated) VALUES ('".$realname."','".$autor."','".$fechasinhora."')");

		}
	  }
	  

		}
		
}
	echo "Carga exitosa. ".$count." ";
closedir( $dir );
}
?>
<style>
    .ito{
        max-height: 230px;
    }
</style>
<br><br>
      
        <div class="page-header">
            <h1>
                Agregar y Quitar imagenes a la secci&oacute;n 
                <small>
                    <i class="ace-icon fa fa-angle-double-right"></i>
                                                                    <?php											
                                                $sql = "SELECT id_nota,ti_nota FROM ".$tutu."_notas where id_nota like '".htmlspecialchars($_GET['n'])."' ";
                                                $result = $db->query($sql);

                                                if ($result->num_rows > 0) {
                                                    // output data of each row
                                                    while($row = $result->fetch_assoc()) {
                                                ?>    												

                                                            <?php echo $row['ti_nota'] ; ?>

                                                <?php        
                                                    }
                                                } else {
                                                    echo "0 results";
                                                }
                                                mysqli_free_result($result);
                                                ?> 
                </small>
            </h1>
        </div><!-- /.page-header -->
<div class="row">
  <div class="col-md-4">
  <h4 >Seleccione la imagen principal de la secci&oacute;n</h4>
    	<form action="" enctype="multipart/form-data" method="post" >
       <div class="form-group">
        <input type="file" name="files[]" id="files[]" />
        <input type="hidden" name="imo">
        </div>
		<div class="form-group">        
        <button type="submit" class="btn btn-success btn-info-full">Ingresar o Cambiar</button>
        </div>
        </form>  	
    <small>
        <ul>
            <li>La imagen principal saldr&aacute; en la portada.</li>
            <li>Si esta ingresando la junta directiva , puede publicar la imag&eacute;n principal de cada miembro.</li>                        
            <li>Si desea cambiar la foto principal, primero elim&iacute;ne la actual haciendo clic sobre ella</li>
        </ul>
        
    </small>
  </div>
  <div class="col-md-8">
                      <?php                    
                        $querya = "SELECT id_foto,not_foto,n_foto FROM ".$tutu."_fotos where not_foto like '".htmlspecialchars($_GET['n'])."' ";
                            $resulta = mysqli_query($db, $querya) or trigger_error("Query Failed! SQL: $querya - Error: ". mysqli_error($db), E_USER_ERROR);
                            if($resulta) {
                                while($filaa = mysqli_fetch_assoc($resulta)) {
                        ?>                                          
                        <a href="?enc=_9&del=_2&n=<?php echo htmlspecialchars($_GET['n']);?>&nom=<?php echo $filaa['n_foto'];?>"><img class="ito" src="../imggall/org_<?php echo htmlspecialchars($_GET['n']);?>/<?php echo $filaa['n_foto'];?>"></a>
                      <?php 
                                    $sidoso = $filaa['n_foto'];
                                }
                            }
                        ?>      
                     
                            <?php                                                
                      
                         mysqli_free_result($resulta);
                          ?> 
  <?php
         list($ancho, $alto, $tipo, $atrib) = getimagesize("../imggall/org_".htmlspecialchars($_GET['n'])."/".$sidoso); //obtenemos el ancho, alto, tipo y atributo de la imagen "imagen.jpg" y los guardamos en las variables respectivas
         echo "Atributo de imagen " .$atrib. " - " ;
?>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-4">
  <h4 >Seleccione los archivos que desesa agregar</h4>
    	<form action="" enctype="multipart/form-data" method="post" >
       <div class="form-group">
        <input type="file" multiple name="files[]" id="files[]" />
        </div>
		<div class="form-group">        
        <button type="submit" class="btn btn-primary btn-info-full">Cargar Archivos a la Nota</button>
        </div>
        </form>  	
    <small>
        <ul>
            <li>La imagen principal debe tener el siguiente nombre "_portada.jpg"</li>
            <li>Puede seleccionar sus im&aacute;genes por lotes</li>
            <li>Despues de subir las im&aacute;genes las puede borrar seleccionandolas una por una.</li>                        
        </ul>
        
    </small>
  </div>
  <div class="col-md-8">
		<?php
        $ruta = "../imggall/org_".htmlspecialchars($_GET['n'])."/"; // Indicar ruta
        echo " $ruta  ";
        $filehandle = opendir($ruta); // Abrir archivos
        echo " <div style=' font-size:18px; color:#990; padding-bottom:20px; padding-top:20px;'>Archivos actuales de la Nota </div>";  				
        while ($file = readdir($filehandle)) {
                if ($file != "." && $file != ".." && $file != "pp" && $file != $sidoso) {
                        $tamanyo = GetImageSize($ruta . $file);
                        // mostramos la extensi�n del archivo
                        $archivo = $file; 
                        $trozos = explode(".", $archivo); 
                        $extension = end($trozos); 
                        // mostramos la extensi�n del archivo
                    $maso = $file ;
                            if ($extension == 'pdf')
                                {
                                    echo "<a href='?enc=_9&del=_1&n=".htmlspecialchars($_GET['n'])."&nom=".$file."' target='_self' ><img src='assets/img/Graphicloads-Filetype-Pdf.png'  style='border:0px solid #666; padding:4px; margin:4px;' height='20' $tamanyo[3]> $file</a>";                                                        
                                }
                            else
                                {
?>
      <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6 col-md-4"><a href="<?php echo "?enc=_9&del=_1&n=".htmlspecialchars($_GET['n'])."&nom=".$file."";?>" target='_self' ><img src="<?php echo "$ruta$file";?>"    style="border:1px solid #666; padding:4px; margin:4px;" width='210' $tamanyo[3]></a></div>    
              <div class="col-xs-12 col-md-8">
                  
                    <?php                    
                                 

                        $querya = "SELECT id_foto,n_foto,n_fotoen,foto_foto FROM ".$tutu."_fotos where foto_foto like '$maso' ";
                            $resulta = mysqli_query($db, $querya) or trigger_error("Query Failed! SQL: $querya - Error: ". mysqli_error($db), E_USER_ERROR);
                            if($resulta) {
                                while($filaa = mysqli_fetch_assoc($resulta)) {
                                $ma = $filaa['foto_foto'] ;
                                $me = $filaa['n_foto'] ;   
                                $mo = $filaa['n_fotoen'] ;                                       
                                $mi = $filaa['id_foto'] ;                                                                        
                                }
                            }
                            ?>      
                     
                            <?php                                                
                      
                         mysqli_free_result($resulta);
                          ?>   
                      <?php
                        if ($ma == $maso) {
                            ?>
              
                                <form  method="post" action="?enc=_9&n=<?php echo"".htmlspecialchars($_GET['n'])."";?>&foto=<?php echo"".$mi."";?>">
                                <div class="form-group">
                                <label for="exampleInputEmail1">Editar pie de Foto espa&ntilde;ol</label>
                                <input type="text" class="form-control" id="n_fotos" name="n_fotos" value="<?php echo $me;?>" placeholder="Pie de Foto">      
                                  </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Editar pie de Foto ingles</label>
                                <input type="text" class="form-control" id="n_fotos2" name="n_fotos2" value="<?php echo $mo;?>" placeholder="Pie de Foto">      
                                  </div>
                                <input type="hidden" value="silvis" name="silvis">
                                <button type="submit" class="btn btn-default">editar</button>
                                </form>   
                  <?php
                   } else {
                  ?>  
                             <form  method="post" action="?enc=_9&n=<?php echo"".htmlspecialchars($_GET['n'])."";?>&foto=<?php echo"".$mi."";?>">
                                <div class="form-group">
                                <label for="exampleInputEmail1">Agregar pie de Foto espa&ntilde;ol</label>
                                <input type="text" class="form-control" id="n_foto"  name="n_foto" value="" placeholder="Pie de Foto">      
                                  </div>
                                <div class="form-group">                                 
                                 <label for="exampleInputEmail1">Agregar pie de Foto ingles</label>
                                <input type="text" class="form-control" id="n_fotoen" name="n_fotoen" value="" placeholder="Pie de Foto">      
                                  </div>                                 
                                    <input type="hidden" value="<?php echo $maso;?>" name="foto_foto">                                 
                                  <input type="hidden" value="intrado" name="intrado">
                                <button type="submit" class="btn btn-default">Agregar</button>
                                </form> 
                  <?php
                   } 
                  ?>                    
                </div>
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
		<?php
    } else 
		{    
        $page = $_GET['del'];  
        switch($page)
			{
				case '_1':
					unlink("../imggall/org_".htmlspecialchars($_GET['n'])."/".htmlspecialchars($_GET['nom'])."");
                ?>
<script language="Javascript">
    window.location = "?enc=_9&n=<?php echo htmlspecialchars($_GET['n']);?>";
</script>
 <?php 
				break;  
				case '_2':
					unlink("../imggall/org_".htmlspecialchars($_GET['n'])."/".htmlspecialchars($_GET['nom'])."");
                
                    $sql = "DELETE FROM ".$tutu."_fotos WHERE not_foto like '".htmlspecialchars($_GET['n'])."'";
                        if ($db->query($sql) === TRUE) {
                            echo "Record deleted successfully";
                        } else {
                            echo "Error deleting record: " . $dbs->error;
                        }
                ?>
<script language="Javascript">
    window.location = "?enc=_9&n=<?php echo htmlspecialchars($_GET['n']);?>";
</script>
 <?php 
				break;                  
			}
		}
?>




