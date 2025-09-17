<?php

for ($i = 0; $i <= 100; $i++) {
        if ($i == 42) {
        echo "Fizz<br>";
        }
        elseif ($i <= 20) {
        echo "Buzz<br>";
        }
        elseif ($i >=25 && $i <=50) {
        echo "FizzBuzz<br>";
        }else{
        echo "$i<br>";
    }
}

?>