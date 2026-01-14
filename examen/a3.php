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