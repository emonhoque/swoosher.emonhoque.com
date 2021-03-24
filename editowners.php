<?php
require "header.php";
?>

<head>
    <link rel="stylesheet" href="style/swoosher-style.css" />
    <link rel="stylesheet" href="style/swoosher-populate.css" />
    <title>Edit Owners</title>
</head>

<main class="main-content">

    <div class="tablehor2">
        <table class="addloc2" border="5px" style='overflow-x:auto'>
            <tr>
                <th colspan="9">
                    <h2>Edit Owners</h2>
                </th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>Name</th>
                <th>Course</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Description</th>
                <th>Edit</th>
            </tr>
            <?php
            $sql = "SELECT * FROM owners;";
            $result = mysqli_query($conn, $sql);
            while ($rows = mysqli_fetch_assoc($result)) {
                $OwnID = $rows['own_id'];
            ?>
                <tr class="locdet2">
                    <td> <?php echo $OwnID; ?> </td>
                    <td> <?php echo $rows['own_title']; ?> </td>
                    <td> <?php echo $rows['own_img']; ?> </td>
                    <td> <?php echo $rows['own_name']; ?> </td>
                    <td> <?php echo $rows['own_uni']; ?> </td>
                    <td> <?php echo $rows['own_phone']; ?> </td>
                    <td> <?php echo $rows['own_email']; ?> </td>
                    <td> <?php echo $rows['own_desc']; ?> </td>
                    <td> <a class="edit" href="edit?own_id=<?php echo $OwnID; ?>">EDIT</a> </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</main>


<?php
require "footer.php";
?>