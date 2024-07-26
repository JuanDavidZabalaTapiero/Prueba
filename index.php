<?php

// 4. Función que muesta los 100 primeros números primos
function main() {
    for ($number = 1; $number <= 100; $number++) {
        if (isPrime($number)) {
            echo $number . PHP_EOL;
        }
    }
}

function isPrime($number) {
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

main();
