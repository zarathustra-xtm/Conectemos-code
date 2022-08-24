<?php
    if( isset($_POST['n_area']) )
         { 
            $sql = "INSERT INTO ".$tutu."_area (n_area,fec_area,us_area) VALUES ('$_POST[n_area]','$feca','$aid')";

            if ($db->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $db->error;
            }

        }
?>  
<?php
    if( isset($_POST['coito']) )
         { 
            $sql = "UPDATE ".$tutu."_area SET n_area = '$_POST[coito]' WHERE id_area like '".htmlspecialchars($_GET['id'])."' ";

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
            $sql = "UPDATE ".$tutu."_area SET st_area = '0' WHERE id_area like '".htmlspecialchars($_GET['id'])."' ";

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
            $sql = "UPDATE ".$tutu."_area SET st_area = '1' WHERE id_area like '".htmlspecialchars($_GET['id'])."' ";

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
				<h3><i class="fa fa-dedent"></i> Tipos de &Aacute;reas</h3>
			</div>
			<form method="post" action="?enc=_16" class="form-register" role="form" id="register-form">
                <div class="form-group">
                  <label for="exampleFormControlTextarea2">-</label>
                  <textarea class="form-control rounded-0" name="n_area" id="exampleFormControlTextarea2" rows="3" required></textarea>
                </div>			
				<button class="btn btn-block bt-login" type="submit" id="submit_btn" data-loading-text="Registrando....">Adjuntar</button>
			</form>
			<div class="form-footer">
				
			</div>
		</div></div>     
      <div class="col-md-8">
        <h3><i class="fa fa-dedent"></i> &Aacute;reas Registradas</h3>
<div class="table-responsive">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                          <th>N.</th>                                                 
                          <th>Nombre</th>                        

                          <th >Ingresada Por:</th>                          
                          <th>-</th>                                                                                                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php       
                        $query = "SELECT id_area,n_area,fec_area,us_area,user_id,name,DATE_FORMAT(fec_area,'%d/%m/%Y') AS faco FROM ".$tutu."_area inner join ".$tutu."_susu on us_area = user_id order  by id_area DESC ";
                        $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                        $c = 1;
                        if($result) {
                            while($fila = mysqli_fetch_assoc($result)) {
                        ?>                   
                            <tr>
                            <td class="numus"><?php echo $fila['id_area'];?></td>                              
                            <td class="tdaso" >
                            <form  method="post" action="?enc=_16&id=<?php echo $fila['id_area'];?>" class="form-register">
                             <textarea class="form-control rounded-0" name="coito" rows="2" cols="60" required><?php echo $fila['n_area'];?></textarea>
                             <button class="btn btn-primary bt-login" type="submit" id="submit_btn" data-loading-text="Registrando....">Editar este dato</button>
                            </form>
                            <br>
                            </td> 
                            <td class="numus"><?php echo $fila['name'];?></td>                              
                            <td class="numus">-                       
                       


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
