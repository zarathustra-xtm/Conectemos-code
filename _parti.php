
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

	<div class="row">
        <div class="col-md-3">
            <form name="add" method="post" action="?enc=_2">
              <div class="form-group">
                <label for="exampleInputEmail1">Agregar Partido</label>
              </div>                 
                <input type="text" class="form-control" name="n_par" id="n_par" placeholder="Nueva Categor&iacute;a">
              <br />
                <button type="submit" class="btn btn-warning btn-block">Agregar</button>
 
            </form>    
            <hr />      
            <form action="#" method="get">
                <div class="input-group">
                    <input class="form-control" id="system-search" name="q" placeholder="Buscando :" required>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>  
                <?php
                    if( isset($_POST['n_par']) )
                         { 
                         $add = "INSERT INTO ".$tutu."_par (n_par) VALUES ('$_POST[n_par]')";
                            if ($db->query($add) === TRUE) {
                                echo "New record created successfully";
                                    } else {
                                        echo "Error: " . $add . "<br>" . $db->error;
                                    }
                        }
                ?>            
        </div>
		<div class="col-md-9">
    	 <table class="table table-list-search">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>Partidos</th>
                            <th>&nbsp;</th>                            
                        </tr>
                    </thead>
                    <tbody>
<?php       
                        
                        

$query = "SELECT * FROM ".$tutu."_par where st_par like '1' order by n_par ";
$result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
$c = 0;
if($result) {
	while($fila = mysqli_fetch_assoc($result)) {

?>                   
                        <tr>
                            <td><?php echo $c;?></td>
                            <td><?php echo $fila['n_par'];?></td>
                            <td><i class="fa fa-remove"></i></td>                            
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