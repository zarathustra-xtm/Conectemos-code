<?php
    if( isset($_POST['n_preg']) )
         { 
            $sql = "INSERT INTO ".$tutu."_preg (n_preg,tip_preg,indi_preg,mat_preg,fec_preg,us_preg) VALUES ('$_POST[n_preg]','$_POST[tip_preg]','$_POST[indi_preg]','".htmlspecialchars($_GET['mat'])."','$feca','$aid')";

            if ($db->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $db->error;
            }

        }
?>  
<?php
    if( isset($_POST['prega']) )
         { 
            $sql = "UPDATE ".$tutu."_preg SET n_preg = '$_POST[prega]' WHERE id_preg like '".htmlspecialchars($_GET['id'])."' ";

            if ($db->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $db->error;
            }
        }
?> 
<?php
    if( isset($_GET['tip']) )
         { 
            $sql = "UPDATE ".$tutu."_preg SET tip_preg = '".htmlspecialchars($_GET['tip'])."' WHERE id_preg like '".htmlspecialchars($_GET['id'])."' ";

            if ($db->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $db->error;
            }
        }
?> 
<?php
    if( isset($_GET['indi']) )
         { 
            $sql = "UPDATE ".$tutu."_preg SET indi_preg = '".htmlspecialchars($_GET['indi'])."' WHERE id_preg like '".htmlspecialchars($_GET['id'])."' ";

            if ($db->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $db->error;
            }
        }
?> 
<?php
    if( isset($_GET['desa']) )
         { 
            $sql = "UPDATE ".$tutu."_preg SET st_preg = '0' WHERE id_preg like '".htmlspecialchars($_GET['id'])."' ";

            if ($db->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $db->error;
            }
        }
?> 
 
<?php
    if( isset($_GET['habi']) )
         { 
            $sql = "UPDATE ".$tutu."_preg SET st_preg = '1' WHERE id_preg like '".htmlspecialchars($_GET['id'])."' ";

            if ($db->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $db->error;
            }
        }
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
<?php 
    $sql = "SELECT id_mat,n_mat from ".$tutu."_mat where id_mat = '".htmlspecialchars($_GET['mat'])."' ";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $mata = $row["n_mat"];
                }
    } else {
        echo "0 results";
    }
?>
<style>
    .tt{
        color: brown;
        font-weight: bold;
    }
</style>
<div class="container">
    <div class="row">
      <div class="col-md-4">
		<div class="login-form">

			
			
			<div class="form-header">
				<h3><i class="fa fa-dedent"></i> Crear Pregunta</h3>
			</div>
			<form method="post" action="?enc=_5&mat=<?php echo htmlspecialchars($_GET['mat']);?>" class="form-register" role="form" id="register-form">
                <div class="form-group">
                  <label for="exampleFormControlTextarea2">Nombre de la Matriz</label>
                  <textarea class="form-control rounded-0" name="n_preg" id="exampleFormControlTextarea2" rows="3" required></textarea>
                </div>			
              <div class="form-group">
                <label for="exampleFormControlSelect1">Tipo de Pregunta</label>
                <select class="form-control" name="tip_preg" id="exampleFormControlSelect1">
                  <option value="1">Texto Simple</option>
                  <option value="2">Parrafo</option>
                  <option value="3">Selecci&oacute;n Multiple</option>
                  <option value="4">Selecci&oacute;n</option>
                  <option value="5">Listado</option>
                </select>
              </div>                
              <div class="form-group">
                <label for="exampleFormControlSelect1">Indispensable</label>               
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="indi_preg" id="inlineRadio1" value="si" checked>
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="indi_preg" id="inlineRadio2" value="no">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>                            
              </div>                            
				<button class="btn btn-block bt-login" type="submit" id="submit_btn" data-loading-text="Registrando....">Adjuntar</button>
			</form>
			<div class="form-footer">
				
			</div>
		</div></div>     
      <div class="col-md-8">
        <h3><i class="fa fa-dedent"></i> Preguntas para la Matriz: <span class="tt"><?php echo $mata; ?></span> </h3>
<div class="table-responsive">
              <table class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                          <th>N.</th>                                                 
                          <th>Nombre</th>                        
                          <th >Tipo</th>                                                    
                          <th >De fecha:</th>
                          <th >Por:</th>                          
                          <th >Estado:</th>                                                    
                          <th>-</th>                                                                                                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php       
                        $query = "SELECT id_preg,n_preg,tip_preg,indi_preg,mat_preg,fe_preg,st_preg,us_preg,user_id,name,DATE_FORMAT(fe_preg,'%d/%m/%Y') AS faco FROM ".$tutu."_preg inner join ".$tutu."_susu on us_preg = user_id where mat_preg = '".htmlspecialchars($_GET['mat'])."' order  by id_preg ASC ";
                        $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                        $c = 1;
                        if($result) {
                            while($fila = mysqli_fetch_assoc($result)) {
                        ?>                   
                            <tr>
                            <td class="numus"><?php echo $fila['id_preg'];?></td>                              
                            <td class="tdaso" >
                            <form action="?enc=_5&id=<?php echo $fila['id_preg'];?>&mat=<?php echo htmlspecialchars($_GET['mat']);?>" method="post">
                              <div class="form-group">
                               <textarea class="form-control rounded-0" name="prega" id="exampleFormControlTextarea2" rows="3"><?php echo $fila['n_preg'];?></textarea>
                              </div>
                            </form>
                            </td> 
                            <td class="tdaso" ><?php if ($fila['tip_preg'] == '1' ) {
                                                        echo "Texto Simple";
                                                    } elseif ($fila['tip_preg'] == '2' ) {
                                                        echo "Parrafo";
                                                    }  elseif ($fila['tip_preg'] == '3' ) {
                                                        echo "Selecci&oacute;n Multiple";
                                                    } elseif ($fila['tip_preg'] == '4' ) {
                                                        echo "Selecci&oacute;n";
                                                    }  elseif ($fila['tip_preg'] == '5' ) {
                                                        echo "Listado";
                                                    } else {};?></td>                              
                            <td class="numus"><?php echo $fila['faco'];?></td>  
                            <td class="numus"><?php echo $fila['name'];?></td>                              
                            <td class="numus"><?php if ($fila['st_preg'] == '1') {
                            echo 'Activo' ;
                        } else {
                            echo 'Inactivo' ;
                        }
                                ?></td>                              
                            <td class="numus">
                        <?php
                                if ($fila['st_preg'] == '0' ){
                        ?>                                                                           
                                <a id="dLabel" role="button" class="btn btn-danger" data-target="#" href="?enc=_5&habi=true&id=<?php echo $fila['id_preg'];?>&mat=<?php echo htmlspecialchars($_GET['mat']);?>">
                                        <i class="fa fa-cog " style="font-size:24px"></i> 
                                </a>
                        <?php                                                                        
                                } else {
                        ?>   
                                   <style>
                                       .pp a{ color:darksalmon !important; }
                                    </style>                                                               
                            <div class="dropdown">
                                <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="/page.html">
                                        <i class="fa fa-cog " style="font-size:24px"></i> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                                  <li><a>Cambie el Tipo</a></li>
                                  <li class="divider"></li>

                                    <?php 
                                    if ($fila['tip_preg'] == '1' ) {
                                    ?>    
                                        <li class="pp"><a>Texto Simple <span class="fa fa-hand-o-left" aria-hidden="true"></span></a></li>
                                    <?php                                         
                                        } else {
                                    ?>    
                                        <li><a href="?enc=_5&id=<?php echo $fila['id_preg'];?>&mat=<?php echo htmlspecialchars($_GET['mat']);?>&tip=1" target="_self">Texto Simple </a></li>
                                    <?php                                         
                                        }; 
                                    ?>
                                    <?php 
                                    if ($fila['tip_preg'] == '2' ) {
                                    ?>    
                                        <li class="pp"><a>Parrafo <span class="fa fa-hand-o-left" aria-hidden="true"></span></a></li>
                                    <?php                                         
                                        } else {
                                    ?>    
                                        <li><a href="?enc=_5&id=<?php echo $fila['id_preg'];?>&mat=<?php echo htmlspecialchars($_GET['mat']);?>&tip=2" target="_self">Parrafo </a></li>
                                    <?php                                         
                                        }; 
                                    ?>
                                    <?php 
                                    if ($fila['tip_preg'] == '3' ) {
                                    ?>    
                                        <li class="pp"><a>Selecci&oacute;n Multiple <span class="fa fa-hand-o-left" aria-hidden="true"></span></a></li>
                                    <?php                                         
                                        } else {
                                    ?>    
                                        <li><a href="?enc=_5&id=<?php echo $fila['id_preg'];?>&mat=<?php echo htmlspecialchars($_GET['mat']);?>&tip=3" target="_self">Selecci&oacute;n Multiple </a></li>
                                    <?php                                         
                                        }; 
                                    ?>                                    
                                    <?php 
                                    if ($fila['tip_preg'] == '4' ) {
                                    ?>    
                                        <li class="pp"><a>Selecci&oacute;n <span class="fa fa-hand-o-left" aria-hidden="true"></span></a></li>
                                    <?php                                         
                                        } else {
                                    ?>    
                                        <li><a href="?enc=_5&id=<?php echo $fila['id_preg'];?>&mat=<?php echo htmlspecialchars($_GET['mat']);?>&tip=4" target="_self">Selecci&oacute;n</a></li>
                                    <?php                                         
                                        }; 
                                    ?>  
                                    <?php 
                                    if ($fila['tip_preg'] == '5' ) {
                                    ?>    
                                        <li class="pp"><a>Listado <span class="fa fa-hand-o-left" aria-hidden="true"></span></a></li>
                                    <?php                                         
                                        } else {
                                    ?>    
                                        <li><a href="?enc=_5&id=<?php echo $fila['id_preg'];?>&mat=<?php echo htmlspecialchars($_GET['mat']);?>&tip=5" target="_self">Listado</a></li>
                                    <?php                                         
                                        }; 
                                    ?>  
                                  <li class="divider"></li>  
                                  <li><a>Requerida</a></li>
                                    <?php 
                                    if ($fila['indi_preg'] == 'si' ) {
                                    ?>    
                                        <li class="pp"><a>Si <span class="fa fa-hand-o-left" aria-hidden="true"></span></a></li>
                                    <?php                                         
                                        } else {
                                    ?>    
                                        <li><a href="?enc=_5&id=<?php echo $fila['id_preg'];?>&mat=<?php echo htmlspecialchars($_GET['mat']);?>&indi=si" target="_self">Si</a></li>
                                    <?php                                         
                                        }; 
                                    ?>  
                                    <?php 
                                    if ($fila['indi_preg'] == 'no' ) {
                                    ?>    
                                        <li class="pp"><a>No <span class="fa fa-hand-o-left" aria-hidden="true"></span></a></li>
                                    <?php                                         
                                        } else {
                                    ?>    
                                        <li><a href="?enc=_5&id=<?php echo $fila['id_preg'];?>&mat=<?php echo htmlspecialchars($_GET['mat']);?>&indi=no" target="_self">No</a></li>
                                    <?php                                         
                                        }; 
                                    ?>  
                                  
                                  <li class="divider"></li>                                                                                                                   
                                  <li >
                                    <a  href="?enc=_5&desa=true&id=<?php echo $fila['id_preg'];?>&mat=<?php echo htmlspecialchars($_GET['mat']);?>">Deshabilitar</a>
                                  </li>
                                </ul>
                            </div>                             
                        <?php                                    
                                }
                        ?>                                   
                        </td>
                            </tr>
                        <tr>
                            <td colspan="7">
                            <?php if ($fila['tip_preg'] == '1' ) {
                            ?>
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Texto Simple</h3>
                                    </div>
                                    <div class="panel-body">Se incluirá una casilla para ingregar la respuesta</div>
                                </div>
                            <?php
                            } elseif ($fila['tip_preg'] == '2' ) {
                            ?>
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Parrafo</h3>
                                    </div>
                                    <div class="panel-body">Se incluirá un espacio grande para ingresar la respuesta requerida</div>
                                </div>
                            <?php
                            }  elseif ($fila['tip_preg'] == '3' ) {
                            ?>
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Selecci&oacute;n Multiple</h3>
                                    </div>
                                    <div class="panel-body">Se incluirá un espacio grande para ingresar la respuesta requerida</div>
                                </div>
                            <?php
                            } elseif ($fila['tip_preg'] == '4' ) {
                            ?>
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Selecci&oacute;n</h3>
                                    </div>
                                    <div class="panel-body">Se incluirá un espacio grande para ingresar la respuesta requerida</div>
                                </div>
                            <?php
                            }  elseif ($fila['tip_preg'] == '5' ) {
                            ?>
                                <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Listado</h3>
                                    </div>
                                    <div class="panel-body">Se incluirá un espacio grande para ingresar la respuesta requerida</div>
                                </div>
                            <?php
                            } else {};?>
                            </td>
                        </tr>
                    
                        <?php
                                $c ++;                    
                            }
                        } 
                         mysqli_free_result($result);
                        ?> 
  
                    </tbody>
                </table>   
          </div>        
        </div>
    </div>
</div>    
