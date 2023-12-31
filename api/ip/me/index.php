<?php

// 获取访问用户的ip地址
$query = $_SERVER['REMOTE_ADDR'];

// 定义API链接，将获取到的IP地址填入
$url = "http://ip-api.com/json/{$query}?fields=5271069";

// 使用file_get_contents函数获取链接返回的数据
$response = file_get_contents($url);

// 检查是否成功获取数据
if ($response === false) {
    echo "无法获取IP信息";
} else {
    // 将json数据转换为PHP数组
    $data = json_decode($response, true);

    // 检查是否解析成功
    if (json_last_error() !== JSON_ERROR_NONE) {
        echo "JSON解码错误: " . json_last_error_msg();
    } else {
        // 格式化并显示数据
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

?>

