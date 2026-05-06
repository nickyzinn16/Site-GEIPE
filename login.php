<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Login - GEIPE</title>
        <link rel="icon" type="image/png" href="./resources/images/logo-geipe.png">
        <link rel="stylesheet" href="./styles/login.css">
        <script src="https://kit.fontawesome.com/35842701b4.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="caixaLogin">
            <h2>Entre na plataforma do GEIPE</h2>
            
            <form id="loginForm">
                <div class="campo">
                    <label>Utilizador:</label>
                    <input type="text" placeholder="Nome do utilizador" required>
                </div>

                <div class="campo">
                    <label>Senha:</label>
                    <input type="password" placeholder="Senha do utilizador" required>
                </div>

                <button type="submit" class="btn-entrar">Iniciar Sessão</button>
            </form>
            <p><a href="cadastrar.html">Não Tenho Conta</a></p>
        </div>
        
        <script>
            const caixaLogin = document.querySelector('.caixaLogin');
            const form = document.getElementById('loginForm');
            
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