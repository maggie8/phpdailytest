<?php
$info = array(1,2,3,4,5,6,7);
$sum = 8;
FindNumbersWithSum($info, $sum);

function FindNumbersWithSum($info,$sum)
{
    $arr = array();
    $count = count($info);
    for ($i=1; $i < $count; $i++) {
        for ($j=0; $j < $count; $j++) {
            if ($i!=$j) {
                if ($sum == $info[$i]+$info[$j]) {
                   $arr[] = $info[$i]*$info[$j];
                }
            }
        }
    }
    echo min($arr);
    // print_r($arr);
}