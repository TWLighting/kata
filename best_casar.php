<?php

function modu($dividend, $divisor) {
    $modulo = $dividend % $divisor;
    return ($modulo < 0) ? $modulo + $divisor : $modulo;
}
function movingShiftAux($s, $shift, $sgn) {
    $res = "";
    for ($i = 0; $i < strlen($s); $i++) {
        $sVal = modu($sgn * ($shift + $i), 26);
        $d = $s[$i];
        if ($d >= 'A' && $d <= 'Z') {
            $c = chr( (ord($d) - ord('A') + $sVal) % 26 + ord('A'));
        } else 
            if ($d >= 'a' && $d <= 'z') {
                $c = chr( (ord($d) - ord('a') + $sVal) % 26 + ord('a'));
            } 
            else $c = $s[$i];
        $res .= $c;
    }
    return $res;
}
function movingShift($s, $shift) {
    $v = movingShiftAux($s, $shift, 1);
    $a = str_split($v, ceil(strlen($v) / 5));
    if (count($a) < 5) array_push($a, "");
    return $a;
}
function demovingShift($arr, $shift) {
    $s = implode("", $arr);
    return movingShiftAux($s, $shift, -1);
}