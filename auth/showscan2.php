<?php
if (isset($_POST['scan2'])) {
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $date = $_POST['date'];
  $weight = $_POST['weight'];
  $fat = $_POST['fat'];
  $vfat = $_POST['vfat'];
  $muscle = $_POST['muscle'];
  $bodyage = $_POST['bage'];
  $metabolism = $_POST['metabolism'];
  $bmi = $_POST['bmi'];
}

$pweight = ($weight * 100) / 150;
$pfat = ($fat * 100) / 50;
$pvfat = ($vfat * 100) / 30;
$pmuscle = ($muscle * 100) / 50;
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
  <link rel="stylesheet" href="../theme/css/self.css">
  <!-- CUSTOM STYLE -->
  <link rel="stylesheet" href="../css/template-style.css">
  <!-- <link rel="stylesheet" href="../theme/css/self.css"> -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
  <script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="../js/jquery-ui.min.js"></script>
  <style>
    .weight {
      width:
        <?php echo $pweight . "%"; ?>
      ;
    }

    .fat {
      width:
        <?php echo $pfat . "%"; ?>
      ;
    }

    .vfat {
      width:
        <?php echo $pvfat . "%"; ?>
    }

    .muscle {
      width:
        <?php echo $pmuscle . "%"; ?>
    }

    .bodyage {
      width:
        <?php echo $pbodyage . "%"; ?>
    }

    .metabolism {
      width:
        <?php echo $pmetabolism . "%"; ?>
    }

    .bmi {
      width:
        <?php echo $pbmi . "%"; ?>
    }
  </style>
</head>

<body class="size-1520 primary-color-red background-dark font-noto">
  <?php
  include ('../components/navbar.php');
  ?>
  <!-- MAIN -->
  <main role="main" style="margin: 0px 25px;">
    <!-- TOP SECTION -->
    <header class="grid">
      <div class="s-12">
        <h2 class="text-strong text-white text-center center text-size-60 margin-bottom-20">
          <?php echo $name; ?>
        </h2>
      </div>
    </header>

    <section class="grid margin-bottom-20">
      <div class="m-12 l-7">

        <table style="width:100%;color:#333333;">
          <tr style="color: white;">
            <th valign="top">วันที่</th>
            <th>
              <?php echo $date; ?>
            </th>
          </tr>
          <tr>
            <th class="th-in" valign="top">น้ำหนัก</th>
            <th style="font-size:150%;">
              <?php echo $weight; ?>
            </th>
          </tr>
          <tr style="color: white;">
            <th class="th-in">ไขมันในร่างกาย (%)</th>
            <th style="font-size:150%;">
              <?php echo $fat; ?>
            </th>
          </tr>
          <tr>
            <th class="th-in">ไขมันในช่องท้อง (หน่วย)</th>
            <th style="font-size:150%;">
              <?php echo $vfat; ?>
            </th>
          </tr>
          <tr style="color: white;">
            <th class="th-in">กล้ามเนื้อ (%)</th>
            <th style="font-size:150%;">
              <?php echo $muscle; ?>
            </th>
          </tr>
          <tr>
            <th class="th-in">อายุเซลล์ในร่างกาย (ปี)</th>
            <th style="font-size:150%;">
              <?php echo $bodyage; ?>
            </th>
          </tr>
          <tr style="color: white;">
            <th class="th-in">อัตราการเผาผลาญ (kcal)</th>
            <th style="font-size:150%;">
              <?php echo $metabolism; ?>
            </th>
          </tr>
          <tr>
            <th class="th-in">ดัชนีมวลร่างกายโดยรวม (BMI)</th>
            <th style="font-size:150%;">
              <?php echo $bmi; ?>
            </th>
          </tr>
        </table>

      </div>
    </section>

    <section class="grid margin-bottom-20">
      <h1> ประมวลค่าร่างกาย (ล่าสุด) </h1>

      <!-- น้ำหนัก -->
      <div class="scan"> 
        <p class="p" style="margin-bottom: 0px;color:#000000">
          น้ำหนัก <b><u>
              <?php echo $weight; ?>
            </u></b> กิโลกรัม </p>
        <div class="row" style="margin-bottom:0px; color:#000000;">
          <div class="w-col-2" style="color:#000000;">30</div>
          <div class="w-col-2" style="color:#000000;">60</div>
          <div class="w-col-2" style="color:#000000;">90</div>
          <div class="w-col-2" style="color:#000000;">120</div>
          <div class="w-col-2" style="color:#000000;">150</div>
        </div>

        <div class="progress">
          <div class="progress-bar weight">
            <span class="progress-bar-text">
              <b>
                <?php echo $weight; ?>
              </b>กก.
            </span>
          </div>
        </div>
      </div>
      <br>

      <!-- คำนวณไขมันในร่างกาย -->
      <div class="scan">
        <p class="p" style="color:#000000;">
          <?php echo "% ไขมันในร่างกาย = <b>" . $fat . "</b> : อยู่ในเกณฑ์ ";
          ?><b><u>
              <?php
              if ($gender == "male") {
                if ($fat <= 9) {
                  echo "ต่ำ";
                } else if ($fat <= 19.9) {
                  echo "ปกติ";
                } else if ($fat <= 24.9) {
                  echo "เริ่มอ้วน";
                } else if ($fat >= 25) {
                  echo "อ้วน";
                }
              } else if ($gender == "female") {
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
        <?php if ($gender == "male") { ?>
          <div class="row" style="color:#000000;">
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2 ratate">&lt;9.9 ต่ำ</div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2 ratate">&lt;19.9 ปกติ</div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2 ratate">&lt;24.9 เริ่มอ้วน</div>
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
            <div class="fat-col-2 ratate">&lt;50 อ้วน</div>
          </div>
        <?php } else if ($gender == "female") {
          ?>
            <div class="row" style="color:#000000;">
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
              <div class="fat-col-2 ratate">&lt;19.9 ต่ำ</div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2 ratate">&lt;29.9 ปกติ</div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2 ratate">&lt;34.9 เริ่มอ้วน</div>
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
              <div class="fat-col-2 ratate">&lt;50 อ้วน</div>
            </div>
        <?php } ?>
        <div class="progress">
          <div class="progress-bar fat">
            <span class="progress-bar-text">
              <b>
                <?php echo $fat; ?>%
              </b>
            </span>
          </div>
        </div>
      </div>
      <br>

      <!-- คำนวณไขมันในช่องท้อง -->
      <div class="scan">
        <p class="p" style="color:#000000;">
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
          <div class="vfat-col-3 ratate" style="color:#000000;">&lt;2 สมบูรณ์</div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3 ratate" style="color:#000000;">&lt;5 ปกติ</div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3 ratate" style="color:#000000;">&lt;10 เล็กน้อย</div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3"></div>
          <div class="vfat-col-3 ratate" style="color:#000000;">&lt;15 อันตราย</div>
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
          <div class="vfat-col-3 ratate" style="color:#000000;">&lt;30 อันตรายมาก</div>
        </div>
        <div class="progress">
          <div class="progress-bar vfat">
            <span class="progress-bar-text">
              <b>
                <?php echo $vfat; ?>%
              </b>
            </span>
          </div>
        </div>
      </div>
      <br>

      <!-- คำนวณกล้ามเนื้อ -->
      <div class="scan">
        <p class="p" style="color:#000000;">
          <?php echo "% กล้ามเนื้อในร่างกาย = <b>" . $muscle . "</b> : อยู่ในเกณฑ์ ";
          ?><b><u>
              <?php
              if ($gender == "male") {
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
              if ($gender == "female") {
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
        <?php if ($gender == "male") { ?>
          <div class="row" style="color:#000000;">
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
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2 ratate">&lt;32.8 ต่ำ</div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2"></div>
            <div class="fat-col-2 ratate">&lt;35.7 ปกติ</div>
            <div class="fat-col-2 ratate">&lt;37.3 สูง</div>
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
            <div class="fat-col-2 ratate">&lt;50 สูงมาก</div>
          </div>
        <?php } else if ($gender == "female") {
          ?>
            <div class="row" style="color:#000000;">
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
              <div class="fat-col-2"></div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2 ratate">&lt;25.8 ต่ำ</div>
              <div class="fat-col-2"></div>
              <div class="fat-col-2 ratate">&lt;27.9 ปกติ</div>
              <div class="fat-col-2 ratate">&lt;29 สูง</div>
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
              <div class="fat-col-2 ratate">&lt;50 สูงมาก</div>
            </div>
        <?php } ?>
        <div class="progress">
          <div class="progress-bar muscle">
            <span class="progress-bar-text">
              <b>
                <?php echo $muscle; ?>%
              </b>
            </span>
          </div>
        </div>
      </div>
      <br>

      <!-- อายุเซลล์ร่างกาย -->
      <div class="scan">
        <p class="p" style="margin-bottom: 0px; color:#000000;">
          <?php echo "อายุเซลล์ร่างกาย = "; ?><b><u>
              <?php echo $bodyage; ?>
            </u></b>
          <?php echo " ปี" ?>
        </p>
        <div class="row" style="margin-bottom: 0px; color:#000000">
          <div class="col-3" style="color:#000000;">20 ปี</div>
          <div class="col-3" style="color:#000000;">40 ปี</div>
          <div class="col-3" style="color:#000000;">60 ปี</div>
          <div class="col-3" style="color:#000000;">80 ปี</div>
        </div>
        <div class="progress">
          <div class="progress-bar bodyage">
            <span class="progress-bar-text">
              <b>
                <?php echo $bodyage; ?> ปี
              </b>
            </span>
          </div>
        </div>
      </div>
      <br>

      <!-- อัตราการเผาผลาญ -->
      <div class="scan">
        <p class="p" style="color:#000000;">
          <?php echo "อัตราการเผาผลาญ = "; ?><u>
            <b>
              <?php echo $metabolism; ?>
            </b>
          </u>
          <?php echo " kcal" ?>
        </p>
        <div class="row" style="color:#000000;">
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2 ratate">&lt;500 kcal</div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2 ratate">&lt;1000 kcal</div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2 ratate">&lt;1500 kcal</div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2 ratate">&lt;2000 kcal</div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2 ratate">&lt;2500 kcal</div>
        </div>
        <div class="progress" style="color:#000000;">
          <div class="progress-bar metabolism">
            <span class="progress-bar-text">
              <b>
                <?php echo $metabolism; ?>kcal
              </b>
            </span>
          </div>
        </div>
      </div>
      <br>


      <!-- คำนวณค่า BMI -->
      <div class="scan">
        <p class="p" style="color:#000000;">
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
        <div class="row" style="color:#000000;">
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
          <div class="fat-col-2 ratate">&lt;18.5 ผอม</div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2 ratate">&lt;22.9 ปกติ</div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2 ratate">&lt;24.9 ท้วม</div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2"></div>
          <div class="fat-col-2 ratate">&lt;30 อ้วน </div>
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
          <div class="fat-col-2 ratate">&lt;50 อันตราย</div>
        </div>
        <div class="progress">
          <div class="progress-bar bmi">
            <span class="progress-bar-text">
              <b>
                <?php echo $bmi; ?>
              </b>
            </span>
          </div>
        </div>
      </div>
    </section>
  </main>
  <hr>
  <?php
  include ('../components/footer.html');
  ?>
  <script>
    let today = new Date().toISOString().slice(0, 10);
    document.getElementById("date").innerHTML = today;
  </script>
</body>

</html>