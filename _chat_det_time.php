<?php   
    
    $querys = "SELECT id_org,ema_org FROM ".$tutu."_org where ema_org like '".$ema."' ";
        $results = mysqli_query($db, $querys) or trigger_error("Query Failed! SQL: $querys - Error: ". mysqli_error($db), E_USER_ERROR);
        if($results) {
            while($rowa = mysqli_fetch_assoc($results)) {
                $orgo = $rowa['id_org'] ;
            }
        }
    mysqli_free_result($results);
?> 	
<style>
.timeline {
    list-style: none;
    padding: 20px 0 20px;
    position: relative;
}

    .timeline:before {
        top: 0;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 3px;
        background-color: #eeeeee;
        left: 50%;
        margin-left: -1.5px;
    }

    .timeline > li {
        margin-bottom: 20px;
        position: relative;
    }

        .timeline > li:before,
        .timeline > li:after {
            content: " ";
            display: table;
        }

        .timeline > li:after {
            clear: both;
        }

        .timeline > li:before,
        .timeline > li:after {
            content: " ";
            display: table;
        }

        .timeline > li:after {
            clear: both;
        }

        .timeline > li > .timeline-panel {
            width: 46%;
            float: left;
            border: 1px solid #d4d4d4;
            border-radius: 2px;
            padding: 20px;
            position: relative;
            -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
            box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
        }

            .timeline > li > .timeline-panel:before {
                position: absolute;
                top: 26px;
                right: -15px;
                display: inline-block;
                border-top: 15px solid transparent;
                border-left: 15px solid #ccc;
                border-right: 0 solid #ccc;
                border-bottom: 15px solid transparent;
                content: " ";
            }

            .timeline > li > .timeline-panel:after {
                position: absolute;
                top: 27px;
                right: -14px;
                display: inline-block;
                border-top: 14px solid transparent;
                border-left: 14px solid #fff;
                border-right: 0 solid #fff;
                border-bottom: 14px solid transparent;
                content: " ";
            }

        .timeline > li > .timeline-badge {
            color: #fff;
            width: 50px;
            height: 50px;
            line-height: 50px;
            font-size: 1.4em;
            text-align: center;
            position: absolute;
            top: 16px;
            left: 50%;
            margin-left: -25px;
            background-color: #999999;
            z-index: 100;
            border-top-right-radius: 50%;
            border-top-left-radius: 50%;
            border-bottom-right-radius: 50%;
            border-bottom-left-radius: 50%;
        }

        .timeline > li.timeline-inverted > .timeline-panel {
            float: right;
        }

            .timeline > li.timeline-inverted > .timeline-panel:before {
                border-left-width: 0;
                border-right-width: 15px;
                left: -15px;
                right: auto;
            }

            .timeline > li.timeline-inverted > .timeline-panel:after {
                border-left-width: 0;
                border-right-width: 14px;
                left: -14px;
                right: auto;
            }

.timeline-badge.primary {
    background-color: #2e6da4 !important;
}

.timeline-badge.success {
    background-color: #3f903f !important;
}

.timeline-badge.warning {
    background-color: #f0ad4e !important;
}

.timeline-badge.danger {
    background-color: #d9534f !important;
}

.timeline-badge.info {
    background-color: #5bc0de !important;
}

.timeline-title {
    margin-top: 0;
    color: inherit;
}

.timeline-body > p,
.timeline-body > ul {
    margin-bottom: 0;
}

    .timeline-body > p + p {
        margin-top: 5px;
    }

@media (max-width: 767px) {
    ul.timeline:before {
        left: 40px;
    }

    ul.timeline > li > .timeline-panel {
        width: calc(100% - 90px);
        width: -moz-calc(100% - 90px);
        width: -webkit-calc(100% - 90px);
    }

    ul.timeline > li > .timeline-badge {
        left: 15px;
        margin-left: 0;
        top: 16px;
    }

    ul.timeline > li > .timeline-panel {
        float: right;
    }

        ul.timeline > li > .timeline-panel:before {
            border-left-width: 0;
            border-right-width: 15px;
            left: -15px;
            right: auto;
        }

        ul.timeline > li > .timeline-panel:after {
            border-left-width: 0;
            border-right-width: 14px;
            left: -14px;
            right: auto;
        }
}    
.material-button-anim {
  border: 0px solid #000;
  position:fixed;
  z-index: 101;    
  padding: 127px 15px 27px;
  text-align: center;
  max-width: 320px;
    bottom: 10px;
  
}

.material-button {
    position: relative;
    top: 0;
    z-index: 1;
    width: 70px;
    height: 70px;
    font-size: 1.5em;
    color: #fff;
    background: #2C98DE;
    border: none;
    border-radius: 50%;
    box-shadow: 0 3px 6px rgba(0,0,0,.275);
    outline: none;
}
.material-button-toggle {
    z-index: 3;
    width: 90px;
    height: 90px;
    margin: 0 auto;
}
.material-button-toggle span {
    -webkit-transform: none;
    transform:         none;
    -webkit-transition: -webkit-transform .175s cubic-bazier(.175,.67,.83,.67);
    transition:         transform .175s cubic-bazier(.175,.67,.83,.67);
}
.material-button-toggle.open {
    -webkit-transform: scale(1.3,1.3);
    transform:         scale(1.3,1.3);
    -webkit-animation: toggleBtnAnim .175s;
    animation:         toggleBtnAnim .175s;
}
.material-button-toggle.open span {
    -webkit-transform: rotate(45deg);
    transform:         rotate(45deg);
    -webkit-transition: -webkit-transform .175s cubic-bazier(.175,.67,.83,.67);
    transition:         transform .175s cubic-bazier(.175,.67,.83,.67);
}

#options {
  height: 70px;
}
.option {
    position: relative;
}
.option .option1,
.option .option2,
.option .option3,
.option .option4 {
    filter: blur(5px);
    -webkit-filter: blur(5px);
    -webkit-transition: all .175s;
    transition:         all .175s;
}
.option .option1 {
    -webkit-transform: translate3d(90px,90px,0) scale(.8,.8);
    transform:         translate3d(90px,90px,0) scale(.8,.8);
}
.option .option2 {
    -webkit-transform: translate3d(0,90px,0) scale(.8,.8);
    transform:         translate3d(0,90px,0) scale(.8,.8);
}
.option .option3 {
    -webkit-transform: translate3d(-90px,90px,0) scale(.8,.8);
    transform:         translate3d(-90px,90px,0) scale(.8,.8);
}
.option .option4 {
    -webkit-transform: translate3d(10px,10px,0) scale(.8,.8);
    transform:         translate3d(10px,10px,0) scale(.8,.8);
}    
.option.scale-on .option1, 
.option.scale-on .option2,
.option.scale-on .option3,
.option.scale-on .option4 {
    filter: blur(0);
    -webkit-filter: blur(0);
    -webkit-transform: none;
    transform:         none;
    -webkit-transition: all .175s;
    transition:         all .175s;
}
.option.scale-on .option2 {
    -webkit-transform: translateY(-28px) translateZ(0);
    transform:         translateY(-28px) translateZ(0);
    -webkit-transition: all .175s;
    transition:         all .175s;
}

@keyframes toggleBtnAnim {
    0% {
        -webkit-transform: scale(1,1);
        transform:         scale(1,1);
    }
    25% {
        -webkit-transform: scale(1.4,1.4);
        transform:         scale(1.4,1.4); 
    }
    75% {
        -webkit-transform: scale(1.2,1.2);
        transform:         scale(1.2,1.2);
    }
    100% {
        -webkit-transform: scale(1.3,1.3);
        transform:         scale(1.3,1.3);
    }
}
@-webkit-keyframes toggleBtnAnim {
    0% {
        -webkit-transform: scale(1,1);
        transform:         scale(1,1);
    }
    25% {
        -webkit-transform: scale(1.4,1.4);
        transform:         scale(1.4,1.4); 
    }
    75% {
        -webkit-transform: scale(1.2,1.2);
        transform:         scale(1.2,1.2);
    }
    100% {
        -webkit-transform: scale(1.3,1.3);
        transform:         scale(1.3,1.3);
    }
}    
#pinBoot {
  position: relative;
  max-width: 100%;
  width: 100%;
}
/*img {
  width: 100%;
  max-width: 100%;
  height: auto;
}*/
.white-panel {
  position: absolute;
  background: white;
  box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3);
  padding: 10px;
}
/*
stylize any heading tags withing white-panel below
*/

.white-panel h1 {
  font-size: 1em;
}
.white-panel h1 a {
  color: #A92733;
}
.white-panel:hover {
  box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
  margin-top: -5px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}    
</style>

<div class="container">
<div class="space-20"></div>           
        <div class="page-header">
            <h1>
                Enlazando
                <small>
                    <i class="ace-icon fa fa-angle-double-right"></i>
                    Escribe y apoya
                </small>
                <br>
            </h1>
        </div><!-- /.page-header --> 
   
        <div class="page-content">
		<div class="panel-body">
            <div class="area-heading row">
                <div class="col-md-12">
                    
<div class="material-button-anim">
          <ul class="list-inline" id="options">
            <li class="option">
              <button class="material-button option1" type="button" data-toggle="modal" data-target="#openEditor">
                <span class="fa fa-file-text-o" aria-hidden="true"></span>
              </button>
            </li>
            <li class="option">
              <button class="material-button option2" type="button" data-toggle="modal" data-target="#media">
                <span class="fa fa-file-image-o" aria-hidden="true"></span>
              </button>
            </li>
            <li class="option">
              <button class="material-button option3" type="button" data-toggle="modal" data-target="#infodo">
                <span class="fa fa-info-circle" aria-hidden="true"></span>
              </button>
            </li>
          </ul>
          <button class="material-button material-button-toggle" type="button">
            <span class="fa fa-plus" aria-hidden="true"></span>
          </button>
        </div>                    
<script>
$(document).ready(function () {
    $('.material-button-toggle').on("click", function () {
        $(this).toggleClass('open');
        $('.option').toggleClass('scale-on');
    });
});                        
</script>                    
                    
<div class="container">
    <div class="page-header">
        <h1 id="timeline"><i class="ace-icon fa fa-comment blue"></i> Enl&aacute;zate</h1>
    </div>
    <ul class="timeline chat-history" id="chat" onmouseover="parar=1" onmouseout="parar=0">
        
    
    </ul>
    <ul class="timeline">   





        <?php                       
             $query = "SELECT id_solayu,ema_org,tip_solayu,org_solayu,dona_solayu,desc_solayu,fe_solayu,st_solayu,id_org,n_org,tel_org,ema_org,logo_org,dir_org,DATE_FORMAT(fe_solayu,'%d/%m/%Y') AS ingre,user_id,email,status,online FROM ".$tutu."_solayu inenr join ".$tutu."_org on org_solayu = id_org inner join ".$tutu."_susu on ema_org = email  where st_solayu like '1' and id_solayu like '".htmlspecialchars($_GET['a'])."' and org_solayu not like '".$orgo."' and status like '1' ";
            $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
            if($result) {
                while($row = mysqli_fetch_assoc($result)) {
            $emp = $row['n_org'] ;
            $sol = $row['dona_solayu'] ;
            $des = $row['desc_solayu'] ;  
            $reo = $row['org_solayu'] ;  
            $ayu = $row['id_solayu'] ;
            $idemp = $row['id_org'] ;                    
          ?>          
            <li class="timeline-inverted">
              <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">Solicitante: <?php echo $emp;?></h4>
                </div>
                <div class="timeline-body">
                   <?php 
                        if ($row['logo_org'] == '')
                        {
                   ?>
                        <img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" alt="<?php echo $row['n_org'];?>" id="avatar2" src="assets/images/_nologo.jpg" />
                   <?php        
                        }else{
                   ?>
                        <img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" alt="<?php echo $row['n_org'];?>" id="avatar2" src="../imggall/org_<?php echo $idemp;?>/<?php echo $row['logo_org'];?>" />
                   <?php        

                        }
                    ?>  
                                <blockquote>
                <p class="lighter line-height-125">
                    <?php echo $row['dona_solayu'];?>
                </p>
                <small>
                    <cite title="Source Title"><?php echo $row['desc_solayu'];?>e</cite>
                </small>
            </blockquote>
    <hr />
    <address>
        <strong><?php echo $row['n_org'];?></strong>

        <br />
        <?php echo $row['dir_org'];?>

        <br />
        <abbr title="Phone">Tel:</abbr>
        <?php echo $row['tel_org'];?>
    </address>
    <address>
        <br />
        <a href="mailto:<?php echo $row['ema_org'];?>">Email : <?php echo $row['ema_org'];?></a>
    </address>  
			<div class="link"><i class="fa fa-globe"></i>Archivos de Referencia<i class="fa fa-chevron-down"></i></div>
			<ul class="submenuco">
                

<?php
$file = "_sol/sol_".$ayu."/";
if(is_dir($file))
  {
  echo ("");
  }
else
  {
  mkdir("_sol/sol_".$ayu."/", 0777);
  }
?>
<?php if (! isset($_GET['del']))
	{
?>	




<?php 
$count = 0;

if (isset ($_FILES["files"])) {
    
    
$add = "INSERT INTO ".$tutu."_chat (ayu_id,sender_userid,reciever_userid,message,status,tipo_chat) VALUES ('".htmlspecialchars($_GET['a'])."','$orgo','$reo','$_POST[message]','0','$_POST[ttpo]')";
    if ($db->query($add) === TRUE) {
        echo "New record created successfully";
                    $ulti_id = $db->insert_id ;
                    echo $ulti_id ;        
            } else {
                echo "Error: " . $add . "<br>" . $db->error;
            }       
        $file = "_sol/sol_".$ayu."/imas_".$ulti_id."/";
        if(is_dir($file))
          {
          echo ("");
          }
        else
          {
          mkdir("_sol/sol_".$ayu."/imas_".$ulti_id."/", 0777);
        }
        $dir = opendir( "_sol/sol_".$ayu."/imas_".$ulti_id."/");   
    

while (false !== ($fname = readdir( $dir ))) {
	for($i=0; $i < count($_FILES['files']['name']); $i++) {
	  $tmpFilePath = $_FILES['files']['tmp_name'][$i];
	  if ($tmpFilePath != ""){
		$fecha = date("Ymdhis");

//		$realname = $fecha."-".$_FILES['files']['name'][$i];
		$realname = $_FILES['files']['name'][$i];          
		$newFilePath = "_sol/sol_".$ayu."/imas_".$ulti_id."/" .$fecha."-".$_FILES['files']['name'][$i];
		$resizeWidth = 650;
		$thumbWidth = 650;

		if(move_uploaded_file($tmpFilePath, "_sol/sol_".$ayu."/imas_".$ulti_id."/".$realname)) {

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

               $addas = "INSERT INTO ".$tutu."_fotos (n_foto,foto_foto) VALUES ('$ulti_id','$realname')";
                            if ($db->query($addas) === TRUE) {
                                echo "New record created successfully";
                                    } else {
                                        echo "Error: " . $addas . "<br>" . $db->error;
                                    }        



		}
	  }
	  

		}
		
}
	echo "Carga exitosa. ".$count." ";
closedir( $dir );
}
?>
		<?php
    } else 
		{    
        $page = $_GET['del'];  
        switch($page)
			{
				case '_1':
					unlink("_sol/sol_".$ayu."/imas_".htmlspecialchars($_GET['n'])."/".htmlspecialchars($_GET['nom'])."");
                ?>
<script language="Javascript">
    window.location = "?enc=_9&n=<?php echo htmlspecialchars($_GET['n']);?>";
</script>
 <?php 
				break;  
				case '_2':
					unlink("_sol/sol_".$ayu."/imas_".htmlspecialchars($_GET['n'])."/".htmlspecialchars($_GET['nom'])."");
                
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

<?php 
//Asignamos la ruta a la variable path
$path="_sol/sol_".$ayu."/";
//asignamos a $directorio el objeto dir creado con la ruta
$directorio=dir($path);

//y ahora lo vamos leyendo hasta el final
while ($archivo = $directorio->read())
{
//
if($archivo!="." AND $archivo!="..")
//ponemos el nombre de archivo a minuscula y recojemos solo los tres caracteres por la izquierda
//para saber la extensión
if (strtolower(substr($archivo, -3) == "jpg"))
{
//si es jpg,lo mostramos por pantalla
?>
<li><a href="<?php echo "$path$archivo";?>" target="_blank"><img class="lsa" alt="" src="<?php echo "$path$archivo";?>"  /></a></li>                
<?php        
} else if (strtolower(substr($archivo, -3) == "png"))
{
?>    
<li><a href="<?php echo "$path$archivo";?>" target="_blank"><img class="lsa" alt="" src="<?php echo "$path$archivo";?>"  /></a></li>                    
<?php            
} else if (strtolower(substr($archivo, -4) == "docx"))
{
?>    
<li><a href="<?php echo "$path$archivo";?>" target="_blank"><?php echo "$path$archivo";?>"</a></li>                    
<?php            
}
}

//descargo el objeto
$directorio->close();
?>                
                
     
			</ul>                    

                </div>
              </div>
            </li>
        <?php
                   }
                      mysqli_free_result($result);                
               }    
        ?>          
    </ul>
    <script>
        $('#chat').load('_chat_todos_time.php?env=<?php echo $orgo;?>&rec=<?php echo $reo;?>&khat=<?php echo $ayu;?>');//actualizas el div
$(document).ready(function() {
      var refreshId =  setInterval( function(){

   }, 2000 );
});

</script> 
</div>                    
                    
                    
                </div>
            </div>
            

  
           


            
        </div>

        <section class="sample-text-area">
            
            <div class="container">

            <div class="area-heading row">
                <div class="col-md-3">
                    


                    <hr>
                </div>
                <div class="col-md-9">
             
 

                </div>
            </div>                
            <hr />                  
            </div>
        </section>
        <!-- End Sample Area -->         
    </div>
</div>
        <!-- MODAL AREA START -->
        <div class="modal fade" id="openEditor" role="dialog">
            <div class="modal-dialog modal-lg">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  <h4 class="modal-title"><span>Enlazate</span></h4>
                </div>
                <div class="modal-body">
                    <form id="fomina">
                        <div class="form-group" >
                      <textarea id="message" name="message" class="form-control" rows="2" placeholder="Escribe tu Mensaje" required></textarea>
                      <input class="hid" type="text" id="sender_userid" name="sender_userid" value="<?php echo $orgo;?>" >
                      <input class="hid" type="text" id="reciever_userid" name="reciever_userid" value="<?php echo $reo;?>" >    
                      <input class="hid" type="text" id="ayu_id" name="ayu_id" value="<?php echo $ayu;?>" >    
                        <input type="hidden" name="ttpo" value="0">                                               
                        </div>                            
                        <div class="form-group" >                        
                      <input type="button" id="add_post" name="add_post" class="btn btn-large btn-block btn-primary" data-dismiss="modal" value="enviar">
                        </div>                            
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                </div>
              </div>

            </div>
      </div>
        <div class="modal fade" id="media" role="dialog">
            <div class="modal-dialog modal-lg">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  <h4 class="modal-title"><span>Integrar Media</span></h4>
                </div>
                <div class="modal-body">
                  <h4 >Agregar Imagenes</h4>
                        <form action="" enctype="multipart/form-data" id="imas" method="post" >
                       <div class="form-group">
                        <input type="file" name="files[]" id="files[]" multiple />
                        <input type="hidden" name="imo">
                        <input type="hidden" name="ttpo" value="1">                                                
                        </div>
                       <div class="form-group">                        
                       <label>Agregar comentarios</label>
                    <textarea id="message" name="message" class="form-control" rows="2" placeholder="Escribe tu Mensaje" required></textarea>                        
                            </div>
                        <div class="form-group">        
                        <button type="submit" class="btn btn-success btn-info-full">Ingresar Media</button>
                        </div>
                        </form> 
                        <hr>                        
                  <h4 >Agregar video</h4>
                        <form action="" enctype="multipart/form-data" id="video" method="post" >
                       <div class="form-group">
                        <input type="file" name="files[]" id="files[]" />
                        <input type="hidden" name="imo">
                        <input type="hidden" name="ttpo" value="2">                        
                        </div>
                       <div class="form-group">                        
                       <label>Agregar comentarios</label>
                    <textarea id="message" name="message" class="form-control" rows="2" placeholder="Escribe tu Mensaje" required></textarea>                        
                            </div>
                        <div class="form-group">        
                        <button type="submit" class="btn btn-success btn-info-full">Ingresar Media</button>
                        </div>
                        </form>                           	
                    <small>

                    </small>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                </div>
              </div>

            </div>
      </div>       
        <div class="modal fade" id="infodo" role="dialog">
            <div class="modal-dialog modal-lg">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  <h4 class="modal-title"><span>Informaci&oacute;n</span></h4>
                </div>
                <div class="modal-body">
        <?php                       
             $query = "SELECT id_solayu,ema_org,tip_solayu,org_solayu,dona_solayu,desc_solayu,fe_solayu,st_solayu,id_org,n_org,tel_org,ema_org,logo_org,dir_org,DATE_FORMAT(fe_solayu,'%d/%m/%Y') AS ingre,user_id,email,status,online FROM ".$tutu."_solayu inenr join ".$tutu."_org on org_solayu = id_org inner join ".$tutu."_susu on ema_org = email  where st_solayu like '1' and id_solayu like '".htmlspecialchars($_GET['a'])."' and org_solayu not like '".$orgo."' and status like '1' ";
            $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
            if($result) {
                while($row = mysqli_fetch_assoc($result)) {
            $emp = $row['n_org'] ;
            $sol = $row['dona_solayu'] ;
            $des = $row['desc_solayu'] ;  
            $reo = $row['org_solayu'] ;  
            $ayu = $row['id_solayu'] ;
            $idemp = $row['id_org'] ;                    
          ?>          




                  <h4 class="timeline-title">Solicitante: <?php echo $emp;?></h4>
                
                
                   <?php 
                        if ($row['logo_org'] == '')
                        {
                   ?>
                        <img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" alt="<?php echo $row['n_org'];?>" id="avatar2" src="assets/images/_nologo.jpg" />
                   <?php        
                        }else{
                   ?>
                        <img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" alt="<?php echo $row['n_org'];?>" id="avatar2" src="../imggall/org_<?php echo $idemp;?>/<?php echo $row['logo_org'];?>" />
                   <?php        

                        }
                    ?>  
                                <blockquote>
                <p class="lighter line-height-125">
                    <?php echo $row['dona_solayu'];?>
                </p>
                <small>
                    <cite title="Source Title"><?php echo $row['desc_solayu'];?>e</cite>
                </small>
            </blockquote>
    <hr />
    <address>
        <strong><?php echo $row['n_org'];?></strong>

        <br />
        <?php echo $row['dir_org'];?>

        <br />
        <abbr title="Phone">Tel:</abbr>
        <?php echo $row['tel_org'];?>
    </address>
    <address>
        <br />
        <a href="mailto:<?php echo $row['ema_org'];?>">Email : <?php echo $row['ema_org'];?></a>
    </address>  
			<div class="link"><i class="fa fa-globe"></i>Archivos de Referencia<i class="fa fa-chevron-down"></i></div>
			<ul class="submenuco">
                

<?php
$file = "_sol/sol_".$ayu."/";
if(is_dir($file))
  {
  echo ("");
  }
else
  {
  mkdir("_sol/sol_".$ayu."/", 0777);
  }

?>
<?php 
//Asignamos la ruta a la variable path
$path="_sol/sol_".$ayu."/";
//asignamos a $directorio el objeto dir creado con la ruta
$directorio=dir($path);

//y ahora lo vamos leyendo hasta el final
while ($archivo = $directorio->read())
{
//
if($archivo!="." AND $archivo!="..")
//ponemos el nombre de archivo a minuscula y recojemos solo los tres caracteres por la izquierda
//para saber la extensión
if (strtolower(substr($archivo, -3) == "jpg"))
{
//si es jpg,lo mostramos por pantalla
?>
<li><a href="<?php echo "$path$archivo";?>" target="_blank"><img class="lsa" alt="" src="<?php echo "$path$archivo";?>"  /></a></li>                
<?php        
} else if (strtolower(substr($archivo, -3) == "png"))
{
?>    
<li><a href="<?php echo "$path$archivo";?>" target="_blank"><img class="lsa" alt="" src="<?php echo "$path$archivo";?>"  /></a></li>                    
<?php            
} else if (strtolower(substr($archivo, -4) == "docx"))
{
?>    
<li><a href="<?php echo "$path$archivo";?>" target="_blank"><?php echo "$path$archivo";?>"</a></li>                    
<?php            
}
}

//descargo el objeto
$directorio->close();
?>                
                
     
			</ul>                    

                </div>


        <?php
                   }
                      mysqli_free_result($result);                
               }    
        ?>   
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                </div>
              </div></div>
        <!-- MODAL AREA END --> 
<script type = "text/javascript">
	$(document).ready(function(a){
	displayResult();
	/*	ADDING POST	*/	
 
		$('#add_post').on('click', function(a){
			if($('#message').val() == ""){
				alert('Porfavor Escribe tu Mensaje');
			}else{
                $ayu_id = $('#ayu_id').val();                
				$sender_userid = $('#sender_userid').val();
				$reciever_userid = $('#reciever_userid').val();                
                $message = $('#message').val();
				$.ajax({
					type: "POST",
					url: "_func_chat.php",
					data: {
						ayu_id: $ayu_id,                        
						sender_userid: $sender_userid,
                        reciever_userid: $reciever_userid,
                        message: $message                                                
					},
					success: function(a){
						displayResult();
                    
					}
				});
                $('#chat').load('_chat_todos_time.php?env=<?php echo $orgo;?>&rec=<?php echo $reo;?>&khat=<?php echo $ayu;?>');
                
			}	
		});
       
	/*****	*****/
	});
    

	function displayResult(){
		$.ajax({
			url: '_func_chat.php',
			type: 'POST',
			async: true,
			data:{
				res: 1
			},
			success: function(response){
				$('#result').html(response);
                         document.getElementById("sender_userid").value = " ";
                        document.getElementById("reciever_userid").value = " ";
                        $("#fomina")[0].reset(); 
                        
			}
		});
	}
 
</script>
<script>
function ver(e,m){
    var t=e.keyCode || e.wich;
    if(t==13){
       agregar(m);
        return false;
    }
    return true;
}
function agregar(m){
    document.getElementById('chat').innerHTML+='<br />'+m;
    document.forms[0].textarea.value='';
}    
onload=function(){
    setInterval(function(){if(window.parar)return;document.getElementById('chat').scrollTop=document.getElementById('chat').scrollHeight},30);
}
</script> 
