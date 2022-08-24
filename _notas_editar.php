<?php
if( isset($_POST['cat_nota']) )
 {
	 
		$sql = "UPDATE ".$tutua."_notas SET cat_nota='$_POST[cat_nota]',dep_nota='$_POST[dep_nota]',mun_nota='$_POST[mun_nota]',ald_nota='$_POST[ald_nota]',ti_nota='$_POST[ti_nota]',ti_nota2='$_POST[ti_nota2]',pie_nota='',nota_nota='$_POST[nota_nota]',nota_nota2='$_POST[nota_nota2]',vid_nota='$_POST[vid_nota]',aud_nota='$_POST[aud_nota]',act_nota='$_POST[act_nota]',port_nota='$_POST[port_nota]',ing_nota='$_POST[ing_nota]',usr_nota='$_POST[usr_nota]' WHERE id_nota like '".htmlspecialchars($_GET['n'])."' ";
		
    
    
    if ($db->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
?>
<script language="Javascript">
    window.location = "?enc=_8";
</script>
 <?php   
	 }
else 	 
 {	 
}
?>
<style>
.wizard {
    margin: 20px auto;

}

    .wizard .nav-tabs {
        position: relative;
        margin: 40px auto;
        margin-bottom: 0;
        border-bottom-color: #e0e0e0;
    }

    .wizard > div.wizard-inner {
        position: relative;
    }

.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 80%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}

.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
}

span.round-tab {
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 100px;
    background: #fff;
    border: 2px solid #e0e0e0;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}
span.round-tab i{
    color:#555555;
}
.wizard li.active span.round-tab {
    background: #fff;
    border: 2px solid #5bc0de;
    
}
.wizard li.active span.round-tab i{
    color: #5bc0de;
}

span.round-tab:hover {
    color: #333;
    border: 2px solid #333;
}

.wizard .nav-tabs > li {
    width: 25%;
}

.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #5bc0de;
    transition: 0.1s ease-in-out;
}

.wizard li.active:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #5bc0de;
}

.wizard .nav-tabs > li a {
    width: 70px;
    height: 70px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
}

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

.wizard .tab-pane {
    position: relative;
    padding-top: 50px;
}

.wizard h3 {
    margin-top: 0;
}

@media( max-width : 585px ) {

    .wizard {
        width: 90%;
        height: auto !important;
    }

    span.round-tab {
        font-size: 16px;
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard .nav-tabs > li a {
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 35%;
    }
}
</style>

    <script type="text/javascript">
	$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
	</script>
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
		<section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-list-alt"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-file"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-play-circle"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
			<script src="http://cdn.ckeditor.com/4.5.7/standard-all/ckeditor.js"></script>
            

            
        <?php                                    
$querya = "SELECT id_nota,ti_nota,ti_nota2,cat_nota,dep_nota,ald_nota,mun_nota,pie_nota,vid_nota,aud_nota,nota_nota,nota_nota2,ing_nota,cont_nota FROM ".$tutua."_notas where id_nota like '".htmlspecialchars($_GET['n'])."' ";
    $resulta = mysqli_query($db, $querya) or trigger_error("Query Failed! SQL: $querya - Error: ". mysqli_error($db), E_USER_ERROR);
    $c = 0;
    if($resulta) {
        while($filasas = mysqli_fetch_assoc($resulta)) {
               ?>
            <form role="form" method="post" action="?enc=_10&n=<?php echo"".htmlspecialchars($_GET['n'])."";?> ">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <h3>Paso 1 - Categor&iacute;a</h3>
                              <div class="form-group">
                                            
                                <select class="form-control" name="cat_nota" required>
                                <option value="no">Seleccione una Categor&iacute;a</option>
                                    <?php                                    
                                        $query = "SELECT * FROM ".$tutua."_cat order by n_cat ";
                                            $result = mysqli_query($db, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($db), E_USER_ERROR);
                                            $c = 0;
                                            if($result) {
                                                while($fila = mysqli_fetch_assoc($result)) {
                                                if ($fila['id_cat'] == $filasas['cat_nota']) {
                                                    ?>
                                                 <option value="<?php echo $fila['id_cat'];?>" selected><?php echo $fila['cat_cat'];?>&nbsp;&nbsp;-&nbsp;&nbsp;<?php echo $fila['n_cat'];?></option>
                                                <?php			
                                                        } else {
                                                ?> 
                                                  <option value="<?php echo $fila['id_cat'];?>"><?php echo $fila['cat_cat'];?>&nbsp;&nbsp;-&nbsp;&nbsp;<?php echo $fila['n_cat'];?></option>                               
                                                <?php			
                                            ?>                   
                                            
                                            <?php
                                                    $c ++;                    
                                                }
                                            } 
                                         mysqli_free_result($result);
                                    ?>                                                 
                                </select> 
                                </div> 
                                <div class="form-group">
                                <input type="hidden" name="ald_nota" class="form-control" value="" id="exampleInputEmail1" placeholder="Poblado  / Aldea / Comunidad" >
                                <input type="hidden" name="mun_nota" class="form-control" value="" id="exampleInputEmail1" placeholder="Poblado  / Aldea / Comunidad" > 
                                <input type="hidden" name="dep_nota" class="form-control" value="" id="exampleInputEmail1" placeholder="Poblado  / Aldea / Comunidad" >                                
                                <input type="hidden" name="usr_nota" class="form-control" value="" id="exampleInputEmail1">
                                <input type="hidden" name="ing_nota" class="form-control" value="<?php echo $fecho;?>" id="exampleInputEmail1"></div>    
                              <br />
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step">Continuar</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <h3>Paso 2 - Contenido de la Nota</h3>
                                <div class="form-group">
                                <input type="text" name="ti_nota" class="form-control" id="exampleInputEmail1" value="<?php echo $filasas['ti_nota'];?>" placeholder="T&iacute;tulo de la Nota" >
                                </div>  
                                <div class="form-group">
                                <input type="text" name="ti_nota2" class="form-control" id="exampleInputEmail1" value="<?php echo $filasas['ti_nota2'];?>" placeholder="T&iacute;tulo de la Nota en Ingles" >
                                </div>                          
                                    <label>
                                    Texto en Espa&ntilde;ol
                                  </label>                        
                        
                                <div class="form-group">                                
								<textarea cols="80" id="editor1" name="nota_nota" rows="10" placeholder="Texto de la Nota" ><?php echo $filasas['nota_nota'];?></textarea>
                                </div> 
                                    <label>
                                    Texto en Ingles
                                  </label>                        
                        
                                <div class="form-group">                                
								<textarea cols="80" id="editor2" name="nota_nota2" rows="10" placeholder="Texto de la Nota en Ingles" ><?php echo $filasas['nota_nota2'];?></textarea>
                                </div>                                          
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previo</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Continuar</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <h3>Paso 3 - Media  ( Video o Audio )</h3>
                                <div class="form-group">
                                <input type="text" name="vid_nota" value="<?php echo $filasas['vid_nota'];?>" class="form-control" id="exampleInputEmail1" placeholder="Video - Ej.: QKVJMSpo_pE">
                                </div>                                
                                <div class="form-group">
                                <input type="text" name="aud_nota" value="<?php echo $filasas['aud_nota'];?>" class="form-control" id="exampleInputEmail1" placeholder="Audio - Ej.: QKVJMSpo_pE">
                                </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previo</button></li>
                            <li><button type="button" class="btn btn-default next-step">Continuar</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <h3>Paso 4 - Activar y Plublicar nota</h3>
                                <label> Activar</label>                                
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="act_nota" id="optionsRadios1" value="1" checked>
                                    Si
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="act_nota" id="optionsRadios2" value="0">
                                    No
                                  </label>
                                </div>  
                        <input type="hidden" name="port_nota" value="1">
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previo</button></li>                        
                            <li><button type="submit" class="btn btn-primary btn-info-full">Guardar - P&uacute;licar - Suiguiente Paso</button></li>
                        </ul>                                 
                    </div>
                    <div class="clearfix"></div>
                </div>                

            </form>

                <?php
                                $c ++;                    
                                }
                            }
                                mysqli_free_result($resulta);
}         
                            ?>  				
            <script>
					CKEDITOR.replace( 'editor1' );
					CKEDITOR.replace( 'editor2' );                
				</script>
        </div>
    </section>
   </div>
</div>   