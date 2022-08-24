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
<?php       
    $query = "SELECT user_id,social_id,picture FROM ".$tutu."_susu where user_id like '".$aid."'";
        $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
        if($result) {
            while($fila = mysqli_fetch_assoc($result)) {
                $nafsd = $fila['social_id'];
                $fepo = $fila['picture'];
            }
        } 
    mysqli_free_result($result);
?> 
<style>
    .kento {
        text-align: center !important;
    }
</style>
<div class="container">
<div class="space-20"></div>           
            <div class="page-header">
                <h1>
                    Portada
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Solicitudes de ayuda y domaciones
                    </small>
                </h1>
            </div><!-- /.page-header --> 
        <div class="page-content">
        <section class="sample-text-area">
            <div class="container">

                <p class="alert alert-success">
                    Bienvenido, en est&aacute; &aacute;rea encontraras una herramienta sencilla para dar a conocer cualquier requerimiento que tengas o bien aportar tu Dinero, Tiempo o Recurso y enlazarte con el país.
                </p>
            <div class="area-heading row">
                <div class="col-md-3 kento">
                    
                <?php
                    if ($nafsd == 'dinero'){
                 ?>
                    <img class="ttvb" src="http://enlazando.gt/assets/images/dinero.png"><br>Dinero
                <?php    
                    } elseif ($nafsd == 'tiempo'){
                 ?> 
                    <img class="ttvb" src="http://enlazando.gt/assets/images/tiempo.png"><br>Tiempo
                <?php    
                    } else {
                  ?>
                    <img class="ttvb" src="http://enlazando.gt/assets/images/mano.png"><br>Recurso
                <?php    
                    }
                 ?>
                    <hr>
                  Eje Tem&aacute;tico<br>
                <?php 
                    if ($fepo == 'covi'){
                 ?>
                    <strong>Construcci&oacute;n Vial</strong>
                <?php    
                    } elseif ($fepo == 'depo'){
                 ?> 
                    <strong>Deportes</strong>
                <?php    
                    } elseif ($fepo == 'emco'){
                  ?>
                    <strong>Empoderamiento Econ&oacute;mico</strong>
                <?php    
                    } elseif ($fepo == 'errvio'){
                  ?>
                    <strong>Erradicaci&oacute;n de la Violencia</strong>
                <?php    
                    } elseif ($fepo == 'meamn'){
                  ?>
                    <strong>Medio Ambiente</strong>
                <?php    
                    } elseif ($fepo == 'muj'){
                  ?>
                    <strong>Mujeres</strong>
                <?php    
                    } elseif ($fepo == 'nin'){
                  ?>
                    <strong>Ni&ntilde;ez</strong>
                <?php    
                    } elseif ($fepo == 'priin'){
                  ?>
                    <strong>Primera infancia</strong>
                <?php    
                    } elseif ($fepo == 'tree'){
                  ?>
                    <strong>Tercera Edad</strong>
                <?php    
                    } elseif ($fepo == 'otros'){
                  ?>
                    <strong>Otros</strong>
                <?php    
                    } else {
                        echo "No tiene Eje Tem&aacute;tico";
                    }
                 ?> <hr>
                </div>
                <div class="col-md-9">
                    <h4>Organizaciones o personas en tu Eje Tem&aacute;tico</h4>
                    
                    
                            <form action="#" method="get">
                <div class="input-group">
                    <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                    <input class="form-control" id="system-search" name="q" placeholder="filtra por" required>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                    </span>
                </div>
            </form>    
               	 <table class="table table-list-search">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Categor&iacute;a</th>
                            <th>Eje Tem&aacute;tico</th>
                            <th>tel&eacute;fono</th>
                            <th>email</th>
                            <th>Entry</th>
                        </tr>
                    </thead>    
                    <tbody>                     
                <?php    
                    
                 $queryu = "SELECT user_id,name,email,social_id,picture,id_org,n_org,tel_org,ema_org FROM ".$tutu."_susu inner join ".$tutu."_org on email = ema_org where picture like '$fepo' and user_id not like '$aid' ";
                $resultu = mysqli_query($db, $queryu) or trigger_error("Query Failed! SQL: $queryu - Error: ". mysqli_error($db), E_USER_ERROR);
                if($resultu) { 
                    $ssu = 0 ;
                    while($rowu = mysqli_fetch_assoc($resultu)) {
           
                    ?> 
                        <tr>
                            <td><?php echo $rowu['n_org'] ;?></td>
                            <td><?php echo $rowu['social_id'] ;?></td>
                            <td>
                                                <?php 
                    if ($rowu['picture'] == 'covi'){
                 ?>
                    <strong>Construcci&oacute;n Vial</strong>
                <?php    
                    } elseif ($rowu['picture'] == 'depo'){
                 ?> 
                    <strong>Deportes</strong>
                <?php    
                    } elseif ($rowu['picture'] == 'emco'){
                  ?>
                    <strong>Empoderamiento Econ&oacute;mico</strong>
                <?php    
                    } elseif ($rowu['picture'] == 'errvio'){
                  ?>
                    <strong>Erradicaci&oacute;n de la Violencia</strong>
                <?php    
                    } elseif ($rowu['picture'] == 'meamn'){
                  ?>
                    <strong>Medio Ambiente</strong>
                <?php    
                    } elseif ($rowu['picture'] == 'muj'){
                  ?>
                    <strong>Mujeres</strong>
                <?php    
                    } elseif ($rowu['picture'] == 'nin'){
                  ?>
                    <strong>Ni&ntilde;ez</strong>
                <?php    
                    } elseif ($rowu['picture'] == 'priin'){
                  ?>
                    <strong>Primera infancia</strong>
                <?php    
                    } elseif ($rowu['picture'] == 'tree'){
                  ?>
                    <strong>Tercera Edad</strong>
                <?php    
                    } elseif ($rowu['picture'] == 'otros'){
                  ?>
                    <strong>Otros</strong>
                <?php    
                    } else {
                        echo "No tiene Eje Tem&aacute;tico";
                    }
                 ?>
                            </td>
                            <td><?php echo $rowu['tel_org'] ;?></td>
                            <td><?php echo $rowu['ema_org'] ;?></td>
                            <td><a href="?enc=_detsol&org=<?php echo $rowu['id_org'] ;?>" class="btn btn-info">Ver solicitudes</a></td>
                        </tr>
                <?php    
                      
                    }
                }
                mysqli_free_result($resultu);
                ?>  
                    </tbody>
                </table>                         
<script>
    $(document).ready(function() {
    var activeSystemClass = $('.list-group-item.active');

    //something is entered in search form
    $('#system-search').keyup( function() {
       var that = this;
        // affect all table rows on in systems table
        var tableBody = $('.table-list-search tbody');
        var tableRowsClass = $('.table-list-search tbody tr');
        $('.search-sf').remove();
        tableRowsClass.each( function(i, val) {
        
            //Lower text for case insensitive
            var rowText = $(val).text().toLowerCase();
            var inputText = $(that).val().toLowerCase();
            if(inputText != '')
            {
                $('.search-query-sf').remove();
                tableBody.prepend('<tr class="search-query-sf"><td colspan="6"><strong>Searching for: "'
                    + $(that).val()
                    + '"</strong></td></tr>');
            }
            else
            {
                $('.search-query-sf').remove();
            }

            if( rowText.indexOf( inputText ) == -1 )
            {
                //hide rows
                tableRowsClass.eq(i).hide();
                
            }
            else
            {
                $('.search-sf').remove();
                tableRowsClass.eq(i).show();
            }
        });
        //all tr elements are hidden
        if(tableRowsClass.children(':visible').length == 0)
        {
            tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="6">No entries found.</td></tr>');
        }
    });
});
</script>                   
                    

                </div>
            </div>                 
            <div class="area-heading row">
                <div class="col-md-3">
                    
                    <div class="card">
                        <article class="card-group-item">
                            <header class="card-header "><h6 class="title tooltipss">Tus solicitudes de ayuda <i class="fa fa-commenting " aria-hidden="true">
</i><div class="right">
                                    <p>Aqu&iacute; encontrar&aacute;s  todas las solicitudes ingresadas por los usuarios registrados en esta plataforma por favor enlazate y ayudanos a ayudar. </p>
                                </div>	
                           </h6>
                            </header>
                            <div class="filter-content">
                                <div class="list-group list-group-flush">
                                    <?php      
                                         $query = "SELECT id_tayu,n_tayu FROM ".$tutu."_tayu order by n_tayu ASC ";
                                        $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                                        if($result) {
                                            while($row = mysqli_fetch_assoc($result)) {
                                                $sql="SELECT tip_solayu,st_solayu FROM ".$tutu."_solayu where tip_solayu like '".$row['id_tayu']."' and st_solayu like '1' and org_solayu not like '".$orgo."'";
                                                    if ($res=mysqli_query($db,$sql))
                                                      {
                                                      // Return the number of rows in result set
                                                      $rowcount=mysqli_num_rows($res);
                                                      // Free result set
                                                      mysqli_free_result($res);
                                                      }
                                    ?>                 
                                        <a href="?n=<?php echo $row['id_tayu'];?>" class="list-group-item"><?php echo $row['n_tayu'];?> <span class="float-right badge badge-light round"><?php echo $rowcount;?></span> </a>
                                    <?php
                                           }
                                                mysqli_free_result($result);                
                                                        }    
                                    ?>                  
                                </div>  <!-- list-group .// -->
                            </div>
                        </article> <!-- card-group-item.// -->
                    </div> <!-- card.// -->
                    <hr>
                  
                </div>
                <div class="col-md-9">
                    <?php
                        if ($_GET['n'] ) {
                    ?>
             
<style>
    .piruru {
      text-align: center !important;
      vertical-align: middle !important;
    }
    .va {
        vertical-align: middle !important;
    }
    .on {
        color: green;
        font-size: 10px;
    }
    .of {
        color: grey;
        font-size: 10px;        
    }
    .cano {
        color: green !important;
    }
</style>
	<div class="panel panel-default">
					<div class="panel-body">
										<div class="table-header">
											Todos los registros
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
										
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="piruru">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>Solicitud</th>
														<th>Solicitante</th>
														<th>Fecha</th>                                                        
                                                   	    <th>&nbsp;</th>		
													</tr>
												</thead>

												<tbody>
                                                    
                    <?php                       
                         $query = "SELECT id_solayu,ema_org,tip_solayu,org_solayu,dona_solayu,desc_solayu,fe_solayu,st_solayu,id_org,n_org,DATE_FORMAT(fe_solayu,'%d/%m/%Y') AS ingre,user_id,email,status,online FROM ".$tutu."_solayu inenr join ".$tutu."_org on org_solayu = id_org inner join ".$tutu."_susu on ema_org = email  where st_solayu like '1' and tip_solayu like '".htmlspecialchars($_GET['n'])."' and org_solayu not like '".$orgo."' and status like '1' ";
                        $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                        if($result) {
                            while($row = mysqli_fetch_assoc($result)) {
                    ?>                     
									<tr >
										<td class="piruru" >
											<a class="star">
												<i class="glyphicon glyphicon-star"></i>
											</a>
										</td>                        
										<td>
                                            <h4 class="title">
                                                <?php echo $row['dona_solayu'];?>
                                            </h4>
                                            <p class="summary"><?php echo $row['desc_solayu'];?></p>
										</td>     
                                        <td class="va">
                                            <?php echo $row['n_org'];
                                
                                                 if ( $row['online'] == '1') {
                                            ?><br>
                                            <span class="on">&#9679; en l&iacute;nea</span>
                                            <?php                                            
                                                 } else {
                                            ?><br>
                                            <span class="of">&#9679; ausente</span>                                            
                                            <?php                                                                                                 
                                                 }
                                
                                            ?>
                                        </td>
                                        <td class="va">
                                            <?php echo $row['ingre'];?>                 
                                        </td>
                                        <td class="piruru">
											<a class="cano tooltipss" href="?enc=_det&a=<?php echo $row['id_solayu'];?>" target="_self">
												<i class="glyphicon glyphicon-link"></i>
                                                <div class="bottom">
                                                    <p>Has clic para enlazarte.</p>
                                                </div>	                                                
											</a>                                            
                                        </td>
								</tr>                   
                    <?php
                               }
                                  mysqli_free_result($result);                
                           }    
                    ?>                                                       
                                                    
      												
												</tbody>
                                              <tfoot>

                                              </tfoot>												
											</table>
										</div>                           
                        
                        
						<div class="table-container">
							<table class="table table-filter">
								<tbody>


	
								</tbody>
							</table>
						</div>
					</div>
				</div>                                            
                    <?php        
                        } else {
                    ?>
                        <?php                       
                             $query = "SELECT id_nota,ti_nota,nota_nota,vid_nota FROM ".$tutua."_notas where id_nota like '70' ";
                            $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                            if($result) {
                                while($row = mysqli_fetch_assoc($result)) {
                        ?>                     
                                           <h4><?php echo $row['ti_nota'];?></h4>
                                            <p><?php echo $row['nota_nota'];?></p>
                    <?php
                                    $idd = $row['id_nota'];
                               }
                                    mysqli_free_result($result);                
                                            }    
                        ?>     
                    <?php        
                        } 
                    ?>
                </div>
            </div>                
            <hr /> 
            <div class="area-heading row">                
                            <header class="card-header "><h6 class="title tooltipss">Donaciones <i class="fa fa-commenting " aria-hidden="true"></i><div class="right">
                                    <p>Aqu&iacute; encontrar&aacute;s  donaciones ingresadas por los usuarios registrados en esta plataforma por favor enlazate y ayudanos a ayudar. </p>
                                </div>	
                           </h6>
                            </header>  
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-xs-12">
										<h3 class="header smaller lighter blue">Contribuciones varias de los Usuarios </h3>

										<div class="table-header">
											Todos los registros
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
										
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
														<th>Donaci&oacute;n</th>
														<th>Descripci&oacute;n</th>
                                                        <th>Costo</th>															
														<th>Fecha</th>
                                                        <th>Enlazate</th>	                                                        							
													</tr>
												</thead>

												<tbody>
                                                <?php   
                                                 $query = "SELECT id_dona,tip_dona,org_dona,dona_dona,desc_dona,cost_dona,fe_dona,st_dona,id_tayu,n_tayu,DATE_FORMAT(fe_dona,'%d/%m/%Y') AS mamar FROM ".$tutu."_dona inner join ".$tutu."_tayu on tip_dona = id_tayu  where org_dona not like '$orgo' and st_dona like '1' order by tip_dona ASC ";
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
														<td class="ttd">
                                                           <a title="Clic para Enlazarte" class="tooltipss" data-rel="tooltip" href="?enc=_det3&a=<?php echo $row['id_dona'];?>">
                                                                <span class="label label-sm label-success">Enlazate</span>
                                                                                                               <div class="bottom">
                                                    <p>Has clic para enlazarte.</p>
                                                </div>	                                                

                                                            </a>
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
									</div>
								</div>

	

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
						                  
                </div>
                <p class="alert alert-info">
                    Pronto publicaremos herramientas que se adaptar&aacute;n a tus necesidades.
                </p>                
            </div>
        </section>
        <!-- End Sample Area -->         
    </div>
</div>
		<!-- page specific plugin scripts -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="assets/js/dataTables.buttons.min.js"></script>
		<script src="assets/js/buttons.flash.min.js"></script>
		<script src="assets/js/buttons.html5.min.js"></script>
		<script src="assets/js/buttons.print.min.js"></script>
		<script src="assets/js/buttons.colVis.min.js"></script>
		<script src="assets/js/dataTables.select.min.js"></script>


		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null,
					  { "bSortable": false },
                      null,                  
                        { "bSortable": false },
                      null,                  
                        { "bSortable": false }
					],
					"aaSorting": [],
					
					
					//"bProcessing": true,
			        //"bServerSide": true,
			        //"sAjaxSource": "http://127.0.0.1/table.php"	,
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			
			
					select: {
						style: 'multi'
					}
			    } );
			
				
				
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					  {
						"extend": "colvis",
						"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
						"className": "btn btn-white btn-primary btn-bold",
						columns: ':not(:first):not(:last)'
					  },
					  {
						"extend": "copy",
						"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "csv",
						"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "excel",
						"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "pdf",
						"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: false,
						message: 'This print was produced using the Print button for DataTables'
					  }		  
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
				
				
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});
			
				////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});
			
			
			
				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				
				
				
				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/***************/
				
				
				
				
				
				/**
				//add horizontal scrollbars to a simple table
				$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
				  {
					horizontal: true,
					styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
					size: 2000,
					mouseWheelLock: true
				  }
				).css('padding-top', '12px');
				*/
			
			
			})
		</script>
		
