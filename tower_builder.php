<?php
// [
//     '     *     ', 
//     '    ***    ', 
//     '   *****   ', 
//     '  *******  ', 
//     ' ********* ', 
//     '***********'
//   ]
function tower_builder($n){

    $real=array();
    $r_total=(2*($n-1))+1;
    for($x=0;$x<$n;$x++){
        $strs='';
        $total = (2 * $x) + 1;
        for($s=1;$s<=$total;$s++){
            $strs.='*';    
        }
        $real[]=str_pad($strs,$r_total," ",STR_PAD_BOTH);        
    }
    var_dump($real);
}

