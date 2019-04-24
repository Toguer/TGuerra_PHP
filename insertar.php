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
PRINT $v_msg;
print $v_nom;
$v_string='No estan inserit el nom o el text del missatge';
include 'connexioBD.php';
$servername="xat";
if (isset($v_nom) or (isset($v_msg)){
$username="toguer";
$password="root";
$dbname="xat";

?>
Hola <?php echo $v_nom; ?>.
Tu mensaje es : <?php echo $v_msg; ?> .

<?php
$dt = new DateTime();

$result = $dt->format('H:i:s');
$sql = "INSERT INTO missatges (usuari, text, hora)
VALUES ('$v_nom', '$v_msg', '$result')";


}else {
echo  $v_string; 	



}
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

mysqli_close($conn);
header("Location:index.php");	
}
?>
<html>