<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Candidatura - GEIPE</title>
        <link rel="stylesheet" href="./styles/candidatura.css"> 
    </head>
    <body>
        <div>
            <main>
                <div class="form">
                    <h2>Formulário ao Candidato</h2>
                    <form>
                        <div class="form-lab">
                            <label for="nome">Nome Completo</label>
                            <input type="text" id="nome" name="nome">
                        </div>

                        <div class="form-lab">
                            <label for="area">Área Escolar</label>
                            <select type="text" id="area" name="area">
                                <option value="">Selecione uma area</option>
                                <option value="asibd">ASIBD</option>
                                <option value="artes graficas">Artes Gráficas</option>
                                <option value="construcao">Construção Civil</option>
                                <option value="contabilidade">Contabilidade</option>
                                <option value="eletricidade">Eletrotecnia</option>
                                <option value="inforgestao">Informática de Gestão</option>
                                <option value="mecanica">Mecanotecnia</option>
                            </select>
                        </div>

                        <div class="form-lab">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email">
                        </div>

                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </main>
        </div>
    </body>
</html>