<?php 
     require_once 'config.php'; 
		header('Content-Type: text/html; charset=ISO-8859-1'); 
		$id = $_POST['id_category'];		                 
                                        $query = "SELECT * FROM ".$tutu."_mun WHERE dep_mun = ".$id." order by n_mun ";
                                            $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                                            $c = 0;
                                            if($result) {
                                                while($fila = mysqli_fetch_assoc($result)) {

                                            ?>                   
                                            <option value="<?php echo $fila['id_mun'];?>"><?php echo $fila['n_mun'];?></option>
                                            <?php
                                                    $c ++;                    
                                                }
                                            } 
                                         mysqli_free_result($result);
        mysqli_close($db);
mysqli_close($db); 
?> 