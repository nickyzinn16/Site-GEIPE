<header class="header">
    <nav class="navbar">
        <div class="logo">
            <a href="../superadmin/index.php">
                <img alt="Logo GEIPE" src="../resources/images/logo-geipe.png">
            </a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="../superadmin/index.php" class="<?= ($paginaAtiva == 'inicio') ? 'ativo' : '' ?>">Painel</a></li>
                <li><a href="../superadmin/candidaturas.php" class="<?= ($paginaAtiva == 'candidaturas') ? 'ativo' : '' ?>">Candidaturas</a></li>
                <li><a href="../superadmin/contactos.php" class="<?= ($paginaAtiva == 'contactos') ? 'ativo' : '' ?>">Contactos</a></li>
                <li><a href="../superadmin/utilizadores.php" class="<?= ($paginaAtiva == 'utilizadores') ? 'ativo' : '' ?>">Utilizadores</a></li>
                <li><a href="../superadmin/noticias.php" class="<?= ($paginaAtiva == 'noticias') ? 'ativo' : '' ?>">Notícias</a></li>
                <li><a href="../superadmin/estagios.php" class="<?= ($paginaAtiva == 'estagios') ? 'ativo' : '' ?>">Estágios</a></li>
                <li><a href="../superadmin/perguntas.php" class="<?= ($paginaAtiva == 'perguntas') ? 'ativo' : '' ?>">Perguntas</a></li>
                <li><a href="../php/logout.php" class="btn-login">Sair</a></li>
            </ul>
        </div>
    </nav>
</header>

<div class="grid-container">