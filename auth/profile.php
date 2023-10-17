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

        </div>
        <img src="/bba/img/scan.jpg">
      </div>

    </section>
  </main>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/bba/components/footer.html');
  ?>
</body>

</html>