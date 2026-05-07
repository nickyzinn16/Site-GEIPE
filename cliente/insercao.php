<?php
    $titulo = "Inserção Profissional - GEIPE";
    $css = "cliente/insercao.css";
    $paginaAtiva = "insercao";
?>

<?php include '../php/cliente/header.php'; ?>

<section class="banner">
    <div class="main-banner">
        <h1>INSERÇÃO PROFISSIONAL</h1>
        <p>Explore oportunidades reais no mercado de trabalho e desenvolva competências essenciais para a sua carreira profissional.</p>
    </div>
</section>

<br><br>
<p class="descricao">Aqui estão alguns sites/plataformas onde pode encontrar oportunidades de emprego e estágio:</p>

<section>
    <div class="cards">
        <div class="card card-info">
            <div class="card-logo">
                <img src="../resources/images/iefplogo.png" alt="Logo IEFP">
            </div>
            <div class="card-conteudo">
                <h3>IEFP</h3>
                <p>As plataformas do IEFP (Instituto do Emprego e Formação Profissional) de Cabo Verde têm como principal objetivo modernizar, facilitar e tornar mais acessíveis os serviços públicos de emprego e formação profissional no país.</p>
                <a href="https://iefp.cv/" target="_blank" class="botao">Visite IEFP</a>
            </div>
        </div>

        <div class="card card-info">
            <div class="card-logo">
                <img src="../resources/images/kre+.jpg" alt="Logo KRE+">
            </div>
            <div class="card-conteudo">
                <h3>KRE+</h3>
                <p>Kre + é a plataforma de formação, emprego e orientação profissional para jovens cabo-verdianos.</p>
                <a href="https://kremais.gov.cv/" target="_blank" class="botao">Visite KRE+</a>
            </div>
        </div>
    </div>
</section>

<?php include '../php/cliente/footer.php'; ?>

<script src="../scripts/insercao.js"></script>
<script src="../scripts/botao.js"></script>