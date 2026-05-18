<?php
    $titulo = "Estágios - Admin GEIPE";
    $css = "admin/estagios.css";
    $paginaAtiva = "estagios";
    include '../php/admin/header.php';
    include '../php/conn.php';

    if(isset($_POST['atualizar'])){
        $id = intval($_POST['id']);
        $vagas = intval($_POST['vagas']);
        mysqli_query($conn, "UPDATE estagios SET vagas = $vagas WHERE id = $id");
        header("Location: estagios.php");
        exit();
    }

    $resultado = mysqli_query($conn, "SELECT * FROM estagios");
?>

<section class="admin-painel">
    <div class="admin-topo">
        <h1>Gerir Vagas de Estágios</h1>
    </div>

    <table class="tabela-admin">
        <thead>
            <tr>
                <th>Curso</th>
                <th>Vagas</th>
            </tr>
        </thead>
        <tbody>
            <?php while($estagio = mysqli_fetch_assoc($resultado)): ?>
            <tr>
                <td><?= $estagio['curso'] ?></td>
                <td>
                    <form method="POST" style="display:flex; gap:10px; align-items:center;">
                        <input type="hidden" name="id" value="<?= $estagio['id'] ?>">
                        <input type="number" name="vagas" value="<?= $estagio['vagas'] ?>" min="0" class="input-vagas">
                        <button type="submit" name="atualizar" class="btn-criar">Atualizar</button>
                    </form>
                </td>
                <td></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</section>

</div>
</body>
</html>