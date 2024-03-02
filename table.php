<?php
include "1.php";
mysqli_select_db($dbcn, "Города_области");
$q1="CREATE TABLE міста (назва VARCHAR(60) NOT NULL PRIMARY KEY, площа INT NOT NULL, рік_заснування VARCHAR(60) NULL, населення INT, індекс VARCHAR(40), день_міста VARCHAR(40), висота INT)";
$q2="CREATE TABLE міського_типу (назва VARCHAR(60) NOT NULL PRIMARY KEY, площа INT NOT NULL, рік_заснування VARCHAR(60) NULL, населення INT, індекс VARCHAR(40), день_міста VARCHAR(40), висота INT)";
mysqli_query($dbcn, $q1);
mysqli_query($dbcn, $q2);
?>