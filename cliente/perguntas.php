<?php
$titulo = "Perguntas - GEIPE";
$css = "/geip/styles/cliente/perguntas.css";
$paginaAtiva = "perguntas";
?>

<?php include '../php/cliente/header.php'; ?>
<?php include '../php/conn.php'; ?>

<?php $resultado = mysqli_query($conn, "SELECT * FROM perguntas"); ?>

<section class="banner">
    <div class="main-banner">
        <h1>PERGUNTAS FREQUENTES (FAQ)</h1>
        <p>Perguntas mais feitas pelos usuários</p>
    </div>
</section>

<section class="faq">
    <h2>PERGUNTAS FREQUENTES (FAQ)</h2>

    <?php while($faq = mysqli_fetch_assoc($resultado)): ?>
        <div class="faq-item">
            <h3 class="pergunta"><?= $faq['pergunta'] ?></h3>
            <p class="resposta"><?= $faq['resposta'] ?></p>
        </div>
    <?php endwhile; ?>

    <div class="enviar-pergunta">
        <a href="/geip/cliente/contactos.php" class="btn-pergunta">Tens uma pergunta? Contacta-nos!</a>
    </div>
</section>

<?php include '../php/cliente/footer.php'; ?>

<script src="../scripts/perguntas.js"></script>
<script src="../scripts/botao.js"></script>