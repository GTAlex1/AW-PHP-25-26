<!-- Ejercicio 1 -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    
<?php
// Crea una función llamada mostrarPresentación que reciba el nombre, curso y módulo, el número de veces que debe mostrarse por pantalla. Se debe mostrar en una tabla (usar for).
function mostrarPresentación($nombre, $curso, $modulo, $repeticion) {
    for ($i=1; $i <= $repeticion  ; $i++) { ?>
        <table>
            <tr>
                <td> <?php echo $nombre; ?></td>
                <td> <?php echo $curso; ?></td>
                <td> <?php echo $modulo; ?></td>
            </tr>
        </table> <?php 
    }
}
?>
<?php mostrarPresentación("Alejandro", "2SMR", "APWEB", 2);?>
</body>
</html>


<!-- Ejercicio 2 -->
 <?php
/* Crea una función llamada clasificarNotas que reciba 3 calificaciones numéricas y devuelva la media de estos valores si todos son mayores que 5, un 4 si alguna nota es menor a 5, y 
un 2 si todas las notas es mejor que 5. Una vez calculado poner la nota en textual (Aprobado: para mayor que 5, Suspenso para 4 e Deficiente para 2).*/
$aprobado = "";
function clasificarNotas($nota1, $nota2, $nota3) {
    if ($nota1 > 5 && $nota2 > 5 && $nota3 > 5 ) {
        $estado = "Aprobado";
        $media = ($nota1 + $nota2 + $nota3)/3;
    } elseif ($nota1 < 5 || $nota2 < 5 || $nota3 > 5) {
        if ($nota1 < 5 && $nota2 < 5 && $nota3 < 5) {   
            $estado = "Deficiente";
        }
        else {
            $estado = "Suspenso";
        }
    }
}
clasificarNotas(9, 9, 9);
echo "El estado de la nota es $aprobado";
?>

<!-- Ejercicio 3 -->
 <?php
// Crea una array con 5 asignaturas y sus notas. Definir la función MostrarAsignaturas(array, min_max) que muestre la asignatura mínima o máxima del array.
$asignaturas = [
    "Proyecto" => 5,
    "IPE II" => 8,
    "Ingles" => 8,
    "Servicios" => 7,
    "APWEB" => 8
];
$mejornota=-1
$peornota=11
$valor="min"
foreach ($asignaturas as $asignatura => $nota) {
    if ($nota > $mejornota) {
        $nota = $mejornota
    }
    if ($nota < $peornota) {
        $nota = $peornota
    }
}
if ($valor == "min") {
    echo "La nota más baja es $peornota"
} else {
    echo "La nota más alta es $mejornota"
}
?>

<!-- Ejercicio 5 -->
 <?php
// Mostrar los números pares y divisibles por 3 del 1 al 100, o que sean mayores a 90. Mostrar en forma de tabla.

for ($i=1; $i <=100 ; $i++) { 
    if ($i<90) {
        if ($i%2=0 && $i%3=0) {
            ?> <table>
                <tr>
                    <td> <?php echo $i</td>
                </tr>
            </table>
        }
    }
}
?>
