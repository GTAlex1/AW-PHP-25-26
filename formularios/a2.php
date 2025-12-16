<?php
function operar($n1, $n2, $op) {
    switch ($op) {
        case 'suma': return $n1 + $n2;
        case 'resta': return $n1 - $n2;
        case 'mult': return $n1 * $n2;
        case 'div': return ($n2 != 0) ? $n1 / $n2 : "Error";
    }
}
?>
<form method="post">
    <input type="number" name="n1" required>
    <select name="op">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="mult">Multiplicación</option>
        <option value="div">División</option>
    </select>
    <input type="number" name="n2" required>
    <button type="submit">Calcular</button>
</form>
<?php
if ($_POST) {
    $res = operar($_POST['n1'], $_POST['n2'], $_POST['op']);
    echo "<ul>
            <li>Número 1: {$_POST['n1']}</li>
            <li>Número 2: {$_POST['n2']}</li>
            <li>Operación: {$_POST['op']}</li>
            <li>Resultado: $res</li>
          </ul>";
}
?>