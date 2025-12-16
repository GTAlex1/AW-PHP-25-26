<?php
$db = md5("admin123");
if ($_POST) {
    if (md5($_POST['p']) === $db) echo "Bienvenido";
    else echo "Error";
}
?>
<form method="post">
    Pass: <input type="password" name="p">
    <button type="submit">Entrar</button>
</form>