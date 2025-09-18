<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
$i = 0;

while (isset($str[$i])) {
    if ($i == "a" && $i == "e" && $i == "i" && $i == "o" && $i == "u" && $i == "y" && $i == "A" && $i == "E" && $i == "I" && $i == "O" && $i == "U" && $i == "Y" && $i == " ") {
        echo $i;
        $i++;
    }else{
        $i++;
    }
}
?>