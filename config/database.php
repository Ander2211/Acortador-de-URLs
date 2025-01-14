


<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "short_link";
$port = "2345";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname; port=$port;" , $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Coneccion Exitosa " . $e->getMessage();
}
?>

