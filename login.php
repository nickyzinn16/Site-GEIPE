<?php
    session_start();
    include 'php/conn.php';

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM utilizadores WHERE email = '$email'";
        $resultado = mysqli_query($conn, $sql);

        if(mysqli_num_rows($resultado) > 0){
            $utilizador = mysqli_fetch_assoc($resultado);
            if(password_verify($senha, $utilizador['senha'])){
                $_SESSION['utilizador'] = $utilizador['utilizador'];
                $_SESSION['email'] = $utilizador['email'];

                if($utilizador['email'] == 'superadmin@gmail.com'){
                    header("Location: superadmin/index.php");
                } else {
                    header("Location: admin/index.php");
                }
                exit();
            } else {
                $erro = "Senha incorreta";
            }
        } else {
            $erro = "Utilizador não encontrado";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Login - GEIPE</title>
        <link rel="icon" type="image/png" href="./resources/images/logo-geipe.png">
        <link rel="stylesheet" href="./styles/login.css">
        <script src="https://kit.fontawesome.com/35842701b4.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="caixaLogin">
            <h2>Entre na plataforma do GEIPE</h2>

            <?php if(isset($erro)): ?>
                <p><?= $erro ?></p>
            <?php endif; ?>
            
            <form id="loginForm" method="POST">
                <div class="campo">
                    <label>Email:</label>
                    <input type="email" name="email" placeholder="O seu email" required>
                </div>

                <div class="campo">
                    <label>Senha:</label>
                    <input type="password" name="senha" placeholder="A sua senha" required>
                </div>

                <button type="submit" name="login" class="btn-entrar">Iniciar Sessão</button>
            </form>
        </div>
    </body>
</html>