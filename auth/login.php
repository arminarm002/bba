<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Log in/Sign in</title>
  <link rel="stylesheet" href="/bba/css/components.css">
  <link rel="stylesheet" href="/bba/css/icons.css">
  <link rel="stylesheet" href="/bba/css/responsee.css">
  <link rel="stylesheet" href="/bba/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="/bba/owl-carousel/owl.theme.css">
  <!-- CUSTOM STYLE -->
  <link rel="stylesheet" href="/bba/css/template-style.css">
  <link rel="stylesheet" href="/bba/theme/css/self.css">
  <link href="https://fonts.googleapis.com/css?family=Barlow:100,300,400,700,800&amp;subset=latin-ext" rel="stylesheet">
  <script type="text/javascript" src="/bba/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="/bba/js/jquery-ui.min.js"></script>
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
              <input type="text" name="username" placeholder="ชื่อผู้ใช้ หรือ อีเมลล์" required></input>
            </div>
            <!-- Password -->
            <h2 class="text-size-20 text-strong text-uppercase text-dark" style="margin-bottom: 0px; margin-top: 25px;">
              Password
            </h2>
            <div class="webflow-style-input">
              <input type="password" name="pass" placeholder="รหัสผ่าน" required></input>
            </div>
            <button type="submit" class="bubbly-button" name="login" style="background-color: #31a533;">เข้าสู่ระบบ</button>
          </form>
          <a href="register.php"><button class="bubbly-button"
              style="background-color: #00b5a6;">สมัครสมาชิก</button></a>

        </div>
      </div>
    </section>
  </main>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/bba/components/footer.html');
  ?>

</body>

</html>