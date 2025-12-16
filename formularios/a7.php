<?php
$m = "";
if (isset($_COOKIE['m'])) $m = "Hola de nuevo, eres mayor de edad.";
if ($_POST) {
    if ($_POST['e'] >= 18) {
        setcookie('m', '1', time() + 86400);
        $m = "Mensaje personalizado: Eres mayor de edad.";
    } else {
        $m = "Eres menor de edad.";
    }
}
?>
<p><?php echo $m; ?></p>
<form method="post">
    Edad: <input type="number" name="e">
    <button type="submit">Enviar</button>
</form>