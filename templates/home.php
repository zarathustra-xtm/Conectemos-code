

<?php require_once 'templates/header.php';?>    
	<div class="content">
     	<div class="container">
      	
						
	<?php if ($pipe == '1' ) {
    
                    if (! isset($_GET['enc']))
                        {
                    ?>	  
                        <?php

                    } else {    
                        $page = $_GET['enc'];  
                        switch($page)
                        {
                            case '_1':
                                include('_encuesta.php');
                                break;  
                            case '_2':
                                include('_parti.php');
                                break;
                            case '_3':
                                include('_alca.php');
                                break;   
                            case '_4':
                                include('_presi.php');
                                break;                   

                        }
                    }
         
                } else {
    
                        if (! isset($_GET['enc']))
                        {
                                include('_encuesta.php');
                    } else {    
                        $page = $_GET['enc'];  
                        switch($page)
                        {
                            case '_1':
                                include('_encuesta.php');
                                break;  
              

                        }
                    }
        };
      ?>	 	
      
  	
     		<div class="col-md-8 col-sm-8 col-xs-12">

     		</div>
     		<?php require_once 'templates/sidebar.php';?>
     	</div>
     	</div>
    </div> <!-- /container -->
<?php require_once 'templates/footer.php';?>
<?php
mysqli_close($db); 
   ?> 	
