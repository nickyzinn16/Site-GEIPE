<?php
    $titulo = "Candidaturas - Admin GEIPE";
    $css = "admin/candidaturas.css";
    $paginaAtiva = "candidaturas";
    include '../php/admin/header.php';
    include '../php/conn.php';

    $resultado = mysqli_query($conn, "SELECT * FROM candidaturas ORDER BY criado DESC");
?>

<section class="admin-painel">
    <div class="admin-topo">
        <h1>Candidaturas</h1>
    </div>

    <table class="tabela-admin">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Área</th>
                <th>Email</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            <?php while($candidatura = mysqli_fetch_assoc($resultado)): ?>
            <tr>
                <td><?= $candidatura['id'] ?></td>
                <td><?= $candidatura['nome'] ?></td>
                <td><?= $candidatura['area'] ?></td>
                <td><?= $candidatura['email'] ?></td>
                <td><?= $candidatura['criado'] ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</section>

</div>
</body>
</html>