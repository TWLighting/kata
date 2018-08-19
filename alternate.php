<?php
function isAlt($s){
    $length=strlen($s);
    $low=strtolower($s);
    $vowels=array('a','e','i','o','u');
    $index=in_array(substr($low,0,1),$vowels);

    if($index)
    {
        for($i=1;$i<$length;$i++){
            $check=in_array(substr($low,$i,1),$vowels);
            if(($i%2)!=0){
                if($check || $check!=''){
                    return false;
                }
            }else{
                if(!$check || $check==''){
                    return false;
                }
            }
        }
        return true;
    }else
    {
        for($i=1;$i<$length;$i++){
            $check=in_array(substr($low,$i,1),$vowels);
            if(($i%2)!=0){
                if(!$check || $check==''){
                    return false;
                }
            }else{
                if($check || $check!=''){
                    return false;
                }
            }
        }

    }
    return true;
}