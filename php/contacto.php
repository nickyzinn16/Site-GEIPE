<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    echo "<h1>Dados recebidos:</h1>";
    echo "Nome: $nome <br>";
    echo "Email: $email <br>";
    echo "Assunto: $assunto <br>";
    echo "Mensagem: $mensagem <br>";
?>