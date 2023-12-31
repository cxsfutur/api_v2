<?php

// 获取客户端IP地址，考虑了反向代理的情况
function get_client_ip() {
    $ip = $_SERVER['REMOTE_ADDR'];
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } elseif (isset($_SERVER['HTTP_CLIENT_IP']) && !empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    
    // 如果X-Forwarded-For存在多个IP（经过多层代理），取第一个非私有IP
    if (strpos($ip, ',') !== false) {
        $ips = explode(',', $ip);
        foreach ($ips as $tmpIp) {
            $tmpIp = trim($tmpIp);
            if (filter_var($tmpIp, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
                $ip = $tmpIp;
                break;
            }
        }
    }

    return $ip;
}

$query = get_client_ip();

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
