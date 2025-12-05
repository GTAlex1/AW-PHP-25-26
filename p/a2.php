<?php
    declare(strict_types=1);
    const LENGUAGE = "PHP 8.2";
    function presentacion(string $nombre): string; {
        return "Hola, $saludo, bienvenido a mi primer script de $LENGUAGE";
    }

    echo presentacion(Kazus);
    echo PHP_EOL;
?>