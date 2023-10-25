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
  <link rel="stylesheet" href="/bba/theme/css/self.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
  <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
</head>

<body class="size-1520 primary-color-red background-dark font-noto">
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/bba/components/navbar.php');
  ?>
  <!-- MAIN -->
  <main role="main">
    <!-- TOP SECTION -->
    <section class="grid">
      <!-- Main Carousel -->
      <div
        class="s-12 margin-bottom carousel-fade-transition owl-carousel carousel-main carousel-nav-white carousel-hide-arrows background-dark">
        <div class="item background-image" style="background-image:url(img/carousel-01.jpg)">
          <p class="text-padding text-strong text-white text-s-size-30 text-size-60 text-uppercase background-primary">
            We are Web design Heroes</p>
          <p class="text-padding text-size-20 text-dark text-uppercase background-white">Con nonummy sem integer
            interdum volutpat dis eget eligendi aliquip dolorum magnam.</p>
        </div>
        <div class="item background-image" style="background-image:url(img/carousel-02.jpg)">
          <p class="text-padding text-strong text-white text-s-size-30 text-size-60 text-uppercase background-primary">
            Inspired by Technologies</p>
          <p class="text-padding text-size-20 text-dark text-uppercase background-white">Con nonummy sem integer
            interdum volutpat dis eget eligendi aliquip dolorum magnam.</p>
        </div>
        <div class="item background-image" style="background-image:url(img/carousel-03.jpg)">
          <p class="text-padding text-strong text-white text-s-size-30 text-size-60 text-uppercase background-primary">
            CSS and HTML is our Playground</p>
          <p class="text-padding text-size-20 text-dark text-uppercase background-white">Con nonummy sem integer
            interdum volutpat dis eget eligendi aliquip dolorum magnam.</p>
        </div>
      </div>
    </section>

    <!-- SECTION 1 -->
    <section class="grid margin text-center">
      <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-red">
        <i class="icon-sli-equalizer text-size-60 text-white center margin-bottom-15"></i>
        <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Unlimited Color Variants
        </h3>
      </a>
      <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-blue">
        <i class="icon-sli-layers text-size-60 text-white center margin-bottom-15"></i>
        <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Many Reusable Elements
        </h3>
      </a>

      <!-- Image-->
      <img class="m-12 l-6 l-row-2 margin-bottom" src="img/img-06.jpg">

      <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-orange">
        <i class="icon-sli-diamond text-size-60 text-white center margin-bottom-15"></i>
        <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Responsive Layoute</h3>
      </a>
      <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-aqua">
        <i class="icon-sli-share text-size-60 text-white center margin-bottom-15"></i>
        <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Clean Modern Code</h3>
      </a>
    </section>

    <!-- SECTION 2 -->
    <section class="grid section margin-bottom background-dark">
      <h2 class="s-12 l-6 center text-thin text-size-30 text-white text-uppercase margin-bottom-30">Responsive
        <b>Parallax Background</b>
      </h2>
      <p class="s-12 l-6 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
        tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing
        elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
    </section>

    <!-- SECTION 3 -->
    <section class="grid margin">
      <!-- Image-->
      <img class="s-12 m-6 margin-bottom" src="img/img-01.jpg">

      <div class="s-12 m-6 padding-2x margin-bottom background-blue">
        <h2 class="text-strong text-size-50 text-line-height-1">Nonummy nibh euismod tincidunt ut laoreet<br> massa nec
          orci accusamus auctor aute</h2>
        <ul>
          <li>Sed diam nonummy nibh euismod tincidunt ut laoreet</li>
          <li>Dolore magna aliquam erat volutpat</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</li>
          <li>Sed diam nonummy nibh euismod tincidunt ut laoreet</li>
          <li>Dolore magna aliquam erat volutpat</li>
        </ul>
      </div>
    </section>

  </main>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/bba/components/footer.html');
  ?>
</body>

</html>