<?php
include('connectdb.php');

if (isset($_POST['scan'])) {
  $id =$_POST['id'];
  $date = $_POST['date'];
  $weight = $_POST['weight'];
  $fat = $_POST['fat'];
  $vfat = $_POST['vfat'];
  $muscle = $_POST['muscle'];
  $bage = $_POST['bage'];
  $metabolism = $_POST['metabolism'];
  $bmi = $_POST['bmi'];

   $sql = ("INSERT Into tb_scan (
         user_id, date, user_weight, user_fat, user_visceralfat, user_muscle, user_bodyage, user_metabolism, user_bmi) 
         values ('$id', '$date','$weight', '$fat', '$vfat', '$muscle', '$bage', '$metabolism', '$bmi')");
    $query = $conn->query($sql);
    if ($query) {
      echo '<script language="javascript">';
      echo 'alert("บันทึกข้อมูลเรียบร้อย")';
      echo '</script>';
      header("refresh: 1; url=showscan.php");

    } else {
      echo '<script language="javascript">';
      echo 'alert("เกิดข้อผิดพลาด")';
      echo '</script>';
      header("refresh: 1; url=profile.php");
    }
}
?>