<?php
if (isset($_POST['enviar'])) {
	# code...

if(!empty($_POST['nombre'])  && !empty($_POST['asunto']) && !empty($_POST['correo']) && !empty($_POST['comentarios'])) {

		# code...
	$nombre= $_POST['nombre'];
$asunto= $_POST['asunto'];
$correo= $_POST['correo'];
$comentarios= $_POST['comentarios'];
$header="from:pabuena1998@gmail.com" . "\r\n";
$header="Replt-to: pabuena1998@gmail.com" . "\r\n";
$header="X-Mailer: PHP/" . phpversion();
$mail = mail($correo,$asunto,$comentarios,$header);
  if ($mail ) {
  	echo "<h4> enviado con exito </h4>";
  
  
  }
	}
}

