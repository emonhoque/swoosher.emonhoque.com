<?php
require "header.php";
?>

<head>
    <link rel="stylesheet" href="style/swoosher-style.css" />
    <title>About Us</title>
</head>

<main class="main-content">

    <div class="au">
        <h1 class="auh1">About Us!</h1>
    </div>




    <div class="tgam">
        <?php
        $sql = "SELECT * FROM owners";
        $res = $conn->query($sql);
        while ($rows = $res->fetch_assoc()) {
        ?>
            <div class="tg-about-wrap">
                <table class="tg-about">
                    <tbody>
                        <tr>
                            <td class="tg-about-0lax">
                                <h1 class="owntitle"><?php echo $rows['own_title']; ?></h1>
                            </td>
                        </tr>
                        <tr>
                            <td class="tg-about-0lax">
                                <img class="swoosher-owner" src="img/<?php echo $rows['own_img']; ?>.jpg">
                            </td>
                        </tr>
                        <tr>
                            <td class="tg-about-0lax">
                                <hr class="title-about-hr">
                                <h2 class="ownname"><?php echo $rows['own_name']; ?></h2>
                                <h3 class="ownuni"><?php echo $rows['own_uni']; ?></h3>
                                <h3 class="ownphone"><?php echo $rows['own_phone']; ?></h3>
                                <h4 class="ownemail"><a href="mailto:<?php echo $rows['own_email']; ?>"><?php echo $rows['own_email']; ?></a></h4>
                                <hr class="title-about-hr">
                                <p class="owndesc"><?php echo $rows['own_desc']; ?></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php
        }
        ?>
    </div>

</main>


<?php
require "footer.php";
?>