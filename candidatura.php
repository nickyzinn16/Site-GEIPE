<?php
    include 'php/conn.php';

    if(isset($_POST['enviar'])){
        $nome = $_POST['nome'];
        $area = $_POST['area'];
        $email = $_POST['email'];

        $sql = "INSERT INTO candidaturas (nome, area, email) VALUES ('$nome', '$area', '$email')";

        if(mysqli_query($conn, $sql)){
            header("Location: estagios.php");
            exit();
        } else {
            header("Location: candidatura.php");
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Candidatura - GEIPE</title>
        <link rel="icon" type="image/png" href="./resources/images/logo-geipe.png">
        <link rel="stylesheet" href="./styles/candidatura.css"> 
        <script src="https://kit.fontawesome.com/35842joni b4.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div>
            <main>
                <div class="form">
                    <h2>Formulário de Candidatura</h2>

                    <?php if(isset($sucesso)): ?>
                        <p><?= $sucesso ?></p>
                    <?php endif; ?>

                    <?php if(isset($erro)): ?>
                        <p><?= $erro ?></p>
                    <?php endif; ?>

                    <form method="POST">
                        <div class="form-lab">
                            <label for="nome">Nome Completo:</label>
                            <input type="text" id="nome" name="nome" required>
                        </div>

                        <div class="form-lab">
                            <label for="area">Área Escolar:</label>
                            <select id="area" name="area" required>
                                <option value="">Selecione uma area</option>
                                <option value="ASIBD">ASIBD</option>
                                <option value="Artes Gráficas">ARTES GRAFICAS (AG)</option>
                                <option value="Construção Civil">CONSTRUCAO CIVIL (CC)</option>
                                <option value="Contabilidade">CONTABILIDADE E ADMINISTRACAO (CA)</option>
                                <option value="Eletrotecnia">ELETROTECNIA E ELETRÓNICA (EE)</option>
                                <option value="Informática de Gestão">INFORMATICA DE GESTÃO (IG)</option>
                                <option value="Mecanotecnia">MECANOTECNIA (MEC)</option>
                            </select>
                        </div>

                        <div class="form-lab">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <button type="submit" name="enviar">Enviar</button>
                    </form>
                </div>
            </main>
        </div>
    </body>
</html>