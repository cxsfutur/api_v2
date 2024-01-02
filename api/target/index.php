<?php

function checkUrlScheme($url) {
    if (empty($url)) {
        return false;
    }

    $scheme = parse_url($url, PHP_URL_SCHEME);

    if ($scheme === 'http' || $scheme === 'https') {
        return true;
    }

    return false;
}

$url = $_GET['target'] ?? '';

if (!isset($_GET['target']) || empty($url)) {
    header('Content-Type: application/json');
    echo json_encode([
        'error' => [
            'code' => 400,
            'name' => 'BadRequestError',
            'message' => '请求包含无效参数或格式错误，请检查请求内容并确保符合接口规范后再试。'
        ]
    ], JSON_UNESCAPED_UNICODE);
    exit();
} elseif (!checkUrlScheme($url)) {
    include 'refuse.php';
} else {
    include 'agree.php';
}

?>
