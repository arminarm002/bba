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
  <main role="main" style="margin: 0px 25px;">
    <!-- TOP SECTION -->
    <header class="grid">
      <div class="s-12 padding-2x">
        <h1 class="text-strong text-white text-center center text-size-40 text-uppercase margin-bottom-20">About Us</h1>
        <p class="text-size-20 text-white text-center center text-uppercase">เราคือ
          ทีมผู้สร้างการเปลี่ยนแปลงทางรูปลักษณ์ ทางความคิด มุ่งมั่นพัฒนาศักยภาพองค์กรเพื่อสุขภาพของคนไทยทั้งประเทศ </p>
      </div>
    </header>

    <section class="grid margin">
      <h2
        class="s-12 text-white text-thin text-size-30 text-white text-uppercase margin-top-bottom-20 center text-center">
        Our <b>Dream Team</b></h2>
      <div class="s-12 m-6 l-2 margin-bottom">
        <img src="img/team-01.jpg" />
        <h4 class="background-primary padding text-strong">ภรัณ เทียนสันต์</h4>
      </div>
      <div class="s-12 m-6 l-2 margin-bottom">
        <img src="img/team-02.jpg" />
        <h4 class="background-primary padding text-strong">ณิชชารีย์ เทียนสันต์</h4>
      </div>
      <div class="s-12 m-6 l-2 margin-bottom">
        <img src="img/team-03.jpg" />
        <h4 class="background-primary padding text-strong">อังคณา สมานพันธ์</h4>
      </div>
      <div class="s-12 m-6 l-2 margin-bottom">
        <img src="img/team-04.jpg" />
        <h4 class="background-primary padding text-strong">ปฏิพล ประวันเตา</h4>
      </div>
      <div class="s-12 m-6 l-2 margin-bottom">
        <img src="img/team-05.jpg" />
        <h4 class="background-primary padding text-strong">สุรเดช คุรุภัณฑ์</h4>
      </div>
      <!-- <div class="s-12 m-6 l-2 margin-bottom">
        <img src="img/team-06.jpg" />
        <h4 class="background-primary padding text-strong">John Sandman</h4>
        <p class="margin-bottom-10 text-primary text-uppercase">Account Manager</p>
      </div> -->
    </section>
    <header class="grid">
      <div class="s-12 padding-2x">
        <h1 class="text-strong text-white text-center center text-size-40 text-uppercase margin-bottom-20">Our Services
        </h1>
        <p class="text-size-20 text-white text-center center text-uppercase">- ปรึกษาปัญหาสุขภาพฟรี🔥<br><br> - วัดค่ามวลร่างกายฟรี🔥<br><br> - แนะนำโปรแกรมคอร์สลดน้ำหนักและควบคุมน้ำหนัก<br><br> - บริการติดตามผลถึงที่</p>
      </div>
    </header>
  </main>
  <?php
  include('components/footer.html');
  ?>
</body>

</html>