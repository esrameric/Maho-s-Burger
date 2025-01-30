<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "rezervasyon_sistemi";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
} else {
    echo "Bağlantı başarılı <br>"; 
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"];
    $telefon = $_POST["telefon"];
    $saat = $_POST["saat"];

    
    echo "Ad: $ad <br> Soyad: $soyad <br> Telefon: $telefon <br> Saat: $saat <br>";

    
    $sql = "INSERT INTO rezervasyonlar (ad, soyad, telefon, saat) VALUES ('$ad', '$soyad', '$telefon', '$saat')";

    if ($conn->query($sql) === TRUE) {
        echo "Rezervasyonunuz başarıyla kaydedildi!";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>
