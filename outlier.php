<?php

function find($integers) {
    $add=array();
    $even=array();
    foreach($integers as $i ){
        if($i%2==0){
            array_push($even,$i);
        }else{
            array_push($add,$i);  
        }
    }
    if(count($even)>count($add)){
        return $add[0];
    }else{
        return $even[0];
    }

}