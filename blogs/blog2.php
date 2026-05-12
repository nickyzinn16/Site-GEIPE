<?php
    include '../php/conn.php';
    $id = 2;
    $resultado = mysqli_query($conn, "SELECT * FROM noticias WHERE id = $id");
    $noticia = mysqli_fetch_assoc($resultado);
?>
<html>
    <head>
        <meta charset="utf-8">
        <title><?= $noticia['titulo'] ?> - GEIPE</title>
        <link rel="icon" type="image/png" href="../resources/images/logo-geipe.png">
        <link rel="stylesheet" href="../styles/base.css">
        <link rel="stylesheet" href="../styles/blogs.css">
        <link rel="stylesheet" href="../styles/footer.css">
        <script src="https://kit.fontawesome.com/35842701b4.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="grid-container">
            <header class="header">
                <nav class="navbar">
                    <div class="logo">
                        <a href="../index.php">
                            <img alt="Logo GEIPE" src="../resources/images/logo-geipe.png" class="logoGeipe">
                        </a>
                    </div>
                    <div class="menu">
                        <ul>
                            <li><a href="../index.php">Início</a></li>
                            <li><a href="../estagios.php">Estágios</a></li>
                            <li><a href="../insercao.php">Inserção Profissional</a></li>
                            <li><a href="../empreendedorismo.php">Empreendedorismo</a></li>
                            <li><a href="../contactos.php">Contacta-nos</a></li>
                            <li><a href="../blog.php" class="ativo">Blog</a></li>
                            <li><a href="../login.php" class="btn-login">Login</a></li>
                        </ul>
                    </div>
                </nav>
            </header>

            <section class="banner-blog2">
                <div class="main-banner">
                    <h1><?= $noticia['titulo'] ?></h1>
                    <p><?= $noticia['resumo'] ?></p>
                </div>
            </section>

            <section class="conteudo-noticia">
                <div class="noticia-container">
                    <h1><?= $noticia['titulo'] ?></h1>
                    <p><?= $noticia['conteudo'] ?></p>
                </div>
            </section>
        </div>

        <footer class="footer">
            <div class="footer-container">
                <div class="imagem-footer">
                    <a href="../index.php">
                        <img src="../resources/images/logo-geipe.png" alt="Logo GEIPE">
                    </a>
                    <p>GEIPE EICM-GDC</p>
                </div>
                <div class="info-uteis">
                    <h4>INFORMAÇÕES ÚTEIS</h4>
                    <ul>
                        <li><a href="../estagios.php">Como conseguir um estágio</a></li>
                        <li><a href="../orientacao.php">Orientação vocacional</a></li>
                        <li><a href="../insercao.php">Inserção Profissional</a></li>
                        <li><a href="../perguntas.php">Perguntas frequentes (FAQ)</a></li>
                    </ul>
                </div>
                <div class="endereco-contactos">
                    <h4>ENDEREÇO & CONTACTOS</h4>
                    <p><a href="https://maps.google.com" target="_blank">Av. Dr. Alberto Leite 5, Mindelo</a></p>
                    <p><a href="tel:+2321313">+232 13 13</a></p>
                    <p><a href="mailto:eicmgdcmindelo@gmail.com">eicmgdcmindelo@gmail.com</a></p>
                    <p><a href="mailto:geipeicmgdcsv@gmail.com">geipeicmgdcsv@gmail.com</a></p>
                </div>
                <div class="redes-container">
                    <h4>SIGA A EICM-GDC NAS REDES SOCIAIS</h4>
                    <div class="redes-sociais">
                        <a href="https://www.facebook.com/escolatecnicadomindeloGDC" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/mineducacaocv/" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2026 GEIPE - Todos os direitos reservados</p>
                <a href="../politicas.php">Políticas e Privacidade</a>
            </div>
        </footer>

        <button id="btn-topo">↑</button>
        <script src="../scripts/blog.js"></script>
        <script src="../scripts/botao.js"></script>
    </body>
</html>