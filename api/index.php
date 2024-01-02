<?php
header('Content-Type: application/json; charset=utf-8');

$post = isset($_GET['post']) ? $_GET['post'] : null;
$target = isset($_GET['target']) ? $_GET['target'] : null;
$tel = isset($_GET['tel']) ? $_GET['tel'] : null;

$errors = [];

if ($post !== null && ($target !== null || $tel !== null)) {
    $errors[] = [
        "code" => 400,
        "message" => "Bad Request",
        "description" => "请求包含无效参数或格式错误，请检查请求内容并确保符合接口规范后再试。"
    ];
} elseif ($target !== null && $tel !== null) {
    $errors[] = [
        "code" => 400,
        "message" => "Bad Request",
        "description" => "请求包含多余参数，请检查请求内容并确保符合接口规范后再试。"
    ];
}

if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(["error" => $errors[0]], JSON_UNESCAPED_UNICODE);
} else {

    if ($post !== null) {
        ob_start();
        require_once 'post/index.php';
        $output = ob_get_clean();
        echo $output;
    } elseif ($target !== null) {
        ob_start();
        require_once 'target/index.php';
        $output = ob_get_clean();
        echo $output;
    } elseif ($tel !== null) {
        ob_start();
        require_once 'tel/index.php';
        $output = ob_get_clean();
        echo $output;
    } else {
        echo "请根据https://api.mixao.cn/所提供的参数，携带参数进行访问。";
    }
}

function handlePost($post) { }

function handleTarget($target) { }

function handleTel($tel) { }
?>
