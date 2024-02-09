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
        <div class="item background-image" style="background-image:url(img/carousel-05.jpg)">
          <p class="text-padding text-strong text-white text-s-size-30 text-size-60 text-uppercase background-primary">
            พัฒนาตัวเองร่วมกัน</p><br>
          <p class="text-padding text-size-20 text-dark text-uppercase background-white">นอกเหนือจากการเปลี่ยนรูปร่าง
            การพัฒนาทางความคิดก็เป็นสิ่งสำคัญในการดำเนินชีวิต</p>
        </div>
        <div class="item background-image" style="background-image:url(img/carousel-06.jpg)">
          <p class="text-padding text-strong text-white text-s-size-30 text-size-60 text-uppercase background-primary">
            เรียนรู้ร่วมกัน</p><br>
          <p class="text-padding text-size-20 text-dark text-uppercase background-white">รับองค์ความรู้
            เพื่อการสร้างธุรกิจที่ยั่งยืน รวมถึงการสร้างมรดกให้ลูกหลาน</p>
        </div>
      </div>
    </section>

    <section class="grid margin text-center" style="display:block;">
      <a href="auth/record2.php" class="s-12 m-6 l-6 padding-2x vertical-center margin-bottom background-aqua"
        style="height:50px;width:50%;">
        <h3 class="text-strong text-size-20 text-line-height-1 text-uppercase">สแกนร่างกาย</h3>
      </a>
    </section>

    <!-- SECTION 1 -->
    <section class="grid margin text-center">
      <a href="01weightloss.php" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-red">
        <i class="icon-sli-equalizer text-size-60 text-white center margin-bottom-15"></i>
        <h3 class="text-strong text-size-20 text-line-height-1 text-uppercase">การลดน้ำหนักอย่างยั่งยืน
        </h3>
      </a>
      <a href="02nutrients.php" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-blue">
        <i class="icon-sli-layers text-size-60 text-white center margin-bottom-15"></i>
        <h3 class="text-strong text-size-20 text-line-height-1 text-uppercase">
          สารอาหารที่มีประโยชน์ต่อร่างกาย
        </h3>
      </a>
      <a href="03exercise.php" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-orange">
        <i class="icon-sli-diamond text-size-60 text-white center margin-bottom-15"></i>
        <h3 class="text-strong text-size-20 text-line-height-1 text-uppercase">ออกกำลังกายอย่างสม่ำเสมอ
        </h3>
      </a>
      <a href="04food.php" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-aqua">
        <i class="icon-sli-share text-size-60 text-white center margin-bottom-15"></i>
        <h3 class="text-strong text-size-20 text-line-height-1 text-uppercase">ผลิตภัณฑ์เสริมอาหาร</h3>
      </a>
    </section>
  </main>
  <?php
  include('components/footer.html');
  ?>
</body>

</html>