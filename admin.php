<?php
require "header.php";
?>

<head>
    <link rel="stylesheet" href="style/swoosher-style.css" />
    <title>Admin Panel</title>
</head>

<main class="main-content">

    <div class="admintable">
        <table class="admintablemain">
            <thead>
                <th colspan="4">
                    <h1>Admin Panel</h1>
                </th>
            </thead>
            <tr>
                <td style="padding:10px 10px 30px 10px" colspan="4">If you aren't an admin, you probably should not be here! Click <a class="here" href="index">here</a> to go back home!</td>
            </tr>
            <tr>
                <td><a href="populate"><img src="img/location.png" alt="locations"></a></td>
                <td><a href="editowners"><img src="img/boss.png" alt="owners"></a></td>
            </tr>
            <tr class="attxt">
                <td style="padding:10px">Locations</td>
                <td style="padding:10px">Owners</td>
            </tr>
            <tr>
                <td><a href="cfresults"><img src="img/contactform.png" alt="owners"></a></td>
                <td><a href="newslettersubs"><img src="img/newsletter.png" alt="owners"></a></td>
            </tr>
            <tr class="attxt">
                <td style="padding:10px">Contact Forms</td>
                <td style="padding:10px">Newsletters</td>
            </tr>
        </table>
    </div>

</main>


<?php
require "footer.php";
?>