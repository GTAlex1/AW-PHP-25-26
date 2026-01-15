<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
    <style>
        table { width: 80%; margin: 20px auto;}
    </style>
</head>
<body>
    <form method="post">
        <input type="text" name="name" required placeholder="nombre...">
        <input type="text" name="surname" required placeholder="apellido...">
        <input type="text" name="course" required placeholder="curso...">
        <input type="text" name="subject" required placeholder="asignatura...">
        <select name="evaluation" required>
            <option value="first">Primera</option>
            <option value="second">Segunda</option>
            <option value="thirst">Tercera</option>
        </select>
        <textarea name="description" required placeholder="descripción..."></textarea>
        <button type="submit">Enviar</button>
    </form>
    <?php if ($_POST): ?> 
            <table>
                <tr>
                    <th>Nombre</th><th>Apellido</th><th>Curso</th><th>Asignatura</th><th>Evaluación</th><th>Descripción</th>
                </tr>
                <tr>
                    <th><?= $_POST['name']?></th>
                    <th><?= $_POST['surname']?></th>
                    <th><?= $_POST['course']?></th>
                    <th><?= $_POST['subject']?></th>
                    <th><?= $_POST['evaluation']?></th>
                    <th><?= $_POST['description']?></th>
                </tr>
            </table> 
    <?php endif; ?>
</body>
</html>