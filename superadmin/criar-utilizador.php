<?php
    $titulo = "Criar Utilizador - Super Admin GEIPE";
    $css = "superadmin/utilizadores.css";
    $paginaAtiva = "utilizadores";
    include '../php/superadmin/header.php';
    include '../php/conn.php';

    if(isset($_POST['criar'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $utilizador = $_POST['utilizador'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        mysqli_query($conn, "INSERT INTO utilizadores (nome, email, utilizador, senha) VALUES ('$nome', '$email', '$utilizador', '$senha')");
        header("Location: utilizadores.php");
        exit();
    }
?>

<section class="admin-painel">
    <div class="admin-topo">
        <h1>Criar Novo Utilizador</h1>
        <a href="utilizadores.php" class="btn-criar">← Voltar</a>
    </div>

    <div class="form-admin">
        <form method="POST">
            <div class="campo-admin">
                <label>Nome</label>
                <input type="text" name="nome" placeholder="Nome completo" required>
            </div>
            <div class="campo-admin">
                <label>Email</label>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="campo-admin">
                <label>Utilizador</label>
                <input type="text" name="utilizador" placeholder="Nome de utilizador" required>
            </div>
            <div class="campo-admin">
                <label>Senha</label>
                <input type="password" name="senha" placeholder="Senha" required>
            </div>
            <button type="submit" name="criar" class="btn-criar">Criar</button>
        </form>
    </div>
</section>

</div>
</body>
</html>