  
<?php
include('conect.php');

$id = $_GET['id'];

$sql = "DELETE FROM seller WHERE id='{$id}'";
$result = mysqli_query($conn, $sql);
header("location:Home.php");
