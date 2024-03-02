<?php
include "1.php";
mysqli_select_db($dbcn, "города_области");
var_dump($_POST);
$q3="INSERT INTO коментарій_пер VALUES (NOW(),'{$_POST['1']}','{$_POST['2']}')";
mysqli_query($dbcn,$q3);
header("Location: ".$_SERVER["HTTP_REFERER"]);
?>