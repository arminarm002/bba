<?php
//สร้างตัวแปรเพื่อใช้เชื่อม db
$servername = "localhost";
$username = "bbabodyc_arm";
$password = "a1350100297477";
$dbname = "bbabodyc_db_bba";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>