<?php
    if( isset($_GET['ste']) )
         { 
            $sql = "UPDATE ".$tutu."_dona SET stella_dona='".htmlspecialchars($_GET['ste'])."' WHERE id_dona like '".htmlspecialchars($_GET['don'])."' ";
            if ($db->query($sql) === TRUE) {
                echo "Record updated successfully";
                    } else {
                        echo "Error updating record: " . $db->error;
                    }
        }
?> 
<style>
    .ttd{
        width: 10%;
    }
</style>
<?php                       
    $sql = "SELECT *,DATE_FORMAT(descu_org,'%d/%m/%Y') AS faco FROM ".$tutu."_org inner join ".$tutu."_paises on pais_org = iso_enla inner join ".$tutu."_tiporg on tip_org = id_tiporg inner join ".$tutu."_oborg on obge_org = id_oborg inner join ".$tutu."_fufi on fuein_org = id_fufi where ema_org like '".$ema."'";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $empe = $row['id_org'] ;
        }
    }
    mysqli_free_result($result);
?>   

<div class="container">
    <div class="space-24"></div>   
    <div class="row">
        <div class="page-header">
            <h1>
                Donaciones Recibidas ordenadas por solicitud
                <small>
                    <i class="ace-icon fa fa-angle-double-right"></i>
                </small>
            </h1>
        </div>
<?php                       
    $sql = "SELECT id_solayu,tip_solayu,org_solayu,dona_solayu,desc_solayu,fe_solayu,st_solayu,DATE_FORMAT(fe_solayu,'%d/%m/%Y') AS faco FROM ".$tutu."_solayu where org_solayu like '".$empe."' order by id_solayu Desc ";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
?>       
											<div class="timeline-container">
												<div class="timeline-label">
													<!-- #section:pages/timeline.label -->
														<div class="search-filter-header bg-primary">
															<h5 class="smaller no-margin-bottom">
																<i class="ace-icon fa fa-sliders light-green bigger-130"></i>&nbsp; <?php echo $row['dona_solayu'] ; ?> <?php echo $row['desc_solayu'] ; ?> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Solicitado el : <?php echo $row['faco'] ; ?>
															</h5>
														</div>
													<!-- /section:pages/timeline.label -->
												</div>

												<div class="timeline-items">
													<!-- #section:pages/timeline.item -->

            <?php   
             $queryt = "SELECT   id_asig,ayusol_asig,conti_asig,asig_asig,st_asig,confi_asig,id_dona,tip_dona,org_dona,dona_dona,desc_dona,cost_dona,fe_dona,st_dona,stella_dona,asig_dona,id_tayu,n_tayu,id_org,n_org,DATE_FORMAT(asig_asig,'%d/%m/%Y') AS mamar,DATE_FORMAT(fe_dona,'%d/%m/%Y') AS mamo FROM ".$tutu."_asig inner join ".$tutu."_dona on conti_asig = id_dona inner join ".$tutu."_tayu on tip_dona = id_tayu inner join ".$tutu."_org on org_dona = id_org where st_asig like '1' and ayusol_asig like '".$row['id_solayu']."' and confi_asig like 'Si' order by id_asig Desc ";
            $resultt = mysqli_query($db, $queryt) or trigger_error("Query Failed! SQL: $queryt - Error: ". mysqli_error($db), E_USER_ERROR);
            if($resultt) { 
                $ss = 0 ;
                while($rowt = mysqli_fetch_assoc($resultt)) {
            ?> 	 

					<div class="timeline-item clearfix">
                        <!-- #section:pages/timeline.info -->
                        <div class="timeline-info">
                            <i class="timeline-indicator ace-icon fa fa-cutlery btn btn-success no-hover"></i>
                        </div>

                        <!-- /section:pages/timeline.info -->
                        <div class="widget-box transparent">
                            <div class="widget-header widget-header-small">
                                <h5 class="widget-title smaller">
                                    <a href="#" class="blue"><?php echo $rowt['n_org'] ; ?></a>
                                    <span class="grey">Tipo: <?php echo $rowt['n_tayu'] ; ?></span>
                                </h5>

                                <span class="widget-toolbar no-border">
                                    <?php echo $rowt['mamar'] ; ?>
                                </span>

                                <span class="widget-toolbar">
                                    <a href="#" data-action="collapse">
                                        <i class="ace-icon fa fa-chevron-up"></i>
                                    </a>
                                </span>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">
                                    <?php echo $rowt['dona_dona'] ; ?> - 
                                    <?php echo $rowt['desc_dona'] ; ?><br>
                                    Costo de la Donaci&oacute;n: Q. <?php echo number_format($rowt['cost_dona'],2);
                                        if ($rowt['st_dona'] != '0') {
                                            $ss = $ss + $rowt['cost_dona'];    
                                        } else {

                                        }
                                        ?>
                                    <div class="space-6"></div>

                                    <div class="widget-toolbox clearfix">
                                        <div class="pull-left">
                                        </div>

                                        <!-- #section:custom/extra.action-buttons -->
                                        <div class="pull-right action-buttons">
                                          <style>
                                              .valoracion {
                                                    position: relative;
                                                    overflow: hidden;
                                                    display: inline-block;
                                                }
                                                .valoracion .a {
                                                    float: right;
                                                    color: #c1b8b8;
                                                    font-size: 30px; 
                                                }
                                                .valoracion .a:hover,
                                                .valoracion .a:hover ~ .a,
                                                .valoracion .a:checked ~ .a {
                                                    color:crimson;
                                                }
                                                .valoracion .aga {
                                                    
                                                    font-size: 30px;                                                       
                                                  color:crimson;
                                              }
                                          </style>
                                           <div class="valoracion">
                                               <?php
                                                    if ($rowt['stella_dona'] == '0'){
                                                ?>   
                                                <a href="?enc=_recib&ste=5&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a><a href="?enc=_recib&ste=4&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a><a href="?enc=_recib&ste=3&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a><a href="?enc=_recib&ste=2&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a><a href="?enc=_recib&ste=1&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a>                                                       
                                                <?php
                                                    } elseif ($rowt['stella_dona'] == '1'){
                                                ?>
                                                <a class="aga">★</a><a href="?enc=_recib&ste=5&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a><a href="?enc=_recib&ste=4&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a><a href="?enc=_recib&ste=3&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a><a href="?enc=_recib&ste=2&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a>                                                
                                                <?php
                                                    } elseif ($rowt['stella_dona'] == '2'){
                                                ?>
                                                <a class="aga">★</a><a class="aga">★</a><a href="?enc=_recib&ste=5&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a><a href="?enc=_recib&ste=4&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a><a href="?enc=_recib&ste=3&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a>                                                     
                                                <?php
                                                    } elseif ($rowt['stella_dona'] == '3'){
                                                ?>
                                                <a class="aga">★</a><a class="aga">★</a><a class="aga">★</a><a href="?enc=_recib&ste=5&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a><a href="?enc=_recib&ste=4&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a>                                                     
                                                <?php
                                                    } elseif ($rowt['stella_dona'] == '4'){
                                                ?>
                                                <a class="aga">★</a><a class="aga">★</a><a class="aga">★</a><a class="aga">★</a><a href="?enc=_recib&ste=5&don=<?php echo $rowt['id_dona'] ; ?>" class="a">★</a>                                                     
                                                <?php
                                                    } elseif ($rowt['stella_dona'] == '5'){
                                                ?>
                                                <a class="aga">★</a><a class="aga">★</a><a class="aga">★</a><a class="aga">★</a><a class="aga">★</a>                                                     
                                                <?php
                                                    }
                                                ?>
                                                
                                            </div>
                                           <!--   <a href="#">
                                                <i class="ace-icon fa fa-check green bigger-130"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-pencil blue bigger-125"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-times red bigger-125"></i>
                                            </a>-->
                                        </div>

                                        <!-- /section:custom/extra.action-buttons -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php                                                           
                }
            }
            mysqli_free_result($resultt);
            ?> 
													<!-- /section:pages/timeline.item -->
								</div><!-- /.timeline-items -->
											</div><!-- /.timeline-container -->            
<?php                                   
        }
    }
    mysqli_free_result($result);
?>       
    </div>
</div>