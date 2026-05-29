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
        $erro = "";

        // Tratamento do upload da capa
        $file = $_FILES['imagem'];
        $file_name = $file['name'];
        $file_tmp_name = $file['tmp_name'];
        $size = $file['size'];

        $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
        $permitted_extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

        if(!in_array(strtolower($file_extension), $permitted_extensions)){
            $erro = "Formato de imagem não suportado. Use JPG, PNG, GIF ou WEBP.";
        } elseif($size > 10*1024*1024){
            $erro = "Imagem muito grande. Máximo 10MB.";
        } else {
            $new_file_name = time().'_'.$file_name;
            $destination = "../uploads/noticias/".$new_file_name;

            if(move_uploaded_file($file_tmp_name, $destination)){
                $imagem = "uploads/noticias/".$new_file_name;
                $sql = "INSERT INTO noticias (titulo, resumo, imagem, conteudo) VALUES ('$titulo_noticia', '$resumo', '$imagem', '$conteudo')";

                if(mysqli_query($conn, $sql)){
                    header("Location: noticias.php");
                    exit();
                } else {
                    $erro = "Erro ao criar notícia!";
                }
            } else {
                $erro = "Erro ao fazer upload da imagem.";
            }
        }
    }
?>

<section class="admin-painel">
    <div class="admin-topo">
        <h1>Criar Nova Notícia</h1>
        <a href="noticias.php" class="btn-criar">Voltar</a>
    </div>

    <?php if(isset($erro) && $erro != ""): ?>
        <p style="color:red;"><?= $erro ?></p>
    <?php endif; ?>

    <div class="form-admin">
        <form method="POST" enctype="multipart/form-data">
            <div class="campo-admin">
                <label>Título</label>
                <input type="text" name="titulo" placeholder="Título da notícia" required>
            </div>

            <div class="campo-admin">
                <label>Resumo</label>
                <input type="text" name="resumo" placeholder="Resumo breve" required>
            </div>

            <div class="campo-admin">
                <label>Capa da Notícia</label>
                <input type="file" name="imagem" accept=".jpg,.jpeg,.png,.gif,.webp" required>
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