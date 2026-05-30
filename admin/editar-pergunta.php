<?php
    $titulo = "Editar Pergunta - Admin";
    $css = "admin/perguntas.css";
    $paginaAtiva = "perguntas";
    include '../php/admin/header.php';
    include '../php/conn.php';

    $id = intval($_GET['id']);
    $pergunta = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM perguntas WHERE id = $id"));

    if(isset($_POST['editar'])){
        $pergunta_texto = $_POST['pergunta'];
        $resposta = $_POST['resposta'];

        $sql = "UPDATE perguntas SET pergunta='$pergunta_texto', resposta='$resposta' WHERE id=$id";

        if(mysqli_query($conn, $sql)){
            header("Location: perguntas.php");
            exit();
        } else {
            $erro = "Erro ao editar pergunta!";
        }
    }
?>

<section class="admin-painel">
    <div class="admin-topo">
        <h1>Editar Pergunta</h1>
        <a href="perguntas.php" class="btn-criar">Voltar</a>
    </div>

    <?php if(isset($erro)): ?>
        <p style="color:red;"><?= $erro ?></p>
    <?php endif; ?>

    <div class="form-admin">
        <form method="POST">
            <div class="campo-admin">
                <label>Pergunta</label>
                <input type="text" name="pergunta" value="<?= $pergunta['pergunta'] ?>" required>
            </div>

            <div class="campo-admin">
                <label>Resposta</label>
                <textarea name="resposta" rows="6" required><?= $pergunta['resposta'] ?></textarea>
            </div>

            <button type="submit" name="editar" class="btn-criar">Guardar Alterações</button>
        </form>
    </div>
</section>

</div>
</body>
</html>