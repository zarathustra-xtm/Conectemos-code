<div class="container">
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="#">Home</a>
            </li>
            <li class="active">Dashboard</li>
        </ul><!-- /.breadcrumb -->

    </div>
        <div class="page-header">
            <h1>
                Portada
                <small>
                    <i class="ace-icon fa fa-angle-double-right"></i>
                    Resumen y estadisticas.
                </small>
            </h1>
        </div><!-- /.page-header --> 
    <div class="page-content">
        
        
        <?php 
           $sql="SELECT user_id,social_id FROM ".$tutu."_susu where social_id like 'tiempo' and roola like 'orga' ";
            if ($result=mysqli_query($db,$sql))
              {
              // Return the number of rows in result set
              $orgtempo=mysqli_num_rows($result);
              // Free result set
              mysqli_free_result($result);
              }

        ?>         
        <?php 
           $sql="SELECT user_id,social_id FROM ".$tutu."_susu where social_id like 'dinero' and roola like 'orga' ";
            if ($result=mysqli_query($db,$sql))
              {
              // Return the number of rows in result set
              $orgdinero=mysqli_num_rows($result);
              // Free result set
              mysqli_free_result($result);
              }

        ?>             
        <?php 
           $sql="SELECT user_id,social_id FROM ".$tutu."_susu where social_id like 'recurso' and roola like 'orga' ";
            if ($result=mysqli_query($db,$sql))
              {
              // Return the number of rows in result set
              $orgrecurso=mysqli_num_rows($result);
              // Free result set
              mysqli_free_result($result);
              }

        ?> 
        <?php 
           $sql="SELECT user_id,social_id FROM ".$tutu."_susu where social_id not like 'recurso' and social_id not like 'dinero' and social_id not like 'tiempo' and roola like 'orga' ";
            if ($result=mysqli_query($db,$sql))
              {
              // Return the number of rows in result set
              $orgsino=mysqli_num_rows($result);
              // Free result set
              mysqli_free_result($result);
              }

        ?>                 
        <?php 
           $sql="SELECT id_org,n_org FROM ".$tutu."_org ";
            if ($result=mysqli_query($db,$sql))
              {
              // Return the number of rows in result set
              $org=mysqli_num_rows($result);
              // Free result set
              mysqli_free_result($result);
              }

        ?> 
        <?php 
           $sql="SELECT id_proeje,n_proeje FROM ".$tutu."_proeje ";
            if ($result=mysqli_query($db,$sql))
              {
              // Return the number of rows in result set
              $proeje=mysqli_num_rows($result);
              // Free result set
              mysqli_free_result($result);
              }

        ?>  
        <?php 
           $sql="SELECT id_proy,n_proy FROM ".$tutu."_proy ";
            if ($result=mysqli_query($db,$sql))
              {
              // Return the number of rows in result set
              $proy=mysqli_num_rows($result);
              // Free result set
              mysqli_free_result($result);
              }

        ?>
        <?php 
           $sql="SELECT id_insti,n_insti FROM ".$tutu."_insti ";
            if ($result=mysqli_query($db,$sql))
              {
              // Return the number of rows in result set
              $insti=mysqli_num_rows($result);
              // Free result set
              mysqli_free_result($result);
              }

        ?>        
        <div class="row">
            <div class="space-6"></div>
            <div class="col-xs-12 infobox-container">
               <h3>Usuarios Registrados segun su categor&iacute;a</h3>
               
                <div class="infobox infobox-green">

                    <div class="infobox-icon">
                        <i class="ace-icon fa fa-user"></i>
                    </div>

                    <div class="infobox-data">
                        <span class="infobox-data-number"><?php echo $orgtempo ; ?></span>
                        <div class="infobox-content"><a href="?enc=_22&tipo=tiempo" title="">Tiempo.</a></div>
                    </div>

                    <div class="stat stat-success">&nbsp;</div>

                </div>

                <div class="infobox infobox-green">

                    <div class="infobox-icon">
                        <i class="ace-icon fa fa-user"></i>
                    </div>

                    <div class="infobox-data">
                        <span class="infobox-data-number"><?php echo $orgdinero ; ?></span>
                        <div class="infobox-content"><a href="?enc=_22&tipo=dinero" title="">Dinero.</a></div>
                    </div>

                    <div class="stat stat-success">&nbsp;</div>

                </div>
 
                <div class="infobox infobox-green">

                    <div class="infobox-icon">
                        <i class="ace-icon fa fa-user"></i>
                    </div>

                    <div class="infobox-data">
                        <span class="infobox-data-number"><?php echo $orgrecurso ; ?></span>
                        <div class="infobox-content"><a href="?enc=_22&tipo=recurso" title="">Recurso.</a></div>
                    </div>

                    <div class="stat stat-success">&nbsp;</div>

                </div>
                <div class="infobox infobox-green">

                    <div class="infobox-icon">
                        <i class="ace-icon fa fa-user"></i>
                    </div>

                    <div class="infobox-data">
                        <span class="infobox-data-number"><?php echo $orgsino ; ?></span>
                        <div class="infobox-content"><a href="?enc=_22&tipo=sin_catego" title="">Sin Catego.</a></div>
                    </div>

                    <div class="stat stat-success">&nbsp;</div>

                </div>                
            </div>                                     
            <div class="space-6"></div>
            <div class="col-xs-12 infobox-container">
                           <h3>Organizaciones y Proyectos</h3>
                <div class="infobox infobox-green">

                    <div class="infobox-icon">
                        <i class="ace-icon fa fa-user"></i>
                    </div>

                    <div class="infobox-data">
                        <span class="infobox-data-number"><?php echo $org ; ?></span>
                        <div class="infobox-content"><a href="?enc=_18" title="">Organizaciones Reg.</a></div>
                    </div>

                    <div class="stat stat-success">&nbsp;</div>

                </div>

                <div class="infobox infobox-blue">
                    <div class="infobox-icon">
                        <i class="ace-icon fa fa-asterisk"></i>
                    </div>

                    <div class="infobox-data">
                        <span class="infobox-data-number"><?php echo $proeje ; ?></span>
                        <div class="infobox-content"><a href="?enc=_15">Proy. en Ejecuci&oacute;n</a></div>
                    </div>

                    <div class="badge badge-success">
                        &nbsp;
                        <i class="ace-icon fa fa-arrow-up"></i>
                    </div>
                </div>

                <div class="infobox infobox-pink">
                    <div class="infobox-icon">
                        <i class="ace-icon fa fa-cloud"></i>
                    </div>

                    <div class="infobox-data">
                        <span class="infobox-data-number"><?php echo $proy ; ?></span>
                        <div class="infobox-content"><a>Proyectos Registrados</a></div>
                    </div>
                    <div class="stat stat-important">&nbsp;</div>
                </div>
                <div class="infobox infobox-red">

                    <div class="infobox-icon">
                        <i class="ace-icon fa fa-user"></i>
                    </div>

                    <div class="infobox-data">
                        <span class="infobox-data-number"><?php echo $insti ; ?></span>
                        <div class="infobox-content"><a href="?enc=_17" title="">Instituciones Reg.</a></div>
                    </div>

                    <div class="stat stat-success">&nbsp;</div>

                </div>

            <div class="space-6"></div>
            <br>
            <h2><small> - Organizaciones por tipo - </small></h2>
        <?php       
        $query = "SELECT id_tiporg,n_tiporg FROM ".$tutu."_tiporg order by n_tiporg ASC ";
        $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
        $c = 1;
        if($result) {
        while($fila = mysqli_fetch_assoc($result)) {
        ?>                   
                <div class="infobox infobox-green s infobox-dark">
                    <div class="infobox-icon">
                        <i class="ace-icon fa fa-user"></i>
                    </div>
                    <div class="infobox-data">
                        <div class="infobox-content"><?php echo $fila['n_tiporg'];?></div>
                        <div class="infobox-content">
                                <?php 
                                   $sqla="SELECT id_org,tip_org FROM ".$tutu."_org where tip_org like '".$fila['id_tiporg']."'  ";
                                    if ($res=mysqli_query($db,$sqla))
                                      {
                                      // Return the number of rows sin result set
                                      $tipi=mysqli_num_rows($res);
                                      // Free result set
                                      mysqli_free_result($res);
                                      }
                                        echo $tipi ;
                                ?> 

                        </div>
                    </div>
                </div>

        <?php
        $c ++;                    
        }
        } 
        mysqli_free_result($result);
        ?>									


            </div>

            <div class="vspace-12-sm"></div>
   <style>
    .ttd{
        width: 10%;
    }
</style>         
            <div class="col-xs-12">
            <div class="space-6"></div>
            <br>
            <h2><small> - Resumen la contribuciones y solicitud de ayuda, ingresadas por las organizaciones registradas - </small></h2>            
								<!-- PAGE CONTENT BEGINS -->
								<div class="tabbable">
											<ul class="nav nav-tabs" id="myTab">
												<li class="active">
													<a data-toggle="tab" href="#home">
														&Uacute;ltimas contribuciones Ingresadas
													</a>
												</li>
												<li>
													<a data-toggle="tab" href="#ayuda">
														Solicitudes de Ayuda
													</a>
												</li>
												<li>
													<a data-toggle="tab" href="#messages">
														Contribuciones sin Asignar
													</a>
												</li>

												
											</ul>

											<div class="tab-content">
												<div id="home" class="tab-pane fade in active">
                                                    <div class="clearfix">
                                                        <div class="pull-right tableTools-container"></div>
                                                    </div>
                                                    <div class="table-header">
                                                        Todos los registros
                                                    </div>

                                                    <!-- div.table-responsive -->

                                                    <!-- div.dataTables_borderWrap -->
												
													<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>Tipo</th>
														<th>Empresa</th>														
														<th>Donaci&oacute;n</th>
														<th>Descripci&oacute;n</th>
                                                        <th>Costo</th>															
														<th>Fecha</th>
													</tr>
												</thead>

												<tbody>
                                                <?php   
                                                 $query = "SELECT id_dona,tip_dona,org_dona,dona_dona,desc_dona,cost_dona,fe_dona,st_dona,id_tayu,n_tayu,id_org,n_org,DATE_FORMAT(fe_dona,'%d/%m/%Y') AS mamar FROM ".$tutu."_dona inner join ".$tutu."_tayu on tip_dona = id_tayu inner join ".$tutu."_org on org_dona = id_org where st_dona like '1' order by tip_dona ASC limit 50 ";
                                                $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                                                if($result) {
                                                    $ss = 0 ;
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                ?> 
                                                       
	<tr>
														<td class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>
														<td>
															<a href="#" ><?php echo $row['n_tayu'] ; ?></a>
														</td>
														<td>
															<a href="#" ><?php echo $row['n_org'] ; ?></a>
														</td>														
														
														<td>
															<a href="#" ><?php echo $row['dona_dona'] ; ?></a>
														</td>														
														<td>
															<a href="#" ><?php echo $row['desc_dona'] ; ?></a>
														</td>
														<td class="ttd">
															<a href="#" >Q. <?php echo number_format($row['cost_dona'],2);
                                                        if ($row['st_dona'] != '0') {
                                                            $ss = $ss + $row['cost_dona'];    
                                                        } else {
                                                            
                                                        }
                                                        ?></a>
														</td>
														<td class="ttd">
															<a href="#" ><?php echo $row['mamar'] ; ?></a>
														</td>

													</tr>
                                                                                                                                                                       
                                 
                                                <?php                                                           
                                                    }
                                                }
                                                mysqli_free_result($result);
                                                ?> 												
												</tbody>
                                              <tfoot>

                                              </tfoot>												
											</table>
												</div>
												<div id="ayuda" class="tab-pane fade in ">
                                                    <div class="clearfix">
                                                        <div class="pull-right tableTools-container"></div>
                                                    </div>
                                                    <div class="table-header">
                                                        Todos los registros
                                                    </div>

                                                    <!-- div.table-responsive -->

                                                    <!-- div.dataTables_borderWrap -->
												
													<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>Tipo</th>
														<th>Empresa</th>														
														<th>Ayuda</th>
														<th>Descripci&oacute;n</th>
														<th>Fecha</th>
														<th>&nbsp;</th>
													</tr>
												</thead>

												<tbody>
                                                <?php   
                                                 $query = "SELECT id_solayu,tip_solayu,org_solayu,dona_solayu,desc_solayu,cost_solayu,fe_solayu,st_solayu,id_tayu,n_tayu,id_org,n_org,DATE_FORMAT(fe_solayu,'%d/%m/%Y') AS mamar FROM ".$tutu."_solayu inner join ".$tutu."_tayu on tip_solayu = id_tayu inner join ".$tutu."_org on org_solayu = id_org where st_solayu like '1' order by tip_solayu ASC limit 50 ";
                                                $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                                                if($result) { 
                                                    $ss = 0 ;
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                ?> 
                                                       
	<tr>
														<td class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>
														<td>
															<?php echo $row['n_tayu'] ; ?>
														</td>
														<td>
															<?php echo $row['n_org'] ; ?>
														</td>														
														
														<td>
															<?php echo $row['dona_solayu'] ; ?>
														</td>														
														<td>
															<?php echo $row['desc_solayu'] ; ?>
														</td>
														<td class="ttd">
															<?php echo $row['mamar'] ; ?>
														</td>
														<td>
                                                            <a href="?enc=_21&n=<?php echo $row['id_solayu'];?>"><span class="fa fa-list-alt" aria-hidden="true"></span></a>
														</td>														

													</tr>
                                                                                                                                                                       
                                 
                                                <?php                                                           
                                                    }
                                                }
                                                mysqli_free_result($result);
                                                ?> 												
												</tbody>
                                              <tfoot>

                                              </tfoot>												
											</table>
												</div>
												<div id="messages" class="tab-pane fade">
													<p>Se est&aacute; publicando esta secci&oacute;n.</p>
												</div>

												<div id="dropdown1" class="tab-pane fade">
													<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
												</div>

												<div id="dropdown2" class="tab-pane fade">
													<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.</p>
												</div>
											</div>
										</div>
	

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->     
							
<hr>							
							
<div class="col-sm-6">

</div>							
<div class="col-sm-6">
</div>							
       
        </div>									
    </div>
</div>
