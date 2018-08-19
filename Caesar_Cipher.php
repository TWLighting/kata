<?php
function movingShift($s, $shift) {
   $len=strlen($s);
   $casear_str='';
    for($i=0;$i<$len;$i++){
        $theChar=substr($s,$i,1);
        $asc2=ord($theChar);
        //upper
        if($asc2>= 65 && $asc2<=90){
           for($init=1;$init<=$shift;$init++){
            $asc2+=1;  
            if($asc2>90)
            $asc2=65;
           }
           $casear_str.=chr($asc2);
        //lower
        }elseif($asc2>= 97 && $asc2<=122){
            for($init=1;$init<=$shift;$init++){
                $asc2+=1;  
                if($asc2>122)
                $asc2=97; 
               }
            $casear_str.=chr($asc2);
        }else{
           $casear_str.=$theChar;
        }
        $shift++;
    }
    $splen=ceil($len/5);
    $arr=str_split($casear_str,$splen);
    for($start=count($arr);$start<5;$start++){
        $arr[]='';
    }
    return $arr;
}
function demovingShift($arr, $shift) {
   $origin_str=implode('',$arr);
   $len=strlen($origin_str);
   $casear_str='';
    for($i=0;$i<$len;$i++){
        $theChar=substr($origin_str,$i,1);
        $asc2=ord($theChar);
        //upper
        if($asc2>= 65 && $asc2<=90){
        for($init=1;$init<=$shift;$init++){
            $asc2-=1;  
            if($asc2<65)
            $asc2=90;
        }
        $casear_str.=chr($asc2);
        //lower
        }elseif($asc2>= 97 && $asc2<=122){
            for($init=1;$init<=$shift;$init++){
                $asc2-=1;  
                if($asc2<97)
                $asc2=122; 
            }
            $casear_str.=chr($asc2);
        }else{
        $casear_str.=$theChar;
        }
        $shift++;
    }
    return $casear_str;
}

$u = "I should have known that you would have a perfect answer for me!!!";
$sol = ["J vltasl rlhr ", "zdfog odxr ypw", " atasl rlhr p ", "gwkzzyq zntyhv", " lvz wp!!!"];

$arr=movingShift($u,1);

$result=demovingShift($arr,1);