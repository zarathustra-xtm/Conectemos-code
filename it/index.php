<script type="text/javascript">
$(document).ready(function(){
$("#logoinicio").fadeOut(0,function(){ $(this).fadeIn(5000); });
$("#logoinicio").fadeIn(0,function(){ $(this).fadeOut(8500); });
});
</script>
<script type="text/javascript">
var pagina = 'http://enlazando.gt/_app/index.php';
var segundos = 12500;
function redireccion() {
document.location.href=pagina;
}

setTimeout("redireccion()",segundos);

</script>