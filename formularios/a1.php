<!DOCTYPE html>
<html>
<head>
    <style>
        table { width: 80%; border-collapse: collapse; margin: 20px auto; font-family: Arial; }
        th { background-color: #3498db; color: white; padding: 10px; }
        td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        tr:nth-child(even) { background-color: #f9f9f9; }
    </style>                    º
</head>
<body>
    <form method="post">
        <input type="text" name="nombre" required placeholder="Nombre">
        <input type="text" name="apellidos" required placeholder="Apellidos">
        <input type="text" name="curso" required placeholder="Curso">
        <input type="text" name="asignatura" required placeholder="Asignatura">
        <select name="evaluacion">
            <option value="Primera">Primera</option>
            <option value="Segunda">Segunda</option>
            <option value="Tercera">Tercera</option>
        </select>
        <textarea name="descripcion" placeholder="Descripción"></textarea>
        <button type="submit">Enviar</button>
    </form>
    <?php
    if ($_POST) {
        echo "<table>
            <tr><th>Nombre</th><th>Apellidos</th><th>Curso</th><th>Asignatura</th><th>Evaluación</th><th>Descripción</th></tr>
            <tr>
                <td>{$_POST['nombre']}</td>
                <td>{$_POST['apellidos']}</td>
                <td>{$_POST['curso']}</td>
                <td>{$_POST['asignatura']}</td>
                <td>{$_POST['evaluacion']}</td>
                <td>{$_POST['descripcion']}</td>
            </tr>
            </table>";
    }
    ?>
</body>
</html>