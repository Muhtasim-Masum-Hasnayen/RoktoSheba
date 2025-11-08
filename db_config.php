<?php
$host = 'localhost';        // or '127.0.0.1'
$db   = 'roktosheba';       // your database name
$user = 'root';             // default username for XAMPP
$pass = '';                 // default password for XAMPP (empty)

try {
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
