<!DOCTYPE html>
<html lang="ca">
 <head>
 <meta charset="UTF-8" />
 <title>xateja-ho!</title>
 <link rel="stylesheet" type="text/css" href="style.css"/>
 </head>
 <body>
 <section id="titol">
 <h1>xateja-ho!</h1>
 </section>
 <section id="missatges">
 
	<?php
		// Connecta amb la BD 'my_db'
		$con = mysqli_connect('localhost', 'root', '', 'xat');
		
		// Comprova la connexió
		if (mysqli_connect_errno()) {
		echo 'Failed to connect to MySQL: '.mysqli_connect_error();
		}
		
		// Executa una consulta
		$sql = "SELECT * FROM `missatges` order by id ";
		$result = mysqli_query($con, $sql);
		
		// Obté el resultat de la consulta com a un array associatiu i processa'l
		while ($row = mysqli_fetch_assoc($result)) {
		printf("<p>%s - %s: %s </p>", $row['hora'], $row['usuari'], $row['text']);
		}
		
		// Tanca la connexió
		mysqli_close($con);
	?>


 </section>
 <section id="formulari">
 <form method="post" action="insertar.php">
    <P><input type="text" name="name" size="80" maxlength="20" placeholder="El teu nom" /></p>
	<p><input type="text" name="missatge" size="80" placeholder="El teu missatge" /></p>
	<p><a href="insertar.php"><input type="submit" id="boton" value="xateja-ho"/></a></p>
 <!-- COMPLETA EL CONTINGUT DEL FORMULARI -->
 </form>
 </section>
 <section id="errors">
 <p><?php if(empty($_GET['mensajeError'])){echo '';}else{echo $_GET['mensajeError'];} ?></p>
 </section>
 </body>
</html>

