<?php
/**- - Ejercicio 1
Crea un programa que contenga dos arrays de números enteros/fload Una vez creados, 
muestra por pantalla el resultado de:
-La intersección de los dos arrays (números en común)
-La mezcla de ambos arrays*/
define("EJERCICIO1", "Ejercicio 1");
echo "<h1>" . EJERCICIO1 . "</h1>";



$array1 = [1, 2, 3, 4, 5];
$array2 = [4, 5, 6, 7, 8];

// klcular la interseccion de los dos arrays (numeros en comun)
$interseccion = array_intersect($array1, $array2);

//mzclar ambos arrays
$mezcla = array_merge($array1, $array2);

//mostrar los resultados por pantalla
echo "interseccion de los arrays: ";
print_r($interseccion);

echo "\nmezcla de los arrays: ";
print_r($mezcla);
?>




<?php
/*
- Ejercicio 2
Crea un programa que liste las notas de los/as alumnos/as de una clase. Por eso deberemos utilizar un array asociativo 
donde la clave será el nombre de cada alumno. Cada alumno tendrá 5 notas (valoradas del 0 al 10).
Además, crea una función que, dadas las notas de todos los alumnos/as, nos muestre tanto la media de la nota de cada alumno, 
como la nota media de la clase*/ 
define("EJERCICIO2", "Ejercicio 2");
echo "<h1>" . EJERCICIO2 . "</h1>";


//array asociativo donde la clave es el nombre del alumno y el valor es un array con 5 notas
$notasAlumnos = [
    "juan" => [8, 7, 9, 6, 7],
    "maria" => [5, 6, 7, 8, 9],
    "pedro" => [10, 9, 8, 7, 6],
    "ana" => [6, 5, 7, 8, 6]
];


function calcularMedia($notas) {
    // sacar las medias
    $suma = array_sum($notas);
    $cantidad = count($notas);
    return $suma / $cantidad;
}


echo "media de cada alumno:\n";
foreach ($notasAlumnos as $nombre => $notas) {
    $mediaAlumno = calcularMedia($notas);
    echo "$nombre: $mediaAlumno\n";
}

//las medias de toda la clase
$totalNotas = [];
foreach ($notasAlumnos as $notas) {
    // agregar todas las notas de todos los alumnos a un solo array
    $totalNotas = array_merge($totalNotas, $notas);
}
$mediaClase = calcularMedia($totalNotas);


echo "\nmedia de la clase: $mediaClase\n";
?>