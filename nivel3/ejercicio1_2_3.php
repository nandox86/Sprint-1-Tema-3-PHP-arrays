<?php
/*- Ejercicio 1
Dado un array de enteros, haz un programa que:
Devuelva cada valor del array elevado al cubo utilizando la función array_map().*/
define("EJERCICIO1", "Ejercicio 1");
echo "<h1>" . EJERCICIO1. "</h1>";


function elevarAlCubo(int $numero): int {
    return $numero ** 3; 
}

// array de enteros de ejemplo
$numeros = [1, 2, 3, 4, 5];

// se aplica la funcion elevarALCubo a cada elemento del array usando array_map
$resultado = array_map('elevarAlCubo', $numeros);


print_r($resultado);
?>



<?php
/*- Ejercicio 2
Dado un array de strings, haz un programa que:
Devuelva un array donde sólo estén los strings que tengan un nombre par
de caracteres usando la función array_filter().*/
define("EJERCICIO2", "Ejercicio 2");
echo "<h1>" . EJERCICIO2 . "</h1>";


function esLongitudPar(string $texto): bool {
    return strlen($texto) % 2 === 0; // se verifica si la longitud es divisible entre 2
}

// array de strings de ejemplo
$palabras = ["hola", "mundo", "php", "codigo", "ejemplo"];

// array_filter
$resultado = array_filter($palabras, 'esLongitudPar');


print_r($resultado);
?>


<?php
/*- Ejercicio 3
Dado un array de enteros, haz un programa que nos devuelva la suma de los enteros del array
que sean primeros  utilizando la función array_reduce().*/
define("EJERCICIO3", "Ejercicio 3");
echo "<h1>" . EJERCICIO3 . "</h1>";



function  esPrimo ( int  $numero ): bool  {
    if ( $numero < 2) {
        return false ; // los numeros menores a 2 no son primos 
   }
   for ( $i = 2; $i <= sqrt ( $numero ); $i ++) {
        if ( $numero % $i === 0) {
            return  false ; // si es divisible por otro numero no es primo
       }
   }
   return true ; // si no se encontró divisor es primo
}


function  sumarPrimos ( int  $acumulador , int  $numero ): int  {
    if ( esPrimo ( $numero )) {
        $acumulador += $numero ; // se suma el numero si es primo
   }
   return  $acumulador ; // se retorna el acumulador actualizado
}


$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// se calcula la suma de los numeros primos usando array_reduce 
$resultado = array_reduce ( $numeros , 'sumarPrimos' , 0);

echo  $resultado ;
?>
