
<?php


$servername ='127.0.0.1';
$username = 'root';
$password = '';
$db = 'e-commerce';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    error_reporting(-1);
    ini_set("display_errors", 1);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$query = 'SELECT * FROM shoez ';


?>