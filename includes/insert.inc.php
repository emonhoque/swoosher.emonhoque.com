<?php
include_once 'dbh.inc.php';

$name = mysqli_real_escape_string($conn, $_POST['l_name']);
$area = mysqli_real_escape_string($conn, $_POST['l_area']);
$zip = mysqli_real_escape_string($conn, $_POST['l_zip']);
$desc = mysqli_real_escape_string($conn, $_POST['l_desc']);
$phone =  mysqli_real_escape_string($conn, $_POST['l_phone']);
$gmap =  mysqli_real_escape_string($conn, $_POST['l_gmap']);

$sql = "INSERT INTO locations (l_name, l_area, l_zip, l_desc, l_phone, l_gmap) 
        VALUES (?, ?, ?, ?, ?, ?);";

$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "try again";
} else {
    mysqli_stmt_bind_param($stmt, "ssssss", $name, $area, $zip, $desc, $phone, $gmap);
    mysqli_stmt_execute($stmt);
    echo "<script> window.location.assign('../populate'); </script>";
}
