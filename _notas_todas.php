<?php     
    if( isset($_GET['del'])  )
         {

            $deleteada = "DELETE FROM ".$tutua."_notas WHERE id_nota like '".htmlspecialchars($_GET['del'])."'";

            if ($db->query($deleteada) === TRUE) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . $db->error;
            }
                ?>
                    <script language="Javascript">
                        window.location = "?enc=_8";
                    </script>
             <?php     
        }
        else {
         }
?>
	
<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript">$(document).ready(function() {
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
});</script>
<div class="container">
	<div class="row">
			<div class="form-header">
				<h3><i class="fa fa-user"></i>Todas las Notas</h3>
			</div>       
        <div class="col-md-12">     
            <form action="#" method="get">
                <div class="input-group">
                    <input class="form-control" id="system-search" name="q" placeholder="Buscando :" required>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>          

    	 <table class="table table-list-search">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>T&iacute;tulo</th>
                            <th>Catego.</th>                             
                            <th>Fecha de Ing.</th>	                            
                            <th>&nbsp;</th> 
                            <th>&nbsp;</th> 
                            <th>&nbsp;</th>                                                                                    
                        </tr>
                    </thead>
                    <tbody>
                        
                                    <?php                                    
                                        $query = "SELECT id_cat,n_cat,id_nota,cat_nota,ti_nota,ing_nota FROM ".$tutua."_notas inner join ".$tutua."_cat on cat_nota = id_cat order by id_nota DESC ";
                                            $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                                            $c = 0;
                                            if($result) {
                                                while($fila = mysqli_fetch_assoc($result)) {

                                            ?>                           
                                        
                        <tr>
                            <td><?php echo $fila['id_nota'];?></td>                           
                            <td><?php echo $fila['ti_nota'];?></td>
                            <td><?php echo $fila['n_cat'];?></td>                             
                            <td><?php echo $fila['ing_nota'];?></td>
                            <td><a href="?enc=_10&n=<?php echo $fila['id_nota'];?>"><span class="fa fa-list-alt" aria-hidden="true"></span></a></td>
                            <td><a href="?enc=_9&n=<?php echo $fila['id_nota'];?>"><span class="fa fa-camera" aria-hidden="true"></span></a></td>
                            <td><a class="" href="?enc=_8&del=<?php echo $fila['id_nota'];?>" target="_self"><span class="fa fa-remove" aria-hidden="true"></span></a></td>                                                           
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