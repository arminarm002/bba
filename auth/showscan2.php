<?php
// ข้อมูล
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/bba/auth/connectdb.php');
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
?>
<!DOCTYPE html>
<html xml:lang="th" lang="th" xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>กราฟแท่งแนวนอนด้วย CSS</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <style>
    .progress {
      width: 100%;
      height: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .progress-bar {
      background-color: #000;
      width: <?php echo $weight;?>%;
      height: 100%;
      border-radius: 5px;
    }

    .progress-bar-text {
      font-size: 12px;
      color: #f00;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
  </style>
</head>

<body>
  <h6>น้ำหนัก</h6>
<div class="progress">

        <div class="progress-bar" role="progressbar">
            <span class="progress-bar-text"><?php echo $weight;?> กิโลกรัม</span>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>