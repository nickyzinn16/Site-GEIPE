<?php
    include 'conn.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    $query = "INSERT INTO contactos (nome, email, assunto, mensagem) VALUES ('$nome', '$email', '$assunto', '$mensagem')";

    mysqli_query($conn, $query);
    header("Location: ../contactos.php");
    exit();
?>