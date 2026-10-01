<?php
    include 'db.php';
    $id = $_GET['id'];
    $consulta = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($consulta);
    $row = $result->fetch_assoc();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];

        $updateConsulta = "UPDATE users SET username='$username', email='$email', telefono='$telefono' WHERE id=$id";

        if ($conn->query($updateConsulta) === TRUE) {
            header("Location: index.php");
            Exit();
        } else {
            echo "Error al actualizar: " . $conn->error;
        }
    }
    //echo $row['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <form action="update.php?id=<?php echo $row['id']; ?>" method="POST">
        <label for="username">Nombre:</label>
        <input type="text" name="username" value="<?php echo $row['username']; ?>"><br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
        <label for="telefono">Telefono:</label>
        <input type="text" name="telefono" value="<?php echo $row['telefono']; ?>"><br>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
