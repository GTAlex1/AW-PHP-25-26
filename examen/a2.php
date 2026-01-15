<?php
/* Crea una función llamada clasificarNotas que reciba 3 calificaciones numéricas y devuelva la media de estos valores si todos son mayores que 5, un 4 si alguna nota es menor a 5, y 
un 2 si todas las notas es mejor que 5. Una vez calculado poner la nota en textual (Aprobado: para mayor que 5, Suspenso para 4 e Deficiente para 2).*/
$nota1=9;
$nota2=9;
$nota3=9;

function clasificarNotas($nota1, $nota2, $nota3) {
    if ($nota1 > 5 && $nota2 > 5 && $nota3 > 5 ) {
        $estado = "Aprobado";
        $media = ($nota1 + $nota2 + $nota3)/3;
    } elseif ($nota1 < 5 || $nota2 < 5 || $nota3 < 5) {
        if ($nota1 < 5 && $nota2 < 5 && $nota3 < 5) {   
            $estado = "Deficiente";
        }
        else {
            $estado = "Suspenso";
        }
    }
}
$aprobado = clasificarNotas($nota1, $nota2, $nota3); 
echo "El estado de la nota es $aprobado"; 
?>