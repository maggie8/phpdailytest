<?php
function NumberOf1($n)
{
    $count = 0;
    while($n){
        if($n & 1)
            $count++;
        $n = $n >> 1;
    }
    return $count;
}
$n = 10;
$res = NumberOf1($n);
print_r($res);