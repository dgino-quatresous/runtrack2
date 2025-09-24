<?php

function calcule($a, $operation, $b) {
    switch ($operation) {
        case "+":
            return $a + $b;
            break;

        case "-":
            return $a - $b;
            break;

        case "*":
            return $a * $b;
            break;

        case "/":
            return $a / $b;
            break;

    }
}

echo calcule(15,"*",20);

?>