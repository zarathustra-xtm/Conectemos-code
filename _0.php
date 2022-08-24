<?php
    if( isset($_GET['desa']) )
         { 
            $sql = "UPDATE ".$tutu."_susu SET status = '0' WHERE user_id like '".htmlspecialchars($_GET['soli'])."' ";

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
            $sql = "UPDATE ".$tutu."_susu SET status = '1' WHERE user_id like '".htmlspecialchars($_GET['soli'])."' ";

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
      <div class="col-md-4"><?php require_once 'templates/ads.php';?>
		<div class="login-form">
			<?php require_once 'templates/message.php';?>
			
			
			<div class="form-header">
				<h3><i class="fa fa-user"></i> Crear Usuarios</h3>
			</div>
			<form method="post" action="?enc=_0" class="form-register" role="form" id="register-form">
				<div>
					<input name="name" id="name" type="text" class="form-control" placeholder="Nombres"> 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="email" id="email" type="email" class="form-control" placeholder="Correo electrónico" > 
					<span class="help-block"></span>
				</div>
				<div>
				    <select name="roola" class="form-control">
                      <option value="Administrador">Administrador</option>
                      <option value="Consultor">Consultor</option>
                      <option value="Usuario">Usuario</option>                      
                    </select>
                    <span class="help-block"></span>
				</div>
				<div>
					<input name="password" id="password" type="password" class="form-control" placeholder="Contraseña"> 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="confirm_password" id="confirm_password" type="password" class="form-control" placeholder="Confirmar Contraseña"> 
					<span class="help-block"></span>
				</div>
				<button class="btn btn-block bt-login" type="submit" id="submit_btn" data-loading-text="Registrando....">Registrarse</button>
			</form>
			<div class="form-footer">
				
			</div>
		</div></div>     
      <div class="col-md-8">
        <h3><i class="fa fa-user"></i> Usuarios Registrados</h3>
<div class="table-responsive">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                          <th>N.</th>                                                 
                          <th>Nombre</th>                        
                          <th >Email</th>                                                    
                          <th >Rool</th>
                          <th >Estado</th>                          
                          <th>-</th>                                                                                                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php       
                        $query = "SELECT user_id,name,email,roola,status FROM ".$tutu."_susu order by name DESC ";
                        $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                        $c = 1;
                        if($result) {
                            while($fila = mysqli_fetch_assoc($result)) {
                        ?>                   
                            <tr>
                            <td class="numus"><?php echo $fila['user_id'];?></td>                              
                            <td class="tdaso" ><?php echo $fila['name'];?></td> 
                            <td class="tdaso" ><?php echo $fila['email'];?></td>                              
                            <td class="numus"><?php echo $fila['roola'];?></td>  
                            <td class="numus"><?php if ($fila['status'] == '1') {
                            echo 'Activo' ;
                        } else {
                            echo 'Inactivo' ;
                        }
                                ?></td>                              
                            <td class="numus">
                        <?php
                                if ($fila['status'] == '0' ){
                        ?>                                                                           
                                <a id="dLabel" role="button" class="btn btn-danger" data-target="#" href="?enc=_0&habi=true&soli=<?php echo $fila['user_id'];?>">
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
                                  <li><a href="?enc=_00&us=<?php echo $fila['user_id'];?>">Editar</a></li>
                                  <li class="divider"></li>
                                  <li >
                                    <a  href="?enc=_0&desa=true&soli=<?php echo $fila['user_id'];?>">Deshabilitar</a>
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
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/register.js"></script>