<?php
//格式化浮点数的保留小数点位数，不会四舍五入，直接舍弃保留前$num位小数点
function retainDecimalNum($baseNum, $num){
    $baseNum = $baseNum * pow(10, $num);
    $baseNum = floor($baseNum)/pow(10, $num);
    return $baseNum;
}