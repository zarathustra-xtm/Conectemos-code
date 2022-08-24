
   <?php
    if( isset($_POST['n_proeje']) )
         { 
            $sql = "INSERT INTO ".$tutu."_proeje (n_proeje,dep_proeje,mun_proeje,ubi_proeje,area_proeje,insti_proeje,ejfisi_proeje,ejfina_proeje,presol_proeje,preas_proeje,fec_proeje,us_proeje) VALUES ('$_POST[n_proeje]','$_POST[dep_proeje]','$_POST[mun_proeje]','$_POST[ubi_proeje]','$_POST[area_proeje]','$_POST[insti_proeje]','$_POST[ejfisi_proeje]','$_POST[ejfina_proeje]','$_POST[presol_proeje]','$_POST[preas_proeje]','$feca','$aid')";

            if ($db->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $db->error;
            }

        }
?>    
<?php
    if( isset($_GET['desa']) )
         { 
            $sql = "UPDATE ".$tutu."_proeje SET status = '0' WHERE id_proeje like '".htmlspecialchars($_GET['soli'])."' ";

            if ($db->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $db->error;
            }
        }
?>  
<?php
    if( isset($_GET['habi']) )
         { 
            $sql = "UPDATE ".$tutu."_proeje SET status = '1' WHERE id_proeje like '".htmlspecialchars($_GET['soli'])."' ";

            if ($db->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $db->error;
            }
        }
?>   
<script language="javascript">
$(document).ready(function(){
   $("#category").change(function () {
           $("#category option:selected").each(function () {
            id_category = $(this).val();
            $.post("_munis.php", { id_category: id_category }, function(data){
                $("#subcategory").html(data);
            });            
        });
   })
});
</script>
<div class="container">
    <div class="row">
						<div class="page-header">
							<h1>
								Proyectos en Ejecuci&oacute;n
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									creaci&oacute;n y edici&oacute;n
								</small>
							</h1>
						</div><!-- /.page-header -->     
      <div class="col-md-4">
		<div class="login-form">
			<div class="form-header">
				<h3><i class="fa fa-user"></i>Ingresars Proyectos en Ejecuci&oacute;n</h3>
			</div>
			<form method="post" action="?enc=_15" class="form-register" role="form" id="register-form">
				<div>
				    <textarea class="form-control rounded-0" name="n_proeje" rows="4" cols="60" required></textarea>
					<span class="help-block"></span>
				</div>
                <div class="form-group">                                            
                    <select name="dep_proeje" id="category" class="form-control" required>
                    <option value="no">Seleccione un Departamento</option>                                
                        <?php                                    
                            $query = "SELECT * FROM ".$tutu."_dep order by n_dep ";
                                $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                                $c = 0;
                                if($result) {
                                    while($fila = mysqli_fetch_assoc($result)) {

                                ?>                   
                                <option value="<?php echo $fila['id_dep'];?>"><?php echo $fila['n_dep'];?></option>
                                <?php
                                        $c ++;                    
                                    }
                                } 
                             mysqli_free_result($result);
                        ?>        
                    </select> 
                </div>  
                <div class="form-group">                                                                            
                    <select name="mun_proeje" id="subcategory"  class="form-control" required></select>
                </div>                     				
				<div>
					<input name="ubi_proeje" id="email" type="text" class="form-control" placeholder="Direcci&oacute;n" > 
					<span class="help-block"></span>
				</div>
                <div class="form-group">                                            
                    <select name="area_proeje" id="category" class="form-control" required>
                    <option value="no">Seleccione &aacute;rea</option>                                
                        <?php                                    
                            $query = "SELECT * FROM ".$tutu."_area order by n_area ";
                                $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                                $c = 0;
                                if($result) {
                                    while($fila = mysqli_fetch_assoc($result)) {

                                ?>                   
                                <option value="<?php echo $fila['id_area'];?>"><?php echo $fila['n_area'];?></option>
                                <?php
                                        $c ++;                    
                                    }
                                } 
                             mysqli_free_result($result);
                        ?>        
                    </select> 
                </div>
                <div class="form-group">                                            
                    <select name="insti_proeje" id="category" class="form-control" required>
                    <option value="no">Seleccione Insituci&oacute;n</option>                                
                        <?php                                    
                            $query = "SELECT * FROM ".$tutu."_insti order by n_insti ";
                                $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                                $c = 0;
                                if($result) {
                                    while($fila = mysqli_fetch_assoc($result)) {

                                ?>                   
                                <option value="<?php echo $fila['id_insti'];?>"><?php echo $fila['n_insti'];?></option>
                                <?php
                                        $c ++;                    
                                    }
                                } 
                             mysqli_free_result($result);
                        ?>        
                    </select> 
                </div>             
				<div class="form-group">
					<input name="ejfisi_proeje" id="confirm_passasdfword" type="text" class="form-control" value="0" placeholder="% de ejecuci&oacute;n"> 
				</div>
				<div class="form-group">
					<input name="ejfina_proeje" id="confirm_asdfpassword" type="text" class="form-control" value="0" placeholder="Ejecuci&oacute;n Financiera"> 
				</div>
				<div class="form-group">
					<input name="presol_proeje" id="confadsfirm_password" type="text" class="form-control" value="0" placeholder="Presu. 12345678.50"> 
				</div>
				<div class="form-group">
					<input name="preas_proeje" id="casdfonfirm_password" type="text" class="form-control" value="0" placeholder="Presu. 12345678.50"> 
				</div>
				
				<button class="btn btn-block bt-login" type="submit" id="submit_btn" data-loading-text="Registrando....">Registrarse</button>
			</form>
			<div class="form-footer">
				
			</div>
		</div></div>     
      <div class="col-md-8">
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-xs-12">
										<h3 class="header smaller lighter blue">Proyectos en Ejecuci&oacute;n</h3>

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
                          <th>N.</th>                                                 
                          <th>Proyecto</th>                        
                          <th>Direcci&oacute;n</th>                                                  
                          <th >&Aacute;rea</th>                                                    
                          <th >Instituci&oacute;n</th>
                          <th>-</th>                                                                                                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php       
                        $query = "SELECT id_proeje,n_proeje,ubi_proeje,area_proeje,insti_proeje,id_area,n_area,id_insti,n_insti FROM ".$tutu."_proeje inner join ".$tutu."_area on area_proeje = id_area inner join ".$tutu."_insti on insti_proeje = id_insti order by n_proeje DESC ";
                        $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                        $c = 1;
                        if($result) {
                            while($fila = mysqli_fetch_assoc($result)) {
                        ?>                   
                            <tr>
                            <td class="numus"><?php echo $fila['id_proeje'];?></td>                              
                            <td class="tdaso" ><?php echo $fila['n_proeje'];?></td> 
                            <td class="tdaso" ><?php echo $fila['ubi_proeje'];?></td>                             
                            <td class="tdaso" ><?php echo $fila['n_area'];?></td>                              
                            <td class="numus"><?php echo $fila['n_insti'];?></td>  
                             
                            <td class="numus">

                            <div class="dropdown">
                                <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="/page.html">
                                        <i class="fa fa-cog " style="font-size:24px"></i> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                                  <li><a href="?enc=_150&us=<?php echo $fila['user_id'];?>">Editar</a></li>
                                  <li class="divider"></li>
                                  <li >
                                    <a  href="?enc=_15&desa=true&soli=<?php echo $fila['user_id'];?>">Deshabilitar</a>
                                  </li>
                                </ul>
                            </div>                             


</td>
                            </tr>

                    
                        <?php
                                $c ++;                    
                            }
                        } 
                         mysqli_free_result($result);
                        ?> 
  
                    </tbody>
                </table>   									
										</div>
									</div>
								</div>

	

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->                                    
										

             
             
         

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
				      null,
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
													