<form method="post">
    Pizza: <select name="p">
        <option value="10">Tipo A (10€)</option>
        <option value="12">Tipo B (12€)</option>
        <option value="15">Tipo C (15€)</option>
    </select><br>
    Toppings (2€ u/):<br>
    <input type="checkbox" name="t[]" value="T1"> T1
    <input type="checkbox" name="t[]" value="T2"> T2
    <input type="checkbox" name="t[]" value="T3"> T3
    <input type="checkbox" name="t[]" value="T4"> T4
    <input type="checkbox" name="t[]" value="T5"> T5
    <button type="submit">Pedir</button>
</form>
<?php
if ($_POST) {
    $sel = $_POST['t'] ?? [];
    $total = $_POST['p'] + (count($sel) * 2);
    echo "Toppings: " . implode(", ", $sel) . "<br>Total: $total €";
}
?>