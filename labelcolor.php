<?php
function printerError($s) {
    // your code
    $allcolor=str_split($s);
    $total=count($allcolor);
    $error=0;
    foreach($allcolor as $char){
     if(!preg_match("/[a-m]/",$char)){
    $error++;   
     }
    }
    echo  "$error/ $total";
}