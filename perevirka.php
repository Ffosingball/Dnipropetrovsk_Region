<?php
include "1.php";
mysqli_select_db($dbcn, "города_области");
var_dump($_POST);
if (($_POST[1] == 'Yerdna82') and ($_POST[2] == '228thfiO'))
{
	$new_url = './7fHytf98e34.php';
	header('Location: '.$new_url);
}
else
{
	$new_url = './neper.php';
	header('Location: '.$new_url);
}
?>