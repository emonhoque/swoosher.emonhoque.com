<?php
include_once 'dbh.inc.php';



if (isset($_POST["query"])) {
    $search = mysqli_real_escape_string($connect, $_POST["query"]);
    $query = "SELECT * FROM locations WHERE l_name LIKE '%" . $search . "%'
                OR l_area LIKE '%" . $search . "%'
                OR l_zip LIKE '%" . $search . "%'  ";
}
