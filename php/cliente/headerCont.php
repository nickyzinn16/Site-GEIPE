<header class="header">
    <nav class="navbar">

        <div class="logo">
            <a href="../cliente/index.php">
                <img alt="Logo GEIPE" src="../resources/images/logo-geipe.png" class="logoGeipe">
            </a>
        </div>

        <div class="menu">
            <ul>
                <li><a href="../cliente/index.php" class="<?= ($paginaAtiva == 'inicio') ? 'ativo' : '' ?>">Início</a></li>
                <li><a href="../cliente/estagios.php" class="<?= ($paginaAtiva == 'estagios') ? 'ativo' : '' ?>">Estágios</a></li>
                <li><a href="../cliente/insercao.php" class="<?= ($paginaAtiva == 'insercao') ? 'ativo' : '' ?>">Inserção Profissional</a></li>
                <li><a href="../cliente/empreendedorismo.php" class="<?= ($paginaAtiva == 'empreendedorismo') ? 'ativo' : '' ?>">Empreendedorismo</a></li>
                <li><a href="../cliente/contactos.php" class="<?= ($paginaAtiva == 'contactos') ? 'ativo' : '' ?>">Contacta-nos</a></li>
                <li><a href="../cliente/blog.php" class="<?= ($paginaAtiva == 'blog') ? 'ativo' : '' ?>">Blog</a></li>
                <li class="user-menu">
                    <a href="#" class="user-icon">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <div class="sair-cliente">
                        <p class="user-name">Nome</p>
                        <a href="../index.php">Sair da conta</a>
                    </div>
                </li>
            </ul>
        </div>

    </nav>
</header>

<div class="grid-container">