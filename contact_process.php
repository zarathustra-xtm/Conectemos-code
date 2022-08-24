<style>
    .separatator{
        height: 250px;
    }
</style>
<section  class="separatator">
&nbsp;                
</section>
<br><br><br>
<h2>Gracias por tu comunicaci&oacute;n</h2>
<hr>
<?php
    $to = "info@enlazando.gt";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $number = $_REQUEST['number'];
    $cmessage = $_REQUEST['message'];
    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $subject = "Mensage enviado desde la Web de Enlazando.";
    $logo = '';
    $link = '#';
	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Enlazando.gt</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<br><br>";
	$body .= "</td></tr></thead><tbody>";
    $body .= "<tr><td style='border:none; text-align: center;'><div class='topo'><a href='http://enlazando.gt' target='_blank'><img src='http://enlazando.gt/assets/images/_logo.png' style='width:200px;' alt=''>    </a></div></td></tr>";
	$body .= "<tr><td style='border:none; text-align: center;'><strong>Nombre:</strong> {$name}</td></tr>";
	$body .= "<tr><td style='border:none; text-align: center;'><strong>Email:</strong> {$from}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td style='border:none; text-align: center;'><strong>Asunto:</strong> {$subject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none; text-align: center;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";
    $send = mail($to, $subject, $body, $headers);
?>