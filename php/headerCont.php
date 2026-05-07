<header class="header">
    <nav class="navbar">
        <div class="logo">
            <a href="index.php">
                <img alt="Logo GEIPE" src="./resources/images/logo-geipe.png">
            </a>
        </div>

        <div class="menu">
            <ul>
                <li><a href="index.php" class="<?= ($paginaAtiva == 'inicio') ? 'ativo' : '' ?>">Início</a></li>
                <li><a href="estagios.php" class="<?= ($paginaAtiva == 'estagios') ? 'ativo' : '' ?>">Estágios</a></li>
                <li><a href="insercao.php" class="<?= ($paginaAtiva == 'insercao') ? 'ativo' : '' ?>">Inserção Profissional</a></li>
                <li><a href="empreendedorismo.php" class="<?= ($paginaAtiva == 'empreendedorismo') ? 'ativo' : '' ?>">Empreendedorismo</a></li>
                <li><a href="contactos.php" class="<?= ($paginaAtiva == 'contactos') ? 'ativo' : '' ?>">Contacta-nos</a></li>
                <li><a href="blog.php" class="<?= ($paginaAtiva == 'blog') ? 'ativo' : '' ?>">Blog</a></li>
                <li><a href="login.php" class="btn-login">Login</a></li>
            </ul>
        </div>
    </nav>
</header>