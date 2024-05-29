<?php
$servername = "localhost";
$username = "root";
$password = null;

try {
    $conn = new PDO("mysql:host=$servername;dbname=portfolio", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=portfolio", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM portfoliodb ");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>