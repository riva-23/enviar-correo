 <!DOCTYPE html>
        <html>
        <head>
         <title></title>
        </head>
        <body>

        	<div class="centradoCaja">
        		<form action="enviar.php" method="POST">
        	<p>Nombre: <input type="text" name="nombre" id="nombre" required></p>

<p>asunto: <input type="text" name="asunto" id="asunto" size="40"required></p>

<p>correo: <input type="text" name="correo" id="correo" size="20"required></p>
<p> mensaje:</p><textarea  name="comentarios" placeholder="" required /></textarea></p>
<br>

<input type="submit" value="enviar" >
</form>
        </div>

        <?php
        include("enviar.php");

        ?>


        </body>
        </html>