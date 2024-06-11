<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$database = "javatpoint";

// Bağlantı oluştur
$conn = new mysqli($db_host, $db_user, $db_password);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

// Veritabanı yoksa oluştur
$sql = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($sql) === false) {
    die("Veritabanı oluşturulurken hata: " . $conn->error);
}

// Veritabanını seç
$conn->select_db($database);

// Tablo yoksa oluştur
$sql = "CREATE TABLE IF NOT EXISTS javatpoint (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    pr_name VARCHAR(50) NOT NULL,
    stock VARCHAR(50) NOT NULL,
    contents VARCHAR(50) NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    pr_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === false) {
    die("Tablo oluşturulurken hata: " . $conn->error);
}
?>