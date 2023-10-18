<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/bba/auth/connectdb.php');
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
  <link rel="stylesheet" href="/bba/css/show.css">
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
        <h2 class="text-strong text-white text-center center text-size-60 text-uppercase margin-bottom-20">
          <?php echo $_SESSION['fullname']; ?>
        </h2>
      </div>
    </header>

    <section class="grid margin-bottom-20">
      <div class="m-12 l-7">
        <?php
        $sql = $conn->query("SELECT * FROM tb_scan WHERE user_id='" . $_SESSION['id'] . "'");
        if ($sql->num_rows > 0) { ?>

          <table style="width:100%;color:#333333;">
            <tr>
              <th valign="top">วันที่</th>
              <?php foreach ($sql as $row) {
                ?>
                <th>
                  <?php echo $row['date']; ?>
                </th>
              <?php } ?>
            </tr>
            <tr>
              <td valign="top">น้ำหนัก</td>
              <?php foreach ($sql as $row) {
                ?>
                <td>
                  <?php echo $row['user_weight'];
                  $weight = $row['user_weight']; ?>
                </td>
              <?php } ?>
            </tr>
            <tr>
              <td>ไขมันในร่างกาย (%)</td>
              <?php foreach ($sql as $row) {
                ?>
                <td>
                  <?php echo $row['user_fat'];
                  $fat = $row['user_fat']; ?>
                </td>
              <?php } ?>
            </tr>
            <tr>
              <td>ไขมันในช่องท้อง (หน่วย)</td>
              <?php foreach ($sql as $row) {
                ?>
                <td>
                  <?php echo $row['user_visceralfat']; 
                  $vfat = $row['user_visceralfat'];?>
                </td>
              <?php } ?>
            </tr>
            <tr>
              <td>กล้ามเนื้อ (%)</td>
              <?php foreach ($sql as $row) {
                ?>
                <td>
                  <?php echo $row['user_muscle'];
                  $muscle = $row['user_muscle'];?>
                </td>
              <?php } ?>
            </tr>
            <tr>
              <td>อายุเซลล์ในร่างกาย (ปี)</td>
              <?php foreach ($sql as $row) {
                ?>
                <td>
                  <?php echo $row['user_bodyage'];
                  $bodyage = $row['user_bodyage'];?>
                </td>
              <?php } ?>
            </tr>
            <tr>
              <td>อัตราการเผาผลาญ (kcal)</td>
              <?php foreach ($sql as $row) {
                ?>
                <td>
                  <?php echo $row['user_metabolism'];
                  $metabolism = $row['user_metabolism'];?>
                </td>
              <?php } ?>
            </tr>
            <tr>
              <td>ดัชนีมวลร่างกายโดยรวม (BMI)</td>
              <?php foreach ($sql as $row) {
                ?>
                <td>
                  <?php echo $row['user_bmi'];
                  $bmi = $row['user_bmi'];?>
                </td>
              <?php } ?>
            </tr>

          <?php } ?>
        </table>
      </div>
    </section>

    <section class="grid margin-bottom-20">
      <h1> ประมวลค่าร่างกาย (ล่าสุด) </h1>
      <!-- น้ำหนัก -->
      <p><?php echo "น้ำหนัก "; ?><u><?php echo $weight; ?></u><?php echo " กิโลกรัม"; ?></p>
      <!-- คำนวณไขมันในร่างกาย -->
      <p>
        <?php echo "ไขมันในร่างกาย = " . $fat . "อยู่ในเกณฑ์ "; 
        ?><u><?php 
        if($_SESSION['gender']=="male"){
          if($fat<=9){
            echo "ต่ำ";
          } else if ($fat<=19.9){
            echo "ปกติ";
          } else if ($fat<=24.9){
            echo "เริ่มอ้วน";
          } else if ($fat>=25){
            echo "อ้วน";
          }
        } else if ($_SESSION['gender']=="female"){
          if($fat<=19.9){
            echo "ต่ำ";
          } else if ($fat<=29.9){
            echo "ปกติ";
          } else if ($fat<=34.9){
            echo "เริ่มอ้วน";
          } else if ($fat>=35){
            echo "อ้วน";
          }
        }?></u>
      </p>
      <!-- คำนวณไขมันในช่องท้อง -->
      <p>
        <?php echo "ไขมันในช่องท้อง = " . $vfat . "อยู่ในเกณฑ์ "; 
        ?><u><?php 
          if($vfat<=2){
            echo "สมบูรณ์มาก";
          } else if ($vfat<=5){
            echo "ปกติ";
          } else if ($vfat<=10){
            echo "เล็กน้อย";
          } else if ($vfat<=15){
            echo "อันตราย";
          } else if ($vfat>15){
            echo "อันตรายมาก";
          }?></u>
      </p>
      <!-- คำนวณกล้ามเนื้อ -->
        <?php echo "ร่างกายมีกล้ามเนื้อ = " . $muscle . "อยู่ในเกณฑ์ "; 
        ?><u><?php 
          if($_SESSION['gender']=="male"){
            if($muscle<=32.8){
            echo "ต่ำ";
          } else if ($muscle<=35.7){
            echo "ปกติ";
          } else if ($muscle<=37.3){
            echo "สูง";
          } else if ($muscle>=37.4){
            echo "สูงมาก";
          }
        } if($_SESSION['gender']=="female"){
          if($muscle<=25.8){
          echo "ต่ำ";
        } else if ($muscle<=27.9){
          echo "ปกติ";
        } else if ($muscle<=29){
          echo "สูง";
        } else if ($muscle>=29.1){
          echo "สูงมาก";
        }
      }?></u>
      <!-- อายุเซลล์ร่างกาย -->
      <p><?php echo "อายุเซลล์ในร่างกาย "; ?><u><?php echo $bodyage; ?></u><?php echo " ปี" ?></p>
      <!-- อัตราการเผาผลาญ -->
      <p><?php echo "อัตราการเผาผลาญ ";?><u><?php echo $metabolism; ?></u><?php echo " kcal" ?></p>
      <!-- คำนวณค่า BMI -->
      <p>
        <?php echo "BMI = " . $bmi . "อยู่ในเกณฑ์ ";
        ?><u><?php 
          if($bmi<=18.5){
            echo "ผอม";
          } else if ($bmi<=22.9){
            echo "สมส่วน (ปกติ)";
          } else if ($bmi<=24.9){
            echo "ท้วม";
          } else if ($bmi<=30){
            echo "อ้วน";
          } else if ($bmi>30){
            echo "อ้วนมาก (อันตราย)";
          }?></u>
      </p>
    </section>

  </main>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/bba/components/footer.html');
  ?>
  <script>
    let today = new Date().toISOString().slice(0, 10);
    document.getElementById("date").innerHTML = today;
  </script>
</body>

</html>