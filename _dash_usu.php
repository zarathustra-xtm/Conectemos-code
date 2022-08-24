<?php
    if( isset($_POST['comple']) )
         { 
            $sql = "UPDATE ".$tutu."_org SET inter_org='".$_POST[inter_org]."',cuape_org='".$_POST[cuape_org]."',sede_org='".$_POST[sede_org]."',fuein_org='".$_POST[fuein_org]."',deacu_org='".$_POST[deacu_org]."',don_org='".$_POST[don_org]."' WHERE id_org like '".$_POST[comple]."' ";

            if ($db->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $db->error;
            }
        }
?> 
<?php
    if( isset($_POST['idorg']) )
         { 
            $sql = "UPDATE ".$tutu."_org SET pais_org='".$_POST[pais_org]."',dep_org='".$_POST[dep_org]."',mun_org='".$_POST[mun_org]."',tip_org='".$_POST[tip_org]."',obge_org='".$_POST[obge_org]."',bene_org='".$_POST[bene_org]."',cuabe_org='".$_POST[cuabe_org]."',con_org='".$_POST[con_org]."',ema_org='".$_POST[ema_org]."',tel_org='".$_POST[tel_org]."' WHERE id_org like '".$_POST[idorg]."' ";

            if ($db->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $db->error;
            }
        }
?> 
<?php
    if( isset($_POST['otaca']) )
         { 
            $sql = "UPDATE ".$tutu."_org SET aded_org='".$_POST[aded_org]."',act_org='".$_POST[act_org]."',apo_org='".$_POST[apo_org]."' WHERE id_org like '".$_POST[otaca]."' ";

            if ($db->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $db->error;
            }
        }
?> 
<?php
    if( isset($_POST['plano']) )
         { 
            $sql = "UPDATE ".$tutu."_susu SET social_id='".$_POST[que_org]."',picture='".$_POST[eje_org]."' WHERE user_id like '".$aid."' ";

            if ($db->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $db->error;
            }
        }
?> 
<?php       
    $query = "SELECT user_id,social_id,picture FROM ".$tutu."_susu where user_id like '".$aid."'";
        $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
        if($result) {
            while($fila = mysqli_fetch_assoc($result)) {
                $nafsd = $fila['social_id'];
                $fepo = $fila['picture'];
            }
        } 
    mysqli_free_result($result);
?> 


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
<div class="container">
<div class="space-20"></div>           
            <div class="page-header">
                <h1>
                    Edici&oacute;n
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Eje Tem&aacute;tico / Informaci&oacute;n Personal / Institucional
                    </small>
                </h1>
            </div><!-- /.page-header --> 
        <div class="page-content">

    <div id="home" class="tab-pane in active">
        <div class="row">
            <h2>Eje Tem&aacute;tico actual</h2>
            
<form action="?enc=_user" enctype="multipart/form-data" method="post" >            
                <div class="col-xs-12 col-sm-6 center">
                <div class="appointment-form">
                    
                            <div class="form-row"><br><br>    
                                <table class="teta">
                                    <tr>
                                        <td class="nutder">
                                <div class="form-check form-check-inline">
                                    <img class="ttvb" src="http://enlazando.gt/assets/images/dinero.png"><br>
                                    <?php 
                                        if ($nafsd == 'dinero') { 
                                    ?>                                            
                                  <input class="form-check-input" type="radio" name="que_org" id="inlineRadio1" value="dinero" checked>
                                    <?php                                             
                                            
                                        } else { 
                                    ?>                                            
                                  <input class="form-check-input" type="radio" name="que_org" id="inlineRadio1" value="dinero">                                    
                                    <?php                                             
                                        }
                                    ?>

                                  <label class="form-check-label" for="inlineRadio1">Dinero</label>
                                </div>

                                        </td>
                                        <td class="nutu">
                                <div class="form-check form-check-inline">
                                    <img class="ttvb" src="http://enlazando.gt/assets/images/tiempo.png"><br>
                                    <?php 
                                        if ($nafsd == 'tiempo') { 
                                    ?>                                            
                                  <input class="form-check-input" type="radio" name="que_org" id="inlineRadio2" value="tiempo" checked>                                    
                                    <?php                                             
                                            
                                        } else { 
                                    ?>                                            
                                  <input class="form-check-input" type="radio" name="que_org" id="inlineRadio2" value="tiempo">                                    
                                    <?php                                             
                                        }
                                    ?>

                                  <label class="form-check-label" for="inlineRadio2">Tiempo</label>
                                </div>

                                        </td>
                                        <td class="nutiz">
                                <div class="form-check form-check-inline">
                                    <img class="ttvb" src="http://enlazando.gt/assets/images/mano.png"><br>                                                                                     
                                    <?php 
                                        if ($nafsd == 'recurso') { 
                                    ?>                                            
                                  <input class="form-check-input" type="radio" name="que_org" id="inlineRadio3" value="recurso" checked>                                    
                                    <?php                                             
                                            
                                        } else { 
                                    ?>                                            
                                  <input class="form-check-input" type="radio" name="que_org" id="inlineRadio3" value="recurso">                                    
                                    <?php                                             
                                        }
                                    ?>

                                  <label class="form-check-label" for="inlineRadio3">Recursos</label>
                                </div>                                                    
                                        </td>                                                    
                                    </tr>
                                </table>
                            </div>
                    </div>
                     </div>  
                <div class="col-xs-12 col-sm-6 center">
                 <div class="appointment-form">                
                     <br><br>
                    <div class="nutu">
                                                                 
                            <br><br>
                              <div class="form-group">
                                <select class="form-control" name="eje_org" id="exampleFormControlSelect2">
                                    <?php 
                                        if ($fepo == 'ani') { 
                                    ?>                                            
                                  <option value="ani" selected>Animales</option>
                                    <?php                                             
                                            
                                        } else { 
                                    ?>                                            
                                  <option value="ani" >Animales</option>
                                    <?php                                             
                                        }
                                    ?>                                    
                                    <?php 
                                        if ($fepo == 'covi') { 
                                    ?>                                            
                                  <option value="covi" selected>Construcci&oacute;n Vial</option>
                                    <?php                                             
                                            
                                        } else { 
                                    ?>                                            
                                  <option value="covi" >Construcci&oacute;n Vial</option>
                                    <?php                                             
                                        }
                                    ?>                                    
                                    <?php 
                                        if ($fepo == 'depo') { 
                                    ?>                                            
                                  <option value="depo" selected>Deportes</option>
                                    <?php                                             
                                            
                                        } else { 
                                    ?>                                            
                                  <option value="depo">Deportes</option>
                                    <?php                                             
                                        }
                                    ?>                                    
                                    <?php 
                                        if ($fepo == 'emco') { 
                                    ?>                                            
                                  <option value="emco" selected>Empoderamiento Econ&oacute;mico</option>
                                    <?php                                             
                                            
                                        } else { 
                                    ?>                                            
                                  <option value="emco">Empoderamiento Econ&oacute;mico</option>
                                    <?php                                             
                                        }
                                    ?>                                    
                                    <?php 
                                        if ($fepo == 'errvio') { 
                                    ?>                                            
                                  <option value="errvio" selected>Erradicaci&oacute;n de la Violencia</option>
                                    <?php                                             
                                            
                                        } else { 
                                    ?>                                            
                                  <option value="errvio">Erradicaci&oacute;n de la Violencia</option>
                                    <?php                                             
                                        }
                                    ?>                                    
                                    <?php 
                                        if ($fepo == 'meamn') { 
                                    ?>                                            
                                  <option value="meam" selected>Medio Ambiente</option>                                                
                                    <?php                                             
                                            
                                        } else { 
                                    ?>                                            
                                  <option value="meam">Medio Ambiente</option>                                                
                                    <?php                                             
                                        }
                                    ?>                                    
                                    <?php 
                                        if ($fepo == 'muj') { 
                                    ?>                                            
                                  <option value="muj" selected>Mujeres</option>
                                    <?php                                             
                                            
                                        } else { 
                                    ?>                                            
                                  <option value="muj">Mujeres</option>                                              
                                    <?php                                             
                                        }
                                    ?>                                    
                                    <?php 
                                        if ($fepo == 'nin') { 
                                    ?>                                            
                                  <option value="nin" selected>Ni&ntilde;ez</option>
                                    <?php                                             
                                            
                                        } else { 
                                    ?>                                            
                                  <option value="nin">Ni&ntilde;ez</option>
                                    <?php                                             
                                        }
                                    ?> 
                                    <?php 
                                        if ($fepo == 'priin') { 
                                    ?>                                            
                                  <option value="priin" selected>Primera infancia</option>                                                
                                    <?php                                             
                                            
                                        } else { 
                                    ?>                                            
                                  <option value="priin">Primera infancia</option>                                                
                                    <?php                                             
                                        }
                                    ?>                                     
                                    <?php 
                                        if ($fepo == 'tree') { 
                                    ?>                                            
                                  <option value="tree" selected>Tercera Edad</option>
                                    <?php                                             
                                            
                                        } else { 
                                    ?>                                            
                                  <option value="tree">Tercera Edad</option>
                                    <?php                                             
                                        }
                                    ?>                                       
                                    <?php 
                                        if ($fepo == 'otros') { 
                                    ?>                                            
                                  <option value="otros" selected>Otros</option>                                                                                                                                   
                                    <?php                                             
                                            
                                        } else { 
                                    ?>                                            
                                  <option value="otros">Otros</option>                                                                                                                                   
                                    <?php                                             
                                        }
                                    ?>                                       
                                </select>
                              </div>  
                        </div>     
                    </div>                 
                </div>
                    <div class="form-group">        
                        &nbsp;
                        <br><br><br>
                </div>
                    <div class="form-group">   
                        <input type="hidden" name="plano" value="plano">
                      <button type="submit" class="btn btn-sm btn-block btn-primary">Clic para actualizar Eje Tem&aacute;tico </button>
                    </div>                
                <br><br>
            </form>                    
        </div>
    </div>
            <h2>Informaci&oacute;n Personal / Institucional</h2>                                    
            <hr>
<?php                       
    $sql = "SELECT *,DATE_FORMAT(descu_org,'%d/%m/%Y') AS faco FROM ".$tutu."_org inner join ".$tutu."_paises on pais_org = iso_enla inner join ".$tutu."_tiporg on tip_org = id_tiporg inner join ".$tutu."_oborg on obge_org = id_oborg inner join ".$tutu."_fufi on fuein_org = id_fufi where ema_org like '".$ema."'";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
?>                 
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
                        <img class="editable img-responsive" alt="<?php echo $row['n_org'];?>" id="avatar2" src="../imggall/org_<?php echo $row['id_org'];?>/<?php echo $row['logo_org'];?>" />
                   <?php        
                        }
                    ?>
                </span>
                    <?php
                        $file = "../imggall/org_".$row['id_org']."/";
                        if(is_dir($file))
                          {
                          echo ("");
                          }
                        else
                          {
                          mkdir("../imggall/org_".$row['id_org']."/", 0777);
                          }
                    ?>
                <div class="space space-4"></div>
                <form action="?enc=_uplogo" enctype="multipart/form-data" method="post" >
                   <div class="form-group">
                    <input type="file" multiple name="files[]" id="files[]" />
                    </div>
                    <div class="form-group">        
                    <button type="submit" class="btn btn-sm btn-block btn-primary">Cambiar Avatar / Logo</button>
                    </div>
                </form> 
            </div><!-- /.col -->

            <div class="col-xs-12 col-sm-9">
                <h4 class="blue">
                    <span class="middle"><?php echo $row['n_org'];?></span>


                </h4>
<form action="?enc=_user" enctype="multipart/form-data" method="post" >            
                <div class="profile-user-info">
                    <div class="profile-info-row">
                        <div class="profile-info-name"> Pa&iacute;s </div>

                        <div class="profile-info-value">
                            <select name="pais_org" class="form-control" id="exampleFormControlSelect2">
                                <?php                       
                                     $queryt = "SELECT iso_enla,n_enla FROM ".$tutu."_paises order by n_enla ASC ";
                                    $resultt = mysqli_query($db, $queryt) or trigger_error("Query Failed! SQL: $queryt - Error: ". mysqli_error($db), E_USER_ERROR);
                                    if($resultt) {
                                        while($rowt = mysqli_fetch_assoc($resultt)) {
                                            
                                            if ($row['pais_org'] == $rowt['iso_enla']) {
                                                ?>   							
                                                    <option value="<?php echo $rowt['iso_enla'];?>" selected><?php echo $rowt['n_enla'];?></option>                                                               
                                                <?php
                                                
                                            } else {
                                                ?>   							
                                                    <option value="<?php echo $rowt['iso_enla'];?>"><?php echo $rowt['n_enla'];?></option>                                                               
                                                <?php
                                                
                                            }
                                                }
                                            mysqli_free_result($result);                
                                                }    
                                ?>  
                            </select>   

                        </div>
                    </div>
                    <div class="profile-info-row">
                        <div class="profile-info-name"> Dep</div>

                        <div class="profile-info-value">
                            <i class="fa fa-map-marker light-orange bigger-110"></i>
                            <select name="dep_org" class="form-control" id="exampleFormControlSelect2">
                                <?php                       
                                     $queryt = "SELECT n_dep FROM ".$tutu."_dep order by n_dep ASC ";
                                    $resultt = mysqli_query($db, $queryt) or trigger_error("Query Failed! SQL: $queryt - Error: ". mysqli_error($db), E_USER_ERROR);
                                    if($resultt) {
                                        while($rowt = mysqli_fetch_assoc($resultt)) {
                                            
                                            if ($row['dep_org'] == $rowt['n_dep']) {
                                                ?>   							
                                                    <option value="<?php echo $rowt['n_dep'];?>" selected><?php echo $rowt['n_dep'];?></option>                                                               
                                                <?php
                                                
                                            } else {
                                                ?>   							
                                                    <option value="<?php echo $rowt['n_dep'];?>"><?php echo $rowt['n_dep'];?></option>                                                               
                                                <?php
                                                
                                            }
                                                }
                                            mysqli_free_result($result);                
                                                }    
                                ?>  
                            </select>                               
                            <span><?php echo $row['dep_org'];?></span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> Mun </div>

                        <div class="profile-info-value">
                            <i class="fa fa-map-marker light-orange bigger-110"></i>
                            <select name="mun_org" class="form-control" id="exampleFormControlSelect2">
                                <?php                       
                                     $queryt = "SELECT n_mun FROM ".$tutu."_mun order by n_mun ASC ";
                                    $resultt = mysqli_query($db, $queryt) or trigger_error("Query Failed! SQL: $queryt - Error: ". mysqli_error($db), E_USER_ERROR);
                                    if($resultt) {
                                        while($rowt = mysqli_fetch_assoc($resultt)) {
                                            
                                            if ($row['mun_org'] == $rowt['n_mun']) {
                                                ?>   							
                                                    <option value="<?php echo $rowt['n_mun'];?>" selected><?php echo $rowt['n_mun'];?></option>                                                               
                                                <?php
                                                
                                            } else {
                                                ?>   							
                                                    <option value="<?php echo $rowt['n_mun'];?>"><?php echo $rowt['n_mun'];?></option>                                                               
                                                <?php
                                                
                                            }
                                                }
                                            mysqli_free_result($result);                
                                                }    
                                ?>  
                            </select>                             
                            <span><?php echo $row['mun_org'];?></span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> Tipo </div>
                        <div class="profile-info-value">
                            <select name="tip_org" class="form-control" id="exampleFormControlSelect2">
                                <?php                       
                                     $queryt = "SELECT id_tiporg,n_tiporg FROM ".$tutu."_tiporg order by n_tiporg DESC ";
                                    $resultt = mysqli_query($db, $queryt) or trigger_error("Query Failed! SQL: $queryt - Error: ". mysqli_error($db), E_USER_ERROR);
                                    if($resultt) {
                                        while($rowt = mysqli_fetch_assoc($resultt)) {
                                            if ($row['tip_org'] == $rowt['id_tiporg']) {
                                                ?>   							
                                                    <option value="<?php echo $rowt['id_tiporg'];?>" selected><?php echo $rowt['n_tiporg'];?></option>                                                               
                                                <?php
                                                
                                            } else {
                                                ?>   							
                                                    <option value="<?php echo $rowt['id_tiporg'];?>"><?php echo $rowt['n_tiporg'];?></option>                                                               
                                                <?php
                                                
                                            }
                                                }
                                            mysqli_free_result($result);                
                                                }    
                                ?>  
                            </select>                            
                            <span>Actualmente: <?php echo $row['n_tiporg'];?></span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> Obejtivo </div>

                        <div class="profile-info-value">
                                        <select name="obge_org" class="form-control" id="exampleFormControlSelect2">
                                            <?php                       
                                                 $queryh = "SELECT id_oborg,n_oborg FROM ".$tutu."_oborg order by n_oborg DESC ";
                                                $resulth = mysqli_query($db, $queryh) or trigger_error("Query Failed! SQL: $queryh - Error: ". mysqli_error($db), E_USER_ERROR);
                                                if($resulth) {
                                                    while($rowh = mysqli_fetch_assoc($resulth)) {
                                                        if ($row['obge_org'] == $rowh['id_oborg']) { 
                                                            ?>   							
                                                                <option value="<?php echo $rowh['id_oborg'];?>" selected><?php echo $rowh['n_oborg'];?></option>                                                               
                                                            <?php
                                                        
                                                        } else {
                                                            ?>   							
                                                                <option value="<?php echo $rowh['id_oborg'];?>"><?php echo $rowh['n_oborg'];?></option>                                                               
                                                            <?php
                                                        
                                                        }
                                                            }
                                                        mysqli_free_result($resulth);                
                                                            }    
                                            ?>  
                                        </select>                            
                            <span>Actualmente: <?php echo $row['n_oborg'];?></span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> Beneficiarios </div>

                        <div class="profile-info-value">
                           <input type="number" name="bene_org" class="form-control" value="<?php echo $row['bene_org'];?>">
                        </div>
                    </div>
                    <div class="profile-info-row">
                        <div class="profile-info-name"> C. de Beneficiarios </div>

                        <div class="profile-info-value">
                           <input type="number" name="cuabe_org" class="form-control" value="<?php echo $row['cuabe_org'];?>">                           
                        </div>
                    </div>

                </div>

                <div class="hr hr-8 dotted"></div>

                <div class="profile-user-info">
                    <div class="profile-info-row">
                        <div class="profile-info-name"> Cont&aacute;cto </div>

                        <div class="profile-info-value">
                           <input type="text" name="con_org" class="form-control" value="<?php echo $row['con_org'];?>">                                                     
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name">
                            Mail
                        </div>

                        <div class="profile-info-value">
                           <input type="email" name="ema_org" class="form-control" value="<?php echo $row['ema_org'];?>">                                                     
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name">
                            Tel&eacute;efono
                        </div>

                        <div class="profile-info-value">
                           <input type="text" name="tel_org" class="form-control" value="<?php echo $row['tel_org'];?>">                                                                                
                        </div>
                    </div>
                </div>
                    <div class="form-group">  
                    <input name="idorg" value="<?php echo $row['id_org'];?>" type="hidden">      
                    <button type="submit" class="btn btn-sm btn-block btn-primary">Cambiar informaci&oacute;n institucional</button>
                    </div>                
            </form>                 
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="space-20"></div>

        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <form action="?enc=_user" enctype="multipart/form-data" method="post" >                           
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
                                 <textarea class="form-control rounded-0" name="aded_org" rows="2" cols="60" required><?php echo $row['aded_org'];?></textarea>                                
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
                                 <textarea class="form-control rounded-0" name="act_org" rows="2" cols="60" required><?php echo $row['act_org'];?></textarea>                                                       
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
                                 <textarea class="form-control rounded-0" name="apo_org" rows="2" cols="60" required><?php echo $row['apo_org'];?></textarea>                                                         
                                </p>
                            </div>
                        </div>
                    </div> 
                    <div class="form-group">  
                    <input name="otaca" value="<?php echo $row['id_org'];?>" type="hidden">      
                    <button type="submit" class="btn btn-sm btn-block btn-primary">Actulizar informaci&oacute;n</button>
                    </div>                         
                </form>                                                                                                                                   
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
                            <form action="?enc=_user" enctype="multipart/form-data" method="post" >                                                   
                                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                        <tbody>
            <!--
                                            <tr>
                                                <td class="center">
                                                    Apoya desde:
                                                </td>
                                                <td>
                                                    <?php// echo $row['faco'];?>
                                                </td>
                                            </tr>
            -->
                                            <tr>
                                                <td class="center">
                                                    Reglamento Interno
                                                </td>
                                                <td>
                                                    <?php 
                                                        if ( $row['inter_org'] == 'Si') {
                                                    ?>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="inter_org" value="Si" id="flexRadioDefault1" checked>
                                                          <label class="form-check-label" for="flexRadioDefault1">
                                                            Si
                                                          </label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="inter_org" value="No" id="flexRadioDefault2" >
                                                          <label class="form-check-label" for="flexRadioDefault2">
                                                            No
                                                          </label>
                                                        </div>
                                                    <?php                                                             
                                                        } else {
                                                    ?>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="inter_org" value="Si" id="flexRadioDefault1">
                                                          <label class="form-check-label" for="flexRadioDefault1">
                                                            Si
                                                          </label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="inter_org" value="No" id="flexRadioDefault2" checked>
                                                          <label class="form-check-label" for="flexRadioDefault2">
                                                            No
                                                          </label>
                                                        </div>
                                                    <?php                                                             
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="center">
                                                    Cant. Personal
                                                </td>
                                                <td>
                                                    <input type="number" name="cuape_org" class="form-control" value="<?php echo $row['cuape_org'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="center">
                                                    Instalaciones propias
                                                </td>
                                                <td>
                                                    <?php 
                                                        if ( $row['sede_org'] == 'Si') {
                                                    ?>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="sede_org" value="Si" id="flexRadioDefault1" checked>
                                                          <label class="form-check-label" for="flexRadioDefault1">
                                                            Si
                                                          </label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="sede_org" value="No" id="flexRadioDefault2" >
                                                          <label class="form-check-label" for="flexRadioDefault2">
                                                            No
                                                          </label>
                                                        </div>
                                                    <?php                                                             
                                                        } else {
                                                    ?>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="sede_org" value="Si" id="flexRadioDefault1">
                                                          <label class="form-check-label" for="flexRadioDefault1">
                                                            Si
                                                          </label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="sede_org" value="No" id="flexRadioDefault2" checked>
                                                          <label class="form-check-label" for="flexRadioDefault2">
                                                            No
                                                          </label>
                                                        </div>
                                                    <?php                                                             
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="center">
                                                    Fuente de ingresos
                                                </td>
                                                <td>
                                                    <select name="fuein_org" class="form-control" id="exampleFormControlSelect2">
                                                        <?php                       
                                                             $queryh = "SELECT id_fufi,n_fufi FROM ".$tutu."_fufi order by n_fufi DESC ";
                                                            $resulth = mysqli_query($db, $queryh) or trigger_error("Query Failed! SQL: $queryh - Error: ". mysqli_error($db), E_USER_ERROR);
                                                            if($resulth) {
                                                                while($rowh = mysqli_fetch_assoc($resulth)) {
                                                                    if ($row['fuein_org'] == $rowh['id_fufi']) { 
                                                                        ?>   							
                                                                            <option value="<?php echo $rowh['id_fufi'];?>" selected><?php echo $rowh['n_fufi'];?></option>                                                               
                                                                        <?php

                                                                    } else {
                                                                        ?>   							
                                                                            <option value="<?php echo $rowh['id_fufi'];?>"><?php echo $rowh['n_fufi'];?></option>                                                               
                                                                        <?php

                                                                    }
                                                                        }
                                                                    mysqli_free_result($resulth);                
                                                                        }    
                                                        ?>  
                                                    </select>                                                      
                                                </td>
                                            </tr> 
                                            <tr>
                                                <td class="center">
                                                    Ser P&uacute;blico
                                                </td>
                                                <td>
                                                    <?php 
                                                        if ( $row['deacu_org'] == 'Si') {
                                                    ?>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="deacu_org" value="Si" id="flexRadioDefault1" checked>
                                                          <label class="form-check-label" for="flexRadioDefault1">
                                                            Si
                                                          </label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="deacu_org" value="No" id="flexRadioDefault2" >
                                                          <label class="form-check-label" for="flexRadioDefault2">
                                                            No
                                                          </label>
                                                        </div>
                                                    <?php                                                             
                                                        } else {
                                                    ?>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="deacu_org" value="Si" id="flexRadioDefault1">
                                                          <label class="form-check-label" for="flexRadioDefault1">
                                                            Si
                                                          </label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="deacu_org" value="No" id="flexRadioDefault2" checked>
                                                          <label class="form-check-label" for="flexRadioDefault2">
                                                            No
                                                          </label>
                                                        </div>
                                                    <?php                                                             
                                                        }
                                                    ?>                                                    
                                                    
                                                </td>
                                            </tr>                                                                                   
                                            <tr>
                                                <td class="center">
                                                    Recibir y Aportar
                                                </td>
                                                <td>
                                                    <?php 
                                                        if ( $row['don_org'] == 'Si') {
                                                    ?>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="don_org" value="Si" id="flexRadioDefault1" checked>
                                                          <label class="form-check-label" for="flexRadioDefault1">
                                                            Si
                                                          </label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="don_org" value="No" id="flexRadioDefault2" >
                                                          <label class="form-check-label" for="flexRadioDefault2">
                                                            No
                                                          </label>
                                                        </div>
                                                    <?php                                                             
                                                        } else {
                                                    ?>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="don_org" value="Si" id="flexRadioDefault1">
                                                          <label class="form-check-label" for="flexRadioDefault1">
                                                            Si
                                                          </label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="don_org" value="No" id="flexRadioDefault2" checked>
                                                          <label class="form-check-label" for="flexRadioDefault2">
                                                            No
                                                          </label>
                                                        </div>
                                                    <?php                                                             
                                                        }
                                                    ?>                                                      
                                                </td>
                                            </tr>                                                                                                                                                                                                                                                            
                                        </tbody>
                                    </table>
                                    <div class="form-group">  
                                        <input name="comple" value="<?php echo $row['id_org'];?>" type="hidden">      
                                        <button type="submit" class="btn btn-sm btn-block btn-primary">Actulizar informaci&oacute;n</button>
                                    </div>                                      
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /#home -->                
 <?php
            }
        
    } else {
        echo "0 results";
    }
?>        
    </div>
</div>