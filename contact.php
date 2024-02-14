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
  <style>
    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 8px;
      color: #ade5f9;
    }

    input,
    textarea {
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      background-color: #ade5f9;
      color: #002633;
    }

    button {
      padding: 10px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
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
        <h1 class="text-strong text-white text-center center text-size-40 text-uppercase margin-bottom-20">Contact Us
        </h1>
      </div>
    </header>

    <section class="grid margin">
      <div class="s-12 m-6 l-6 margin-bottom">
        <form action="contact2.php" method="post">
          <label for="name">Name :</label>
          <input type="text" id="name" name="name" required>

          <label for="phone">Phone :</label>
          <input type="text" id="phone" name="phone" required>

          <label for="message">Message :</label>
          <textarea id="message" name="message" rows="4" required></textarea>

          <button type="submit" name="sendmail">Submit</button>
        </form>
      </div>
      <div class="s-12 m-6 l-6 margin-bottom"></div>
    </section>

  </main>
  <?php
  include('components/footer.html');
  ?>
</body>

</html>