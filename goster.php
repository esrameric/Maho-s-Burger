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
    echo "Bağlantı başarılı!<br>";  
}


$sql = "SELECT * FROM rezervasyonlar";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Rezervasyonlar:</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Ad</th>
                <th>Soyad</th>
                <th>Telefon</th>
                <th>Saat</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["ad"] . "</td>
                <td>" . $row["soyad"] . "</td>
                <td>" . $row["telefon"] . "</td>
                <td>" . $row["saat"] . "</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "Hiç rezervasyon bulunamadı.";
}


$conn->close();
?>
