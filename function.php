<?php
function somma($n1, $n2) {
 $somma = 0;
 $somma = $n1 + $n2;
 return $somma;
}
function lunghezzaStriga($stringa){
   return strlen($stringa);   
}
function arraySomma($array){
    $somma = 0;
    for($i = 0; $i < count($array); $i++){
        $somma += $array[$i];
    }
    return $somma;
}
function maiuscolo($array){
    $maiuscolo = [];
    for ($i = 0; $i < count($array); $i++) {
        $maiuscolo[] = strtoupper($array[$i]);
    }
    return $maiuscolo;
}
function palindromo($stringa) {
    $stringa_pulita = strtolower(str_replace(' ', '', $stringa));
    if ($stringa_pulita === strrev($stringa_pulita)) {
        return true;
    } else {
        return false;
    }
}
?>