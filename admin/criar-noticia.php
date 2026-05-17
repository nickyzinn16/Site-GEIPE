<?php
    $titulo = "Criar Notícia - Admin";
    $css = "admin/noticias.css";
    $paginaAtiva = "noticias";
    include '../php/admin/header.php';
    include '../php/conn.php';

    if(isset($_POST['criar'])){
        $titulo_noticia = $_POST['titulo'];
        $resumo = $_POST['resumo'];
        $conteudo = $_POST['conteudo'];
        $imagem = $_POST['imagem'];

        $sql = "INSERT INTO noticias (titulo, resumo, imagem, conteudo) VALUES ('$titulo_noticia', '$resumo', '$imagem', '$conteudo')";

        if(mysqli_query($conn, $sql)){
            header("Location: noticias.php");
            exit();
        } else {
            $erro = "Erro ao criar notícia!";
        }
    }
?>

<section class="admin-painel">
    <div class="admin-topo">
        <h1>Criar Nova Notícia</h1>
        <a href="noticias.php" class="btn-criar">Voltar</a>
    </div>

    <?php if(isset($erro)): ?>
        <p><?= $erro ?></p>
    <?php endif; ?>

    <div class="form-admin">
        <form method="POST">
            <div class="campo-admin">
                <label>Título</label>
                <input type="text" name="titulo" placeholder="Título da notícia" required>
            </div>

            <div class="campo-admin">
                <label>Resumo</label>
                <input type="text" name="resumo" placeholder="Resumo breve" required>
            </div>

            <div class="campo-admin">
                <label>Imagem</label>
                <input type="text" name="imagem" placeholder="Imagem">
            </div>

            <div class="campo-admin">
                <label>Conteúdo</label>
                <textarea name="conteudo" rows="10" placeholder="Conteúdo completo da notícia" required></textarea>
            </div>
            <button type="submit" name="criar" class="btn-criar">Publicar Notícia</button>
        </form>
    </div>
</section>

</div>
</body>
</html>