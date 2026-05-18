<?php
$titulo = "Blog - GEIPE";
$css = "/geip/styles/cliente/blog.css";
$paginaAtiva = "blog";
?>

<?php include '../php/cliente/header.php'; ?>
<?php include '../php/conn.php'; ?>

<?php $resultado = mysqli_query($conn, "SELECT * FROM noticias WHERE publicada = 1 ORDER BY criado DESC"); ?>

<section class="blog-container">
    <div class="pesquisar">
        <input type="text" placeholder="Procurar noticias">
        <button class="procurar">Procurar</button>
    </div>

    <div class="noticias">
        <?php while($noticia = mysqli_fetch_assoc($resultado)): ?>
            <a href="/geip/blogs/blogsCliente/noticia.php?id=<?= $noticia['id'] ?>" class="noticia">
                <img src="/geip/resources/images/Blogs/<?= $noticia['imagem'] ?>">
                <h3><?= $noticia['titulo'] ?></h3>
                <p><?= $noticia['resumo'] ?></p>
            </a>
        <?php endwhile; ?>
    </div>
</section>

<?php include '../php/cliente/footer.php'; ?>

<script src="../scripts/blog.js"></script>
<script src="../scripts/botao.js"></script>