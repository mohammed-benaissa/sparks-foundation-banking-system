<?php  

include "db_connexion.php";

$sql = "SELECT * FROM transactions ORDER BY id DESC";
$result = mysqli_query($conn, $sql);