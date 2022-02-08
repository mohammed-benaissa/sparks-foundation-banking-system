<?php
include "db_connexion.php";
$id=$_POST['senderId'];
$newCurrent=$_POST['senderCurrent'] - $_POST['transValue'];
$sname= $_POST['senderName'];
$rname= $_POST['receiver'];
$value= $_POST['transValue'];
$sql0 = "SELECT * FROM customers WHERE nom='$rname'";
$result0 = mysqli_query($conn, $sql0);
$rows = mysqli_fetch_assoc($result0);
$newCurrentR=$rows['current']+$_POST['transValue'];
$sql1 = "UPDATE customers
        SET current='$newCurrent'
        WHERE id='$id' ";
$result1 = mysqli_query($conn, $sql1);        
$sql11 =  "UPDATE customers
          SET current='$newCurrentR'
          WHERE nom='$rname' "; 
$result11 = mysqli_query($conn, $sql11);                
$sql2 = "INSERT INTO transactions(sender, receiver, value) 
VALUES('$sname', '$rname','$value')";   
$result2 = mysqli_query($conn, $sql2);     
header("Location: ../customers.php");