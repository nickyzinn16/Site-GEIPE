<?php
    $titulo = "Painel Admin - GEIPE";
    $css = "admin/index.css";
    $paginaAtiva = "inicio";
    include '../php/admin/header.php';
?>

<section class="admin-painel">
    <h1>Bem-vindo ao painel de administração, <?= $_SESSION['utilizador'] ?>!</h1>

    <div class="cards-admin">
        <div class="card-admin">
            <i class="fa-solid fa-file"></i>
            <h3>Candidaturas</h3>
            <p>Ver e gerir candidaturas</p>
            <a href="candidaturas.php">Ver</a>
        </div>
        
        <div class="card-admin">
            <i class="fa-solid fa-envelope"></i>
            <h3>Contactos</h3>
            <p>Ver mensagens recebidas</p>
            <a href="contactos.php">Ver</a>
        </div>

        <div class="card-admin">
            <i class="fa-solid fa-users"></i>
            <h3>Utilizadores</h3>
            <p>Ver utilizadores registados</p>
            <a href="utilizadores.php">Ver</a>
        </div>

        <div class="card-admin">
            <i class="fa-solid fa-newspaper"></i>
            <h3>Notícias</h3>
            <p>Gerir notícias do blog</p>
            <a href="noticias.php">Ver</a>
        </div>
    </div>
</section>

</div>
</body>
</html>