
        <!--================Home Banner Area =================
            <section class="banner_area">
                <div class="banner_inner d-flex align-items-center">
                    <div class="container">
                        <div
                        class="banner_content d-md-flex justify-content-between align-items-center"
                        >
                        <div class="mb-3 mb-md-0">
                            <h2></h2>
                            
                        </div>
                        <div class="page_link">

                            <a href="http://enlazando.gt/">Enalanzdo.gt</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

        <!-- Start Sample Area -->
        <section class="sample-text-area">
            <div class="container">

            <div class="area-heading row">
                <div class="col-md-3">
                    <h3>Enlazando.gt</h3>
                </div>
                <div class="col-md-9">
<?php                       
     $query = "SELECT id_nota,ti_nota,nota_nota,vid_nota FROM ".$tutu."_notas where id_nota like '70' ";
    $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
    if($result) {
        while($row = mysqli_fetch_assoc($result)) {
?>                     
                   <h4><?php echo $row['ti_nota'];?></h4>
                    <p><?php echo $row['nota_nota'];?></p>
                <?php
                if (empty($row['vid_nota'])) {

                }    else  {
                ?> <li>
                    <iframe width="100%" height="460" src="https://www.youtube.com/embed/<?php echo $row['vid_nota'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <?php	
                } ?>

                <?php
                $ruta = "imggall/nota_".$row['id_nota']."/"; // Indicar ruta
                $filehandle = opendir($ruta); // Abrir archivos	
                $x = 1;

                while ($file = readdir($filehandle)) {

                        if ($file != "." && $file != ".." ) {
                                $tamanyo = GetImageSize($ruta . $file);
                ?> 
                               <li>
                <img src="http://enlazando.gt/<?php echo "$ruta$file";?> "alt="bootsnipp" >
                                  </li> 
                <?php   $x++;                             
                        } 

                } 
                closedir($filehandle); // Fin lectura archivos
                ?>       
<?php
            $idd = $row['id_nota'];
       }
            mysqli_free_result($result);                
                    }    
?>                     
                </div>
            </div>                
                
                

            <hr />                  
            </div>
        </section>
        <!-- End Sample Area -->
         