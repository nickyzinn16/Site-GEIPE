<?php
    $titulo = "Utilizadores - Super Admin GEIPE";
    $css = "superadmin/utilizadores.css";
    $paginaAtiva = "utilizadores";
    include '../php/superadmin/header.php';
    include '../php/conn.php';

    if(isset($_GET['apagar'])){
        $id = intval($_GET['apagar']);
        mysqli_query($conn, "DELETE FROM utilizadores WHERE id = $id");
        header("Location: utilizadores.php");
        exit();
    }

    $resultado = mysqli_query($conn, "SELECT * FROM utilizadores");
?>

<section class="admin-painel">
    <div class="admin-topo">
        <h1>Utilizadores</h1>
        <a href="criar-utilizador.php" class="btn-criar">+ Novo Utilizador</a>
    </div>

    <table class="tabela-admin">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Utilizador</th>
                <th>Data</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php while($utilizador = mysqli_fetch_assoc($resultado)): ?>
            <tr>
                <td><?= $utilizador['nome'] ?></td>
                <td><?= $utilizador['email'] ?></td>
                <td><?= $utilizador['utilizador'] ?></td>
                <td><?= $utilizador['criado'] ?></td>
                <td>
                    <?php if($utilizador['email'] != 'superadmin@gmail.com'): ?>
                        <a href="mudar-senha.php?id=<?= $utilizador['id'] ?>" class="btn-criar">Mudar Senha</a>
                        <a href="utilizadores.php?apagar=<?= $utilizador['id'] ?>" class="btn-apagar" onclick="return confirm('Tens a certeza que queres apagar este utilizador?')">Apagar</a>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</section>

</div>
</body>
</html>