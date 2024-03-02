<?php
include "1.php";
mysqli_select_db($dbcn, "города_области");
var_dump($_POST);
$q3="INSERT INTO інформація_пер VALUES ('{$_POST['1']}','{$_POST['2']}','{$_POST['3']}','{$_POST['4']}')";
mysqli_query($dbcn,$q3);
header("Location: ".$_SERVER["HTTP_REFERER"]);
?>