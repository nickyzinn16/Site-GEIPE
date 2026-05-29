<?php
    $titulo = "Contactos - Super Admin GEIPE";
    $css = "admin/contactos.css";
    $paginaAtiva = "contactos";
    include '../php/superadmin/header.php';
    include '../php/conn.php';

    $resultado = mysqli_query($conn, "SELECT * FROM contactos ORDER BY criado DESC");
?>

<section class="admin-painel">
    <div class="admin-topo">
        <h1>Mensagens de Contacto</h1>
    </div>

    <table class="tabela-admin">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Assunto</th>
                <th>Mensagem</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            <?php while($contacto = mysqli_fetch_assoc($resultado)): ?>
            <tr>
                <td><?= $contacto['nome'] ?></td>
                <td><?= $contacto['email'] ?></td>
                <td><?= $contacto['assunto'] ?></td>
                <td><?= $contacto['mensagem'] ?></td>
                <td><?= $contacto['criado'] ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</section>

</div>
</body>
</html>