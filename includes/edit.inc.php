<?php
include_once 'dbh.inc.php';

$OwnID = mysqli_real_escape_string($conn, $_GET['own_id']);
$Title = mysqli_real_escape_string($conn, $_GET['own_title']);
$Img = mysqli_real_escape_string($conn, $_GET['own_img']);
$Name = mysqli_real_escape_string($conn, $_GET['own_name']);
$Uni =  mysqli_real_escape_string($conn, $_GET['own_uni']);
$Phone =  mysqli_real_escape_string($conn, $_GET['own_phone']);
$Email =  mysqli_real_escape_string($conn, $_GET['own_email']);
$Desc =  mysqli_real_escape_string($conn, $_GET['own_desc']);

$sql =  "UPDATE owners
SET own_id='$OwnID', 
    own_title='$Title', 
    own_img='$Img', 
    own_name='$Name', 
    own_uni='$Uni', 
    own_phone='$Phone', 
    own_email='$Email', 
    own_desc='$Desc'
WHERE own_id=$OwnID";

$result = mysqli_query($conn, $sql);

if ($result) {
    header("location:../editowners");
} else {
    echo ' Please Check Your Query ';
}
