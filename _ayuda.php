<style>
    .ttd{
        width: 10%;
    }
</style>
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
if( isset($_GET['activo'])  )
     {
         $sql = "UPDATE ".$tutu."_solayu SET st_solayu='1', usr_solayu='$aid' WHERE id_solayu like '".htmlspecialchars($_GET['activo'])."' ";    
        if ($db->query($sql) === TRUE) {
        echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $db->error;
        }    
            ?>
                <script language="Javascript">
                    window.location = "?enc=_ayuda";
                </script>
         <?php       
        }
if( isset($_GET['baja'])  )
     {
        $sql = "UPDATE ".$tutu."_solayu SET st_solayu='0', usr_solayu='$aid' WHERE id_solayu like '".htmlspecialchars($_GET['baja'])."' ";    
        if ($db->query($sql) === TRUE) {
        echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $db->error;
        }    
            ?>
                <script language="Javascript">
                    window.location = "?enc=_ayuda";
                </script>
         <?php       
        }
?>
<?php
if( isset($_GET['del'])  )
     {
        
        $deleteada = "DELETE FROM ".$tutu."_solayu WHERE id_solayu like '".htmlspecialchars($_GET['del'])."'";

        if ($db->query($deleteada) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $db->error;
        }
            ?>
                <script language="Javascript">
                    window.location = "?enc=_ayuda";
                </script>
         <?php     
    } 
    else {
        if( isset($_POST['fes_solayu']) )
             { 
             $add = "INSERT INTO ".$tutu."_solayu (tip_solayu,org_solayu,dona_solayu,desc_solayu,cost_solayu,fe_solayu,usr_solayu) VALUES ('$_POST[tip_solayu]','$orgo','$_POST[dona_solayu]','$_POST[desc_solayu]','$_POST[cost_solayu]','$_POST[fe_solayu]','$aid')";
                if ($db->query($add) === TRUE) 
                        {
                    echo "New record created successfully";
                        } else {
                            echo "Error: " . $add . "<br>" . $db->error;
                        }
        ?>
                <script language="Javascript">
                    window.location = "?enc=_ayuda";
                </script>
         <?php   
             }
                elseif ( isset($_POST['cato']) )
            {	 

                    $sql = "UPDATE ".$tutu."_solayu SET tip_solayu='$_POST[tip_solayu]',dona_solayu='$_POST[dona_solayu]',desc_solayu='$_POST[desc_solayu]',cost_solayu='$_POST[cost_solayu]',fe_solayu='$_POST[fe_solayu]',usr_solayu='$aid' WHERE id_solayu like '".$_POST[id_solayu]."' ";    
                    if ($db->query($sql) === TRUE) {
                    echo "Record updated successfully";
                    } else {
                        echo "Error updating record: " . $db->error;
                    }
//exit();                    
        ?>
                <script language="Javascript">
                    window.location = "?enc=_ayuda";
                </script>
         <?php 
            }
     }
?>
<div class="container">
<div class="space-20"></div>                      
    <label class="pull-right inline">
        <a href="?enc=_ayuda" class="btn btn-danger btn-sm">
            <i class="ace-icon fa fa-reply icon-only"></i>
        </a>
    </label>
<div class="page-header">
    <h1>
        Necesitas Ayuda
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Solicitala aqu&iacute;
        </small>
    </h1>
</div>
<div class="row">
    <div class="col-xs-4">
                <?php           
                    if(isset($_GET['edit']))
                         {
                ?>
                          <ul class="nav nav-sidebar">
                            <li class="active"><a href="#">Editar Contribuci&oacute;n <span class="sr-only">(current)</span></a></li>
                          </ul> 
                            <?php                       
                                     $query = "SELECT id_solayu,tip_solayu,dona_solayu,desc_solayu,cost_solayu,fe_solayu FROM ".$tutu."_solayu  where id_solayu like '".htmlspecialchars($_GET['edit'])."' ";
                                    $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                                    if($result) {
                                        while($row = mysqli_fetch_assoc($result)) {
                            ?>         
								<form class="form-horizontal alert alert-success" role="form" method="post" action="?enc=_ayuda">
								
									<div class="form-group alert alert-info">                                    
                                <label class=" control-label no-padding-right" for="category">Clasifique su Solicitud</label>
                                           <div class="">
                                            <select name="tip_solayu"  id="categorys" class="col-xs-12 ">
                                                <?php   
                                                 $querys = "SELECT id_tayu,n_tayu FROM ".$tutu."_tayu  order by n_tayu ASC ";
                                                $results = mysqli_query($db, $querys) or trigger_error("Query Failed! SQL: $querys - Error: ". mysqli_error($db), E_USER_ERROR);
                                                if($results) {
                                                    while($rowa = mysqli_fetch_assoc($results)) {
                                                if ($row['tip_solayu'] == $rowa['id_tayu'])
                                            {
                                            ?> 
                                                <option value="<?php echo $rowa['id_tayu'];?>" selected><?php echo $rowa['n_tayu'];?></option>                                
                                            <?php                        
                                            }
                                                else
                                            {
                                            ?> 
                                                <option value="<?php echo $rowa['id_tayu'];?>"><?php echo $rowa['n_tayu'];?></option>
                                            <?php                        
                                            }                                                            
                                                    }
                                                }
                                                mysqli_free_result($results);
                                                ?> 	                                                   

                                            </select>                                             
                																	
                                        </div>
									</div>								
									<div class="form-group alert alert-success">
                                        <label class=" control-label no-padding-right" for="form-field-8"> Ayuda </label>
                                    <div class="">                                        
                                        <textarea name="dona_solayu" class="col-xs-12 " id="form-field-8" placeholder="Mano de obra/Materiales/Capital" rows="4"><?php echo $row['dona_solayu'];?></textarea>
                                        </div>
                                    </div>								
									<div class="form-group alert alert-success">
                                        <label class=" control-label no-padding-right" for="form-field-8"> Descripci&oacute;n/Detallada de su solicitud</label>
                                    <div class="">                                        
                                        <textarea name="desc_solayu" class="col-xs-12 " id="form-field-8" placeholder="Descripci&oacute;n completa de la donaci&oacute;n" rows="4"><?php echo $row['desc_solayu'];?></textarea>
                                        </div>
                                    </div>	
                                  <div class="form-group alert alert-warning"> <!-- Date input -->
                                    <label class=" control-label no-padding-right" for="date">Contribucion disponible para la Fecha</label>
                                           <div class="">                                    
                                            <input  class="col-xs-12 "  name="fe_solayu" id="date" value="<?php echo $row['fe_solayu'];?>" type="date"/>
                                          </div>
                                          <input type="hidden" name="cato" value="ture">
                                          <input type="hidden" name="id_solayu" value="<?php echo $row['id_solayu'];?>">
                                  </div> 
                                  <div class="form-group alert alert-warning"> <!-- Date input -->
                                           <div class="">                                    
                                            <input type="hidden" min="0.01" step="0.01" max="9999999"   class="col-xs-12 "  name="cost_solayu" id="cost"  placeholder="0000000.00" value="<?php echo $row['cost_solayu'];?>" />
                                            <script>
                                                $('input[type="number"]').change(function() {
                                                    var min = Globalize.parseFloat($(this).attr("min"));
                                                    var max = Globalize.parseFloat($(this).attr("max"));
                                                    var value = Globalize.parseFloat($(this).val());
                                                    if(value < min) { value = min; }        
                                                    if(value > max) { value = max; }
                                                    $(this).val(value);
                                                    //value = Globalize.format(value,"c");
                                                    console.log(value);

                                                });
   
                                            </script>
                                          </div>
                                  </div>                                    								
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit" value="Submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Enviar
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Borrar
											</button>
										</div>
									</div>
								</form>                              
         
                            <?php
                                   }
                                        mysqli_free_result($result);                
                                                }
                        }
            else
                        {  
                            ?>                 
								<!-- PAGE CONTENT BEGINS -->

								<form class="form-horizontal" role="form" method="post" action="?enc=_ayuda">
                              <div class="form-group alert alert-success"> 
                                <label class=" control-label no-padding-right" for="category">Clasifique su ayuda</label>
                                           <div class="">                                                                          
                                            <select name="tip_solayu"  id="categorys" class="col-xs-12 ">
                                                <?php   
                                                 $query = "SELECT id_tayu,n_tayu FROM ".$tutu."_tayu  order by n_tayu ASC ";
                                                $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                                                if($result) {
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                ?> 
                                                    <option value="<?php echo $row['id_tayu'] ; ?>"><?php echo $row['n_tayu'] ; ?></option>                                                       
                                                <?php                                                           
                                                    }
                                                }
                                                mysqli_free_result($result);
                                                ?> 	                                                   

                                            </select> 
                                  </div>
                                </div>  								
									<div class="form-group alert alert-success">
                                        <label class=" control-label no-padding-right" for="form-field-8"> Ayuda </label>
                                    <div class="">                                        
                                        <textarea name="dona_solayu" class="col-xs-12 " id="form-field-8" placeholder="Mano de obra/Materiales/Capital" rows="4" required></textarea>
                                        </div>
                                    </div>								
									<div class="form-group alert alert-success">
                                        <label class=" control-label no-padding-right" for="form-field-8"> Descripci&oacute;n/Detallada de su solicitud</label>
                                    <div class="">                                        
                                        <textarea name="desc_solayu" class="col-xs-12 " id="form-field-8" placeholder="Descripci&oacute;n completa de la donaci&oacute;n" rows="4" required></textarea>
                                        </div>
                                    </div>	
                                  <div class="form-group alert alert-warning"> <!-- Date input -->
                                    <label class=" control-label no-padding-right" for="date">Contribucion disponible para la Fecha</label>
                                           <div class="">                                    
                                            <input  class="col-xs-12 "  name="fe_solayu" id="date" value="<?php echo $feca ; ?>" type="date"/>
                                          </div>
                                  </div> 
                                  <div class="form-group alert alert-warning"> <!-- Date input -->
                                           <div class="">                                    
                                            <input type="hidden" min="0.01" step="0.01" max="9999999"   class="col-xs-12 "  name="cost_solayu" id="cost"  placeholder="0000000.00" />
                                            <script>
                                                $('input[type="number"]').change(function() {
                                                    var min = Globalize.parseFloat($(this).attr("min"));
                                                    var max = Globalize.parseFloat($(this).attr("max"));
                                                    var value = Globalize.parseFloat($(this).val());
                                                    if(value < min) { value = min; }        
                                                    if(value > max) { value = max; }
                                                    $(this).val(value);
                                                    //value = Globalize.format(value,"c");
                                                    console.log(value);

                                                });
   
                                            </script>
                                          </div>
                                  </div>                                                                           	                                    							
									<input type="hidden" name="fes_solayu" value="ture">
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit" value="Submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Enviar
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Borrar
											</button>
										</div>
									</div>
								</form>													
								

		
                            <?php
                       }                
                ?>          
    </div>
    <div class="col-xs-8">
										<h3 class="header smaller lighter blue">Todas sus solicitudes </h3>

										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
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
														<th>Fecha</th>
                                                        <th>Estado</th>	                                                        							
														<th></th>
													</tr>
												</thead>

												<tbody>
                                                <?php   
                                                 $query = "SELECT id_solayu,tip_solayu,org_solayu,dona_solayu,desc_solayu,cost_solayu,fe_solayu,st_solayu,id_tayu,n_tayu,DATE_FORMAT(fe_solayu,'%d/%m/%Y') AS mamar FROM ".$tutu."_solayu inner join ".$tutu."_tayu on tip_solayu = id_tayu and org_solayu like '$orgo'   order by tip_solayu ASC ";
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
															<a href="#" ><?php echo $row['dona_solayu'] ; ?></a>
														</td>														
														<td>
															<a href="#" ><?php echo $row['desc_solayu'] ; ?></a>
														</td>
														<td class="ttd">
															<a href="#" ><?php echo $row['mamar'] ; ?></a>
														</td>
														<?php														
														if ($row['st_solayu'] == '1')	
                                                        {
                                                        ?>                                                             
                                                        <td class="hidden-480">
                                                           <a title="Clic para dar de Baja" data-rel="tooltip" href="?enc=_ayuda&baja=<?php echo $row['id_solayu'];?>">
                                                                <span class="label label-sm label-success">Activa</span>
                                                            </a>
                                                        </td> 
														<td>
																<div class=" action-buttons">
																<a class="green" href="?enc=_ayuda&edit=<?php echo $row['id_solayu'];?>">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>
																<a class="green" href="?enc=_subir-sol&con=<?php echo $row['id_solayu'];?>">
																	<i class="ace-icon fa fa-folder-o bigger-130"></i>
																</a>  
                                                           
                                                           
                                                           
                                                           
                                                           
                                                            <a title="Clic para Enlazarte" class="tooltipss" data-rel="tooltip" href="?enc=_det2&a=<?php echo $row['id_solayu'] ; ?>"><i class="ace-icon fa fa-chat bigger-130"></i>
                                                                <span class="label label-sm label-success">Enlazate</span>
                                                                                                               <div class="bottom">
                                                    <p>Has clic para enlazarte.</p></div></a>        
                                                <?php          
                                                    if ($Rollo == 'Admin')
                                                {
                                                ?> 
                                                    <a class="red" href="?enc=_ayuda&del=<?php echo $row['id_solayu'] ; ?>">
                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                    </a>                                           
                                                <?php                        
                                                }
                                                    else
                                                {
                                                ?> 

                                                <?php                        
                                                }
                                                ?>

															</div>
														</td>                                                        
														<?php                                                                                                               
                                                        } else {
                                                        ?> 	                                                            
                                                        <td class="hidden-480">
                                                           <a title="Clic para dar de alta" data-rel="tooltip" href="?enc=_ayuda&activo=<?php echo $row['id_solayu'];?>">         
                                                            <span class="label label-sm label-warning">Inactiva</span>
                                                            </a>
                                                        </td> 
                                                        <td>&nbsp;</td>
														<?php  
                                                        }
                                                        ?> 															

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
                        { "bSortable": false },
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
		


