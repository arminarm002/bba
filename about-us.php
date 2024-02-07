<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
<meta charset="UTF-8">
  <meta name='keywords' content='ลดน้ำหนัก, อาหารเสริม, สุขภาพ, ดูแลตัวเอง'>
  <meta name='description' content='เว็บไซต์ให้คำปรึกษาผู้ที่ต้องการลดน้ำหนักหรือดูแลตัวเอง'>
  <meta name='copyright' content='BBA Team'>
  <meta name='robots' content='index,follow'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>body health & wellness</title>
  <link rel="stylesheet" href="css/components.css">
  <link rel="stylesheet" href="css/icons.css">
  <link rel="stylesheet" href="css/responsee.css">
  <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="owl-carousel/owl.theme.css">
  <!-- CUSTOM STYLE -->
  <link rel="stylesheet" href="css/template-style.css">
  <link rel="stylesheet" href="theme/css/self.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
  <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
</head>

<body class="size-1520 primary-color-red background-dark font-noto">
  <?php
  include('components/navbar.php');
  ?>
  <!-- MAIN -->
  <main role="main">
    <!-- TOP SECTION -->
    <header class="grid">
      <div class="s-12 padding-2x">
        <h1 class="text-strong text-white text-center center text-size-60 text-uppercase margin-bottom-20">About Us</h1>
        <p class="text-size-20 text-white text-center center text-uppercase">Con nonummy sem integer interdum volutpat
          dis eget eligendi aliquip dolorum magnam. Iriure duis autem vel<br> eum dolor in hendrerit in vulputate velit
          esse molestie consequat.</p>
      </div>
    </header>

    <section class="grid margin">
      <h2
        class="s-12 text-white text-thin text-size-30 text-white text-uppercase margin-top-bottom-20 center text-center">
        Our <b>Dream Team</b></h2>
      <div class="s-12 m-6 l-2 margin-bottom">
        <img src="img/team-01.jpg" />
        <h4 class="background-primary padding text-strong">Frank Star</h4>
        <p class="margin-bottom-10 text-primary text-uppercase">Boss</p>
      </div>
      <div class="s-12 m-6 l-2 margin-bottom">
        <img src="img/team-02.jpg" />
        <h4 class="background-primary padding text-strong">Jane Naismith</h4>
        <p class="margin-bottom-10 text-primary text-uppercase">Graphic Designer</p>
      </div>
      <div class="s-12 m-6 l-2 margin-bottom">
        <img src="img/team-03.jpg" />
        <h4 class="background-primary padding text-strong">Mark Stoner</h4>
        <p class="margin-bottom-10 text-primary text-uppercase">Web Designer</p>
      </div>
      <div class="s-12 m-6 l-2 margin-bottom">
        <img src="img/team-04.jpg" />
        <h4 class="background-primary padding text-strong">Steve Carpenter</h4>
        <p class="margin-bottom-10 text-primary text-uppercase">Web Developer</p>
      </div>
      <div class="s-12 m-6 l-2 margin-bottom">
        <img src="img/team-05.jpg" />
        <h4 class="background-primary padding text-strong">Steff Kingston</h4>
        <p class="margin-bottom-10 text-primary text-uppercase">Account Manager</p>
      </div>
      <div class="s-12 m-6 l-2 margin-bottom">
        <img src="img/team-06.jpg" />
        <h4 class="background-primary padding text-strong">John Sandman</h4>
        <p class="margin-bottom-10 text-primary text-uppercase">Account Manager</p>
      </div>
    </section>
    <header class="grid">
      <div class="s-12 padding-2x">
        <h1 class="text-strong text-white text-center center text-size-60 text-uppercase margin-bottom-20">Our Services
        </h1>
        <p class="text-size-20 text-white text-center center text-uppercase">Con nonummy sem integer interdum volutpat
          dis eget eligendi aliquip dolorum magnam. Iriure duis autem vel<br> eum dolor in hendrerit in vulputate velit
          esse molestie consequat.</p>
      </div>
    </header>
  </main>
  <?php
  include('components/footer.html');
  ?>
</body>

</html>