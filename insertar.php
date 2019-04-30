<!DOCTYPE html>
<html lang="ca">
<head>
<meta charset="UTF-8" />
<title>Insertar</title>
</head>
<body>
<p>Sóc la pagina per insertar</p>
<?php 
$v_nom=$_POST['nom'];
$v_msg=$_POST['msg'];
$data = date("H:i:s"); 
PRINT $v_msg;
print $v_nom;
$v_string='No estan inserit el nom o el text del missatge';
include 'connexioBD.php';
$servername="xat";

    $sql = "INSERT INTO missatges (usuari,text,hora)
        VALUES ('$v_nom','$v_msg','$data')";
	if (mysqli_query($con, $sql)) {
		ob_start(null, 100);
		header("Location:index.php?missatge=$v_string");
	} else {
   	 $error =  "Error: " . $sql . "<br>" . mysqli_error($con);
		ob_start(null, 100);
		header("Location:index.php?error=$error");
	}
	
    } else {
		$error = "Error, hi han camps buits";
		ob_start(null, 100);
		header("Location:index.php?error=$error");
    }
?>
