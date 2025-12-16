<?php
$u_db = "admin";
$p_db = md5("123");
if ($_POST) {
    if ($_POST['u'] === $u_db && md5($_POST['p']) === $p_db) echo "Bienvenido";
    else echo "Acceso denegado";
}
?>
<form method="post">
    User: <input type="text" name="u"><br>
    Pass: <input type="password" name="p"><br>
    <button type="submit">Login</button>
</form>