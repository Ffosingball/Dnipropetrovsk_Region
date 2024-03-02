<?php
include "1.php";
mysqli_select_db($dbcn, "города_области");
var_dump($_POST);
$q3="INSERT INTO коментарій VALUES ('{$_POST['1']}','{$_POST['2']}','{$_POST['3']}')";
mysqli_query($dbcn,$q3);
$q="DELETE FROM коментарій_пер WHERE дата = '{$_POST['1']}'";
if(mysqli_query($dbcn,$q)){
    header("Location: ".$_SERVER["HTTP_REFERER"]);
}
else{
    echo "Ошибка: " . $conn->error;
}
header("Location: ".$_SERVER["HTTP_REFERER"]);
?>