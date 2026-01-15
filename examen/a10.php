<?php
    function tablas($n, $tope, $c) {
            echo "<table border='1' style='color:$c'>";
            for ($i=0; $i <= $tope ; $i++) { 
                $resultado = $n * $i;
                echo "<tr><td>$n x $i = $resultado</td></tr>";
            }
            echo "</table>";
    }
?>
<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widthdevice-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <?php 
    if(isset($_POST['enviar'])) {
        tablas($_POST['n'], $_POST['tope'], $_POST['color']);
    } else { ?>
    <form method="post">
        <p>Número: <input type="number" name="n" required></p>
        <p>Límite: <input type="number" name="tope" required></p>
        <p>
            <select name="color" required>
                <option value="black">Negro</option>
                <option value="red">Rojo</option>
                <option value="green">Verde</option>
                <option value="blue">Azul</option>
            </select>
            <button type="submit" name="enviar">Enviar</button>
        </p>
    </form>
    <?php } ?>
</body>
</html>