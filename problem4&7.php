<?php


echo '<h2>100 primeros números primos</h2> <br>';

// 4. Función que muesta los 100 primeros números primos
function main()
{
    for ($number = 1; $number <= 100; $number++) {
        if (isPrime($number)) {
            echo $number . PHP_EOL;
        }
    }
}

function isPrime($number)
{
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

echo '<br> <h2>Inviriendo cadenas de texto</h2> <br>';

// 7. Invertir cadena de texto
function reverseString($input)
{
    // Convertimos la cadena en un array de caracteres
    $characters = str_split($input);
    // Invertimos el array
    $reversedCharacters = array_reverse($characters);
    // Unimos los caracteres invertidos en una cadena
    $reversedString = implode('', $reversedCharacters);
    return $reversedString;
}

// Ejemplo de uso
$input = "Hola mundo";
$output = reverseString($input);
echo $output; // odnum aloH