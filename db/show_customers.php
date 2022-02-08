<?php  

include "db_connexion.php";

$sql = "SELECT * FROM customers ORDER BY id DESC";
$result = mysqli_query($conn, $sql);