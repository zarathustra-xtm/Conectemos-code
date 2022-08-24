<?php
require_once 'config.php'; 
?>  
 <?php
    if( isset($_POST['plano']) )
         { 
            $sql = "UPDATE ".$tutu."_susu SET social_id='".$_POST[que_org]."',picture='".$_POST[eje_org]."' WHERE user_id like '".$aid."' ";

            if ($db->query($sql) === TRUE) {
                echo "Record updated successfully";
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
</style>




        <ul class="chat-ul">
          <li> <h2>enlazando.gt</h2></li>
<?php 
            echo htmlspecialchars($_GET['rec']);
            echo htmlspecialchars($_GET['env']);
$sql = "SELECT chatid,dona_id,sender_userid,message,reciever_userid,timestamp from ".$tutu."_chat2 where sender_userid like '".htmlspecialchars($_GET['rec'])."' or reciever_userid like '".htmlspecialchars($_GET['rec'])."' and dona_id like '".htmlspecialchars($_GET['khat'])."' order by chatid asc limit 30";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $tatus = $row["dona_id"];
      ?>        
<?php         
        if ($row["sender_userid"] == htmlspecialchars($_GET["env"]) && $row["reciever_userid"] == htmlspecialchars($_GET["rec"]) ) {
            
    ?>               
          <li>
            <div class="message-data">
              <span class="message-data-name"><i class="fa fa-circle you"></i> Tu
                </span>
            </div>
            <div class="message you-message">
            <?php echo $row["message"];  ?>
                <div class="time">
              <?php 
                $fecha1 = new DateTime($row["timestamp"]);
                $fecha2 = new DateTime($fechitas); 
                $fecha = $fecha1->diff($fecha2);
                printf('%d días, %d horas, %d minutos', $fecha->d, $fecha->h, $fecha->i);
    ?>               </div>
            </div>
                          
          </li>      

<?php            
        } elseif ($row["sender_userid"] == htmlspecialchars($_GET["rec"]) && $row["reciever_userid"] == htmlspecialchars($_GET["env"]) ) {
    ?>               
          <li class="clearfix">
            <div class="message-data align-right">
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

              <span class="message-data-name"><?php echo $norgo;?></span> <i class="fa fa-circle me"></i>
            </div>
            <div class="message me-message float-right"> <?php echo $row["message"];  ?>
                <div class="time">
                    <i class="fa fa-envelope"></i>&nbsp;&nbsp;<?php echo $emorg;?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-comment"></i>&nbsp;&nbsp;<?php echo $telorg;?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-calendar"></i>&nbsp;&nbsp;
              <?php 
                $fecha1 = new DateTime($row["timestamp"]);
                $fecha2 = new DateTime($fechitas);
                $fecha = $fecha1->diff($fecha2);
                printf('%d días, %d horas, %d minutos', $fecha->d, $fecha->h, $fecha->i);
    ?>               </div>
              </div>
              
          </li>   
<?php            
        }
        
        
        
	?>   
<?php    
//$sql = "UPDATE ".$tutu."_chat2 SET status='1' WHERE dona_id = '".htmlspecialchars($_GET['khat'])."' and status = '0'";
//if (mysqli_query($db, $sql)) { 
//    echo "Record updated successfully";
//} else {
//    echo "Error updating record: " . mysqli_error($db);
//}   
        
    }
} else {
    echo "Sin Mensajes";
}
            
          
            
?>    
<?php 
mysqli_free_result($result);
?>  
          <li><small>Ayudanos a ayudar...</small></li>
        </ul>
