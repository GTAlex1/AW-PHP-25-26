<form method="post">
    Número: <input type="number" name="n">
    Tope: <input type="number" name="t">
    Color: <select name="c">
        <option value="black">Negro</option>
        <option value="red">Rojo</option>
        <option value="blue">Azul</option>
        <option value="green">Verde</option>
    </select>
    <button type="submit">Generar</button>
</form>
<?php
if ($_POST) {
    echo "<table border='1' style='color:{$_POST['c']};'>";
    for ($i = 0; $i <= $_POST['t']; $i++) {
        echo "<tr><td>{$_POST['n']} x $i = " . ($_POST['n'] * $i) . "</td></tr>";
    }
    echo "</table>";
}
?>