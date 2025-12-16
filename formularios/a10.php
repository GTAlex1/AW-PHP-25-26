<?php
if (isset($_COOKIE['rec'])) echo "Bienvenido de nuevo, " . $_COOKIE['rec'];
if ($_POST) {
    if ($_POST['u'] === "admin" && $_POST['p'] === "123") {
        echo "Bienvenido " . $_POST['u'];
        if (isset($_POST['r'])) setcookie('rec', $_POST['u'], time() + 86400);
    }
}
?>
<form method="post">
    User: <input type="text" name="u">
    Pass: <input type="password" name="p">
    Recordar: <input type="checkbox" name="r">
    <button type="submit">Login</button>
</form>