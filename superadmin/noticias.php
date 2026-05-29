<?php
    $titulo = "Notícias - Super Admin GEIPE";
    $css = "admin/noticias.css";
    $paginaAtiva = "noticias";
    include '../php/superadmin/header.php';
    include '../php/conn.php';

    if(isset($_GET['apagar'])){
        $id = intval($_GET['apagar']);
        mysqli_query($conn, "DELETE FROM noticias WHERE id = $id");
        header("Location: noticias.php");
        exit();
    }

    $resultado = mysqli_query($conn, "SELECT * FROM noticias ORDER BY criado DESC");
?>

<section class="admin-painel">
    <div class="admin-topo">
        <h1>Notícias do Blog</h1>
        <a href="criar-noticia.php" class="btn-criar">+ Nova Notícia</a>
    </div>

    <table class="tabela-admin">
        <thead>
            <tr>
                <th>Título</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php while($noticia = mysqli_fetch_assoc($resultado)): ?>
            <tr>
                <td><?= $noticia['titulo'] ?></td>
                <td><?= $noticia['criado'] ?></td>
                <td>
                    <a href="noticias.php?apagar=<?= $noticia['id'] ?>" class="btn-apagar" onclick="return confirm('Tens a certeza que queres apagar esta notícia?')">Apagar</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</section>

</div>
</body>
</html>