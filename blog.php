<?php
    $titulo = "Blog - GEIPE";
    $css = "blog.css";
    $paginaAtiva = "blog";
    include 'php/header.php';
    include 'php/conn.php';

    $resultado = mysqli_query($conn, "SELECT * FROM noticias WHERE publicada = 1 ORDER BY criado DESC");
?>

<section class="blog-container">
    <div class="pesquisar">
        <input type="text" placeholder="Procurar noticias">
        <button class="procurar">Procurar</button>
    </div>

    <div class="noticias">
        <?php while($noticia = mysqli_fetch_assoc($resultado)): ?>
            <a href="blogs/noticia.php?id=<?= $noticia['id'] ?>" class="noticia">
                <img src="./resources/images/Blogs/<?= $noticia['imagem'] ?>">
                <h3><?= $noticia['titulo'] ?></h3>
                <p><?= $noticia['resumo'] ?></p>
            </a>
        <?php endwhile; ?>
    </div>
</section>

<script>
    function pesquisar(){
        const texto = document.querySelector('.pesquisar input').value.toLowerCase();
        document.querySelectorAll('.noticia').forEach(n => {
            const visivel = n.querySelector('h3').textContent.toLowerCase().includes(texto) ||
                            n.querySelector('p').textContent.toLowerCase().includes(texto);
            n.style.display = visivel ? 'block' : 'none';
        });
    }

    document.querySelector('.procurar').addEventListener('click', pesquisar);
    document.querySelector('.pesquisar input').addEventListener('keyup', e => e.key === 'Enter' && pesquisar());
</script>

<?php include 'php/footer.php'; ?>