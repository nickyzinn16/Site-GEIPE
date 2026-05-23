<?php
    $titulo = "Criar Pergunta - Super Admin GEIPE";
    $css = "admin/perguntas.css";
    $paginaAtiva = "perguntas";
    include '../php/superadmin/header.php';
    include '../php/conn.php';

    if(isset($_POST['criar'])){
        $pergunta = $_POST['pergunta'];
        $resposta = $_POST['resposta'];

        $sql = "INSERT INTO perguntas (pergunta, resposta) VALUES ('$pergunta', '$resposta')";

        if(mysqli_query($conn, $sql)){
            header("Location: perguntas.php");
            exit();
        } else {
            header("Location: criar-pergunta.php");
            exit();
        }
    }
?>

<section class="admin-painel">
    <div class="admin-topo">
        <h1>Criar Nova Pergunta</h1>
        <a href="perguntas.php" class="btn-criar">← Voltar</a>
    </div>

    <div class="form-admin">
        <form method="POST">
            <div class="campo-admin">
                <label>Pergunta</label>
                <input type="text" name="pergunta" placeholder="Escreve a pergunta" required>
            </div>
            <div class="campo-admin">
                <label>Resposta</label>
                <textarea name="resposta" rows="6" placeholder="Escreve a resposta" required></textarea>
            </div>
            <button type="submit" name="criar" class="btn-criar">Guardar Pergunta</button>
        </form>
    </div>
</section>

</div>
</body>
</html>