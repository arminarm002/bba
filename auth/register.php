<!DOCTYPE html>
<html lang="en-US">

<head>
<meta name='keywords' content='ลดน้ำหนัก, อาหารเสริม, สุขภาพ, ดูแลตัวเอง'>
  <meta name='description' content='เว็บไซต์ให้คำปรึกษาผู้ที่ต้องการลดน้ำหนักหรือดูแลตัวเอง'>
  <meta name='copyright' content='BBA Team'>
  <meta name='robots' content='index,follow'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>body health & wellness</title>
  <link rel="stylesheet" href="../css/components.css">
  <link rel="stylesheet" href="../css/icons.css">
  <link rel="stylesheet" href="../css/responsee.css">
  <link rel="stylesheet" href="../owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="../owl-carousel/owl.theme.css">
  <!-- CUSTOM STYLE -->
  <link rel="stylesheet" href="../css/template-style.css">
  <link rel="stylesheet" href="../theme/css/self.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
  <script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="../js/jquery-ui.min.js"></script>
</head>

<body class="size-1520 primary-color-red background-dark font-noto">
  <?php
  include('../components/navbar.php');
  ?>

  <!-- MAIN -->
  <main role="main">
    <!-- TOP SECTION -->
    <header class="grid">
      <div class="s-12 padding-2x">
        <h1 class="text-strong text-white text-center center text-size-60 text-uppercase margin-bottom-20">
          Log in <span style="color: #c81010!important;">|</span> Sign in
        </h1>
      </div>
    </header>

    <!-- SECTION 1 -->
    <section class="grid margin-bottom-20">
      <div class="m-12 l-7 center">
        <!-- Contact Information-->
        <div class="s-12 padding-2x background-white text-center">

          <form action="authen.php" method="POST">
            <!-- Username -->
            <h2 class="text-size-20 text-strong text-uppercase text-dark" style="margin-bottom: 0px; margin-top: 25px;">
              Username <span style="color: #c81010!important;">|</span> Email
            </h2>
            <div class="webflow-style-input">
              <input type="text" name="username" placeholder="ใส่ชื่อหรืออีเมลล์สำหรับลงชื่อเข้าระบบ" required></input>
            </div>
            <!-- Password -->
            <h2 class="text-size-20 text-strong text-uppercase text-dark" style="margin-bottom: 0px; margin-top: 25px;">
              Password
            </h2>
            <div class="webflow-style-input">
              <input type="password" name="pass" placeholder="รหัสผ่าน" required></input>
            </div>
            <!-- Fullname -->
            <h2 class="text-size-20 text-strong text-uppercase text-dark" style="margin-bottom: 0px; margin-top: 25px;">
              Fullname
            </h2>
            <div class="webflow-style-input">
              <input type="text" name="name" placeholder="ชื่อ-สกุล (ภาษาไทย)" required></input>
            </div>
            <!-- Phone -->
            <h2 class="text-size-20 text-strong text-uppercase text-dark" style="margin-bottom: 0px; margin-top: 25px;">
              Telephone number
            </h2>
            <div class="webflow-style-input">
              <input type="text" name="phone" placeholder="เบอร์โทรศัพท์" required></input>
            </div>
            <!-- Gender -->
            <h2 class="text-size-20 text-strong text-uppercase text-dark" style="margin-bottom: 5px; margin-top: 25px;">
              Gender
            </h2>
            <div class="webflow-style-input" style="display: block;">
              <label>กรุณาระบุเพศ:</label>
              <select name="gender" required>
                <option value="" disabled selected>เพศ</option>
                <option value="male">ชาย</option>
                <option value="female">หญิง</option>
              </select>
            </div>
            <button type="submit" class="bubbly-button" name="add" style="background-color: #31a533;">ยืนยัน</button>
          </form>
          <a href="login.php"><button class="bubbly-button" style="background-color: #00b5a6;">หน้าล็อกอิน</button></a>

        </div>
      </div>
    </section>
  </main>
  <?php
  include('../components/footer.html');
  ?>

</body>

</html>