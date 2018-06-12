<?php

function camel_case($s){
    $words=explode(" ",$s);
    $result=[];
    foreach($words as $value){
    $result[]=ucfirst(strtolower($value));    
    }
    echo implode('',$result);
}