<?php
    if( isset($_POST['n_mat']) )
         { 
            $sql = "INSERT INTO ".$tutu."_mat (n_mat,des_mat,camp_mat,fec_mat,us_mat) VALUES ('$_POST[n_mat]','$_POST[des_mat]','".htmlspecialchars($_GET['camp'])."','$feca','$aid')";

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
            $sql = "UPDATE ".$tutu."_mat SET st_mat = '0' WHERE id_mat like '".htmlspecialchars($_GET['id'])."' ";

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
            $sql = "UPDATE ".$tutu."_mat SET st_mat = '1' WHERE id_mat like '".htmlspecialchars($_GET['id'])."' ";

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
    $sql = "SELECT id_camp,n_camp from ".$tutu."_camp where id_camp = '".htmlspecialchars($_GET['camp'])."' ";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $campa = $row["n_camp"];
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
				<h3><i class="fa fa-dedent"></i> Crear Matriz</h3>
			</div>
			<form method="post" action="?enc=_3&camp=<?php echo htmlspecialchars($_GET['camp']);?>" class="form-register" role="form" id="register-form">
                <div class="form-group">
                  <label for="exampleFormControlTextarea2">Nombre de la Matriz</label>
                  <textarea class="form-control rounded-0" name="n_mat" id="exampleFormControlTextarea2" rows="3" required></textarea>
                </div>			
                <div class="form-group">
                  <label for="exampleFormControlTextarea2">Descripci&oacute;n</label>
                  <textarea class="form-control rounded-0" name="des_mat" id="exampleFormControlTextarea2" rows="6" required></textarea>
                </div>			
				<button class="btn btn-block bt-login" type="submit" id="submit_btn" data-loading-text="Registrando....">Adjuntar</button>
			</form>
			<div class="form-footer">
				
			</div>
		</div></div>     
      <div class="col-md-8">
        <h3><i class="fa fa-dedent"></i> Matrices para la Campaña: <span class="tt"><?php echo $campa; ?></span> </h3>
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
                        $query = "SELECT id_mat,n_mat,des_mat,camp_mat,fe_mat,st_mat,us_mat,user_id,name,DATE_FORMAT(fe_mat,'%d/%m/%Y') AS faco FROM ".$tutu."_mat inner join ".$tutu."_susu on us_mat = user_id where camp_mat = '".htmlspecialchars($_GET['camp'])."' order  by id_mat DESC ";
                        $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                        $c = 1;
                        if($result) {
                            while($fila = mysqli_fetch_assoc($result)) {
                        ?>                   
                            <tr>
                            <td class="numus"><?php echo $fila['id_mat'];?></td>                              
                            <td class="tdaso" ><?php echo $fila['n_mat'];?></td> 
                            <td class="tdaso" ><?php echo $fila['des_mat'];?></td>                              
                            <td class="numus"><?php echo $fila['faco'];?></td>  
                            <td class="numus"><?php echo $fila['name'];?></td>                              
                            <td class="numus"><?php if ($fila['st_mat'] == '1') {
                            echo 'Activo' ;
                        } else {
                            echo 'Inactivo' ;
                        }
                                ?></td>                              
                            <td class="numus">
                        <?php
                                if ($fila['st_mat'] == '0' ){
                        ?>                                                                           
                                <a id="dLabel" role="button" class="btn btn-danger" data-target="#" href="?enc=_3&habi=true&id=<?php echo $fila['id_mat'];?>&camp=<?php echo htmlspecialchars($_GET['camp']);?>">
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
                                  <li><a href="?enc=_4&id=<?php echo $fila['id_mat'];?>&camp=<?php echo htmlspecialchars($_GET['camp']);?>">Editar</a></li>
                                  <li><a href="?enc=_5&mat=<?php echo $fila['id_mat'];?>">Preguntas</a></li>                   
                                  <li class="divider"></li>
                                  <li >
                                    <a  href="?enc=_3&desa=true&id=<?php echo $fila['id_mat'];?>&camp=<?php echo htmlspecialchars($_GET['camp']);?>">Deshabilitar</a>
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
