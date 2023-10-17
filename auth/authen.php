<?php
include($_SERVER['DOCUMENT_ROOT'] . '/bba/auth/connectdb.php');
// Register
if (isset($_POST['add'])) {
  $username = $_POST['username'];
  $pass = $_POST['pass'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];

  $sql = $conn->query("SELECT * FROM tb_user WHERE username='" . $username . "' ");

  if ($sql->num_rows > 0) {
    echo '
    <script language="javascript"> 
    alert("This email is already done, Can not register again.")
    </script>
    ';
    header("refresh: 1; url=register.php");
  } else {
    $password = password_hash($pass, PASSWORD_DEFAULT);
    $sql = ("INSERT Into tb_user (
        username, password, fullname, phone, level) values (
          '$username','$password', '$name', '$phone', '1')");
    $query = $conn->query($sql);
    if ($query) {
      echo '<script language="javascript">';
      echo 'alert("Successfully Registrater")';
      echo '</script>';
      header("refresh: 1; url=/bba/auth/login.php");

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
        $_SESSION['level'] = $row['level'];

        echo '<script language="javascript">';
        echo 'alert("Welcome")';
        echo '</script>';
        header("refresh: 1; url=profile.php");
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