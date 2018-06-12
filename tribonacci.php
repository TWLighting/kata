<?php
//費式數列
//後項是前兩項的加總

function tribonacci($signature, $n) {
    $reuslt=array();
    for($i=0;$i<$n;$i++){
        if(count($reuslt)<3){
         $reuslt[$i]=$signature[$i];
        }else{
         $reuslt[$i]=$reuslt[$i-1]+$reuslt[$i-2]+$reuslt[$i-3];
        }
    }
    return $reuslt;
}