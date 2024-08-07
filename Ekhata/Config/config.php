
<?php

$host = "localhost";
$db   = "ekhata"; 
$user = "root";
$pass = "";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $conn = new PDO($dsn, $user, $pass, $options);
   //echo "Connected to the database successfully!";
   // Uncomment this line if you need sessions
    //session_start();
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}




const FTP_USER = 'silent-night';
const FTP_PASSWORD = 'xampp';
$_SESSION['user_id'] = 2;
?>
