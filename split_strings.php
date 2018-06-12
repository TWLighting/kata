<?php

function solution($str) {

    $numbers=str_split($str,2);
    for($i=0,$total=count($numbers);$i<$total;$i++){
       if(strlen($numbers[$i])%2!=0){
           $numbers[$i]=$numbers[$i].'_';
       }
    }
    return $numbers;

}