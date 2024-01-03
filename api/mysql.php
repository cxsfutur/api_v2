<?php
$DATABASE_HOST = "aws.connect.psdb.cloud";
$DATABASE_NAME = "config";
$DATABASE_USERNAME = "srxojllm54adshjur83r";
$DATABASE_PASSWORD = "pscale_pw_5UMg0eeobinJXHlJr2uO4bQ4t6JBlfIRHUPBOhaZbsG";

try {
    $pdo = new PDO("mysql:host=$DATABASE_HOST;dbname=$DATABASE_NAME", $DATABASE_USERNAME, $DATABASE_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "200"; // If the connection is successful, output 200

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
