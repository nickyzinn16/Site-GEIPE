<?php
    $titulo = "Blog - GEIPE";
    $css = "blog.css";
    $paginaAtiva = "blog";

    include 'php/header.php';
?>

<section class="blog-container">
    <div class="pesquisar">
        <input type="text" placeholder="Procurar noticias">
        <button class="procurar">Procurar</button>
    </div>

    <div class="noticias">
        <a href="blogs/blog1.php" class="noticia">
            <img src="./resources/images/Blogs/Noticia-1.jpg">
            <h3>O GEIPE EICM-GDC</h3>
            <p>GEIPE foi desenvolvido para apoiar alunos na preparação para estágios.</p>
        </a>

        <a href="blogs/blog2.php" class="noticia">
            <img src="./resources/images/Blogs/Noticia-2.jpg">
            <h3>Estágios do GEIPE</h3>
            <p>Novas oportunidades de estágio estão a ser disponibilizadas.</p>
        </a>

        <a href="blogs/blog3.php" class="noticia">
            <img src="./resources/images/Blogs/Noticia-3.jpg">
            <h3>Oportunidades do GEIPE</h3>
            <p>Alunos têm acesso a novas oportunidades de estágio.</p>
        </a>

        <a href="blogs/blog4.php" class="noticia">
            <img src="./resources/images/Blogs/Noticia-4.jpg">
            <h3>Equipa do GEIPE</h3>
            <p>Gabinete gerido por professores da disciplina de Empreendedorismo.</p>
        </a>

        <a href="blogs/blog5.php" class="noticia">
            <img src="./resources/images/Blogs/Noticia-5.webp">
            <h3>Orientação Vocacional</h3>
            <p>Apoio aos jovens na escolha de carreiras.</p>
        </a>

        <a href="blogs/blog6.php" class="noticia">
            <img src="./resources/images/Blogs/Noticia-6.jpg">
            <h3>Empreendedorismo</h3>
            <p>Programas incentivam projetos de negócio.</p>
        </a>
    </div>
</section>

<?php include 'php/footer.php'; ?>