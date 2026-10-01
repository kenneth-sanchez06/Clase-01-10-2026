<?php
    include 'db.php';
    $id = $_GET['id'];
    $consulta = "DELETE FROM users WHERE id = $id";
    if ($conn->query($consulta) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error al eliminar " . $conn->error;
    }
?>
