<?php
$titulo = "Estágios - GEIPE";
$css = "/geip/styles/cliente/estagios.css";
$paginaAtiva = "estagios";
?>

<?php include '../php/cliente/header.php'; ?>
<?php include '../php/conn.php'; ?>

<section class="banner">
    <div class="main-banner">
        <h1>ESTÁGIOS DO GEIPE EICM-GDC - O SEU FUTURO</h1>
        <p>Explora o módulo formativo em contacto real de trabalho.</p>
        <div>
            <a href="/geip/candidatura.php" class="candidatura">Candidatar á um Estágio</a>
        </div>
    </div>
</section>

<br>
<section class="etapas">
    <h2>ETAPAS PARA A REALIZAÇÃO DO ESTÁGIO CURRICULAR</h2>
    <div class="cards">
        <div class="card">
            <h3>Sensibilização dos alunos e encarregados de educação sobre a importância do Módulo Formativo em Contexto Real de Trabalho (MFCRT) para obtenção da dupla certificação</h3>
            <p>
                1º Momento: Socialização dos critérios de seleção junto dos alunos do 12º ano ;<br>
                2º Momento: Socialização dos critérios de seleção junto dos Encarregados de Educação (EE);<br>
            </p>
            <h3>A. Critérios de seleção para a realização do MFCRT</h3>
            <p>
                - Ter aprovação em todas as disciplinas ou módulos do plano de estudos do curso técnico-profissional;<br>
                - Média obtida no 12º ano : Consideração da média geral do aluno no curso, oferecendo uma visão consolidada do seu desempenho académico;<br>
                - Adequação ao Perfil da Empresa/Instituição: Avaliação da compatibilidade dos valores, interesses e expectativas do candidato com a cultura organizacional da empresa.<br>
                - Comportamento escolar e postura cívica;<br>
                - Participação em atividades extracurriculares, projetos, voluntariado, intercâmbios, extensão etc.
            </p>
        </div>

        <div class="card">
            <h3>B. Preparação e Realização do Estágio (MFCRT)</h3>
            <p>Preparação:</p>
            <p>3º Momento: Ações de formação promovidas pelo GEIPE EICM em articulação com o GOEP para o desenvolvimento de competências sociais e profissionais facilitadoras da inserção profissional;</p>
            <p>4º Momento: Atendimento de forma individual e personalizada dos utentes do gabinete, em articulação com o GOEP utilizando as ferramentas de empregabilidade, nomeadamente elaboração do CV, cartas de apresentação e portefólios;</p>
            <p>5º Momento: Manifestação de interesse na realização do estágio;</p>
            <p>6º Momento: Definição do local de estágio para cada estudante de acordo com a mobilização de vagas junto às empresas;</p>
            <p>7º Momento: Elaboração dos Processos individuais do Estágio Curricular:</p>
            <ul>
                <li>Regulamento do estágio</li>
                <li>Guia de apresentação</li>
                <li>Termo de compromisso</li>
                <li>Plano individual do estágio</li>
                <li>Ficha semanal de registo de atividades do MFCRT</li>
                <li>Ficha de registo de assiduidade e pontualidade do MFCRT</li>
                <li>Ficha de critérios de avaliação do MFCRT</li>
                <li>Ficha de avaliação do MFCRT – atribuição quantitativa por parâmetros</li>
                <li>Ficha de avaliação do MFCRT (atribuição quantitativa)</li>
                <li>Modelo do relatório do estágio</li>
            </ul>
            <p><strong>Documentos da responsabilidade do aluno:</strong></p>
            <ul>
                <li>Regulamento do estágio</li>
                <li>Termo de compromisso</li>
                <li>Ficha semanal de registo de atividades do MFCRT</li>
                <li>Modelo do relatório do estágio</li>
            </ul>
        </div>

        <div class="card">
            <h3>C. Realização do Estágio</h3>
            <p>
                MFCRT de duração mínima de 360 horas;<br>
                Orientação e acompanhamento feitos pelo Tutor; (entidade acolhedora) e pelo supervisor (entidade formadora);<br>
                Elaboração do relatório ao longo do MFCRT.
            </p>
        </div>

        <div class="card">
            <h3>D. Finalização</h3>
            <p>
                Entrega do relatório 15 dias após o término do estágio<br>
                Avaliação do relatório feita pelo supervisor<br>
                EA: 70% (nota atribuída pelo Tutor)<br>
                RE: 30% (nota atribuída pelo Supervisor)<br>
                Não Remunerado
            </p>
        </div>

        <div class="card">
            <h3>E. Emissão da Dupla Certificação</h3>
            <p>Emissão da Dupla Certificação pelos serviços administrativos da EICM–GDC mediante solicitação.</p>
        </div>
    </div>
</section>

<section class="oportunidades">
    <h2>OPORTUNIDADES DE ESTÁGIO</h2>
    <div class="card">
        <?php
            $resultado = mysqli_query($conn, "SELECT * FROM estagios");
            while($estagio = mysqli_fetch_assoc($resultado)):
        ?>
            <h3><?= $estagio['curso'] ?></h3>
            <h3 class="vagas">Vagas Disponíveis: <?= $estagio['vagas'] ?></h3>
            <p><?= $estagio['areas'] ?></p>
            <br><br>
        <?php endwhile; ?>
    </div>
</section>

<?php include '../php/cliente/footer.php'; ?>
<button id="btn-topo">↑</button>
<script src="../scripts/botao.js"></script>