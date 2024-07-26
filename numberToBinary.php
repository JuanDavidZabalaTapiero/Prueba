<?php

function main() {
    echo decimalToBinary(387) . PHP_EOL;
    echo decimalToBinary(0) . PHP_EOL;
}

function decimalToBinary($decimal) {
    $number = $decimal;
    $binary = "";

    while ($number != 0) {
        $remainder = $number % 2;
        $number = intdiv($number, 2);

        $binary = $remainder . $binary;
    }

    return $binary === "" ? "0" : $binary;
}

main();