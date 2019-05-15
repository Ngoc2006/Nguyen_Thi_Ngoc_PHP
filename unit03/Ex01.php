<?php

$name = "Nguyễn Thị Ngọc";
$arr = explode(" ", $name);
$ho = array_shift($arr);
$ten = array_pop($arr);
$dem = implode(" ", $arr);
echo "Họ: ".$ho. "<br>";
echo "Đệm: ".$dem. "<br>";
echo "Tên: ".$ten. "<br>";