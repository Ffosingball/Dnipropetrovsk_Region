<?php
$dblocation = "localhost";
$dbuser = "root";
$dbpasswd = "dlit";
$dbcn = mysqli_connect($dblocation, $dbuser, $dbpasswd);
$q="CREATE DATABASE IF NOT EXISTS Города_области";
mysqli_query($dbcn, $q);
?>