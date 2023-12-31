<?php
// 获取当前时间（假设服务器时间和北京时间一致）
$current_time = new DateTime("now", new DateTimeZone('Asia/Shanghai'));

// 设置目标时间点为北京时间 2024年1月1日 00:00:00
$target_time = new DateTime("2024-01-01 00:00:00", new DateTimeZone('Asia/Shanghai'));

// 计算两个日期的时间差
$interval = $current_time->diff($target_time);

// 提取时间差中的分钟数
$minutes_diff = $interval->format('%i');

// 如果分钟数是负数，说明目标时间在当前时间之前，应显示倒计时；如果是正数，则为目标时间在当前时间之后
if ($minutes_diff < 0) {
    // 目标时间已过，计算从目标时间到下一年1月1日的时间差
    $next_year_target = clone $target_time;
    $next_year_target->modify('+1 year');
    $interval_to_next_year = $current_time->diff($next_year_target);
    $minutes_diff = -$interval_to_next_year->format('%i');  // 取绝对值
}

echo "距离2024年1月1日还有 {$minutes_diff} 分钟。";
?>
