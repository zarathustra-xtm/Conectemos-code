<?php
require_once 'config.php'; 
?>  
 <?php
    if( isset($_POST['plano']) )
         { 
            $sql = "UPDATE ".$tutu."_susu SET social_id='".$_POST[que_org]."',picture='".$_POST[eje_org]."' WHERE user_id like '".$aid."' ";

            if ($db->query($sql) === TRUE) {
                echo "";
            } else {
                echo "Error updating record: " . $db->error;
            }
        }
?>  
<style>
    .orgi { 
        color: orange !important;
        padding: 4px 4px 4px 20px;
        font-size: 12px;
            }
    .orgi::first-letter {
    text-transform: uppercase;
    font-size: 1.5em;
    font-weight: bold;
    letter-spacing:1px;
    }
@import url(https://fonts.googleapis.com/css?family=Lato:400,700);
@import url('//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css');
/*http://codepen.io/drehimself/pen/KdXwxR?utm_source=bypeople
http://nicolasgallagher.com/pure-css-speech-bubbles/demo/*/

*, *:before, *:after {
  box-sizing: border-box;
}
.chat .chat-history {
  height: 350px;
    overflow: auto;
  padding: 30px 30px 20px;
  border-bottom: 2px solid white;
}
.chat .chat-history .message-data {
  margin-bottom: 15px;
}
.chat .chat-history .message-data-time {
  color: #a8aab1;
  padding-left: 6px;
}
.chat .chat-history .message {
  color: white;
  padding: 18px 20px;
  line-height: 26px;
  font-size: 16px;
  border-radius: 5px;
  margin-bottom: 30px;
  width: 90%;
  position: relative;
}
.chat .chat-history .message:after {
content: "";
    position: absolute;
    top: -15px;
    left: 20px;
    border-width: 0 15px 15px;
    border-style: solid;
    border-color: #CCDBDC transparent;
    display: block;
    width: 0;
}
.chat .chat-history .you-message {
  background: #CCDBDC;
  color:#003366;
}
.chat .chat-history .me-message {
  background: #014423;
}
.chat .chat-history .me-message:after {
  border-color: #014423 transparent;
    right: 20px;
    top: -15px;
    left: auto;
    bottom:auto;
}
.chat .chat-message {
  padding: 30px;
}
.chat .chat-message .fa-file-o, .chat .chat-message .fa-file-image-o {
  font-size: 16px;
  color: gray;
  cursor: pointer;
}

.chat-ul li{
    list-style-type: none;
}

.align-left {
  text-align: left;
}

.align-right {
  text-align: right;
}

.float-right {
  float: right;
}

.clearfix:after {
  visibility: hidden;
  display: block;
  font-size: 0;
  content: " ";
  clear: both;
  height: 0;
}
.you {
  color: #CCDBDC;
}

.me {
  color: #014423;
}

h1, h2, h3, h4, h5, h6 {
    font-family: "Raleway",sans-serif;
    color: #003366;
}
    .hid {
        display: none;
    }  
    .time {
        font-size: 9px;
        text-align: right;
    }
.btn:focus, .btn:active, button:focus, button:active {
  outline: none !important;
  box-shadow: none !important;
}
    .maxo{
        min-height: 120px !important;
        max-height: 120px !important;

        float: left !important;
        margin: 4px;
    }


</style>
<?php 
$sql = "SELECT chatid,ayu_id,sender_userid,message,reciever_userid,timestamp,tipo_chat from ".$tutu."_chat where ayu_id like '".htmlspecialchars($_GET['khat'])."'  order by chatid desc ";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $tatus = $row["ayu_id"];
      ?>        
<?php         
        if ($row["sender_userid"] == htmlspecialchars($_GET["env"])) {
            
    ?>     
        <li>
          <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">            <div class="message-data">
              <span class="message-data-name"><i class="fa fa-circle you"></i> Tu
                </span>
            </div></h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>
                  <?php 
                $fecha1 = new DateTime($row["timestamp"]);
                $fecha2 = new DateTime($fechitas); 
                $fecha = $fecha1->diff($fecha2);
                printf('%d días, %d horas, %d minutos', $fecha->d, $fecha->h, $fecha->i);
                ?>
                  </small>
              </p>
            </div>
            <div class="timeline-body">




                     
                      <?php    
            if ($row["tipo_chat"] == 1 ) {
                        $queryat = "SELECT id_foto,n_foto,foto_foto FROM ".$tutu."_fotos where n_foto like '".$row["chatid"]."' ";
                            $resultat = mysqli_query($db, $queryat) or trigger_error("Query Failed! SQL: $queryat - Error: ". mysqli_error($db), E_USER_ERROR);
                            if($resultat) {
                                while($filaat = mysqli_fetch_assoc($resultat)) {
                        ?> 
                              <img src="_sol/sol_<?php echo $row["ayu_id"];?>/imas_<?php echo $filaat['n_foto'];?>/<?php echo $filaat['foto_foto'];?>" alt=""  class="maxo">
				
                      <?php 
                                
                                }
                            }
                        ?>      
                        <?php                                                
                      
                         mysqli_free_result($resultat);
                    } else if ($row["tipo_chat"] == 2 ) {
                        ?>  
                        <?php                        
                        $queryat = "SELECT id_foto,n_foto,foto_foto FROM ".$tutu."_fotos where n_foto like '".$row["chatid"]."' ";
                            $resultat = mysqli_query($db, $queryat) or trigger_error("Query Failed! SQL: $queryat - Error: ". mysqli_error($db), E_USER_ERROR);
                            if($resultat) {
                                while($filaat = mysqli_fetch_assoc($resultat)) {
                        ?> 
                                    <video width="100%" height="auto" controls>
                                      <source src="_sol/sol_<?php echo $row["ayu_id"];?>/imas_<?php echo $filaat['n_foto'];?>/<?php echo $filaat['foto_foto'];?>" type="video/mp4">
                                    Your browser does not support the video tag.
                                    </video>                           
                              
                      <?php 
                                   
                                }
                            }
                        ?>                                                    
                            <div class="embed-responsive embed-responsive-16by9">
                              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                            </div>
                        <?php                            
            } else {
                
            };
                        ?> 
   
                          
              <p><?php echo $row["message"];  ?></p>
            </div>
          </div>
        </li>            

<?php            
        } else {
    ?>               
                <?php 
                    $sqlrr = "SELECT id_org,n_org,ema_org,tel_org FROM ".$tutu."_org where id_org like '".$row["sender_userid"]."' ";
                        $resultrr = mysqli_query($db, $sqlrr);
                        if (mysqli_num_rows($resultrr) > 0) {
                            while($rowrr = mysqli_fetch_assoc($resultrr)) {
                                $norgo = $rowrr['n_org'] ;
                                $emorg = $rowrr['ema_org'] ;
                                $telorg = $rowrr['tel_org'] ;                                
                            }
                        } else {
                            echo "Sin Mensajes";
                        }
                    mysqli_free_result($resultrr);
                ?>   

        <li class="timeline-inverted">
          <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title"><span class="message-data-name"><?php echo $norgo;?></span> <i class="fa fa-circle me"></i></h4>
            </div>
            <div class="timeline-body">
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i><?php 
                $fecha1 = new DateTime($row["timestamp"]);
                $fecha2 = new DateTime($fechitas);
                $fecha = $fecha1->diff($fecha2);
                printf('%d días, %d horas, %d minutos', $fecha->d, $fecha->h, $fecha->i);
    ?></small></p>    
    
                      <?php    
            if ($row["tipo_chat"] == 1 ) {
                        $querya = "SELECT id_foto,n_foto,foto_foto FROM ".$tutu."_fotos where n_foto like '".$row["chatid"]."' ";
                            $resulta = mysqli_query($db, $querya) or trigger_error("Query Failed! SQL: $querya - Error: ". mysqli_error($db), E_USER_ERROR);
                            if($resulta) {
                                while($filaa = mysqli_fetch_assoc($resulta)) {
                        ?> 
				             <!-- Trigger the Modal -->
<img id="myImg" src="_sol/sol_<?php echo $row["ayu_id"];?>/imas_<?php echo $filaa['n_foto'];?>/<?php echo $filaa['foto_foto'];?>" alt="Enlazando" class="maxo">
				<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
                      <?php 
                                    $sidoso = $filaa['n_foto'];
                                }
                            }
                        ?>      
                        <?php                                                
                      
                         mysqli_free_result($resulta);
                    } else if ($row["tipo_chat"] == 2 ) {
                        ?>  
                        <?php                        
                        $querya = "SELECT id_foto,n_foto,foto_foto FROM ".$tutu."_fotos where n_foto like '".$row["chatid"]."' ";
                            $resulta = mysqli_query($db, $querya) or trigger_error("Query Failed! SQL: $querya - Error: ". mysqli_error($db), E_USER_ERROR);
                            if($resulta) {
                                while($filaa = mysqli_fetch_assoc($resulta)) {
                        ?> 
                                    <video width="100%" height="auto" controls>
                                      <source src="_sol/sol_<?php echo $row["ayu_id"];?>/imas_<?php echo $filaa['n_foto'];?>/<?php echo $filaa['foto_foto'];?>" type="video/mp4">
                                    Your browser does not support the video tag.
                                    </video>                           
                              
                      <?php 
                                    $sidoso = $filaa['n_foto'];
                                }
                            }
                        ?>                                                    
                            <div class="embed-responsive embed-responsive-16by9">
                              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                            </div>
                        <?php                            
            } else {
                
            };
                        ?> 
   


             
                                      
<p><?php echo $row["message"];  ?></p>
                                 
                            <div class="message me-message float-right"> 
                <div class="time">
                    <i class="fa fa-envelope"></i>&nbsp;&nbsp;<?php echo $emorg;?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-comment"></i>&nbsp;&nbsp;<?php echo $telorg;?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-calendar"></i>&nbsp;&nbsp;
                             </div>
              </div>             
            </div>
          </div>
        </li>
        <li>

<?php            
        }
	?>   
<?php   
               
$sql = "UPDATE ".$tutu."_chat SET status='1' WHERE ayu_id = '".htmlspecialchars($_GET['khat'])."' and reciever_userid like '".htmlspecialchars($_GET['env'])."' and status = '0'";
if (mysqli_query($db, $sql)) { 
    echo "";
} else {
    echo "Error updating record: " . mysqli_error($db);
}   
        
    }
} else {
    echo "Sin Mensajes";
}
            
          
?>    
<?php 
mysqli_free_result($result);
?>  
			<!-- The Modal -->

	
