<?php
    if( isset($_POST['n_camp']) )
         { 
            $sql = "INSERT INTO ".$tutu."_camp (n_camp,des_camp,fec_camp,us_camp) VALUES ('$_POST[n_camp]','$_POST[des_camp]','$feca','$aid')";

            if ($db->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $db->error;
            }

        }
?>  
<?php
    if( isset($_GET['desa']) )
         { 
            $sql = "UPDATE ".$tutu."_camp SET st_camp = '0' WHERE id_camp like '".htmlspecialchars($_GET['id'])."' ";

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
            $sql = "UPDATE ".$tutu."_camp SET st_camp = '1' WHERE id_camp like '".htmlspecialchars($_GET['id'])."' ";

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
<div class="container">
    <div class="row">
      <div class="col-md-4">
		<div class="login-form">

			
			
			<div class="form-header">
				<h3><i class="fa fa-dedent"></i> Crear Campaña</h3>
			</div>
			<form method="post" action="?enc=_1" class="form-register" role="form" id="register-form">
                <div class="form-group">
                  <label for="exampleFormControlTextarea2">Nombre de la Campa&ntilde;a</label>
                  <textarea class="form-control rounded-0" name="n_camp" id="exampleFormControlTextarea2" rows="3" required></textarea>
                </div>			
                <div class="form-group">
                  <label for="exampleFormControlTextarea2">Descripci&oacute;n</label>
                  <textarea class="form-control rounded-0" name="des_camp" id="exampleFormControlTextarea2" rows="6" required></textarea>
                </div>			
				<button class="btn btn-block bt-login" type="submit" id="submit_btn" data-loading-text="Registrando....">Adjuntar</button>
			</form>
			<div class="form-footer">
				
			</div>
		</div></div>     
      <div class="col-md-8">
        <h3><i class="fa fa-dedent"></i> Campa&ntilde;as Registradas</h3>
<div class="table-responsive">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                          <th>N.</th>                                                 
                          <th>Nombre</th>                        
                          <th >Descripci&oacute;n</th>                                                    
                          <th >De fecha:</th>
                          <th >Por:</th>                          
                          <th >Estado:</th>                                                    
                          <th>-</th>                                                                                                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php       
                        $query = "SELECT id_camp,n_camp,des_camp,fe_camp,st_camp,us_camp,id_camp,name,DATE_FORMAT(fe_camp,'%d/%m/%Y') AS faco FROM ".$tutu."_camp inner join ".$tutu."_susu on us_camp = user_id order  by id_camp DESC ";
                        $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                        $c = 1;
                        if($result) {
                            while($fila = mysqli_fetch_assoc($result)) {
                        ?>                   
                            <tr>
                            <td class="numus"><?php echo $fila['id_camp'];?></td>                              
                            <td class="tdaso" ><?php echo $fila['n_camp'];?></td> 
                            <td class="tdaso" ><?php echo $fila['des_camp'];?></td>                              
                            <td class="numus"><?php echo $fila['faco'];?></td>  
                            <td class="numus"><?php echo $fila['name'];?></td>                              
                            <td class="numus"><?php if ($fila['st_camp'] == '1') {
                            echo 'Activo' ;
                        } else {
                            echo 'Inactivo' ;
                        }
                                ?></td>                              
                            <td class="numus">
                        <?php
                                if ($fila['st_camp'] == '0' ){
                        ?>                                                                           
                                <a id="dLabel" role="button" class="btn btn-danger" data-target="#" href="?enc=_1&habi=true&id=<?php echo $fila['id_camp'];?>">
                                        <i class="fa fa-cog " style="font-size:24px"></i> 
                                </a>
                        <?php                                                                        
                                } else {
                        ?>                                       
                            <div class="dropdown">
                                <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="/page.html">
                                        <i class="fa fa-cog " style="font-size:24px"></i> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                                  <li><a href="?enc=_2&id=<?php echo $fila['id_camp'];?>">Editar</a></li>
                                  <li><a href="?enc=_3&camp=<?php echo $fila['id_camp'];?>">Matrices</a></li>
                                  <li class="divider"></li>
                                  <li >
                                    <a  href="?enc=_1&desa=true&id=<?php echo $fila['id_camp'];?>">Deshabilitar</a>
                                  </li>
                                </ul>
                            </div>                             
                        <?php                                    
                                }
                        ?>                                   
                       


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
