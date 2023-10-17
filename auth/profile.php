<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Free responsive business website template</title>
  <link rel="stylesheet" href="/bba/css/components.css">
  <link rel="stylesheet" href="/bba/css/icons.css">
  <link rel="stylesheet" href="/bba/css/responsee.css">
  <link rel="stylesheet" href="/bba/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="/bba/owl-carousel/owl.theme.css">
  <!-- CUSTOM STYLE -->
  <link rel="stylesheet" href="/bba/css/template-style.css">
  <link href="https://fonts.googleapis.com/css?family=Barlow:100,300,400,700,800&amp;subset=latin-ext" rel="stylesheet">
  <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
</head>

<body class="size-1520 primary-color-red background-dark">
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/bba/components/navbar.php');
  ?>
  <!-- MAIN -->
  <main role="main">
    <!-- TOP SECTION -->
    <header class="grid">
      <div class="s-12 padding-2x">
        <h1 class="text-strong text-white text-center center text-size-60 text-uppercase margin-bottom-20">
          <?php echo $_SESSION['fullname']; ?>
        </h1>
      </div>
    </header>

    <!-- SECTION 1 -->
    <section class="grid margin-bottom-20">
      <div class="m-12 l-7 center">
        <!-- Contact Information-->
        <div class="s-12 padding-2x background-white text-center">
          <h2 class="text-size-20 margin-bottom-10 text-strong text-uppercase text-dark">Company Address</h2>
          <p>Aviation Way 99</p>
          <p>Los Angeles, USA</p>

          <h2 class="text-size-20 margin-top-30 margin-bottom-10 text-strong text-uppercase text-dark">E-mail</h2>
          <p><a class="text-primary-hover" href="mailto:contact@sampledomain.com">contact@sampledomain.com</a></p>
          <p><a class="text-primary-hover" href="mailto:office@sampledomain.com">office@sampledomain.com</a></p>

          <h2 class="text-size-20 margin-top-30 margin-bottom-10 text-strong text-uppercase text-dark">Phone Numbers
          </h2>
          <p>0800 4521 800 50</p>
          <p>0450 5896 625 16</p>
          <p>0798 6546 465 </p>
        </div>

        <iframe class="s-12 center"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d408353.5714751251!2d-118.71693940358037!3d33.79914670853249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2b4655ccd2001%3A0xa7f54b3bb5afde44!2s99+Aviation+Blvd%2C+Manhattan+Beach%2C+CA+90266%2C+Spojen%C3%A9+%C5%A1t%C3%A1ty+americk%C3%A9!5e0!3m2!1ssk!2ssk!4v1558635197012!5m2!1ssk!2ssk"
          height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

    </section>
  </main>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/bba/components/footer.html');
  ?>
</body>

</html>