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