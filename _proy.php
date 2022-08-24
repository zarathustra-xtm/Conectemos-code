<?php 
require_once('tradingpro4dm1n/LALa125.php');
?>
   <link rel="stylesheet" href="_app/css/bootstrap.css">
   <script src="_app/js/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>    
    <script type="text/javascript" src="tablo/datatables.min.js"></script>
    <link rel="stylesheet" href="tablo/buttons.bootstrap.min.css" />            
    <link rel="stylesheet" href="tablo/dataTables.bootstrap.min.css" />                           
    <script src="tablo/buttons.bootstrap.min.js"></script>                
    <script src="tablo/buttons.colVis.min.js"></script>                
    <script src="tablo/buttons.html5.min.js"></script>                
    <script src="tablo/buttons.print.min.js"></script>                
    <script src="tablo/dataTables.bootstrap.min.js"></script>                
    <script src="tablo/dataTables.buttons.min.js"></script>                
    <script src="tablo/jszip.min.js"></script>                
    <script src="tablo/pdfmake.min.js"></script>    
    <script src="tablo/vfs_fonts.js"></script>   

<!--================Home Banner Area =================-->
            <section class="banner_area">
                <div class="banner_sinner d-flex align-items-center">
                    <div class="container">
                        <div
                        class="banner_content d-md-flex justify-content-between align-items-center"
                        >
                        <div class="mb-3 mb-md-0">
                            <h2>Proyectos en Ejecuci&oacute;n</h2>
                            
                        </div>
                        <div class="page_link">

                            <a href="http://enlazando.gt/">Enalanzdo.gt</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

        <!-- Start Sample Area -->
        <section class="sample-text-area">
            <div class="container">
           
<div class="table-responsive">         
    <table id="example" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Surname</th>
    </tr>
  </thead>
  <tbody id="myTable">
<?php                       
     $query = "SELECT id_proeje,n_proeje,ubi_proeje,area_proeje,insti_proeje,id_area,n_area,id_insti,n_insti FROM ".$tutua."_proeje inner join ".$tutua."_area on area_proeje = id_area inner join ".$tutua."_insti on insti_proeje = id_insti order by n_proeje DESC ";
    $result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
    if($result) {
        while($row = mysqli_fetch_assoc($result)) {
?>       
    <tr>
      <td><?php echo $row['n_proeje'];?></td>
      <td>Girish</td>
      <td>Parmar</td>
    </tr>
<?php
            $idd = $row['id_nota'];
       }
            mysqli_free_result($result);                
                    }    
?>      

  </tbody>
</table>
            </div></div>
            
        </section>
        <!-- End Sample Area -->
<script>
$(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-sm-6:eq(0)' );
} );
</script>   
<?php mysqli_close($mysqli); ?>