<?php
// 使用环境变量配置数据库连接信息（如果在服务器环境中）
$dsn = "mysql:host={$_ENV["DB_HOST"]};dbname={$_ENV["DB_NAME"]}";
$options = array(
    PDO::MYSQL_ATTR_SSL_CA => "/etc/ssl/certs/ca-certificates.crt",
);

// 如果环境变量未设置，则使用硬编码的数据库连接信息
if (!isset($_ENV["DB_HOST"]) || !isset($_ENV["DB_NAME"]) || !isset($_ENV["DB_USERNAME"]) || !isset($_ENV["DB_PASSWORD"])) {
    $DATABASE_HOST = "aws.connect.psdb.cloud";
    $DATABASE_NAME = "config";
    $DATABASE_USERNAME = "8uazp0oycou9rd64vowj";
    $DATABASE_PASSWORD = "pscale_pw_JGuDLj7w7Bnqhe4fPeAhS2gcHEKAubgxGEv0Ke497KF";

    $dsn = "mysql:host=$DATABASE_HOST;dbname=$DATABASE_NAME";
}

try {
    $pdo = new PDO($dsn, $_ENV["DB_USERNAME"] ?? $DATABASE_USERNAME, $_ENV["DB_PASSWORD"] ?? $DATABASE_PASSWORD, $options);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "200"; // If the connection is successful, output 200

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
