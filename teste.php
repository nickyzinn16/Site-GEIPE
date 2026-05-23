<?php
    // password_hash() converte uma senha normal numa sequência de caracteres encriptada (hash).
    // Isso garante que as senhas nunca sejam guardadas em texto simples na base de dados.
    // Mesmo que alguém aceda à base de dados, não consegue ler as senhas originais.
    // https://www.php.net/manual/pt_BR/function.password-hash.php 

    echo password_hash('admin1', PASSWORD_DEFAULT) . '<br>';
    echo password_hash('admin2', PASSWORD_DEFAULT) . '<br>';
    echo password_hash('admin3', PASSWORD_DEFAULT) . '<br>';
    echo password_hash('superadmin123', PASSWORD_DEFAULT) . '<br>';
?>