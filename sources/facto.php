<?php

function factRec($n){
    return ($n == 0) ? 1 : $n * factRec($n-1);
}

echo factRec(5)."\n";

function factBrute($n){
    $res = 1;
    for($i = 1; $i <= $n; $i++){
        $res *= $i;
    }
    return $res;
}

echo factBrute(5)."\n";

?>