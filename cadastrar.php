<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Cadastrar - GEIPE</title>
        <link rel="icon" type="image/png" href="./resources/images/logo-geipe.png">
        <link rel="stylesheet" href="./styles/cadastrar.css">
        <script src="https://kit.fontawesome.com/35842701b4.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="caixaCadastrar">
            <h2>Cadastre-se na plataforma do GEIPE</h2>
            
            <form id="RegistForm">
                <div class="campo">
                    <label>Utilizador:</label>
                    <input type="text" placeholder="Defina um nome de utilizador" required>
                </div>

                <div class="campo">
                    <label>Senha:</label>
                    <input type="password" placeholder="Defina uma senha" required>
                </div>

                <button type="submit" class="btn-entrar">Criar conta</button>
            </form>
        </div>
        
        <script>
            const caixaCadrastar = document.querySelector('.caixaCadrastar');
            const form = document.getElementById('RegistForm');

            form.addEventListener('submit', function(event) {
                const inputs = form.querySelectorAll('input');
                let vazio = false;
                inputs.forEach(input => { if(!input.value) vazio = true; });
                
                if (vazio) {
                    event.preventDefault();
                    alert("Dados não preenchidos completamente");
                }
            });
        </script>
    </body>
</html>