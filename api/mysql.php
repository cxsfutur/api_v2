<?php
$DB_HOST=aws.connect.psdb.cloud
$DB_USERNAME=8uazp0oycou9rd64vowj
$DB_PASSWORD=pscale_pw_JGuDLj7w7Bnqhe4fPeAhS2gcHEKAubgxGEv0Ke497KF
$DB_NAME=config
  
// 如果有SSL证书文件路径，则可以添加如下配置：
$ssl_options = array(
    PDO::MYSQL_ATTR_SSL_CA => '/path/to/ca_cert.pem', // CA证书路径
    PDO::MYSQL_ATTR_SSL_CERT => '/path/to/client_cert.pem', // 客户端证书路径
    PDO::MYSQL_ATTR_SSL_KEY => '/path/to/client_key.pem', // 客户端密钥路径
);

$options = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_PERSISTENT         => false,
    PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => true, // 验证服务器证书
);

try {
    $dsn = "mysql:host=$DATABASE_HOST;dbname=$DATABASE_NAME;charset=utf8;sslmode=required";
    $pdo = new PDO($dsn, $DATABASE_USERNAME, $DATABASE_PASSWORD, $options + $ssl_options);

    echo "200"; // If the connection is successful, output 200

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
