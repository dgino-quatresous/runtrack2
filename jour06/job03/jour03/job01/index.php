<?php

$array = [200, 204, 173, 98, 171, 404, 459];

foreach ($array as $i) {
    if ($i %2 == 0) {
        echo "$i est paire<br>";
    }else{
        echo "$i est impaire<br>";
    }
}

?>