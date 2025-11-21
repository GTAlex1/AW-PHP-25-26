<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mis Ejercicios PHP</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; background-color: #f5f5f5; }
        h1 { text-align: center; }
        ul { list-style-type: none; padding: 0; }
        li { margin: 10px 0; }
        a { text-decoration: none; color: #0077cc; font-size: 18px; }
        a:hover { text-decoration: underline; color: #005fa3; }
    </style>
</head>
<body>
    <h1>Mis Ejercicios PHP</h1>
    <ul>
        <?php
        $files = scandir(__DIR__); // Lee todos los archivos de la raíz del repo

        foreach ($files as $file) {
            // Ignorar index.php y archivos que no sean PHP
            if ($file !== 'index.php' && pathinfo($file, PATHINFO_EXTENSION) === 'php') {
                echo '<li><a href="'.$file.'">'.ucfirst(basename($file, '.php')).'</a></li>';
            }
        }
        ?>
    </ul>
</body>
</html>
