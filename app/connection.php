<?php
 
$conn = "";
 
try {
    $host = getenv('MYSQL_HOST');
    $db   = getenv('MYSQL_DATABASE');
    $user = getenv('MYSQL_USER');
    $pass = getenv('MYSQL_PASSWORD');
    $port = getenv('MYSQL_PORT');
    $conn = new PDO(
        "mysql:host=$host; dbname=$db", $user, $pass
    );
     
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
} catch(PDOException $e) {
    echo "Connection failed: "
        . $e->getMessage();
}
 
?>