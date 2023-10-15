<?php

define("DB_HOSTNAME", "localhost");
define("DB_USERNAME", "bren");
define("DB_PASSWORD", "1234");
define("DB_NAME", "crud_php");

# PDO
# Error Handling
try {
    $pdo = new PDO("mysql:host=" . DB_HOSTNAME . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // for fetching mode
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // This block will only run when requested via POST
    $sql = "SELECT * FROM students";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $users = $stmt->fetchAll();
    echo json_encode(['data' => $users]); // Return JSON data
}
?>
