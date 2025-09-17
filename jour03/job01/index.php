<?php

for ($i = 0; $i <= 100; $i++) {
        if ($i == 3*$i) {
        echo "Fizz<br>";
        }
        elseif ($i == 5*$i) {
        echo "Buzz<br>";
        }
        elseif ($i == 3*$i && 5*$i) {
        echo "FizzBuzz<br>";
        }else{
        echo "$i<br>";
    }
}

?>