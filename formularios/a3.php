<?php
function dibujar($l, $c) {
    echo "<div style='width:{$l}px; height:2px; background-color:$c; margin:10px 0;'></div>";
    echo "<div style='width:2px; height:{$l}px; background-color:$c;'></div>";
}
?>
<form method="post">
    Longitud: <input type="number" name="l">
    Color: <select name="c">
        <option value="red">Rojo</option>
        <option value="blue">Azul</option>
        <option value="green">Verde</option>
        <option value="yellow">Amarillo</option>
    </select>
    <button type="submit">Dibujar</button>
</form>
<?php
if ($_POST) dibujar($_POST['l'], $_POST['c']);
?>