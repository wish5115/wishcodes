<?php
//��ʽ���������ı���С����λ���������������룬ֱ����������ǰ$numλС����
function retainDecimalNum($baseNum, $num){
    $baseNum = $baseNum * pow(10, $num);
    $baseNum = floor($baseNum)/pow(10, $num);
    return $baseNum;
}