<?php
include_once 'dbh.inc.php';

$LocID = $_GET['loc_id'];

$sql = "DELETE FROM locations where l_id='$LocID'";
$result = mysqli_query($conn, $sql) or die("error");

if ($result) {
    header("location:../populate");
} else {
    echo ' Please Check Your Query ';
}
