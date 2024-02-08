<?php
session_start();
if (isset($_SESSION['level'])) {
  include('connectdb.php');
  $sql = $conn->query("SELECT * FROM tb_scan WHERE user_id='" . $_SESSION['id'] . "'");
  foreach ($sql as $row) {
    $weight = $row['user_weight'];
    $fat = $row['user_fat'];
    $vfat = $row['user_visceralfat'];
    $muscle = $row['user_muscle'];
    $bodyage = $row['user_bodyage'];
    $metabolism = $row['user_metabolism'];
    $bmi = $row['user_bmi'];
  }
  $pweight = ($weight * 100) / 150;
  $pfat = ($fat * 100) / 50;
  $pvfat = ($vfat * 100) / 30;
  $pmuscle = ($muscle * 100) / 40;
  $pbodyage = ($bodyage * 100) / 80;
  $pmetabolism = ($metabolism * 100) / 2500;
  $pbmi = ($bmi * 100) / 50;
  ?>
  <!DOCTYPE html>
  <html lang="en-US">

  <head>
  <meta name='description' content='เว็บไซต์ให้คำปรึกษาผู้ที่ต้องการลดน้ำหนักหรือดูแลตัวเอง'>
  <meta name='copyright' content='BBA Team'>
  <meta name='robots' content='index,follow'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>body health & wellness</title>
  <link rel="stylesheet" href="../css/components.css">
  <link rel="stylesheet" href="../css/icons.css">
  <link rel="stylesheet" href="../css/responsee.css">
  <link rel="stylesheet" href="../css/show.css">
  <link rel="stylesheet" href="../owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="../owl-carousel/owl.theme.css">
  <!-- CUSTOM STYLE -->
  <link rel="stylesheet" href="../css/template-style.css">
  <link rel="stylesheet" href="../theme/css/self.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
  <script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="../js/jquery-ui.min.js"></script>
    <style>
      .weight {
        width:
          <?php echo $pweight; ?>%;
      }

      .fat {
        width:
          <?php echo $pfat; ?>%;
      }

      .vfat {
        width:
          <?php echo $pvfat; ?>%;
      }

      .muscle {
        width:
          <?php echo $pmuscle; ?>%;
      }

      .bodyage {
        width:
          <?php echo $pbodyage; ?>%;
      }

      .metabolism {
        width:
          <?php echo $pmetabolism; ?>%;
      }

      .bmi {
        width:
          <?php echo $pbmi; ?>%;
      }
    </style>
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
          <h2 class="text-strong text-white text-center center text-size-60 text-uppercase margin-bottom-20">
            <?php echo $_SESSION['fullname']; ?>
          </h2>
        </div>
      </header>

      <section class="grid margin-bottom-20">
        <div class="m-12 l-7">
          <?php
          $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
          $limit = isset($_GET['limit']) ? intval($_GET['limit']) : 5;
          $offset = ($page - 1) * $limit;
          $countSql = $conn->query("SELECT COUNT(*) AS total_records FROM tb_scan WHERE user_id='" . $_SESSION['id'] . "'");
          $totalRecords = $countSql->fetch_assoc()['total_records'];
          $totalPages = ceil($totalRecords / $limit);
          $sql = $conn->query("SELECT * FROM tb_scan WHERE user_id='" . $_SESSION['id'] . "'  LIMIT $offset, $limit");
          if ($sql->num_rows > 0) { ?>

            <table style="width:100%;color:#333333;">
              <tr style="color: white;">
                <th valign="top">วันที่</th>
                <?php foreach ($sql as $row) {
                  ?>
                  <th>
                    <?php echo $row['date']; ?>
                  </th>
                <?php } ?>
              </tr>
              <tr>
                <th class="th-in" valign="top">น้ำหนัก</th>
                <?php foreach ($sql as $row) {
                  ?>
                  <th style="font-size:150%;">
                    <?php echo $row['user_weight']; ?>
                  </th>
                <?php } ?>
              </tr>
              <tr style="color: white;">
                <th class="th-in">ไขมันในร่างกาย (%)</th>
                <?php foreach ($sql as $row) {
                  ?>
                  <th style="font-size:150%;">
                    <?php echo $row['user_fat']; ?>
                  </th>
                <?php } ?>
              </tr>
              <tr>
                <th class="th-in">ไขมันในช่องท้อง (หน่วย)</th>
                <?php foreach ($sql as $row) {
                  ?>
                  <th style="font-size:150%;">
                    <?php echo $row['user_visceralfat']; ?>
                  </th>
                <?php } ?>
              </tr>
              <tr style="color: white;">
                <th class="th-in">กล้ามเนื้อ (%)</th>
                <?php foreach ($sql as $row) {
                  ?>
                  <th style="font-size:150%;">
                    <?php echo $row['user_muscle']; ?>
                  </th>
                <?php } ?>
              </tr>
              <tr>
                <th class="th-in">อายุเซลล์ในร่างกาย (ปี)</th>
                <?php foreach ($sql as $row) {
                  ?>
                  <th style="font-size:150%;">
                    <?php echo $row['user_bodyage']; ?>
                  </th>
                <?php } ?>
              </tr>
              <tr style="color: white;">
                <th class="th-in">อัตราการเผาผลาญ (kcal)</th>
                <?php foreach ($sql as $row) {
                  ?>
                  <th style="font-size:150%;">
                    <?php echo $row['user_metabolism']; ?>
                  </th>
                <?php } ?>
              </tr>
              <tr>
                <th class="th-in">ดัชนีมวลร่างกายโดยรวม (BMI)</th>
                <?php foreach ($sql as $row) {
                  ?>
                  <th style="font-size:150%;">
                    <?php echo $row['user_bmi']; ?>
                  </th>
                <?php } ?>
              </tr>

            <?php } ?>
          </table>

          <div class="pagination" style="text-align: center; margin: 1rem;">
            <!-- Previous page link -->
            <?php if ($page > 1): ?>
              <a href="?page=<?= $page - 1 ?>">Previous</a>
            <?php endif ?>
            <!-- Page links -->
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
              <a href="?page=<?= $i ?>" class="<?= $page == $i ? 'active' : '' ?>">
                <?= $i ?>
              </a>
            <?php endfor ?>
            <!-- Next page link -->
            <?php if ($page < $totalPages): ?>
              <a href="?page=<?= $page + 1 ?>">Next</a>
            <?php endif ?>
          </div>
        </div>
      </section>

      <section class="grid margin-bottom-20">
        <h1> ประมวลค่าร่างกาย (ล่าสุด) </h1>

        <!-- น้ำหนัก -->
        <p class="p" style="margin-bottom: 0px;">
          น้ำหนัก <b><u>
            <?php echo $weight; ?>
          </u></b> กิโลกรัม <br>
        <div class="row" style="margin-bottom:0px;">
          <div class="col-2">30</div>
          <div class="col-2">60</div>
          <div class="col-2">90</div>
          <div class="col-2">120</div>
          <div class="col-2">150</div>
        </div>
        </p>
        <div class="progress">
          <div class="progress-bar weight">
            <span class="progress-bar-text">
              <b><?php echo $weight; ?></b>กก.
            </span>
          </div>
        </div>
        <br>

        <!-- คำนวณไขมันในร่างกาย -->
        <p class="p">
          <?php echo "% ไขมันในร่างกาย = <b>" . $fat . "</b> : อยู่ในเกณฑ์ ";
          ?><b><u>
            <?php
            if ($_SESSION['gender'] == "male") {
              if ($fat <= 9) {
                echo "ต่ำ";
              } else if ($fat <= 19.9) {
                echo "ปกติ";
              } else if ($fat <= 24.9) {
                echo "เริ่มอ้วน";
              } else if ($fat >= 25) {
                echo "อ้วน";
              }
            } else if ($_SESSION['gender'] == "female") {
              if ($fat <= 19.9) {
                echo "ต่ำ";
              } else if ($fat <= 29.9) {
                echo "ปกติ";
              } else if ($fat <= 34.9) {
                echo "เริ่มอ้วน";
              } else if ($fat >= 35) {
                echo "อ้วน";
              }
            } ?>
          </u></b>
        </p>
        <?php if ($_SESSION['gender'] == "male") { ?>
          <div class="row">
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2 ratate">ต่ำ &lt;9.9</div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2 ratate">ปกติ &lt;19.9</div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2 ratate">เริ่มอ้วน &lt;24.9</div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2 ratate">อ้วน&lt;50&gt;</div>
          </div>
        <?php } else if ($_SESSION['gender'] == "female") {
          ?>
            <div class="row">
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2 ratate">ต่ำ &lt;19.9</div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2 ratate">ปกติ &lt;29.9</div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2 ratate">เริ่มอ้วน &lt;34.9</div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2 ratate">อ้วน&lt;50&gt;</div>
            </div>
        <?php } ?>
        <div class="progress">
          <div class="progress-bar fat">
            <span class="progress-bar-text">
              <b><?php echo $fat; ?>%</b>
            </span>
          </div>
        </div>
        <br>

        <!-- คำนวณไขมันในช่องท้อง -->
        <p class="p">
          <?php echo "ไขมันในช่องท้อง = <b>" . $vfat . "</b> : อยู่ในเกณฑ์ ";
          ?><b><u>
            <?php
            if ($vfat <= 2) {
              echo "สมบูรณ์";
            } else if ($vfat <= 5) {
              echo "ปกติ";
            } else if ($vfat <= 10) {
              echo "เล็กน้อย";
            } else if ($vfat <= 15) {
              echo "อันตราย";
            } else if ($vfat > 15) {
              echo "อันตรายมาก";
            } ?>
          </u></b>
        </p>
        <div class="row">
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3 ratate">สมบูรณ์&lt;2</div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3 ratate">ปกติ&lt;5</div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3 ratate">เล็กน้อย&lt;10</div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3 ratate">อันตราย&lt;15</div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3 ratate">อันตรายมาก&lt;30&gt;</div>
        </div>
        <div class="progress">
          <div class="progress-bar vfat">
            <span class="progress-bar-text">
              <b><?php echo $vfat; ?>%</b>
            </span>
          </div>
        </div>
        <br>

        <!-- คำนวณกล้ามเนื้อ -->
        <p class="p">
          <?php echo "% กล้ามเนื้อในร่างกาย = <b>" . $muscle . "</b> : อยู่ในเกณฑ์ ";
          ?><b><u>
            <?php
            if ($_SESSION['gender'] == "male") {
              if ($muscle <= 32.8) {
                echo "ต่ำ";
              } else if ($muscle <= 35.7) {
                echo "ปกติ";
              } else if ($muscle <= 37.3) {
                echo "สูง";
              } else if ($muscle >= 37.4) {
                echo "สูงมาก";
              }
            }
            if ($_SESSION['gender'] == "female") {
              if ($muscle <= 25.8) {
                echo "ต่ำ";
              } else if ($muscle <= 27.9) {
                echo "ปกติ";
              } else if ($muscle <= 29) {
                echo "สูง";
              } else if ($muscle >= 29.1) {
                echo "สูงมาก";
              }
            } ?>
          </u></b>
        </p>
        <?php if ($_SESSION['gender'] == "male") { ?>
          <div class="row">
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div><!-- 10 -->
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div><!-- 20 -->
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div><!-- 30 -->
            <div class="mus-col-3"></div>
            <div class="mus-col-3 ratate">ต่ำ &lt;32.8</div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3 ratate">ปกติ &lt;35.7</div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3 ratate">สูง &lt;37.3</div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3"></div>
            <div class="mus-col-3 ratate">สูงมาก&lt;40&gt;</div><!-- 40 -->
          </div>
        <?php } else if ($_SESSION['gender'] == "female") {
          ?>
            <div class="row">
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div><!-- 10 -->
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div><!-- 20 -->
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3 ratate">ต่ำ &lt;25.8</div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3 ratate">ปกติ &lt;27.9</div>
              <div class="mus-col-3 ratate">สูง &lt;29.0</div>
              <div class="mus-col-3"></div><!-- 30 -->
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div><!-- 40 -->
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div><!-- 10 -->
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3"></div>
              <div class="mus-col-3 ratate">สูงมาก&lt;60&gt;</div>
            </div>
        <?php } ?>
        <div class="progress">
          <div class="progress-bar muscle">
            <span class="progress-bar-text">
              <b><?php echo $muscle; ?>%</b>
            </span>
          </div>
        </div>
        <br>

        <!-- อายุเซลล์ร่างกาย -->
        <p class="p" style="margin-bottom: 0px;">
          <?php echo "อายุเซลล์ร่างกาย = "; ?><b><u>
            <?php echo $bodyage;?>
          </u></b>
          <?php echo " ปี" ?>
        </p>
        <div class="row" style="margin-bottom: 0px;">
          <div class="col-3">20 ปี</div>
          <div class="col-3">40 ปี</div>
          <div class="col-3">60 ปี</div>
          <div class="col-3">80 ปี</div>
        </div>
        <div class="progress">
          <div class="progress-bar bodyage">
            <span class="progress-bar-text">
              <b><?php echo $bodyage; ?> ปี</b>
            </span>
          </div>
        </div>
        <br>

        <!-- อัตราการเผาผลาญ -->
        <div>
          <p class="p" style="margin-bottom: 0px;">
            <?php echo "อัตราการเผาผลาญ = "; ?><u>
              <b><?php echo $metabolism; ?></b>
            </u>
            <?php echo " kcal" ?>
          </p>
          <div class="row" style="margin-bottom: 0px;">
            <div class="col-2">500 kcal</div>
            <div class="col-2">1000 kcal</div>
            <div class="col-2">1500 kcal</div>
            <div class="col-2">2000 kcal</div>
            <div class="col-2">2500 kcal</div>
          </div>
          <div class="progress">
            <div class="progress-bar metabolism">
              <span class="progress-bar-text">
                <b><?php echo $metabolism; ?>kcal</b>
              </span>
            </div>
          </div>
          <br>
        </div>

        <!-- คำนวณค่า BMI -->
        <p class="p">
          <?php echo "BMI = <b><u>" . $bmi . "</u></b> : อยู่ในเกณฑ์ ";
          ?><b><u>
            <?php
            if ($bmi <= 18.5) {
              echo "ผอม";
            } else if ($bmi <= 22.9) {
              echo "สมส่วน (ปกติ)";
            } else if ($bmi <= 24.9) {
              echo "ท้วม";
            } else if ($bmi <= 30) {
              echo "อ้วน";
            } else if ($bmi > 30) {
              echo "อ้วนมาก (อันตราย)";
            } ?>
          </u></b>
        </p>
        <div class="row">
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2 ratate">ผอม &lt;18.5</div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2 ratate">ปกติ &lt;22.9</div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2 ratate">ท้วม &lt;24.9</div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2 ratate">อ้วน &lt;30</div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2 ratate">อันตราย &lt;50&gt;</div>
        </div>
        <div class="progress">
          <div class="progress-bar bmi">
            <span class="progress-bar-text">
              <b><?php echo $bmi; ?></b>
            </span>
          </div>
        </div>
      </section>
    </main>
    <?php
    include('../components/footer.html');
    ?>
    <script>
      let today = new Date().toISOString().slice(0, 10);
      document.getElementById("date").innerHTML = today;
    </script>
  </body>

  </html>
<?php } else {
  header("refresh: 1; url=login.php");
} ?>