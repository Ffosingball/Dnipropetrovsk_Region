<?php
include "1.php";
mysqli_select_db($dbcn, "города_области");
$q="DELETE FROM {$_POST['5']} WHERE {$_POST['6']} = '{$_POST['4']}'";
if(mysqli_query($dbcn,$q)){
    echo"good";
}
else{
    echo "Ошибка: ";
}
$q3="INSERT INTO {$_POST['5']} VALUES ('{$_POST['4']}','{$_POST['1']}','{$_POST['2']}','{$_POST['3']}')";
if(mysqli_query($dbcn,$q3)){
	header("Location: ".$_SERVER["HTTP_REFERER"]);
}
else{
	echo "Ошибка: ";
}
?>