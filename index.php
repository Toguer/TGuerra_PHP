<!DOCTYPE html>
<html lang="ca">
<head>
<meta charset="UTF-8" />
<title>xateja-ho!</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<section id="titol">
<h1>xateja-ho!</h1>
</section>
</section>
<section id="missatges">

<!--p><span>10:44PM - Marge: </span>Well, who was it?</p-->
<p><span>10:40PM - Homer: </span>I'll look it up.</p>
<?php

include 'connexioBD.php';

// Executa una consulta
$sql = "select usuari, text, hora from missatges order by usuari";
$result = mysqli_query($con, $sql);
// Obté el resultat de la consulta com a un array associatiu i processa'l

while ($row = mysqli_fetch_assoc($result))  { ?> <p><span><?php
 echo $row['hora'];?> : <?php echo $row['usuari']; ?> :</span><?php echo $row['text'];?></span></p><?php
}


// Allibera recursos del resultat de la consulta
mysqli_free_result($result);
// Tanca la connexió
mysqli_close($con);
?>

</section>
<section id="formulari">
<form method="post" action="insertar.php">
<p> <input type="text" name="nom" size=70 placeholder="el teu nom"></p>
<p> <input type="text" name="msg" size=70 placeholder="el teu missatge"</p>
<p> <input type="submit" /></p>
<!-- COMPLETA EL CONTINGUT DEL FORMULARI -->
</form>
</section>
<section id="errors">
<p>línia per mostrar missatges d'error</p>
</section>

</body>
</html>