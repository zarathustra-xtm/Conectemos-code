<?php   
    $querys = "SELECT id_org,ema_org FROM ".$tutu."_org where ema_org like '".$ema."' ";
        $results = mysqli_query($db, $querys) or trigger_error("Query Failed! SQL: $querys - Error: ". mysqli_error($db), E_USER_ERROR);
        if($results) {
            while($rowa = mysqli_fetch_assoc($results)) {
                $orgo = $rowa['id_org'] ;
            }
        }
    mysqli_free_result($results);
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
    .molto {
        padding: 10px;
    }
    .lsa{
        width: 100%;
        height: auto;
    }
</style>
    


<div class="container">
<div class="space-20"></div>           
            <div class="page-header">
                <h1>
                    Enlazando
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Escribe y apoya
                    </small>
                    <br>
                </h1>
            </div><!-- /.page-header --> 
        <div class="page-content">
		<div class="panel-body">
            <div class="area-heading row">
                <div class="col-md-3">
										<div class="widget-box">
											<div class="widget-header widget-header-flat">
												<h4 class="widget-title smaller">
													<i class="ace-icon fa fa-quote-left smaller-80"></i>
													Tu solocitud
												</h4>
											</div>

											<div class="widget-body">                    
                    <style>
@import url(https://fonts.googleapis.com/css?family=Oswald:400,300);
@import url(https://fonts.googleapis.com/css?family=Open+Sans);


.iamgurdeep-pic {
    position: relative;
}
.username {
    bottom: 0;
    color: #ffffff;
    padding: 30px 15px 4px;
    position: absolute;
    width: 100%;
    text-shadow: 1px 1px 2px #000000;
    
background: -moz-linear-gradient(top, rgba(0,0,0,0) 0%, #2d2c41 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, rgba(0,0,0,0) 0%, #2d2c41 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, rgba(0,0,0,0) 0%, #2d2c41 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#a64d4d4d',GradientType=0 ); /* IE6-9 */
}
.iamgurdeeposahan {
    border-radius: 4px 4px 0 0;
}
.username > h2 {
    font-family: oswald;
    font-size: 27px;
    font-weight: lighter;
    margin: 31px 0 4px;
    position: relative;
    text-shadow: 1px 1px 2px #000000;
    text-transform: uppercase;
}
.username > h2 small {
    color: #ffffff;
    font-family: open sans;
    font-size: 13px;
    font-weight: 400;
    position: relative;
}
.username .fa{
    color: #ffffff;
    font-size: 14px;
    margin: 0 0 0 4px;
    position: static;
}
.edit-pic a {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: 1px solid #ffffff;
    border-radius: 50%;
    color: #ffffff;
    font-size: 21px;
    height: 39px;
    line-height: 38px;
    margin: 8px;
    text-align: center;
    width: 39px;
    -webkit-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
	transition: all 0.4s ease;
    text-decoration: none !important;
     display: list-item;
     background-color: rgba(255, 255, 255, 0.1)
}
.edit-pic a:hover {
   font-size: 17px;
   opacity: 0.9;
  }
.edit-pic a:focus {
   background:#b63b4d;
    color: #fff;
    border: 1px solid #b63b4d;
}
a:focus {
    outline: none;
    outline-offset: 0px;
}
.edit-pic {
    position: absolute;
    right: 0;
    top: 0;
    opacity: 0;
    -webkit-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
    transition: all 0.4s ease;
}
.tags {
    background: rgba(255, 255, 255, 0.1) none repeat scroll 0 0;
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 2px;
    display: inline-block;
    font-size: 13px;
    margin: 4px 0 0;
    padding: 2px 5px;
     -webkit-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
    transition: all 0.4s ease;
}
.tags:hover {
    background: rgba(255, 255, 255, 0.3) none repeat scroll 0 0;
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-radius: 2px;
    display: inline-block;
    font-size: 13px;
    margin: 4px 0 0;
    padding: 2px 5px;
}
#accordion:hover .edit-pic {
    opacity: unset;
    -webkit-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
    transition: all 0.4s ease;
}


.btn-o {
    
    background-color: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-radius: 2px;
    color: #ffffff !important;
    display: inline-block;
    font-family: open sans;
    font-size: 15px !important;
    font-weight: normal !important;
    margin: 0 0 10px;
    padding: 5px 11px;
    text-decoration: none !important;
    text-transform: uppercase;
    
   background-color: rgba(255, 255, 255, 0.1);
    -webkit-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
    transition: all 0.4s ease;
}
.btn-o:hover {
  background-color: rgba(255, 255, 255, 0.4);
    color: #fff !important;
  }
.btn-o:focus {
   background:#b63b4d;
    color: #fff;
    border: 1px solid #b63b4d;
}
.submenuco .iamgurdeeposahan {
    background: rgba(255, 255, 255, 0.1) none repeat scroll 0 0 !important;
    border-radius: 50%;
    height: 60px;
    padding: 2px;
    width: 60px;
}
.photosgurdeep > a {
    background: #ffffff none repeat scroll 0 0;
    border-radius: 50%;
    display: inline-block !important;
    padding: 0 !important;
}
.view-all {
    background: rgba(255, 255, 255, 0.1) none repeat scroll 0 0 !important;
    border: 1px solid;
    float: right;
    font-family: oswald;
    font-size: 26px;
    height: 60px;
    line-height: 61px;
    text-align: center;
    width: 60px;
}
.photosgurdeep {
    padding: 10px 9px 4px 35px;
}
ul {
	list-style-type: none;
}

a {
	color: #b63b4d;
	text-decoration: none;
}

/** =======================
 * Contenedor Principal
 ===========================*/
h1 {
 	color: #FFF;
 	font-size: 24px;
 	font-weight: 400;
 	text-align: center;
 	margin-top: 40px;
 }

h1 a {
 	color: #c12c42;
 	font-size: 16px;
 }

 .accordion {
 	width: 100%;
 	max-width: 360px;
 	margin: 30px auto 20px;
 	background: #FFF;
 	-webkit-border-radius: 4px;
 	-moz-border-radius: 4px;
 	border-radius: 4px;
 }

.accordion .link {
	cursor: pointer;
	display: block;
	padding: 15px 15px 15px 42px;
	color: #4D4D4D;
	font-size: 14px;
	font-weight: 700;
	border-bottom: 1px solid #CCC;
	position: relative;
	-webkit-transition: all 0.4s ease;
	-o-transition: all 0.4s ease;
	transition: all 0.4s ease;
}

.accordion li:last-child .link {
	border-bottom: 0;
}

.accordion li i {
	position: absolute;
	top: 16px;
	left: 12px;
	font-size: 18px;
	color: #595959;
	-webkit-transition: all 0.4s ease;
	-o-transition: all 0.4s ease;
	transition: all 0.4s ease;
}

.accordion li i.fa-chevron-down {
	right: 12px;
	left: auto;
	font-size: 16px;
}

.accordion li.open .link {
	color: #b63b4d;
}

.accordion li.open i {
	color: #b63b4d;
}
.accordion li.open i.fa-chevron-down {
	-webkit-transform: rotate(180deg);
	-ms-transform: rotate(180deg);
	-o-transform: rotate(180deg);
	transform: rotate(180deg);
}

.accordion li.default .submenuco {display: block;}
/**
 * submenuco
 -----------------------------*/
 .submenuco {
 	display: none;
 	background: #444359;
 	font-size: 14px;
 }

 .submenuco li {
 	border-bottom: 1px solid #4b4a5e;
 }

 .submenuco a {
 	display: block;
 	text-decoration: none;
 	color: #d9d9d9;
 	padding: 12px;
 	padding-left: 42px;
 	-webkit-transition: all 0.25s ease;
 	-o-transition: all 0.25s ease;
 	transition: all 0.25s ease;
 }

 .submenuco a:hover {
 	background: #b63b4d;
 	color: #FFF;
 }
.nava.navbar-navpipi .dropdowna-toggle {
    padding: 0 !important;
}

.dropdowna-toggle span {
    background: rgba(255, 255, 255, 0.1) none repeat scroll 0 0;
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-radius: 50px;
    font-size: 23px !important;
    height: 38px;
    line-height: 40px;
    margin: 0 !important;
    padding: 0 !important;
    text-align: center;
    width: 38px;
    text-shadow:none !important;
}

.nava.navbar-navpipi {
    bottom: 10px;
    position: absolute;
    right: 12px;
    transition: all 0.4s ease 0s;
}

.navbar-navpipi > li > .dropdowna-menu {
    border-radius: 2px !important;
    margin-top: 10px;
    min-width: 101px;
    padding: 0;
}
.navbar-navpipi > li > .dropdowna-menu li a {
    color: #333333 !important;
    font-size: 13px !important;
    font-weight: 600 !important;
    padding: 2px 8px !important;
    text-align: right !important;
    text-shadow:none !important;
}
.dropdowna-toggle {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0 !important;
    font-size: 15px !important;
}

.dropdowna {
  -webkit-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
    transition: all 0.4s ease;
}
.dropdowna-menu>li>a {
    color:#428bca;
    -webkit-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
    transition: all 0.4s ease;
}
.dropdowna ul.dropdowna-menu {
    border-radius:4px;
    box-shadow:none;
}
.dropdowna ul.dropdowna-menu:before {
    content: "";
    border-bottom: 10px solid #fff;
    border-right: 10px solid transparent;
    border-left: 10px solid transparent;
    position: absolute;
    top: -8px;
    right: 8px;
    z-index: 10;
}
                        
                    </style>                    
	
        <?php                       
             $query = "SELECT id_solayu,ema_org,tip_solayu,org_solayu,dona_solayu,desc_solayu,fe_solayu,st_solayu,id_org,n_org,tel_org,ema_org,logo_org,dir_org,DATE_FORMAT(fe_solayu,'%d/%m/%Y') AS ingre,user_id,email,status,online FROM ".$tutu."_solayu inenr join ".$tutu."_org on org_solayu = id_org inner join ".$tutu."_susu on ema_org = email  where st_solayu like '1' and id_solayu like '".htmlspecialchars($_GET['a'])."' and org_solayu like '".$orgo."' and status like '1' ";
            $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
            if($result) {
                while($row = mysqli_fetch_assoc($result)) {
            $emp = $row['n_org'] ;
            $sol = $row['dona_solayu'] ;
            $des = $row['desc_solayu'] ;  
            $reo = htmlspecialchars($_GET['s']) ; 
            $ayu = $row['id_solayu'] ;
            $idemp = $row['id_org'] ;                    
          ?>                     
	<!-- Contenedor -->
	<ul id="accordion" class="accordion">
    <li>
<div class="col col_4 iamgurdeep-pic">
                   <?php 
                        if ($row['logo_org'] == '')
                        {
                   ?>
                        <img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" alt="<?php echo $row['n_org'];?>" id="avatar2" src="assets/images/_nologo.jpg" />
                   <?php        
                        }else{
                   ?>
                        <img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" alt="<?php echo $row['n_org'];?>" id="avatar2" src="../imggall/org_<?php echo $idemp;?>/<?php echo $row['logo_org'];?>" />
                   <?php        

                        }
                    ?>    

<div class="username">
    
    <?php
         if ( $row['online'] == '0') {
        ?>                        
            <a class="btn-o"> <i class="fa fa-user-plus"></i> Ofline </a>    
        <?php                        
         } else {
        ?>                        
        <a class="btn-o"> <i class="fa fa-user-plus"></i> Activo</a>
        <?php                         
         }
    ?>     
   
</div>
    
</div>
    
<div class="widget-main">


        <div class="row">
            <div class="col-xs-12">
                <blockquote>
                    <p class="lighter line-height-125">
                        <?php echo $row['dona_solayu'];?>
                    </p>

                    <small>

                        <cite title="Source Title"><?php echo $row['desc_solayu'];?></cite>
                    </small>
                </blockquote>
            </div>
        </div>

    </div>        
        
        
    </li>

	</ul>
<?php
           }
              mysqli_free_result($result);                
       }    
?>        

                                            </div>
                    </div>
 <script>
$(function() {
    var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdowna)
	}

	Accordion.prototype.dropdowna = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenuco').not($next).slideUp().parent().removeClass('open');
		};
	}	

	var accordion = new Accordion($('#accordion'), false);
});     
</script>                       
                    
                </div>
    <div class="col-md-9">
         <h3>Persona y Empresas que quieren enlzarse con tigo.</h3>
         <hr>
          <ul >               
                <?php 
                    $sqlrr = "SELECT chatid,ayu_id,sender_userid,reciever_userid,message,timestamp,status,id_org,n_org FROM ".$tutu."_chat inner join ".$tutu."_org on sender_userid = id_org where reciever_userid like '".$orgo."' and ayu_id like '".htmlspecialchars($_GET['a'])."' group by reciever_userid ";
                        $resultrr = mysqli_query($db, $sqlrr);
                        if (mysqli_num_rows($resultrr) > 0) {
                            while($rowrr = mysqli_fetch_assoc($resultrr)) {
                                
                            $sql="SELECT chatid FROM ".$tutu."_chat where reciever_userid like '".$orgo."' and ayu_id like '".htmlspecialchars($_GET['a'])."' and status like '0' ";
                                if ($result=mysqli_query($db,$sql))
                                  {
                                  // Return the number of rows in result set
                                  $orgtempo=mysqli_num_rows($result);
                                  // Free result set
                                  mysqli_free_result($result);
                                  }
                ?>                                
                                
            <li><a href="?enc=_det2time&a=<?php echo htmlspecialchars($_GET['a']);?>&s=<?php echo $rowrr['sender_userid'];?>"><?php echo $rowrr['n_org'] ; ?><span class="badge pull-right"> Total de Mensajes nuevos: <?php echo $orgtempo ; ?> </span></a></li>
            <li class="divider"></li>    
                <?php                                                         
                            }
                        } else {
                            echo "Sin Mensajes";
                        }
                    mysqli_free_result($resultrr);
                ?> 



          </ul>


    </div>
    </div>                


            
        </div>

        <section class="sample-text-area">
            
            <div class="container">

            <div class="area-heading row">
                <div class="col-md-3">
                    


                    <hr>
                </div>
                <div class="col-md-9">
             
 

                </div>
            </div>                
            <hr />                  
            </div>
        </section>
        <!-- End Sample Area -->         
    </div>
</div>