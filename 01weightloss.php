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
        <div class="item background-image" style="background-image:url(img/carousel-04.jpg)">
          <p class="text-padding text-strong text-white text-s-size-30 text-size-60 text-uppercase background-primary">
            ลดน้ำหนักร่วมกัน</p><br>
          <p class="text-padding text-size-20 text-dark text-uppercase background-white">การควบคุมอาหาร
            การสร้างกล้ามเนื้อแทนที่ไขมัน การเผาผลาญอย่างถูกวิธี</p>
        </div>
      </div>
    </section>

    <!-- SECTION 1 -->
    <section class="grid margin text-center">
      <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-red">
        <i class="icon-sli-equalizer text-size-60 text-white center margin-bottom-15"></i>
        <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">การลดน้ำหนักอย่างยั่งยืน
        </h3>
      </a>
      <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-blue">
        <i class="icon-sli-layers text-size-60 text-white center margin-bottom-15"></i>
        <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">
          สารอาหารที่มีประโยชน์ต่อร่างกาย
        </h3>
      </a>
      <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-orange">
        <i class="icon-sli-diamond text-size-60 text-white center margin-bottom-15"></i>
        <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">ออกกำลังกายอย่างง่าย
        </h3>
      </a>
      <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-aqua">
        <i class="icon-sli-share text-size-60 text-white center margin-bottom-15"></i>
        <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">ผลิตภัณฑ์เสริมอาหาร</h3>
      </a>
    </section>
  </main>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/bba/components/footer.html');
  ?>
</body>

</html>