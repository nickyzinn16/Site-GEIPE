<?php
    $titulo = "Contactos - GEIPE";
    $css = "contactos.css";
    $paginaAtiva = "contactos";

    include 'php/header.php';
?>

<section class="banner">
    <div class="main-banner">
        <h1>CONTACTOS - ENTRE EM CONTACTO</h1>
        <p>Ficou com alguma dúvida ou tem uma sugestão? Entre em contacto connosco</p>
    </div>
</section>

<section class="contact-area">
    <div class="contact-text">
        <h2>ENVIE-NOS UMA MENSAGEM</h2>
        <p>Preencha o formulário abaixo e entraremos em contacto o mais breve possível.</p>

        <form action="./php/contacto.php" method="POST" class="contact-form">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Seu nome" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Seu email" required>

            <label for="assunto">Assunto</label>
            <input type="text" id="assunto" name="assunto" placeholder="Assunto da mensagem" required>

            <label for="mensagem">Mensagem</label>
            <textarea id="mensagem" name="mensagem" rows="6" placeholder="Escreva sua mensagem" required></textarea>

            <button type="submit">Enviar Mensagem</button>
        </form>
    </div>

    <div class="contact-image">
        <img src="resources/images/cont.png" alt="Contactos" usemap="#mapa-contactos">
    </div>

    <map name="mapa-contactos">
        <area shape="rect" coords="105,225,419,277" href="mailto:geipeicmgdcsv@email.com" alt="Email GEIPE">
        <area shape="rect" coords="101,295,455,356" href="mailto:eicmgdcmindelo@email.com" alt="Email Escola">
        <area shape="rect" coords="104,368,303,429" href="tel:+2321313" alt="Número Escola">
        <area shape="rect" coords="104,447,388,501" href="https://www.google.com/maps/place/Escola+Industrial+e+Comercial+do+Mindelo+Guilherme+Dias+Chantre+-+EICM+GDC/@16.8926647,-24.9908597,18.46z/data=!4m6!3m5!1s0x94f1c026390f379:0x1fd20acc18d3338e!8m2!3d16.892506!4d-24.9901961!16s%2Fg%2F11c7sq9dkk?entry=ttu&g_ep=EgoyMDI2MDYwMS4wIKXMDSoASAFQAw%3D%3D" target="_blank" alt="Localização Escola">
    </map>
</section>

<script src="./scripts/contactos.js"></script>

<?php include 'php/footer.php'; ?>