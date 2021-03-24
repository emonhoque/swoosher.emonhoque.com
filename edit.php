<?php
require "header.php";

$OwnID = $_GET['own_id'];

?>



<head>
    <link rel="stylesheet" href="style/swoosher-style.css" />
    <link rel="stylesheet" href="style/swoosher-populate.css" />
    <title>Edit Owners</title>
</head>

<main class="main-content">

    <div class="ownform" style="width: 100%;">
        <h1> Update Owners Info </h1>
        <?php
        $sql = "SELECT * FROM owners WHERE own_id=$OwnID;";
        $result = mysqli_query($conn, $sql);
        while ($rows = mysqli_fetch_assoc($result)) {
        ?>
            <table class="ownform2">
                <form action=includes/edit.inc.php method="GET" style="width: 100%;">
                    <tr>
                        <th>ID:</th>
                        <td><input type="text" id="own_id" name="own_id" placeholder="id" value="<?php echo $OwnID; ?>"></td>
                    </tr>
                    <tr>
                        <th>Title:</th>
                        <td><input type="text" id="own_title" name="own_title" placeholder="own_title" value="<?php echo $rows['own_title']; ?>"></td>
                    </tr>
                    <tr>
                        <th>Image:</th>
                        <td><input type="text" id="own_img" name="own_img" placeholder="own_img" value="<?php echo $rows['own_img']; ?>"></td>
                    </tr>
                    <tr>
                        <th>Name:</th>
                        <td><input type="text" id="own_name" name="own_name" placeholder="own_name" value="<?php echo $rows['own_name']; ?> "></td>
                    </tr>
                    <tr>
                        <th>Course:</th>
                        <td><input type="text" id="own_uni" name="own_uni" placeholder="own_uni" value="<?php echo $rows['own_uni']; ?>"></td>
                    </tr>
                    <tr>
                        <th>Phone Number:</th>
                        <td><input type="text" id="own_phone" name="own_phone" placeholder="own_phone" value="<?php echo $rows['own_phone']; ?>"> </td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><input type="text" id="own_email" name="own_email" placeholder="own_phone" value="<?php echo $rows['own_email']; ?>"> </td>
                    </tr>
                    <tr>
                        <th>Description:</th>
                        <td><textarea type="text" id="own_desc" name="own_desc" placeholder="Loc. Description"><?php echo $rows['own_desc']; ?></textarea></td>
                    </tr>
                    <tr>
                        <th>Update:</th>
                        <td><button class="submit" type="submit" value="submit" name="submit"> Update Database </button></td>
                    </tr>
                </form>
            </table>
        <?php
        }
        ?>
    </div>

</main>


<?php
require "footer.php";
?>