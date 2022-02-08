<?php  

include "db_connexion.php";
$res=$_GET['nom'];
$sql00 = "SELECT * FROM customers ORDER BY id WHERE nom != '$res' ";
$result00 = mysqli_query($conn, $sql00);