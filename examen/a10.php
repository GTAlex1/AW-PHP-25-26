<?php
    function tablas($n, $tope) {
        while ($n < $tope) {
            echo "<table></table>";
            for ($i=0; $i <=10 ; $i++) { 
                $resultado = $n * $i;
                echo "<tr><td>$n x $i = $resultado</td></tr>";
            }
            $n++;
        }
    }
?>
<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset="UTF-8"
    <meta name="viewport" content="widthdevice-width, initial-scale=1.0">
    <title>Calculadora</title
</head>
<body>
    <?php 
    if(isset($_POST['enviar'])) {
        tablas($_POST['n'], $_POST['tope'])
    }
        else : ?>
    <form method="post">
        <p>Número: </p><input type="number" name="n" required>
        <p>Límite: </p><input type="number" name="tope" required>
        <button type="submit" name"enviar">Enviar</button>
    </form>
    <?php endif; ?>
</body>
</html>