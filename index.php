<?php
require "header.php";
?>

<head>
  <link rel="stylesheet" href="style/swoosher-style.css" />
  <title>Swoosher</title>
</head>

<main class="main-content">

  <div class="parallax1">
    <div class="heading">
      <img class="swoosher" src="img/logo/logo4.png">
    </div>
  </div>

  <div class="parallax2">

    <section>
      <div class="two-col31">
        <img class="swoosher-scooter" src="img/scooter.png">
      </div>
      <div class="two-col32">
        <h1>What Do We Offer? Glad You Asked!</h1>
        <table class="features-table">
          <tr class="row1">
            <td width="40%">
              <img width="30%" src="img/pay.png" alt="">
              <h2>Pay As You Go!</h2>
              <p>Pay as you ride according to the distance!</p>
            </td>
            <td width="40%">
              <img width="30%" src="img/time.png" alt="">
              <h2>No Time To Wait!</h2>
              <p>Always there when you need it!</p>
            </td>
          </tr>
          <tr class="row1">
            <td width="40%">
              <img width="30%" src="img/poll.png" alt="">
              <h2>Zero Pollution!</h2>
              <p>All our Scooters run on 100% electricity!</p>
            </td>
            <td width="40%">
              <img width="30%" src="img/speed.png" alt="">
              <h2>Speed You Can Control!</h2>
              <p>In a rush or be Chill, its always your choice!</p>
            </td>
          </tr>
        </table>
      </div>
    </section>
  </div>

  <div class="parallax3">
    <div class="text-location">
      <h1>Find us at your favourite locations all over Kuala Lumpur!</h1>
      <form action=locations>
        <button class="btn-loc"> Locations </button>
      </form>
    </div>
  </div>

  <div class="parallax4">
    <div class="Con-abt">
      <h1>Need More Info?</h1><br>
      <div class="two-col-21">
        <a href="contacts"><img src="img/contact.png" alt="contactus"></a>
        <h3>Contact Us</h3>
      </div>
      <div class="two-col-22">
        <a href="about-us"><img src="img/about.png" alt="aboutus"></a>
        <h3>About Us</h3>
      </div>
    </div>
  </div>
</main>

<?php
require "footer.php";
?>