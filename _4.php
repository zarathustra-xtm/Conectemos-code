<?php
    if( isset($_POST['n_mat']) )
         { 
            $sql = "UPDATE ".$tutu."_mat SET n_mat='$_POST[n_mat]',des_mat='$_POST[des_mat]',us_mat='$aid' WHERE id_mat like '".htmlspecialchars($_GET['id'])."' ";

            if ($db->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $db->error;
            }
        }
?>  
<style>
    .floto{
        width: 30px;
        float: right;
        text-align: right;
    }
    .puto {
        border: 1px solid coral;
    }
</style>
<div class="container">
    <div class="row">
      <div class="col-md-12">
		<div class="login-form">
			<div class="form-header">
				<h3><i class="fa fa-dedent"></i> Editar Datos de la Matriz</h3>
				<div class="floto"><a href="?enc=_3&camp=<?php echo htmlspecialchars($_GET['camp']);?>" target="_self" title="regresar"><i class="fa fa-dedent"></i></a></div>
				<hr class="puto">
			</div>
                <?php       
                $query = "SELECT id_mat,n_mat,des_mat,us_mat FROM ".$tutu."_mat where id_mat like '".htmlspecialchars($_GET['id'])."' ";
                $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                $c = 1;
                if($result) {
                    while($fila = mysqli_fetch_assoc($result)) {
                ?>  			
                    <form method="post" action="?enc=_4&id=<?php echo htmlspecialchars($_GET['id']); ?>&camp=<?php echo htmlspecialchars($_GET['camp']);?>" class="form-register" role="form" id="register-form">
                        <div class="form-group">
                          <label for="exampleFormControlTextarea2">Nombre de la Campa&ntilde;a</label>
                          <textarea class="form-control rounded-0" name="n_mat" id="exampleFormControlTextarea2" rows="3" required><?php echo $fila['n_mat'];?></textarea>
                        </div>			
                        <div class="form-group">
                          <label for="exampleFormControlTextarea2">Descripci&oacute;n</label>
                          <textarea class="form-control rounded-0" name="des_mat" id="exampleFormControlTextarea2" rows="6" required><?php echo $fila['des_mat'];?></textarea>
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
