<?php
include "connection.php";
$commind = "CREATE TABLE product(id INT PRIMARY KEY , name VARCHAR(50), brand INT NOT NULL , model VARCHAR(50) , price INT NOT NULL , stat VARCHAR(50) ";

$connection-> query($commind);
?>