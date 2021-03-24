<?php
require "header.php";
?>

<head>
    <link rel="stylesheet" href="style/swoosher-style.css" />
    <link rel="stylesheet" href="style/swoosher-populate.css" />
    <title>Populate</title>
</head>

<main class="main-content">
    <div class="tablehor">
        <table class="addloc" border="5px" style='overflow-x:auto'>
            <tr>
                <th colspan=" 8">
                    <h2>Add Locations</h2>
                </th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Area</th>
                <th>Zip Code</th>
                <th>Description</th>
                <th>Phone Number</th>
                <th>Google Map Link</th>
                <th>Delete</th>
            </tr>
            <?php
            $sql = "SELECT * FROM locations;";
            $result = mysqli_query($conn, $sql);
            while ($rows = mysqli_fetch_assoc($result)) {
                $LocID = $rows['l_id'];
            ?>
                <tr class="locdet">
                    <td> <?php echo $LocID; ?></td>
                    <td> <?php echo $rows['l_name']; ?></td>
                    <td> <?php echo $rows['l_area']; ?></td>
                    <td> <?php echo $rows['l_zip']; ?></td>
                    <td> <?php echo $rows['l_desc']; ?></td>
                    <td> <?php echo $rows['l_phone']; ?></td>
                    <td> <?php echo $rows['l_gmap']; ?></td>
                    <td> <a href="includes/delete.inc?loc_id=<?php echo $LocID; ?>">DELETE</a> </td>
                </tr>

            <?php
            }
            ?>
        </table>
    </div>
    <div class="locform">
        <form class="locform2" action=includes/insert.inc.php method="post">
            <h2>Add Locations</h2>
            <input type="text" id="l_name" name="l_name" placeholder="Loc. Name"><br>
            <input type="text" id="l_area" name="l_area" placeholder="Loc. Area"><br>
            <input type="text" id="l_zip" name="l_zip" placeholder="Loc. Zip Code"><br>
            <textarea type="text" id="l_desc" name="l_desc" placeholder="Loc. Description"></textarea><br>
            <input type="text" id="l_phone" name="l_phone" placeholder="Phone Number"><br>
            <input type="text" id="l_gmap" name="l_gmap" placeholder="Google Map Link"><br>
            <button class="submit" type="submit" value="submit" name="submit"> Add To Database </button>
        </form>
    </div>

</main>


<?php
require "footer.php";
?>