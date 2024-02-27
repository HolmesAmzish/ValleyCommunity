<?php
function time_span($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);
                            
    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;
                            
    $string = array(
        'y' => '年',
        'm' => '月',
        'w' => '周',
        'd' => '天',
        'h' => '小时',
        'i' => '分',
        's' => '秒',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v;
        } else {
            unset($string[$k]);
        }
    }
                            
    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . '前' : '刚刚';
}
?>