<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM usuarios";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>Kinder</title>
</head>

<body>
    <div class="users-form">
        <h1>Kinder</h1>
        <h1>Crear Nuevo Estudiante</h1>
        <form action="insert_user.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellido" placeholder="Apellido">
            <input type="text" name="edad" placeholder="Edad">
            <input type="text" name="nususario" placeholder="Usuario">
            <input type="text" name="nacimiento" placeholder="Nacimiento">

            <input type="submit" value="Agregar">
        </form>
    </div>

    <div class="users-table">
        <h2>Estudiantes registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Edad</th>
                    <th>Usuario Estudiante</th>
                    <th>Lugar Nacimiento</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['nombre'] ?></th>
                        <th><?= $row['apellido'] ?></th>
                        <th><?= $row['edad'] ?></th>
                        <th><?= $row['nususario'] ?></th>
                        <th><?= $row['nacimiento'] ?></th>
                        <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>