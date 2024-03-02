<?php
include "1.php";
mysqli_select_db($dbcn, "города_области");
$q="DELETE FROM {$_POST['5']} WHERE {$_POST['6']} = '{$_POST['1']}'";
if(mysqli_query($dbcn,$q)){
    header("Location: ".$_SERVER["HTTP_REFERER"]);
}
else{
    echo "Ошибка: " . $conn->error;
}
?>