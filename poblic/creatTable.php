<?php
include "connection.php";
USE store ;
$commind = "CRETE TABLE product(id PRIMARY KEY , name VARCHAR(50), PRICE INT NOT NULL)";

$connection-> query ($commind);
?>