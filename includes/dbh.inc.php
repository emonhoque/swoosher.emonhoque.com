<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "password";
$dbName = "bsdt";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)
    or die("Could Not Connect. Contact its.emon@hotmail.com");

date_default_timezone_set('Asia/Kuala_Lumpur');
