<?php
    $titulo = "Perguntas - GEIPE";
    $css = "perguntas.css";
    $paginaAtiva = "perguntas";

    include 'php/header.php';
    include 'php/conn.php';

    $perguntas = mysqli_query($conn, "SELECT * FROM perguntas");
?>

<section class="banner">
    <div class="main-banner">
        <h1>PERGUNTAS FREQUENTES (FAQ)</h1>
        <p>Perguntas mais feitas pelos usuários</p>
    </div>
</section>

<section class="faq">
    <h2>PERGUNTAS FREQUENTES (FAQ)</h2>

    <?php while($faq = mysqli_fetch_assoc($perguntas)): ?>
        <div class="faq-item">
            <h3 class="pergunta"><?= $faq['pergunta'] ?></h3>
            <p class="resposta"><?= $faq['resposta'] ?></p>
        </div>
    <?php endwhile; ?>
    
</section>

<script src="./scripts/perguntas.js"></script>
<script src="./scripts/botao.js"></script>
<?php include 'php/footer.php'; ?>