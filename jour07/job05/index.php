<?php

function occurences($str, $char) {
    $str = "Bonjour";
    $char = "o";
    $counter = 0;
    for ($i = 0; isset($str[$i]); $i++) {
        if ($str[$i] == $char) {
            $counter++;
        }
    } echo $counter;
}

occurences("Bonjour", "o");

?>