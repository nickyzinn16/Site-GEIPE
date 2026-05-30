<?php
    $titulo = "Editar Notícia - Super Admin";
    $css = "admin/noticias.css";
    $paginaAtiva = "noticias";
    include '../php/superadmin/header.php';
    include '../php/conn.php';

    $id = intval($_GET['id']);
    $noticia = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM noticias WHERE id = $id"));

    if(isset($_POST['editar'])){
        $titulo_noticia = $_POST['titulo'];
        $resumo = $_POST['resumo'];
        $conteudo = $_POST['conteudo'];

        $file = $_FILES['imagem'];

        if($file['name'] != ''){
            $file_extension = pathinfo($file['name'], PATHINFO_EXTENSION);
            $permitted_extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

            if(!in_array(strtolower($file_extension), $permitted_extensions)){
                $erro = "Formato de imagem não suportado.";
            } elseif($file['size'] > 10*1024*1024){
                $erro = "Imagem muito grande. Máximo 10MB.";
            } else {
                $new_file_name = time().'_'.$file['name'];
                if(move_uploaded_file($file['tmp_name'], "../uploads/noticias/".$new_file_name)){
                    $imagem = "uploads/noticias/".$new_file_name;
                    $sql = "UPDATE noticias SET titulo='$titulo_noticia', resumo='$resumo', conteudo='$conteudo', imagem='$imagem' WHERE id=$id";
                }
            }
        } else {
            $sql = "UPDATE noticias SET titulo='$titulo_noticia', resumo='$resumo', conteudo='$conteudo' WHERE id=$id";
        }

        if(!isset($erro)){
            if(mysqli_query($conn, $sql)){
                header("Location: noticias.php");
                exit();
            } else {
                $erro = "Erro ao editar notícia!";
            }
        }
    }
?>

<section class="admin-painel">
    <div class="admin-topo">
        <h1>Editar Notícia</h1>
        <a href="noticias.php" class="btn-criar">Voltar</a>
    </div>

    <?php if(isset($erro)): ?>
        <p style="color:red;"><?= $erro ?></p>
    <?php endif; ?>

    <div class="form-admin">
        <form method="POST" enctype="multipart/form-data">
            <div class="campo-admin">
                <label>Título</label>
                <input type="text" name="titulo" value="<?= $noticia['titulo'] ?>" required>
            </div>

            <div class="campo-admin">
                <label>Resumo</label>
                <input type="text" name="resumo" value="<?= $noticia['resumo'] ?>" required>
            </div>

            <div class="campo-admin">
                <label>Nova imagem</label>
                <input type="file" name="imagem" accept=".jpg,.jpeg,.png,.gif,.webp">
            </div>

            <div class="campo-admin">
                <label>Conteúdo</label>
                <textarea name="conteudo" rows="10" required><?= $noticia['conteudo'] ?></textarea>
            </div>

            <button type="submit" name="editar" class="btn-criar">Guardar Alterações</button>
        </form>
    </div>
</section>

</div>
</body>
</html>