<?php
include "conniction.php";
USE store ;
$commind = "CRETE TABLE product(id PRIMARY KEY , name VARCHAR(50), PRICE INT NOT NULL)";

$conniction-> query ($commind);
?>