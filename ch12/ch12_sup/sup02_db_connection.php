<?php
function getDatabaseConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myschool";


    $aws_server = "13.54.4.168:3306";
$aws_username = "root";
$aws_password = "root";
$dbname = "myschool";

    // 建立連接
    $conn = new mysqli($aws_server, $aws_username, $aws_password, $dbname);

    // 檢查連接
    if ($conn->connect_error) {
        die("連接失敗: " . $conn->connect_error);
    }

    return $conn;
}
?> 