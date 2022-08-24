  <form name="add" method="post" action="?enc=_1">
    <fieldset class="form-group row">
      <legend class="col-sm-2 col-form-label">Genero</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="gen_enc" id="gen_enc" value="M" checked>
            Masculino
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="gen_enc" id="gen_enc" value="F">
            Femenino
          </label>
        </div>
      </div>
    </fieldset>   
<br>    
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Edad</label>
      <div class="col-sm-10">
        <select class="form-control" id="exampleSelect1" name="eda_enc">
            <?php 
                for ($x = 1; $x <= 99; $x++) {
            ?>                
          <option>       <?php   echo "$x";        ?>        </option>
            <?php                 
                } 
            ?>
        </select>        
      </div>
    </div>
<br>    
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Zona</label>
      <div class="col-sm-10">
        <select class="form-control" id="exampleSelect1" name="zon_enc">
            <?php 
                for ($xo = 1; $xo <= 12; $xo++) {
            ?>                
          <option>       <?php   echo "$xo";        ?>        </option>
            <?php                 
                } 
            ?>
        </select>        
      </div>
    </div>
    <br>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Colonia</label>
      <div class="col-sm-10">
        <select class="form-control" id="aaaaaa" name="col_enc">
                                <option value="Sin Colonia">Sin Colonia</option>                   
                    <?php                                    
                        $query = "SELECT * FROM ".$tutu."_col order by n_col ";
                            $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                            $c = 0;
                            if($result) {
                                while($fila = mysqli_fetch_assoc($result)) {

                            ?>                   
                                <option value="<?php echo $fila['id_col'];?>"><?php echo $fila['n_col'];?></option>
                            <?php
                                    $c ++;                    
                                }
                            } 
                         mysqli_free_result($result);
                    ?>                                   

        </select>        
      </div>
    </div>
    <br>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Aldea</label>
      <div class="col-sm-10">
        <select class="form-control" id="aaaaaa" name="ald_enc">
                                <option value="Sin Aldea">Sin Aldea</option>                   
                    <?php                                    
                        $query = "SELECT * FROM ".$tutu."_ald order by n_ald ";
                            $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                            $c = 0;
                            if($result) {
                                while($fila = mysqli_fetch_assoc($result)) {

                            ?>                   
                                <option value="<?php echo $fila['id_ald'];?>"><?php echo $fila['n_ald'];?></option>
                            <?php
                                    $c ++;                    
                                }
                            } 
                         mysqli_free_result($result);
                    ?>                                   

        </select>  
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
          <div id="piechart" style="width: 900px; height: 500px;"></div>         
      </div>
    </div>    
    <br>
    <fieldset class="form-group">
      <legend class="col-form-legend ">Votar&aacute; usted en las pr&oacute;ximas elecciones ?</legend>
      <div class="">
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="a_enc" id="a_enc" value="Si" checked>
            Si
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="a_enc" id="a_enc" value="No">
            No
          </label>
        </div>

      </div>
    </fieldset>
<br>
    <fieldset class="form-group">
      <legend class="col-form-legend ">Usted vota en el Municipio de Mixco ?</legend>
      <div class="">
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="b_enc" id="b_enc" value="Si" checked>
            Si
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="b_enc" id="b_enc" value="No">
            No
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="b_enc" id="b_enc" value="No Sabe">
            No Sabe
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="b_enc" id="b_enc" value="No Responde">
            No Responde
          </label>
        </div>

      </div>
    </fieldset>   
<br>    
    <div class="form-group row">
     <legend class="col-form-legend ">Que Partido Pol&iacute;tico Conoce?</legend>
      <div >
        <select class="form-control" id="aaaaaa" name="c_enc">
                    <?php                                    
                        $query = "SELECT * FROM ".$tutu."_par where st_par like '1' order by n_par";
                            $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                            $c = 0;
                            if($result) {
                                while($fila = mysqli_fetch_assoc($result)) {

                            ?>                   
                                <option value="<?php echo $fila['id_par'];?>"><?php echo $fila['n_par'];?></option>
                            <?php
                                    $c ++;                    
                                }
                            } 
                         mysqli_free_result($result);
                    ?>                               
                                <option value="No Sabe">No Sabe</option>                   
                                <option value="No Responde">No Responde</option>                                                   

        </select>        
      </div>
    </div>              
<br>
    <div class="form-group row">
     <legend class="col-form-legend ">Si las elecciones fueran el d&iacute;a de hoy, por que qu&eacute; Candidato a Alcalde de Mixco Votar&iacute;a ?</legend>
      <div >
        <select class="form-control" id="aaaaaa" name="d_enc">
                    <?php                                    
                        $query = "SELECT * FROM ".$tutu."_alc inner join ".$tutu."_par on id_par = par_alc where st_alc like '1' order by n_alc";
                            $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                            $c = 0;
                            if($result) {
                                while($fila = mysqli_fetch_assoc($result)) {

                            ?>                   
                                <option value="<?php echo $fila['id_alc'];?>"><?php echo $fila['n_alc'];?> - <?php echo $fila['n_par'];?></option>
                            <?php
                                    $c ++;                    
                                }
                            } 
                         mysqli_free_result($result);
                    ?>                               
                                <option value="No Sabe">No Sabe</option>                   
                                <option value="No Responde">No Responde</option>                                                   

        </select>        
      </div>
    </div>       
<br>
       <div class="form-group row">
     <legend class="col-form-legend ">Si las elecciones fueran el d&iacute;a de hoy, por que qu&eacute; Candidato a Presidente de Guatemala Votar&iacute;a ?</legend>
      <div >
        <select class="form-control" id="aaaaaa" name="e_enc">
                    <?php                                    
                        $query = "SELECT * FROM ".$tutu."_pre inner join ".$tutu."_par on id_par = par_pre where st_pre like '1' order by n_pre";
                            $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                            $c = 0;
                            if($result) {
                                while($fila = mysqli_fetch_assoc($result)) {

                            ?>                   
                                <option value="<?php echo $fila['id_pre'];?>"><?php echo $fila['n_pre'];?> - <?php echo $fila['n_par'];?></option>
                            <?php
                                    $c ++;                    
                                }
                            } 
                         mysqli_free_result($result);
                    ?>                               
                                <option value="No Sabe">No Sabe</option>                   
                                <option value="No Responde">No Responde</option>                                                   

        </select>        
      </div>
    </div>                                                                                                                                               
       <br>
    <div class="form-group row">
     <legend class="col-form-legend ">Por que qu&eacute; Candidato a Alcalde de Mixco NO Votar&iacute;a ?</legend>
      <div >
        <select class="form-control" id="aaaaaa" name="f_enc">
                    <?php                                    
                        $query = "SELECT * FROM ".$tutu."_alc inner join ".$tutu."_par on id_par = par_alc where st_alc like '1' order by n_alc";
                            $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                            $c = 0;
                            if($result) {
                                while($fila = mysqli_fetch_assoc($result)) {

                            ?>                   
                                <option value="<?php echo $fila['id_alc'];?>"><?php echo $fila['n_alc'];?> - <?php echo $fila['n_par'];?></option>
                            <?php
                                    $c ++;                    
                                }
                            } 
                         mysqli_free_result($result);
                    ?>                               
                                <option value="No Sabe">No Sabe</option>                   
                                <option value="No Responde">No Responde</option>                                                   

        </select>        
      </div>
    </div>       
<br>
       <div class="form-group row">
     <legend class="col-form-legend ">Por que qu&eacute; Candidato a Presidente de Guatemala NO Votar&iacute;a ?</legend>
      <div >
        <select class="form-control" id="aaaaaa" name="g_enc">
                    <?php                                    
                        $query = "SELECT * FROM ".$tutu."_pre inner join ".$tutu."_par on id_par = par_pre where st_pre like '1' order by n_pre";
                            $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                            $c = 0;
                            if($result) {
                                while($fila = mysqli_fetch_assoc($result)) {

                            ?>                   
                                <option value="<?php echo $fila['id_pre'];?>"><?php echo $fila['n_pre'];?> - <?php echo $fila['n_par'];?></option>
                            <?php
                                    $c ++;                    
                                }
                            } 
                         mysqli_free_result($result);
                    ?>                               
                                <option value="No Sabe">No Sabe</option>                   
                                <option value="No Responde">No Responde</option>                                                   

        </select>        
      </div>
    </div>      
<br>
    <fieldset class="form-group">
      <legend class="col-form-legend ">Considera necesaria la reelecci&oacute;n del Alcalde del Municipio de Mixco ?</legend>
      <div class="">
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="h_enc" id="h_enc" value="Si" checked>
            Si
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="h_enc" id="h_enc" value="No">
            No
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="h_enc" id="h_enc" value="No Sabe">
            No Sabe
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="h_enc" id="h_enc" value="No Responde">
            No Responde
          </label>
        </div>

      </div>
    </fieldset>   
         
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10" >
        <button type="submit" class="btn btn-primary">Guardar informaci&oacute;n</button>
      </div>
    </div>
  </form>
               
						<?php if($_SESSION['logged_in']) { ?>
							<?php $us = $_SESSION['user_id']; ?>
							

						<?php } ?>               
                <?php
                    if( isset($_POST['h_enc']) )
                         { 
                         $add = "INSERT INTO ".$tutu."_enc (gen_enc,eda_enc,zon_enc,col_enc,ald_enc,a_enc,b_enc,c_enc,d_enc,e_enc,f_enc,g_enc,h_enc,us_enc) VALUES ('$_POST[gen_enc]','$_POST[eda_enc]','$_POST[zon_enc]','$_POST[col_enc]','$_POST[ald_enc]','$_POST[a_enc]','$_POST[b_enc]','$_POST[c_enc]','$_POST[d_enc]','$_POST[e_enc]','$_POST[f_enc]','$_POST[g_enc]','$_POST[h_enc]','$us')";
                            if ($db->query($add) === TRUE) {
                                echo "New record created successfully";
                                    } else {
                                        echo "Error: " . $add . "<br>" . $db->error;
                                    }
                        }
                ?>     