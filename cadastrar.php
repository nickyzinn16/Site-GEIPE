<?php
    include 'php/conn.php';

    if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $utilizador = $_POST['utilizador'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

        // Verifica se o email ou utilizador já existem
        $verifica = mysqli_query($conn, "SELECT * FROM utilizadores WHERE email = '$email' OR utilizador = '$utilizador'");

        if(mysqli_num_rows($verifica) > 0){
            $erro = "Email ou utilizador já existe!";
        } else {
            $sql = "INSERT INTO utilizadores (nome, email, utilizador, senha) VALUES ('$nome', '$email', '$utilizador', '$senha')";
            if(mysqli_query($conn, $sql)){
                header("Location: login.php?sucesso=1");
                exit();
            } else {
                $erro = "Erro ao criar conta!";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Cadastrar - GEIPE</title>
        <link rel="icon" type="image/png" href="./resources/images/logo-geipe.png">
        <link rel="stylesheet" href="./styles/cadastrar.css">
        <script src="https://kit.fontawesome.com/35842701b4.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="caixaCadastrar">
            <h2>Cadastre-se na plataforma do GEIPE</h2>

            <?php if(isset($erro)): ?>
                <p style="color:red;"><?= $erro ?></p>
            <?php endif; ?>

            <form method="POST">
                <div class="campo">
                    <label>Nome completo:</label>
                    <input type="text" name="nome" placeholder="O seu nome completo" required>
                </div>

                <div class="campo">
                    <label>Email:</label>
                    <input type="email" name="email" placeholder="O seu email" required>
                </div>

                <div class="campo">
                    <label>Utilizador:</label>
                    <input type="text" name="utilizador" placeholder="Defina um nome de utilizador" required>
                </div>

                <div class="campo">
                    <label>Senha:</label>
                    <input type="password" name="senha" placeholder="Defina uma senha" required>
                </div>

                <button type="submit" name="cadastrar" class="btn-entrar">Criar conta</button>
            </form>
            <p><a href="login.php">Já tenho conta</a></p>
        </div>
    </body>
</html>