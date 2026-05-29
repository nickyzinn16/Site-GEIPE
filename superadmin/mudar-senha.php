<?php
    $titulo = "Mudar Senha - Super Admin GEIPE";
    $css = "superadmin/utilizadores.css";
    $paginaAtiva = "utilizadores";
    include '../php/superadmin/header.php';
    include '../php/conn.php';

    if(!isset($_GET['id'])){
        header("Location: utilizadores.php");
        exit();
    }

    $id = intval($_GET['id']);
    $utilizador = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM utilizadores WHERE id = $id"));

    if(!$utilizador){
        header("Location: utilizadores.php");
        exit();
    }

    if(isset($_POST['mudar'])){
        $nova_senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        mysqli_query($conn, "UPDATE utilizadores SET senha = '$nova_senha' WHERE id = $id");
        header("Location: utilizadores.php");
        exit();
    }
?>

<section class="admin-painel">
    <div class="admin-topo">
        <h1>Mudar Senha — <?= $utilizador['nome'] ?></h1>
        <a href="utilizadores.php" class="btn-criar">← Voltar</a>
    </div>

    <div class="form-admin">
        <form method="POST">
            <div class="campo-admin">
                <label>Nova Senha</label>
                <input type="password" name="senha" placeholder="Nova senha" required>
            </div>
            <button type="submit" name="mudar" class="btn-criar">Mudar Senha</button>
        </form>
    </div>
</section>

</div>
</body>
</html>