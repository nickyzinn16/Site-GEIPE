<?php
$titulo = "Blog - GEIPE";
$css = "cliente/blog.css";
$paginaAtiva = "blog";
?>

<?php include '../php/cliente/header.php'; ?>


<section class="blog-container">
    <div class="pesquisar">
        <input type="text" placeholder="Procurar noticias">
        <button class="procurar">Procurar</button>
    </div>

    <div class="noticias">
        <a href="../blogs/blogsCliente/blog1.php" class="noticia">
            <img src="../resources/images/Blogs/Noticia-1.jpg">
            <h3>O GEIPE EICM-GDC</h3>
            <p>GEIPE, o novo gabinete criado pela EICM-GDC, foi desenvolvido para apoiar os alunos na sua preparação para estágios e na inserção no mundo do trabalho.</p>
        </a>

        <a href="../blogs/blogsCliente/blog2.php" class="noticia">
            <img src="../resources/images/Blogs/Noticia-2.jpg">
            <h3>Estágios do GEIPE EICM-GDC</h3>
            <p>Novas oportunidades de estágio estão a ser disponibilizadas pelo GEIPE, reforçando o apoio aos alunos da EICM-GDC na sua entrada no mercado de trabalho.</p>
        </a>

        <a href="../blogs/blogsCliente/blog3.php" class="noticia">
            <img src="../resources/images/Blogs/Noticia-3.jpg">
            <h3>Oportunidades do GEIPE EICM-GDC</h3>
            <p>Estudantes da EICM-GDC passam a ter acesso a novas oportunidades de estágio, através do GEIPE, que facilita a ligação com o mercado de trabalho.</p>
        </a>

        <a href="../blogs/blogsCliente/blog4.php" class="noticia">
            <img src="../resources/images/Blogs/Noticia-4.jpg">
            <h3>Equipa do GEIPE EICM-GDC</h3>
            <p>O GEIPE, gabinete gerido por professores da disciplina de Empreendedorismo da EICM-GDC, tem como objetivo apoiar os alunos na sua preparação para o mercado de trabalho.</p>
        </a>

        <a href="../blogs/blogsCliente/blog5.php" class="noticia">
            <img src="../resources/images/Blogs/Noticia-5.webp">
            <h3>Orientação Vocacional no Ensino</h3>
            <p>Especialistas defendem uma maior orientação vocacional para apoiar os jovens na escolha das suas carreiras e na entrada no mercado de trabalho.</p>
        </a>

        <a href="../blogs/blogsCliente/blog6.php" class="noticia">
            <img src="../resources/images/Blogs/Noticia-6.jpg">
            <h3>Empreendedorismo em Crescimento</h3>
            <p>Programas escolares estão a incentivar os alunos a desenvolver projetos de negócio e a reforçar competências de empreendedorismo.</p>
        </a>
    </div>
</section>

<?php include '../php/cliente/footer.php'; ?>

<script src="../scripts/blog.js"></script>
<script src="../scripts/botao.js"></script>