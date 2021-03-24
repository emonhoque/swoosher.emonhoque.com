<?php
include_once 'dbh.inc.php';

$NLID = $_GET['newsletter_id'];

$sql = "DELETE FROM newsletter where newsletter_id='$NLID'";
$result = mysqli_query($conn, $sql) or die("error");

if ($result) {
    header("location:../newslettersubs");
} else {
    echo ' Please Check Your Query ';
}
