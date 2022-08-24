<?php

        if ( isset($_POST['archo']) )
            {	 

    
                             $cat_cat = strip_tags($_POST['cat_cat']);   
                             $n_cat = strip_tags($_POST['n_cat']);   

                            $add = "INSERT INTO ".$tutua."_cat (cat_cat,n_cat) VALUES ('$cat_cat', '$n_cat')";
                            if ($db->query($add) === TRUE) {
                                echo "New record created successfully";
                                    } else {
                                        echo "Error: " . $add . "<br>" . $db->error;
                                    }            
// exit();
        ?>
                <script language="Javascript">
                    window.location = "?enc=_7";
                </script>
         <?php 
            }

                elseif ( isset($_POST['cato']) )
            {	 

                    $sql = "UPDATE ".$tutua."_cat SET n_cat='$_POST[n_cat]' WHERE id_cat like '".$_POST['id_cat']."' ";    
                    if ($db->query($sql) === TRUE) {
                    echo "Record updated successfully";
                    } else {
                        echo "Error updating record: " . $db->error;
                    }
                    //exit();
        ?>
                <script language="Javascript">
                    window.location = "?enc=_7";
                </script>
         <?php 
            }


if( isset($_GET['del'])  )
     {
        
        $deleteada = "DELETE FROM ".$tutua."_cat WHERE id_cat like '".htmlspecialchars($_GET['del'])."'";

        if ($db->query($deleteada) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $db->error;
        }
            ?>
                <script language="Javascript">
                    window.location = "?enc=_7";
                </script>
         <?php     
    }
    else {

      
   

     }
?>
  
<div class="container-fluid">   
      <div class="row">
        <?php
  if(isset($msg)){
   echo $msg;
  }
  ?>    

        <div class="col-sm-3"><br>


   
      
        <?php      
          if(isset($_GET['edit'])) {
        ?>
            
      <hr />      
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Editar Registro</h3>
					<span class="pull-right clickable"><i class="fa fa-chevron-up"></i></span>
				</div>
				<div class="panel-body">
                        <?php                       
                                 $query = "SELECT * FROM ".$tutua."_cat where id_cat like '".htmlspecialchars($_GET['edit'])."' ";
                                $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                                if($result) {
                                    while($row = mysqli_fetch_assoc($result)) {
                        ?>                      
                            <form class="form-signin"  method="post" action="?enc=_7" enctype="multipart/form-data" id="formaso">                                          
                                <div class="form-group"> <!-- Date input -->
                                    <textarea class="form-control" rows="3" name="n_cat" placeholder="Descripci&oacute;n"><?php echo $row['n_cat'];?></textarea>
                                  </div>                                                     

                                    <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-info-full">Editar</button>
                                    <input type="hidden" value="<?php echo $row['id_cat'];?>" name="id_cat" class="form-control" id="exampleInputEmail1" >
                                    <input type="hidden" name="cato" value="">
                                    </div>     

                            </form>
 
                    
                </div>
		</div>    
     <hr>            
            
            
 
                            <?php
                                   }
                                        mysqli_free_result($result);                
                                                }
        }

                
      
        
      else {

    ?>
      <hr />      
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">Agregar Categor&iacute;a</h3>
					<span class="pull-right clickable"><i class="fa fa-chevron-up"></i></span>
				</div>
				<div class="panel-body">
                
                    <form class="form-signin"  method="post" action="?enc=_7" enctype="multipart/form-data" id="formaso">   
                          <div class="form-group">
                            <select class="form-control" name="cat_cat" required>
                                <option value="1" selected>Textos</option> 
                                <option value="2" selected>Servcios </option> 
                                <option value="3" selected>Galer&iacute;a </option>                                 
                            </select> 
                            </div>                                                                  
                        <div class="form-group"> <!-- Date input -->
                            <textarea class="form-control" rows="3" name="n_cat" placeholder="Descripci&oacute;n"></textarea>
                          </div>                                                     
                            <div class="form-group">
                                <input type="hidden" value="archo" name="archo">
                                <button type="submit" class="btn btn-default" ><span class="fa fa-log-in"></span> &nbsp; Agregar</button> 
                            </div>     
    
                    </form>
 
                    
                </div>
		</div>    
     <hr>

<?php 
  }
  ?>   
    </div>    
        <div class="col-sm-9">
          <h2 class=" -header">Regristros Ingresadas</h2>
          <div class="table-responsive">
              <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                  <th>#</th>                           
                  <th>Secci&oacute;n</th>
                  <th>Nombre</th>
                  <th></th>
                  <th></th> 
                        </tr>
                    </thead>
                    <tbody>
						<?php   
                         $query = "SELECT id_cat,cat_cat,n_cat FROM ".$tutua."_cat order by n_cat DESC";
                        $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                        $abaso = 1 ;
                        if($result) {
                            while($row = mysqli_fetch_assoc($result)) {
                         ?> 
                            <tr>
                            <td><?php echo $abaso;?></td>                                                                                                
                            <td><?php echo $row['cat_cat'];?></td>
                            <td><?php echo $row['n_cat'];?></td> 
                            <td><a  href="?enc=_7&edit=<?php echo $row['id_cat'];?>" target="_self"><span class="fa fa-menu-hamburger" aria-hidden="true"></span></a> </td>                                                                                                
                            <td><a class="" href="?enc=_7&del=<?php echo $row['id_cat'];?>" target="_self"><span class="fa fa-remove" aria-hidden="true"></span></a></td>                                
                            </tr>

						<?php
                                $abaso ++ ;
                            }
                        }
                        mysqli_free_result($result);?>   
                  
                    </tbody>
                </table>   
          </div>
        </div>
</div>