<?php
include "connection.php";
$commind = "CREATE TABLE product(id INT PRIMARY KEY , name VARCHAR(50), PRICE INT NOT NULL)";

$connection-> query($commind);
?> 