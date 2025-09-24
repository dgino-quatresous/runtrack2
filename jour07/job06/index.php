<?php

function leetSpeak($str) {
    $str = "ALL your BASES are BELONG to US";
    $leetString = str_replace(["A", "B", "E", "G", "L", "S", "T", "a", "b", "e", "g", "l", "s", "t"], ["4", "8", "3", "6", "1", "5", "7", "4", "8", "3", "6", "1", "5", "7"], $str);
    echo $leetString;
}

leetSpeak("ALL your BASES are BELONG to US");

?>