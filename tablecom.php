<?php
include "1.php";
mysqli_select_db($dbcn, "города_области");
$q1="CREATE TABLE коментарій (дата DATETIME NOT NULL PRIMARY KEY, імя VARCHAR(30) NOT NULL, текст VARCHAR(2000) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=cp1251";
mysqli_query($dbcn, $q1);
$q2="CREATE TABLE коментарій_пер (дата DATETIME NOT NULL PRIMARY KEY, імя VARCHAR(30) NOT NULL, текст VARCHAR(2000) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=cp1251";
mysqli_query($dbcn, $q2);
?>