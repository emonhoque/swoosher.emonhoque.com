<?php
require "header.php";
?>

<head>
    <link rel="stylesheet" href="style/swoosher-style.css" />
    <title>Locations</title>
</head>


<main class="main-content">
    <div class="ourlocdiv">
        <h1 class="ourlocations"> Our Locations! </h1>
        <p class="ourlocations2">
            We have quite a few locations in different shopping malls, all around KL. Find one near you!
        </p>
        <input class="searchloc" onkeyup="locfunction()" id="searchloc" placeholder="Search" autocomplete="off"><br>
    </div>
    <?php
    $sql = "SELECT * FROM locations";
    $res = $conn->query($sql);
    while ($rows = $res->fetch_assoc()) {
    ?>
        <div class="tg-wrap target">
            <div class="loc-container">
                <table class="tg">
                    <tbody>
                        <tr>
                            <td class="tg-0lax2" rowspan="4">
                                <div class="loc-img">
                                </div>
                            </td>
                            <td class="tg-0lax">
                                <div class="loc-name">
                                    <h1>
                                        <?php echo $rows['l_name']; ?> <br>
                                    </h1>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="tg-0lax">
                                <div class="loc-area">
                                    <h3>
                                        <?php echo $rows['l_area']; ?> <br>
                                        <?php echo $rows['l_zip']; ?> <br>
                                        <?php echo $rows['l_phone']; ?>
                                    </h3>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="tg-0lax">
                                <div class="loc-desc">
                                    <p>
                                        <?php echo $rows['l_desc']; ?> <br>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="tg-0lax">
                                <div class="loc-gmap">
                                    <a href="<?php echo $rows['l_gmap']; ?>">
                                        <p class="gmapp">Take Me There!</p>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <?php
    }
    ?>
</main>

<script>
    function locfunction() {
        var input = document.getElementById("searchloc");
        var filter = input.value.toLowerCase();
        var nodes = document.getElementsByClassName('target');

        for (i = 0; i < nodes.length; i++) {
            if (nodes[i].innerText.toLowerCase().includes(filter)) {
                nodes[i].style.display = "inline-block";
            } else {
                nodes[i].style.display = "none";
            }
        }
    }
</script>



<?php
require "footer.php";
?>