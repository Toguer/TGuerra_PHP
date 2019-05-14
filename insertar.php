<p><?php echo "sóc la pagina insertar.php" ?></p>
<p><?php echo htmlspecialchars($_POST['name']); ?></p>
<p><?php echo htmlspecialchars($_POST['missatge']); ?></p>


<?php
	
	include 'connexioBD.php';
		
	$usuario = mysqli_real_escape_string($conn, $_POST['name']);
	$mensaje = mysqli_real_escape_string($conn, $_POST['missatge']);
	$hora= date("H:i:s");
	
	if ($usuario == '' || $mensaje == ''){		
		header("Location: index.php?mensajeError=El usuario o el mensaje no puede estar vacio");
		exit();
	} else {
		$sql = "INSERT INTO missatges (id, usuari, text, hora) VALUES ('', '$usuario', '$mensaje', '$hora')";
	
		if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
	mysqli_close($conn);
	
	header("Location: index.php");
	exit();
?>

