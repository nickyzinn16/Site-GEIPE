<?php
    $titulo = "Perguntas - Super Admin GEIPE";
    $css = "admin/perguntas.css";
    $paginaAtiva = "perguntas";
    include '../php/superadmin/header.php';
    include '../php/conn.php';

    if(isset($_GET['apagar'])){
        $id = intval($_GET['apagar']);
        mysqli_query($conn, "DELETE FROM perguntas WHERE id = $id");
        header("Location: perguntas.php");
        exit();
    }

    $resultado = mysqli_query($conn, "SELECT * FROM perguntas");
?>

<section class="admin-painel">
    <div class="admin-topo">
        <h1>Gerir Perguntas FAQ</h1>
        <a href="criar-pergunta.php" class="btn-criar">+ Nova Pergunta</a>
    </div>

    <table class="tabela-admin">
        <thead>
            <tr>
                <th>Pergunta</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php while($pergunta = mysqli_fetch_assoc($resultado)): ?>
            <tr>
                <td><?= $pergunta['pergunta'] ?></td>
                <td>
                    <a href="editar-pergunta.php?id=<?= $pergunta['id'] ?>" class="btn-criar">Editar</a>
                    <a href="perguntas.php?apagar=<?= $pergunta['id'] ?>" class="btn-apagar" onclick="return confirm('Tens a certeza que queres apagar esta pergunta?')">Apagar</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</section>

</div>
</body>
</html>