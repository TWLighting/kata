<?php
function isValidIP($str)
{
    // TODO
    
    $vaid=true;
    $ip_array=explode('.',$str);
    if(count($ip_array)==4){
        for($strat=0,$count=count($ip_array);$strat<$count;$strat++){
            
            if(!preg_match("/[^a-zA-z-Z]/",$ip_array[$strat])){
                $vaid=false;
            }
            elseif((strlen($ip_array[$strat])>=2) && (substr($ip_array[$strat],0,1)==0)){
                $vaid=false;
            }
            elseif($ip_array[$strat]>255 || $ip_array[$strat]<0){
                $vaid=false;    
            }else{
                continue;    
            }
        }    
    }else{
       $vaid=false;
    }

    if($vaid){
    return "Failed asserting that $str is a valid IP4 address.";    
    }else{
    return  "Failed asserting that $str is a invalid IP4 address.";    
    }
}
echo isValidIP("0.0.0.0");