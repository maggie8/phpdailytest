<?php
header('content-type:text/html;charset=utf8');
$res = GetUglyNumber_Solution(10);
if ($res == 1) {
    echo "这个数是丑数";
}else{
    echo "这个数不是丑数";
}
function GetUglyNumber_Solution($n)
{
    $num2=0;
    $num3=0;
    $num5=0;
    $num=$n;
    while($num!=1)
    {
        $num2 = $num%2;
        if ($num2==0) {
            $num = $num/2;
        }else{
            // echo $num;
            break;
        }
    }
    while($num!=1)
    {
        $num3 = $num%3;
        if ($num3==0) {
            $num = $num/3;
        }else{
            break;
        }
    }
    while ($num!=1) {
        $num5 = $num%5;
        if ($num5==0) {
            $num = $num/5;
        }else{
            return 0;
            // break;
        }
    }
    return 1;
}
