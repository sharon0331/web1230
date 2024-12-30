<?php
$servername = "127.0.0.1";
$username = "root";
$password = "12345678";
$dbname = "web";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("資料庫連接失敗: (" . $conn->connect_errno . ") " . $conn->connect_error);
}
?>