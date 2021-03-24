<?php
include_once "includes/dbh.inc.php"
?>

<!DOCTYPE html>
<html>

<head>
  <meta name="description" content="Swoosher: Electric Scooters!" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta property="og:image" content="img/logo/logo6.png" />
  <link rel="shortcut icon" href="img/logo/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="style/swoosher-header.css" />
  <link rel="stylesheet" href="style/swoosher-extras.css" />
  <link rel="stylesheet" href="style/swoosher-mobile.css" />
  <link rel="apple-touch-icon" sizes="57x57" href="img/logo/apple-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="img/logo/apple-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="img/logo/apple-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="img/logo/apple-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="img/logo/apple-icon-180x180.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="img/logo/apple-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="img/logo/apple-icon-167x167.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="img/logo/apple-icon-152x152.png" />
  <script src="js/swoosher-header.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  <script src="https://kit.fontawesome.com/ed5e5ea2a8.js"></script>
</head>

<body>
  <nav>
    <div class="logo"><a href="index"><img src="img/logo/logo2.png" alt="Petizens Logo"></a></div>

    <label for="btn" class="icon">
      <span class="fa fa-bars"></span>
    </label>
    <input type="checkbox" id="btn" />
    <ul>
      <li><a href="index">Home</a></li>
      <li><a href="locations">Locations</a></li>
      <li><a href="about-us">About Us</a></li>
      <li><a href="contacts">Contact Us</a></li>
    </ul>
  </nav>