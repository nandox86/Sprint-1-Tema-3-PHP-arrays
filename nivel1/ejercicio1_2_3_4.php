<?php
/*- Ejercicio 1
Crea un array, añádele 5 números enteros y luego muestrales por pantalla de uno en */ 
define("EJERCICIO1", "Ejercicio 1");
echo "<h1>" . EJERCICIO1. "</h1>";
// crear un array y añadirle 5 enteros
$numeros = array(1, 2, 3, 4, 5);

// recorrer el array y mostrar cada numero por pantalla
foreach ($numeros as $numero) {
    echo $numero . "<br>"; // imprimir cada numero s
}
?>


<?php
/*- Ejercicio 2
$X = array (10, 20, 30, 40, 50,60);
Mostrar por pantalla el tamaño del array anterior y posteriormente elimina un elemento del array anterior. 
Después de eliminar el elemento, las claves enteras deben ser normalizadas (se deben reorganizar sus índices). 
Muestra por última vez el tamaño del array.*/ 
define("EJERCICIO2", "Ejercicio 2");
echo "<h1>" . EJERCICIO2 . "</h1>";

$x = array(10, 20, 30, 40, 50, 60);


echo "tamaño inicial del array: " . count($x) . "<br>";

// eliminar un elemento del array 
unset($x[2]); 
// reorganizar  array
$x = array_values($x); 

// mostrar el tamaño del array despues de eliminar
echo "tamaño final del array: " . count($x) . "<br>";
?>



<?php
/*- Ejercicio 3
Crea una función que reciba como parámetros un array de palabras y un carácter. La función nos devuelve true si 
todas las palabras del array tienen el carácter pasado como segundo parámetro.
Por ejemplo:
Si tenemos [“hola”, “Php”, “Html”] devolverá true si preguntamos por “h” pero falso si preguntamos por “l”.*/ 

define("EJERCICIO3", "Ejercicio 3");
echo "<h1>" . EJERCICIO3 . "</h1>";

function todasLasPalabrasContienen(array $palabras, string $caracter): bool {
    // recorrer cada palabra del array
    foreach ($palabras as $palabra) {
        // verificar si la palabra no contiene el carácter
        if (strpos($palabra, $caracter) === false) {
            return false; // devolver false si alguna palabra no contiene el carácter
        }
    }
    return true; // devolver true si todas las palabras contienen el carácter
}

// ejemplo de uso
$palabras = array("hola", "php", "html");
$caracter = "h"; 

if (todasLasPalabrasContienen($palabras, $caracter)) {
    echo "todas las palabras contienen el caracter '$caracter'";
} else {
    echo "no todas las palabras contienen el caracter '$caracter'";
}
?>



<?php
/*- Ejercicio 4
Haz un array asociativo que represente información de ti mismo/a. En concreto debe incluir:

nombre
edad
email
comida */
define("EJERCICIO4", "Ejercicio 4");
echo "<h1>" . EJERCICIO4 . "</h1>";


// crear un array asociativo con información personal 
$miInformacion = array (
    "nombre" => "juan" ,  
   "edad" => 25,  
   "email" => "juan@example.com" ,  
   "comidaFavorita" => "pizza"  
);

// recorrer el array asociativo y mostrar la información 
foreach ( $miInformacion  as  $clave => $valor ) {
    echo  $clave . ": " . $valor . "<br>" ; 
}

?>