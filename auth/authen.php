<?php
include('connectdb.php');
// Register
if (isset($_POST['add'])) {
  $username = $_POST['username'];
  $pass = $_POST['pass'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];

  $sql = $conn->query("SELECT * FROM tb_user WHERE username='" . $username . "' ");

  if ($sql->num_rows > 0) {
    echo '
    <script language="javascript"> 
    alert("ชื่อซ้ำ กรุณาเปลี่ยน")
    </script>
    ';
    header("refresh: 1; url=register.php");
  } else {
    $password = password_hash($pass, PASSWORD_DEFAULT);
    $sql = ("INSERT Into tb_user (
        username, password, fullname, phone, gender, level) values (
          '$username','$password', '$name', '$phone', '$gender', '1')");
    $query = $conn->query($sql);
    if ($query) {
      echo '<script language="javascript">';
      echo 'alert("Successfully Registrater")';
      echo '</script>';
      header("refresh: 1; url=login.php");

    } else {
      echo '<script language="javascript">';
      echo 'alert("Somthing Wrong!!!")';
      echo '</script>';
      header("refresh: 1; url=registerpage.php");
    }
  }
}

// Log in
if (isset($_POST['login'])) {
  session_start();
  $username = $_POST['username'];
  $pass = $_POST['pass'];
  
  $result = $conn->query("SELECT * FROM tb_user WHERE username='" . $username . "'");

  if ($result->num_rows > 0) {
    foreach ($result as $row) {
      $newpass=$row['password'];
      $password = password_verify($pass , $newpass);
      if($password){
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['fullname'] = $row['fullname'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['gender'] = $row['gender'];
        $_SESSION['level'] = $row['level'];

        header("refresh: 1; url=showscan.php");
      } else {      
        echo '<script language="javascript">';
        echo 'alert("Password Invalid")';
        echo '</script>';
        header("refresh: 1; url=login.php");
      }
    }
  } else {
    echo '<script language="javascript">';
    echo 'alert("Username Invalid")';
    echo '</script>';
    header("refresh: 1; url=login.php");
  }
}
?>