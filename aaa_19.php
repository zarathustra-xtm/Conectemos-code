<?php
    if( isset($_POST['aca']) )
         { 
            $sql = "UPDATE ".$tutu."_susu SET status='1' WHERE user_id like '".htmlspecialchars($_GET['us'])."' ";

            if ($db->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $db->error;
            }
        }
?> 
<?php
    if( isset($_POST['roo']) )
         { 
            $sql = "UPDATE ".$tutu."_susu SET name='$_POST[name]',email='$_POST[email]',status='$_POST[status]' WHERE user_id like '".htmlspecialchars($_GET['us'])."' ";

            if ($db->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $db->error;
            }
        }
?> 
<?php 
$count = 0;
$dir = opendir( "../imggall/org_".htmlspecialchars($_GET['org'])."/");
if (isset ($_FILES["files"])) {
while (false !== ($fname = readdir( $dir ))) {
	for($i=0; $i < count($_FILES['files']['name']); $i++) {
	  $tmpFilePath = $_FILES['files']['tmp_name'][$i];
	  if ($tmpFilePath != ""){
		$fecha = date("Ymdhis");

		$realname = $fecha."-".$_FILES['files']['name'][$i];
		$newFilePath = "../imggall/org_".htmlspecialchars($_GET['n'])."/" .$fecha."-".$_FILES['files']['name'][$i];
		$resizeWidth = 650;
		$thumbWidth = 650;

		if(move_uploaded_file($tmpFilePath, "../imggall/org_".htmlspecialchars($_GET['org'])."/".$realname)) {

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
                $sql = "UPDATE ".$tutu."_org SET logo_org='".$realname."' WHERE id_org like '".htmlspecialchars($_GET['org'])."'";

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
?>
<?php                       
    $sql = "SELECT *,DATE_FORMAT(descu_org,'%d/%m/%Y') AS faco FROM ".$tutu."_org inner join ".$tutu."_paises on pais_org = iso_enla inner join ".$tutu."_tiporg on tip_org = id_tiporg inner join ".$tutu."_oborg on obge_org = id_oborg inner join ".$tutu."_fufi on fuein_org = id_fufi where id_org like '".htmlspecialchars($_GET['org'])."'";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
?> 
<div class="container">
                                <div class="row">
                                    <div class="page-header">
                                        <h1>
                                            Organizaci&oacute;n
                                            <small>
                                                <i class="ace-icon fa fa-angle-double-right"></i>
                                                <?php echo $row['n_org'];?>
                                            </small>
                                        </h1>
                                    </div><!-- /.page-header -->                               
                                    <div id="user-profile-2" class="user-profile">
                                                <div class="tabbable">
                                                    <ul class="nav nav-tabs padding-18">
                                                        <li class="active">
                                                            <a data-toggle="tab" href="#home">
                                                                <i class="green ace-icon fa fa-user bigger-120"></i>
                                                                Informaci&oacute;n General
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a data-toggle="tab" href="#user">
                                                                <i class="orange ace-icon fa fa-user-plus  bigger-120"></i>
                                                                Usuario
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a data-toggle="tab" href="#feed">
                                                                <i class="orange ace-icon fa fa-rss bigger-120"></i>
                                                                Vit&aacute;cora de Donaciones
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a data-toggle="tab" href="#friends">
                                                                <i class="blue ace-icon fa fa-users bigger-120"></i>
                                                                Ayuda Recibida
                                                            </a>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content no-border padding-24">
                                                        <div id="home" class="tab-pane in active">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-3 center">
                                                                    <span class="profile-picture">
                                                                       <?php 
                                                                            if ($row['logo_org'] == '')
                                                                            {
                                                                       ?>
                                                                            <img class="editable img-responsive" alt="<?php echo $row['n_org'];?>" id="avatar2" src="assets/images/_nologo.jpg" />
                                                                       <?php        
                                                                            }else{
                                                                       ?>
                                                                            <img class="editable img-responsive" alt="<?php echo $row['n_org'];?>" id="avatar2" src="../imggall/org_<?php echo htmlspecialchars($_GET['org']);?>/<?php echo $row['logo_org'];?>" />
                                                                       <?php        
                                                                                
                                                                            }
                                                                        ?>
                                                                    </span>
                                                                        <?php
                                                                            $file = "../imggall/org_".htmlspecialchars($_GET['org'])."/";
                                                                            if(is_dir($file))
                                                                              {
                                                                              echo ("");
                                                                              }
                                                                            else
                                                                              {
                                                                              mkdir("../imggall/org_".htmlspecialchars($_GET['org'])."/", 0777);
                                                                              }
                                                                        ?>
                                                                    <div class="space space-4"></div>
                                                                        <form action="" enctype="multipart/form-data" method="post" >
                                                                           <div class="form-group">
                                                                            <input type="file" multiple name="files[]" id="files[]" />
                                                                            </div>
                                                                            <div class="form-group">        
                                                                            <button type="submit" class="btn btn-sm btn-block btn-primary">Cambiar Logo</button>
                                                                            </div>
                                                                        </form> 
                                                                </div><!-- /.col -->

                                                                <div class="col-xs-12 col-sm-9">
                                                                    <h4 class="blue">
                                                                        <span class="middle"><?php echo $row['n_org'];?></span>

                                                                   
                                                                    </h4>

                                                                    <div class="profile-user-info">
                                                                        <div class="profile-info-row">
                                                                            <div class="profile-info-name"> Pa&iacute;s </div>

                                                                            <div class="profile-info-value">
                                                                                <span><?php echo $row['n_enla'];?></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="profile-info-row">
                                                                            <div class="profile-info-name"> Dep , Mun </div>

                                                                            <div class="profile-info-value">
                                                                                <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                                                <span><?php echo $row['dep_org'];?></span>
                                                                                <span><?php echo $row['mun_org'];?></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="profile-info-row">
                                                                            <div class="profile-info-name"> Tipo </div>

                                                                            <div class="profile-info-value">
                                                                                <span><?php echo $row['n_tiporg'];?></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="profile-info-row">
                                                                            <div class="profile-info-name"> Obejtivo </div>

                                                                            <div class="profile-info-value">
                                                                                <span><?php echo $row['n_oborg'];?></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="profile-info-row">
                                                                            <div class="profile-info-name"> Beneficiarios </div>

                                                                            <div class="profile-info-value">
                                                                                <span><?php echo $row['bene_org'];?></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="profile-info-row">
                                                                            <div class="profile-info-name"> C. de Beneficiarios </div>

                                                                            <div class="profile-info-value">
                                                                                <span><?php echo $row['cuabe_org'];?></span>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>

                                                                    <div class="hr hr-8 dotted"></div>

                                                                    <div class="profile-user-info">
                                                                        <div class="profile-info-row">
                                                                            <div class="profile-info-name"> Cont&aacute;cto </div>

                                                                            <div class="profile-info-value">
                                                                               <span><?php echo $row['con_org'];?></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="profile-info-row">
                                                                            <div class="profile-info-name">
                                                                                Mail
                                                                            </div>

                                                                            <div class="profile-info-value">
                                                                                <span><?php echo $row['ema_org'];?></span>
                                                                                
                                                                            </div>
                                                                        </div>

                                                                        <div class="profile-info-row">
                                                                            <div class="profile-info-name">
                                                                                Tel&eacute;efono
                                                                            </div>

                                                                            <div class="profile-info-value">
                                                                                <span><?php echo $row['tel_org'];?></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- /.col -->
                                                            </div><!-- /.row -->

                                                            <div class="space-20"></div>

                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-6">
                                                                    <div class="widget-box transparent">
                                                                        <div class="widget-header widget-header-small">
                                                                            <h4 class="widget-title smaller">
                                                                                <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                                                                                A qu&eacute; se dedica -
                                                                            </h4>
                                                                        </div>

                                                                        <div class="widget-body">
                                                                            <div class="widget-main">
                                                                                <p>
                                                                               <?php echo $row['aded_org'];?>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-box transparent">
                                                                        <div class="widget-header widget-header-small">
                                                                            <h4 class="widget-title smaller">
                                                                                <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                                                                                Actividad Actual -
                                                                            </h4>
                                                                        </div>

                                                                        <div class="widget-body">
                                                                            <div class="widget-main">
                                                                                <p>
                                                                               <?php echo $row['act_org'];?>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>  
                                                                    <div class="widget-box transparent">
                                                                        <div class="widget-header widget-header-small">
                                                                            <h4 class="widget-title smaller">
                                                                                <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                                                                                Apoyo Necesario -
                                                                            </h4>
                                                                        </div>

                                                                        <div class="widget-body">
                                                                            <div class="widget-main">
                                                                                <p>
                                                                               <?php echo $row['apo_org'];?>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>                                                                                                                                        
                                                                </div>

                                                                <div class="col-xs-12 col-sm-6">
                                                                    <div class="widget-box transparent">
                                                                        <div class="widget-header widget-header-small header-color-blue2">
                                                                            <h4 class="widget-title smaller">
                                                                                <i class="ace-icon fa fa-lightbulb-o bigger-120"></i>
                                                                                Complementos
                                                                            </h4>
                                                                        </div>

                                                                        <div class="widget-body">
                                                                            <div class="widget-main padding-16">
 
                                                                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                												<tbody>
                                                                                    <tr>
                                                                                        <td class="center">
                                                                                            Apoya desde:
                                                                                        </td>
                                                                                        <td>
                                                                                            <?php echo $row['faco'];?>
                                                                                        </td>
                                                                                    </tr>
                                                                                   
                                                                                    <tr>
                                                                                        <td class="center">
                                                                                            Reglamento Interno
                                                                                        </td>
                                                                                        <td>
                                                                                            <?php echo $row['inter_org'];?>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="center">
                                                                                            Cant. Personal
                                                                                        </td>
                                                                                        <td>
                                                                                            <?php echo $row['cuape_org'];?>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="center">
                                                                                            Instalaciones propias
                                                                                        </td>
                                                                                        <td>
                                                                                            <?php echo $row['sede_org'];?>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="center">
                                                                                            Fuente de ingresos
                                                                                        </td>
                                                                                        <td>
                                                                                            <?php echo $row['n_fufi'];?>
                                                                                        </td>
                                                                                    </tr> 
                                                                                    <tr>
                                                                                        <td class="center">
                                                                                            Ser P&uacute;blico
                                                                                        </td>
                                                                                        <td>
                                                                                            <?php echo $row['deacu_org'];?>
                                                                                        </td>
                                                                                    </tr>                                                                                   
                                                                                    <tr>
                                                                                        <td class="center">
                                                                                            Recibir y Aportar
                                                                                        </td>
                                                                                        <td>
                                                                                            <?php echo $row['don_org'];?>
                                                                                        </td>
                                                                                    </tr>                                                                                                                                                                                                                                                            
                                                                                </tbody>
                                                                            </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /#home -->
                                                        <div id="user" class="tab-pane">
                                                            <div class="row">
                                                                <div class="col-lx-12  center">
                                                                       <?php 
                                                                            $sql = "SELECT user_id,name,email,status FROM ".$tutu."_susu where email like '".$row['ema_org']."' and roola like 'orga' ";
                                                                            $resulta = $db->query($sql);
                                                                            if ($resulta->num_rows > 0) {
                                                                                // output data of each row
                                                                                while($rowa = $resulta->fetch_assoc()) {
                                                                        ?>               
                                                                           <?php
                                                                                if ($rowa['status'] == '1'){
                                                                                    ?>
                                                                                 <h4 class="blue">
                                                                                    Editar informaci&oacute;n
                                                                                </h4>
                                                                                    <form method="post" action="?enc=_19&org=<?php echo htmlspecialchars($_GET['org']) ; ?>&us=<?php echo $rowa['user_id'];?>" class="form-register" role="form" id="register-form">
                                                                                        <div>
                                                                                            <input name="name" id="name" type="text" value="<?php echo $rowa['name'];?>" class="form-control" placeholder="Nombres"> 
                                                                                            <span class="help-block"></span>
                                                                                        </div>
                                                                                        <div>
                                                                                            <input name="email" id="email" type="email" value="<?php echo $rowa['email'];?>" class="form-control" placeholder="Correo electrónico" > 
                                                                                            <span class="help-block"></span>
                                                                                        </div>
                                                                                        <div> Activo :&nbsp;&nbsp;
                                                                                            <input type="radio" name="status" value="1" checked>&nbsp;<label>Si</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                            <input type="radio" name="status" value="0">&nbsp;<label>No</label>                                                                               
                                                                                        </div>                                                                               
                                                                                        <input name="roo" type="hidden" value="true">
                                                                                        <button class="btn btn-block bt-login" type="submit" id="submit_btn" data-loading-text="Registrando....">Guardar Cambios</button>
                                                                                    </form>
                                                                            <?php         
                                                                                } else {
                                                                                    ?>
                                                                                 <h4 class="blue">
                                                                                    Reactivar Usuario
                                                                                </h4>
                                                                                    
                                                                                    <form method="post" action="?enc=_19&org=<?php echo htmlspecialchars($_GET['org']) ; ?>&us=<?php echo $rowa['user_id'];?>" class="form-register" role="form" id="register-form">
                                                                                        <div> Activar :&nbsp;&nbsp;
                                                                                            <input type="radio" name="status" value="1" checked>&nbsp;<label>Si</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                        </div>                                                                               
                                                                                        <input name="aca" type="hidden" value="true">
                                                                                        <button class="btn btn-block bt-login" type="submit" id="submit_btn" data-loading-text="Registrando....">Guardar Cambios</button>
                                                                                    </form>
                                                                            <?php                                                                                        
                                                                                }
                                                                                    ?>
                                                                        <?php                                                                                     
                                                                                }
                                                                                mysqli_free_result($result);
                                                                            } else {
                                                                        ?>        
                                                                        <?php 
                                                                            if(!empty($_POST)){
                                                                                try {
                                                                                    $user_obj = new Cl_User();
                                                                                    $data = $user_obj->registration( $_POST );
                                                                                    if($data)$success = USER_REGISTRATION_SUCCESS;
                                                                                } catch (Exception $e) {
                                                                                    $error = $e->getMessage();
                                                                                }
                                                                            }
                                                                        ?> 
                                                                         <h4 class="blue">
                                                                            Crear Usuario
                                                                        </h4>
                                                                        <form method="post" action="home.php?enc=_19&org=<?php echo htmlspecialchars($_GET['org']) ; ?>" class="form-register" role="form" id="register-form">
                                                                            <div>
                                                                                <input name="name" id="name" type="text" value="<?php echo $row['con_org'];?>" class="form-control" placeholder="Nombres"> 
                                                                                <span class="help-block"></span>
                                                                            </div>
                                                                            <div>
                                                                                <input name="email" id="email" type="email" value="<?php echo $row['ema_org'];?>" class="form-control" placeholder="Correo electrónico" > 
                                                                                <span class="help-block"></span>
                                                                            </div>
                                                                            <div>
                                                                                <select name="roola" class="form-control">
                                                                                  <option value="orga">Organizaci&oacute;n</option>
                                                                                </select>
                                                                                <span class="help-block"></span>
                                                                            </div>
                                                                            <div>
                                                                                <input name="password" id="password" type="password" value="enlazando.2019" class="form-control" placeholder="Contraseña"> 
                                                                                <span class="help-block"></span>
                                                                            </div>
                                                                            <div>
                                                                                <input name="confirm_password" id="confirm_password" type="password" value="enlazando.2019" class="form-control" placeholder="Confirmar Contraseña"> 
                                                                                <span class="help-block"></span>
                                                                            </div>
                                                                            <button class="btn btn-block bt-login" type="submit" id="submit_btn" data-loading-text="Registrando....">Registrar este Usuario</button>
                                                                        </form>
                                                                        <script src="js/jquery.validate.min.js"></script>
                                                                        <script src="js/register.js"></script>                                                                                
                                                                        <?php                                                                                
                                                                            }                                              
                                                                        ?>
                                                                    <div class="space space-4"></div>

                                                                </div><!-- /.col -->

     
                                                            </div><!-- /.row -->

                                                            <div class="space-20"></div>

                                                            <div class="row">
                                                                

                                                                
                                                            </div>
                                                        </div><!-- /#home -->                                                        
<style>
    .ttd{
        width: 10%;
    }
</style>
                                                       <div id="feed" class="tab-pane">
                                                            <div class="profile-feed row">
										<h3 class="header smaller lighter blue">Total de contribuciones </h3>

										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Todos los registros
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
										
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>Tipo</th>
														<th>Donaci&oacute;n</th>
														<th>Descripci&oacute;n</th>
                                                        <th>Costo</th>															
														<th>Fecha</th>
                                                        <th>Estado</th>	                                                        							
														<th></th>
													</tr>
												</thead>

												<tbody>
                                                <?php   
                                                 $queryt = "SELECT id_dona,tip_dona,dona_dona,org_dona,desc_dona,cost_dona,fe_dona,st_dona,id_tayu,n_tayu,DATE_FORMAT(fe_dona,'%d/%m/%Y') AS mamar FROM ".$tutu."_dona inner join ".$tutu."_tayu on tip_dona = id_tayu where org_dona like '".$row['id_org']."' order by tip_dona ASC ";
                                                $resultt = mysqli_query($db, $queryt) or trigger_error("Query Failed! SQL: $queryt - Error: ". mysqli_error($db), E_USER_ERROR);
                                                if($resultt) {
                                                    $sst = 0 ;
                                                    while($rowt = mysqli_fetch_assoc($resultt)) {
                                                ?> 
                                                       
	<tr>
														<td class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>
														<td>
															<a href="#" ><?php echo $rowt['n_tayu'] ; ?></a>
														</td>
														<td>
															<a href="#" ><?php echo $rowt['dona_dona'] ; ?></a>
														</td>														
														<td>
															<a href="#" ><?php echo $rowt['desc_dona'] ; ?></a>
														</td>
														<td class="ttd">
															<a href="#" >Q. <?php echo number_format($rowt['cost_dona'],2);
                                                        if ($rowt['st_dona'] != '0') {
                                                            $sst = $sst + $rowt['cost_dona'];    
                                                        } else {
                                                            
                                                        }
                                                        ?></a>
														</td>
														<td class="ttd">
															<a href="#" ><?php echo $rowt['mamar'] ; ?></a>
														</td>
														<?php														
														if ($rowt['st_dona'] == '1')	
                                                        {
                                                        ?>                                                             
                                                        <td class="hidden-480">
                                                           <a title="Clic para dar de Baja" data-rel="tooltip" href="?enc=_cont&baja=<?php echo $rowt['id_dona'];?>">
                                                                <span class="label label-sm label-success">Activa</span>
                                                            </a>
                                                        </td> 
														<?php                                                                                                               
                                                        } else {
                                                        ?> 	                                                            
                                                        <td class="hidden-480">
                                                           <a title="Clic para dar de alta" data-rel="tooltip" href="?enc=_cont&activo=<?php echo $rowt['id_dona'];?>">         
                                                            <span class="label label-sm label-warning">Inactiva</span>
                                                            </a>
                                                        </td>      
														<?php  
                                                        }
                                                        ?> 															
														<td>
														</td>
													</tr>
                                                                                                                                                                       
                                 
                                                <?php                                                           
                                                    }
                                                }
                                                mysqli_free_result($resultt);
                                                ?> 												
	                                                <tr>
	                                                <td>&nbsp;</td>
	                                                <td>&nbsp;</td>
	                                                <td>&nbsp;</td>	                                                	                                       
                                                  <td>Total de las contribuciones en Quetzales</td>
                                                  <td>Q. <?php echo number_format($sst,2);?></td>
	                                                <td>&nbsp;</td>
	                                                <td>&nbsp;</td>
	                                                <td>&nbsp;</td>	                                                	                                                
                                                </tr>											

												
												</tbody>
                                              <tfoot>

                                              </tfoot>												
											</table>
                                                            </div>

                                                            <div class="space-12"></div>
                                                           </div>
                                                        </div>

                                                        <div id="friends" class="tab-pane">
                                                            <div class="profile-users clearfix">
<style>
    .ttd{
        width: 10%;
    }
</style>
 
<div class="container">
    <div class="space-24"></div>   
    <div class="row">
        <div class="page-header">
            <h1>
                Donaciones Recibidas ordenadas por solicitud
                <small>
                    <i class="ace-icon fa fa-angle-double-right"></i>
                </small>
            </h1>
        </div>
<?php                       
    $sql = "SELECT id_solayu,tip_solayu,org_solayu,dona_solayu,desc_solayu,fe_solayu,st_solayu,DATE_FORMAT(fe_solayu,'%d/%m/%Y') AS faco FROM ".$tutu."_solayu where org_solayu like '".htmlspecialchars($_GET['org'])."' order by id_solayu Desc ";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
?>       
											<div class="timeline-container">
												<div class="timeline-label">
													<!-- #section:pages/timeline.label -->
														<div class="search-filter-header bg-primary">
															<h5 class="smaller no-margin-bottom">
																<i class="ace-icon fa fa-sliders light-green bigger-130"></i>&nbsp; <?php echo $row['dona_solayu'] ; ?> <?php echo $row['desc_solayu'] ; ?> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Solicitado el : <?php echo $row['faco'] ; ?>
															</h5>
														</div>
													<!-- /section:pages/timeline.label -->
												</div>

												<div class="timeline-items">
													<!-- #section:pages/timeline.item -->

            <?php   
             $queryt = "SELECT   id_asig,ayusol_asig,conti_asig,asig_asig,st_asig,confi_asig,id_dona,tip_dona,org_dona,dona_dona,desc_dona,cost_dona,fe_dona,st_dona,stella_dona,asig_dona,id_tayu,n_tayu,id_org,n_org,DATE_FORMAT(asig_asig,'%d/%m/%Y') AS mamar,DATE_FORMAT(fe_dona,'%d/%m/%Y') AS mamo FROM ".$tutu."_asig inner join ".$tutu."_dona on conti_asig = id_dona inner join ".$tutu."_tayu on tip_dona = id_tayu inner join ".$tutu."_org on org_dona = id_org where st_asig like '1' and ayusol_asig like '".$row['id_solayu']."' and confi_asig like 'Si' order by id_asig Desc ";
            $resultt = mysqli_query($db, $queryt) or trigger_error("Query Failed! SQL: $queryt - Error: ". mysqli_error($db), E_USER_ERROR);
            if($resultt) { 
                $ss = 0 ;
                while($rowt = mysqli_fetch_assoc($resultt)) {
            ?> 	 

					<div class="timeline-item clearfix">
                        <!-- #section:pages/timeline.info -->
                        <div class="timeline-info">
                            <i class="timeline-indicator ace-icon fa fa-cutlery btn btn-success no-hover"></i>
                        </div>

                        <!-- /section:pages/timeline.info -->
                        <div class="widget-box transparent">
                            <div class="widget-header widget-header-small">
                                <h5 class="widget-title smaller">
                                    <a href="#" class="blue"><?php echo $rowt['n_org'] ; ?></a>
                                    <span class="grey">Tipo: <?php echo $rowt['n_tayu'] ; ?></span>
                                </h5>

                                <span class="widget-toolbar no-border">
                                    <?php echo $rowt['mamar'] ; ?>
                                </span>

                                <span class="widget-toolbar">
                                    <a href="#" data-action="collapse">
                                        <i class="ace-icon fa fa-chevron-up"></i>
                                    </a>
                                </span>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">
                                    <?php echo $rowt['dona_dona'] ; ?> - 
                                    <?php echo $rowt['desc_dona'] ; ?><br>
                                    Costo de la Donaci&oacute;n: Q. <?php echo number_format($rowt['cost_dona'],2);
                                        if ($rowt['st_dona'] != '0') {
                                            $ss = $ss + $rowt['cost_dona'];    
                                        } else {

                                        }
                                        ?>
                                    <div class="space-6"></div>

                                    <div class="widget-toolbox clearfix">
                                        <div class="pull-left">
                                        </div>

                                        <!-- #section:custom/extra.action-buttons -->
                                        <div class="pull-right action-buttons">
                                          <style>
                                              .valoracion {
                                                    position: relative;
                                                    overflow: hidden;
                                                    display: inline-block;
                                                }
                                                .valoracion .a {
                                                    float: right;
                                                    color: #c1b8b8;
                                                    font-size: 30px; 
                                                }
                                                .valoracion .a:hover,
                                                .valoracion .a:hover ~ .a,
                                                .valoracion .a:checked ~ .a {
                                                    color:crimson;
                                                }
                                                .valoracion .aga {
                                                    
                                                    font-size: 30px;                                                       
                                                  color:crimson;
                                              }
                                          </style>
                                           <div class="valoracion">
                                               <?php
                                                    if ($rowt['stella_dona'] == '0'){
                                                ?>   
                                                <a href="?enc=_recib&ste=5&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a><a href="?enc=_recib&ste=4&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a><a href="?enc=_recib&ste=3&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a><a href="?enc=_recib&ste=2&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a><a href="?enc=_recib&ste=1&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a>                                                       
                                                <?php
                                                    } elseif ($rowt['stella_dona'] == '1'){
                                                ?>
                                                <a class="aga">★</a><a href="?enc=_recib&ste=5&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a><a href="?enc=_recib&ste=4&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a><a href="?enc=_recib&ste=3&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a><a href="?enc=_recib&ste=2&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a>                                                
                                                <?php
                                                    } elseif ($rowt['stella_dona'] == '2'){
                                                ?>
                                                <a class="aga">★</a><a class="aga">★</a><a href="?enc=_recib&ste=5&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a><a href="?enc=_recib&ste=4&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a><a href="?enc=_recib&ste=3&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a>                                                     
                                                <?php
                                                    } elseif ($rowt['stella_dona'] == '3'){
                                                ?>
                                                <a class="aga">★</a><a class="aga">★</a><a class="aga">★</a><a href="?enc=_recib&ste=5&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a><a href="?enc=_recib&ste=4&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a>                                                     
                                                <?php
                                                    } elseif ($rowt['stella_dona'] == '4'){
                                                ?>
                                                <a class="aga">★</a><a class="aga">★</a><a class="aga">★</a><a class="aga">★</a><a href="?enc=_recib&ste=5&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a>                                                     
                                                <?php
                                                    } elseif ($rowt['stella_dona'] == '5'){
                                                ?>
                                                <a class="aga">★</a><a class="aga">★</a><a class="aga">★</a><a class="aga">★</a><a class="aga">★</a>                                                     
                                                <?php
                                                    }
                                                ?>
                                                
                                            </div>                                          
                                           <!--   <a href="#">
                                                <i class="ace-icon fa fa-check green bigger-130"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-pencil blue bigger-125"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-times red bigger-125"></i>
                                            </a>-->
                                        </div>

                                        <!-- /section:custom/extra.action-buttons -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php                                                           
                }
            }
            mysqli_free_result($resultt);
            ?> 
													<!-- /section:pages/timeline.item -->
								</div><!-- /.timeline-items -->
											</div><!-- /.timeline-container -->            
<?php                                   
        }
    }
    mysqli_free_result($result);
?>       
    </div>
</div>

                                                            </div>
                                                            <div class="hr hr10 hr-double"></div>
                                                        </div>  
                                                    </div>
                                                </div>
                                            </div>                            
                                </div>

        </div>		
<?php
            }
        
    } else {
        echo "0 results";
    }
                
?>       
        
