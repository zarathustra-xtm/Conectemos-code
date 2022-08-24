<?php
    if( isset($_POST['into']) )
         { 
            $sql = "INSERT INTO ".$tutu."_asig (ayusol_asig,conti_asig,us_asig) VALUES ('$_POST[ayusol_asig]','$_POST[conti_asig]','$aid')";

            if ($db->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $db->error;
            }
            $sql = "UPDATE ".$tutu."_dona SET st_dona = '2',asig_dona = '1' WHERE id_dona like '".$_POST['conti_asig']."' ";

            if ($db->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $db->error;
            }        

        }
?>
<?php
    if( isset($_GET['des']) )
         { 
            $sql = "UPDATE ".$tutu."_asig SET st_asig = '0' WHERE id_asig like '".htmlspecialchars($_GET['id'])."' ";

            if ($db->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $db->error;
            }
            $sql = "UPDATE ".$tutu."_dona SET st_dona = '1',asig_dona = '0' WHERE id_dona like '".htmlspecialchars($_GET['dona'])."' ";

            if ($db->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $db->error;
            }        
            header('Location:?enc=_21&n='.htmlspecialchars($_GET['n']));        
        }
?>  
<?php
    if( isset($_GET['confi']) )
         { 
            $sql = "UPDATE ".$tutu."_asig SET confi_asig = 'Si' WHERE id_asig like '".htmlspecialchars($_GET['id'])."' ";

            if ($db->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $db->error;
            }
            header('Location:?enc=_21&n='.htmlspecialchars($_GET['n']));        
        }
?>  
<?php
    if( isset($_GET['desconfi']) )
         { 
            $sql = "UPDATE ".$tutu."_asig SET confi_asig = 'No' WHERE id_asig like '".htmlspecialchars($_GET['id'])."' ";

            if ($db->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $db->error;
            }
            header('Location:?enc=_21&n='.htmlspecialchars($_GET['n']));        
        }
?>  
<div class="container">
<br><br>    
     
                                    <div class="page-header">
                                        <h1>
                                            Asignaci&oacute;n de contribuciones.
                                            <small>
                                                <i class="ace-icon fa fa-angle-double-right"></i>
                                                <?php echo $row['n_org'];?>
                                            </small>
                                        </h1>
                                    </div><!-- /.page-header -->      
			

          
								<hr />
								<div class="row">
									<div class="col-sm-4">
										<div class="widget-box">
											<div class="widget-header widget-header-flat">
												<h4 class="widget-title smaller">
													<i class="ace-icon fa fa-quote-left smaller-80"></i>
													Organizaci&oacute;n Solicitante
												</h4>
											</div>
                                                <?php   
                                                 $query = "SELECT id_solayu,tip_solayu,org_solayu,dona_solayu,desc_solayu,cost_solayu,fe_solayu,st_solayu,id_tayu,n_tayu,id_org,n_org,DATE_FORMAT(fe_solayu,'%d/%m/%Y') AS mamar FROM ".$tutu."_solayu inner join ".$tutu."_tayu on tip_solayu = id_tayu inner join ".$tutu."_org on org_solayu = id_org where st_solayu like '1' and id_solayu like '".htmlspecialchars($_GET['n'])."' ";
                                                $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                                                if($result) { 
                                                    $ss = 0 ;
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                        $idayu = $row['id_solayu'] ;
                                                        $orgo = $row['org_solayu'] ;
                                                ?> 
        											<div class="widget-body">
												<div class="widget-main">
													<div class="row">
														<div class="col-xs-12">
															<blockquote class="pull-right">
																<p class="orange"><?php echo $row['n_org'] ; ?></p>
															</blockquote>
														</div>
													</div>

													<div class="row">
														<div class="col-xs-12">
															<blockquote>
																<p class="lighter line-height-125">
																	<?php echo $row['dona_solayu'] ; ?>
																</p>

																<small>
																	<cite title="Source Title"><?php echo $row['n_tayu'] ; $ayu = $row['n_tayu'] ; $idayu = $row['id_tayu'] ; ?></cite>
																</small>
															</blockquote>
														</div>
													</div>

													<hr />
													<address>
														<strong>Descripci&oacute;n de la Solicitud</strong>

														<br />
														<?php echo $row['desc_solayu'] ; ?>
														
													</address>

													<address>
														<strong><?php echo $row['mamar'] ; ?></strong>

														<br />
                                                       <br>
                                                        <a href="#my-modal" role="button" class="btn btn-success btn-info-full" data-toggle="modal">
                                                            &nbsp; Asignar ayuda &nbsp;
                                                        </a>
													</address>
												</div>
											</div>
                                                <?php                                                           
                                                    }
                                                }
                                                mysqli_free_result($result);
                                                ?> 											
										</div>
									</div>

									<div class="col-sm-8">
										<div class="row">
                                                <?php   
                                                 $query = "SELECT id_asig,ayusol_asig,conti_asig,asig_asig,st_asig,confi_asig,id_dona,tip_dona,org_dona,dona_dona,desc_dona,cost_dona,fe_dona,st_dona,asig_dona,id_tayu,n_tayu,id_org,n_org,DATE_FORMAT(asig_asig,'%d/%m/%Y') AS mamar,DATE_FORMAT(fe_dona,'%d/%m/%Y') AS mamo FROM ".$tutu."_asig inner join ".$tutu."_dona on conti_asig = id_dona inner join ".$tutu."_tayu on tip_dona = id_tayu inner join ".$tutu."_org on org_dona = id_org where st_asig like '1' and ayusol_asig like '".htmlspecialchars($_GET['n'])."'";
                                                $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                                                if($result) { 
                                                    $ss = 0 ;
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                ?> 										
        											<div class="col-xs-12">
												<div class="widget-box">
													<div class="widget-header widget-header-flat">
														<h4 class="widget-title smaller">Donaci&oacute;n - <?php echo $ayu ; ?></h4>
														<div class="widget-toolbar">
															<label>
																<?php
                                                                    if ($row['confi_asig'] == 'No' ) {
                                                                ?>																	
																<small class="green">
																	<b>Quitar Contribuci&oacute;n</b>
																</small>
                                                                <a href="?enc=_21&n=<?php echo"".htmlspecialchars($_GET['n']).""?>&des=true&id=<?php echo $row['id_asig'] ; ?>&dona=<?php echo $row['id_dona'] ; ?>">
                                                                    <i class="ace-icon fa fa-times"></i>
                                                                </a>
																<?php 
                                                                    } else {
                                                                ?>																
                                                                
																<?php 
                                                                    }                                                        
                                                                ?>																
															
																<span class="lbl middle"></span>
															</label>
														</div>
													</div>
													<div class="widget-body">
														<div class="widget-main">
															<code class="pull-right" id="dt-list-code">enlazando.gt</code>
															<dl id="dt-list-1">
																<dt>Fecha de asiganci&oacute;n</dt>
																<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['mamar'] ; ?><br></dd>
																<dt>Empresa donante</dt>
																<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['n_org'] ; ?></dd>
																<dt>Descripci&oacute;n</dt>																
																<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['desc_dona'] ; ?></dd>
																<dt>Fecha de la donaci&oacute;n</dt>																
																<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['mamo'] ; ?></dd>
																<dt>Costo de la donaci&oacute;n</dt>																
																<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Q. <?php echo number_format($row['cost_dona'],2); ?></dd>																
																<dt>Confirmado</dt>
																<?php
                                                                    if ($row['confi_asig'] == 'No' ) {
                                                                ?>																
																<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['confi_asig'] ; ?>&nbsp;&nbsp;&nbsp;&nbsp; <a href="?enc=_21&n=<?php echo"".htmlspecialchars($_GET['n']).""?>&confi=true&id=<?php echo $row['id_asig'] ; ?>" target="_self"><span class="label label-success arrowed">Clic para confirmar</span></a></dd>
																<?php 
                                                                    } else {
                                                                ?>																
																<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['confi_asig'] ; ?>&nbsp;&nbsp;&nbsp;&nbsp; <a href="?enc=_21&n=<?php echo"".htmlspecialchars($_GET['n']).""?>&desconfi=true&id=<?php echo $row['id_asig'] ; ?>" target="_self"><span class="label label-warning arrowed">Quitar confirmaci&oacute;n</span></a></dd>
                                                                
																<?php 
                                                                    }                                                        
                                                                ?>																
															</dl>
														</div>
													</div>
												</div>
											</div>
                                                <?php                                                           
                                                    }
                                                }
                                                mysqli_free_result($result);
                                                ?> 													
										</div>
										<div class="space-6"></div>


									</div>
								</div><!-- PAGE CONTENT ENDS -->          

</div>  
<style>
    .ttd{
        width: 12%;
    }
</style>                              
								<div id="my-modal" class="modal fade" tabindex="-1">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												<h3 class="smaller lighter blue no-margin">Ayuda <?php echo $ayu ; ?> disponible</h3>
											</div>

											<div class="modal-body">
													<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
                                                        <th>Tipo</th>
														<th>Empresa</th>														
														<th>Donaci&oacute;n</th>
														<th>Descripci&oacute;n</th>
                                                        <th>Costo</th>															
														<th>Fecha</th>
														<th>&nbsp;</th>
													</tr>
												</thead>

												<tbody>
                                                <?php   
                                                 $query = "SELECT id_dona,tip_dona,org_dona,dona_dona,desc_dona,cost_dona,fe_dona,st_dona,id_tayu,n_tayu,id_org,n_org,DATE_FORMAT(fe_dona,'%d/%m/%Y') AS mamar FROM ".$tutu."_dona inner join ".$tutu."_tayu on tip_dona = id_tayu inner join ".$tutu."_org on org_dona = id_org where st_dona like '1' and id_tayu like '".$idayu."' and org_dona not like '".$orgo."' order by tip_dona ASC limit 50 ";
                                                $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                                                if($result) {
                                                    $ss = 0 ;
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                ?> 
                                                       
	<tr>
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
                                                        <td>
                                                            <form class="form-signin"  method="post" action="?enc=_21&n=<?php echo"".htmlspecialchars($_GET['n']).""?>" enctype="multipart/form-data" id="formaso">   
                                                            <input type="hidden" value="<?php echo $idayu ; ?>" name="ayusol_asig" >
                                                            <input type="hidden" value="<?php echo $row['id_dona'] ; ?>" name="conti_asig" >
                                                            <input type="hidden" value="into" name="into" >
                                                            <button type="submit" class="btn btn-white btn-success" ><span class="fa fa-log-in"></span> &nbsp; Agregar</button> 
                                                            </form>                                                           
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

											<div class="modal-footer">
												<button class="btn btn-sm btn-danger pull-right" data-dismiss="modal">
													<i class="ace-icon fa fa-times"></i>
													Cerrar
												</button>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
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
					  { "bSortable": false },                        
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