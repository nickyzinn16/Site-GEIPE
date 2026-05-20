<?php
    $titulo = "Utilizadores - Admin GEIPE";
    $css = "admin/utilizadores.css";
    $paginaAtiva = "utilizadores";
    include '../php/admin/header.php';
    include '../php/conn.php';

    $resultado = mysqli_query($conn, "SELECT * FROM utilizadores");
?>

<section class="admin-painel">
    <div class="admin-topo">
        <h1>Utilizadores</h1>
    </div>

    <table class="tabela-admin">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Utilizador</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            <?php while($utilizador = mysqli_fetch_assoc($resultado)): ?>
            <tr>
                <td><?= $utilizador['id'] ?></td>
                <td><?= $utilizador['nome'] ?></td>
                <td><?= $utilizador['email'] ?></td>
                <td><?= $utilizador['utilizador'] ?></td>
                <td><?= $utilizador['criado'] ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</section>

</div>
</body>
</html>