<?php
$file = "output.txt";
$lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

if (count($lines) > 0) {
    $random_line = $lines[array_rand($lines)];
    echo $random_line;
} else {
    echo "文件为空或不存在";
}
?>