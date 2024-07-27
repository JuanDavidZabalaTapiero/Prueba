<?php

function main()
{
    echo decimalToBinary(387) . PHP_EOL;
    echo decimalToBinary(0) . PHP_EOL;
}

function decimalToBinary($decimal)
{
    // Inicializamos la variable 'number' con el valor del decimal de entrada.
    $number = $decimal;

    // Inicializamos la variable 'binary' como una cadena vacía. Esta variable almacenará el número binario resultante.
    $binary = "";

    // Ejecutamos el bucle mientras 'number' no sea 0.
    while ($number != 0) {

        // Calculamos el resto de la división de 'number' entre 2. Este es el dígito binario actual (0 o 1).
        $remainder = $number % 2;

        // Actualizamos 'number' a la mitad de su valor actual, descartando la parte decimal.
        // Esto se hace para continuar con el siguiente dígito binario.
        $number = intdiv($number, 2);

        // Concatenamos el 'remainder' al inicio de la cadena 'binary'. Esto construye el número binario de derecha a izquierda.
        $binary = $remainder . $binary;
    }

    // Si 'binary' es una cadena vacía (lo que significa que 'decimal' era 0), devolvemos "0".
    // De lo contrario, devolvemos la cadena binaria resultante.
    return $binary === "" ? "0" : $binary;
}

main();