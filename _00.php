<?php
    if( isset($_POST['roola']) )
         { 
            $sql = "UPDATE ".$tutu."_susu SET name='$_POST[name]',email='$_POST[email]',roola='$_POST[roola]' WHERE user_id like '".htmlspecialchars($_GET['us'])."' ";

            if ($db->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $db->error;
            }
        }
?>  
<div class="container">
    <div class="row">
      <div class="col-md-12">
		<div class="login-form">
			
			<div class="form-header">
				<h3><i class="fa fa-user"></i> Editar Usuario</h3>
			</div>
                <?php       
                $query = "SELECT user_id,name,email,roola FROM ".$tutu."_susu where user_id like '".htmlspecialchars($_GET['us'])."' ";
                $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                $c = 1;
                if($result) {
                    while($fila = mysqli_fetch_assoc($result)) {
                ?>  			
                    <form method="post" action="?enc=_00&us=<?php echo htmlspecialchars($_GET['us']) ; ?>" class="form-register" role="form" id="register-form">
                        <div>
                            <input name="name" id="name" type="text" value="<?php echo $fila['name'];?>" class="form-control" placeholder="Nombres"> 
                            <span class="help-block"></span>
                        </div>
                        <div>
                            <input name="email" id="email" type="email" value="<?php echo $fila['email'];?>" class="form-control" placeholder="Correo electrónico" > 
                            <span class="help-block"></span>
                        </div>
                        <div>
                            <select name="roola" class="form-control">
                             <?php if ($fila['roola'] == 'Administrador') {
                                ?>
                                <option value="Administrador" selected>Administrador</option>                    
                                <?php
                                } else {
                                ?>                    
                                <option value="Administrador">Administrador</option>                    
                                <?php                                    
                                };
                                ?>
                             <?php if ($fila['roola'] == 'Consultor') {
                                ?>
                                <option value="Consultor" selected>Consultor</option>                    
                                <?php
                                } else {
                                ?>                    
                                <option value="Consultor">Consultor</option>                    
                                <?php                                    
                                };
                                ?>
v                             <?php if ($fila['roola'] == 'Usuario') {
                                ?>
                                <option value="Usuario" selected>Usuario</option>                    
                                <?php
                                } else {
                                ?>                    
                                <option value="Usuario">Usuario</option>                    
                                <?php                                    
                                };
                                ?>
                            </select>
                            <span class="help-block"></span>
                        </div>
                        <button class="btn btn-block bt-login" type="submit" id="submit_btn" data-loading-text="Registrando....">Guardar Cambios</button>
                    </form>
                <?php
                        $c ++;                    
                    }
                } 
                 mysqli_free_result($result);
                ?>                     
			<div class="form-footer">
				
			</div>
		</div></div>     
     
    </div>
</div>    
