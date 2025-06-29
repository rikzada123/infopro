<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INFOPRO</title>
  <link rel="icon" type="image/x-icon" href="./imagens/logo.ico">
  <link rel="stylesheet" href="style.css?v=1.0">
  
</head>
<body>

  <div id="background"></div>

  <header>
  <div class="container">
    <img src="./logo.png" alt="Logo INFOPRO" class="logo">
    <div class="titulo">
      <h1>INFOPRO</h1>
      <h3>Segurança da Informação</h3>
    </div>
    <nav class="menu">
      <ul>
        <li><a href="#inicio">Matéria</a></li>
        <li><a href="#banco">Banco de Questões</a></li>
        <li><a href="logout.php">Sair</a></li>
      </ul>
    </nav>
  </div>
</header>

  <section>
    <section id="inicio">
    <div class="card">
    <h2>Segurança da Informação: Protegendo Seus Dados no Mundo Digital</h2>
    <p>
      A Segurança da Informação é o conjunto de práticas e tecnologias usadas para proteger dados importantes contra acessos não autorizados, alterações indevidas ou perda. O objetivo principal da segurança da informação é garantir três coisas fundamentais:
    <h2>Princípios Básicos da Segurança da Informação</h2>
    <ul>
      <li><strong>Confidencialidade:</strong> Apenas pessoas autorizadas podem acessar os dados.</li>
      <li><strong>Integridade:</strong> As informações devem permanecer corretas e sem alterações indevidas.</li>
      <li><strong>Disponibilidade:</strong> Os dados devem estar acessíveis sempre que forem necessários.</li>
    </ul>
    <p>Essa combinação de objetivos é conhecida como o Triângulo da Segurança da Informação ou pela sigla CIA (Confidencialidade, Integridade e Disponibilidade).</p>
  
    <h2>O que é Phishing?</h2>
    <p>O phishing é uma técnica muito usada por criminosos virtuais para enganar as pessoas e roubar informações pessoais, como senhas, número de cartões de crédito ou dados bancários. Os golpistas geralmente enviam e-mails, mensagens de texto ou criam sites falsos que imitam instituições conhecidas (bancos, redes sociais, lojas virtuais) para fazer a vítima fornecer informações confidenciais achando que está em um ambiente seguro.</p>
    <p><strong>Exemplo:</strong> Um e-mail dizendo que sua conta bancária foi bloqueada, pedindo para você clicar em um link e digitar sua senha.</p>
    <h2>O que são Dados Sensíveis?</h2>
    <p>Dados sensíveis são informações pessoais que, se caírem nas mãos erradas, podem causar prejuízos, discriminação ou danos à privacidade de alguém. Segundo a Lei Geral de Proteção de Dados (LGPD), exemplos de dados sensíveis incluem:</p>
    <ul>
      <li>Número do CPF</li>
      <li>Informações de saúde</li>
      <li>Religião</li>
      <li>Orientação sexual</li>
      <li>Opiniões políticas</li>
    </ul>
    <p>Já informações como nome de animais de estimação, cores favoritas ou e-mails genéricos não são considerados dados sensíveis.</p>

    <h2>Perigos das Redes Wi-Fi Públicas</h2>
    <p>As redes Wi-Fi públicas, como aquelas encontradas em praças, restaurantes ou aeroportos, são muito práticas, mas também perigosas. Por serem abertas e pouco seguras, elas permitem que criminosos virtuais interceptem os dados que você está enviando ou recebendo.</p>
    <p>Se você acessar sua conta bancária ou redes sociais usando um Wi-Fi público sem proteção, alguém pode roubar seus dados, como senhas, fotos ou até informações bancárias.</p>
    <p>O principal risco de usar uma rede Wi-Fi pública sem proteção é o roubo de dados por terceiros.</p>

    <h2>O que é Criptografia?</h2>
    <p>A criptografia é uma técnica que transforma informações normais em códigos incompreensíveis para proteger os dados contra acessos indevidos. Apenas quem possui a chave ou senha correta consegue "descriptografar" e entender a informação.</p>
    <p><strong>Ela é usada, por exemplo, para proteger:</strong></p>
    <ul>
      <li>Conversas por aplicativos de mensagens</li>
      <li>Arquivos enviados pela internet</li>
      <li>Dados armazenados em servidores ou computadores</li>
    </ul>
    <p>Outras ferramentas importantes na segurança da informação incluem:</p>
    <ul>
      <li><strong>Firewall: </strong>Controla o tráfego de uma rede e bloqueia acessos não autorizados.</li>
      <li><strong>Antivírus: </strong>Detecta e remove vírus e outros tipos de malware.</li>
      <li><strong>Backup: </strong>Faz cópias de segurança dos dados para evitar perdas.</li>
    </ul>

    <h2>O que é Malware?</h2>
    <p>   Malware é a abreviação de "malicious software", que significa software malicioso. São programas criados com o objetivo de invadir, danificar ou roubar informações de computadores e redes.</p>
    <p>   Existem vários tipos de malware, como:</p>
    <ul>
      <li><strong>Vírus: </strong>Programas que se espalham e danificam arquivos.</li>
      <li><strong>Trojan (Cavalo de Troia): </strong>Programa que parece inofensivo, mas carrega funções maliciosas escondidas.</li>
      <li><strong>Spyware: </strong>Espiona o usuário, coletando dados pessoais.</li>
      <li><strong>Ransomware: </strong>Bloqueia o computador ou arquivos, exigindo pagamento para liberar o acesso.</li>
    </ul>

    <h2>O que é um Firewall?</h2>
    <p>   O firewall é como uma "barreira de proteção" entre seu computador (ou rede) e a internet. Ele monitora e controla o tráfego de dados, permitindo apenas conexões seguras e bloqueando tentativas de acesso não autorizadas.</p>
    <p>   Exemplos de funções de um firewall:</p>
    <ul>
      <li>Impedir invasões externas</li>
      <li>Bloquear programas maliciosos</li>
      <li>Controlar quais aplicativos podem acessar a internet</li>
    </ul>

    <h2>O que é um Ataque de Força Bruta?</h2>
    <p>   O ataque de força bruta é um método usado por hackers para descobrir senhas tentando todas as combinações possíveis até encontrar a correta.</p>
    <p>   Por exemplo: Se a sua senha for "1234", o criminoso pode usar um programa que testa automaticamente todas as combinações de números de 0000 até 9999 até acertar.</p>
    <p>   Por isso, é importante usar senhas fortes, com letras, números e símbolos.</p>

    <h2>O que é Autenticação de Dois Fatores (2FA)?</h2>
    <p>   A autenticação de dois fatores (2FA) é uma camada extra de segurança usada em logins de sites e aplicativos. Ela exige que o usuário confirme a identidade de duas formas diferentes, geralmente:</p>
    <ul>
      <li><strong>1. </strong>Algo que a pessoa sabe: como uma senha.</li>
      <li><strong>2. </strong>Algo que a pessoa tem: como um código enviado por SMS ou um aplicativo autenticador.</li>
    </ul>
    <p>   Assim, mesmo que alguém descubra sua senha, não conseguirá acessar sua conta sem o segundo fator de autenticação.</p>
    </div>
</section>

<section id="banco">

    <div class="card">

            <h1>Banco de  Questões</h1>
          <form id="quizForm">
            <h3>1. O que é phishing?</h3>
            <label><input type="radio" name="q1" value="a"> A) Um ataque para interromper redes Wi-Fi.</label><br>
            <label><input type="radio" name="q1" value="b"> B) Um vírus que se espalha automaticamente.</label><br>
            <label><input type="radio" name="q1" value="c"> C) Uma técnica para roubar dados se passando por instituições confiáveis.</label><br>
            <label><input type="radio" name="q1" value="d"> D)  Um método de encriptar arquivos por segurança.</label><br>
            <p id="resposta1"></p>
            <h3>2. Qual das opções representa um dado sensível?</h3>
            <label><input type="radio" name="q2" value="a"> A) Nome do cachorro.</label><br>
            <label><input type="radio" name="q2" value="b"> B) Endereço de e-mail genérico.</label><br>
            <label><input type="radio" name="q2" value="c"> C) Número do CPF.</label><br>
            <label><input type="radio" name="q2" value="d"> D) Cor favorita.</label><br>
            <p id="resposta2"></p>
            <h3>3. Qual é o principal risco de utilizar redes Wi-Fi públicas sem proteção?</h3>
            <label><input type="radio" name="q3" value="a"> A) Baixa velocidade da conexão.</label><br>
            <label><input type="radio" name="q3" value="b"> B) Ser desconectado com frequência.</label><br>
            <label><input type="radio" name="q3" value="c"> C) Roubo de dados por terceiros.</label><br>
            <label><input type="radio" name="q3" value="d"> D) Consumo elevado da bateria.</label><br>
            <p id="resposta3"></p>
            <h3>4. Qual dessas ferramentas é usada para proteger dados através de codificação?</h3>
            <label><input type="radio" name="q4" value="a"> A) Firewall.</label><br>
            <label><input type="radio" name="q4" value="b"> B) Antivírus.</label><br>
            <label><input type="radio" name="q4" value="c"> C) Backup.</label><br>
            <label><input type="radio" name="q4" value="d"> D) Criptografia.</label><br>
            <p id="resposta4"></p>
            <h3>5. Qual o principal objetivo da segurança da informação?</h3>
            <label><input type="radio" name="q5" value="a"> A) Garantir a confidencialidade, integridade e disponibilidade dos dados.</label><br>
            <label><input type="radio" name="q5" value="b"> B) Espalhar antivírus gratuitamente.</label><br>
            <label><input type="radio" name="q5" value="c"> C) Controlar redes sociais.</label><br>
            <label><input type="radio" name="q5" value="d"> D) Ganhar dinheiro na internet.</label><br>
            <p id="resposta5"></p>
            <h3>6. O que representa a sigla "CIA" na segurança da informação?</h3>
            <label><input type="radio" name="q6" value="a"> A) Central de Inteligência de Acesso.</label><br>
            <label><input type="radio" name="q6" value="b"> B) Confidencialidade, Integridade e Disponibilidade.</label><br>
            <label><input type="radio" name="q6" value="c"> C) Controle, Identidade e Autenticação.</label><br>
            <label><input type="radio" name="q6" value="d"> D) Comunicação, Internet e Autorização.</label><br>
            <p id="resposta6"></p>
            <h3>7. O que é um malware?</h3>
            <label><input type="radio" name="q7" value="a"> A) Um programa de edição de imagens.</label><br>
            <label><input type="radio" name="q7" value="b"> B) Software malicioso criado para prejudicar ou invadir sistemas. </label><br>
            <label><input type="radio" name="q7" value="c"> C) Um tipo de backup em nuvem.</label><br>
            <label><input type="radio" name="q7" value="d"> D) Um protocolo de segurança.</label><br>
            <p id="resposta7"></p>
            <h3>8. Qual é a função de um firewall?</h3>
            <label><input type="radio" name="q8" value="a"> A) Criar documentos criptografados.</label><br>
            <label><input type="radio" name="q8" value="b"> B) Proteger contra spam.</label><br>
            <label><input type="radio" name="q8" value="c"> C) Permitir downloads mais rápidos.</label><br>
            <label><input type="radio" name="q8" value="d"> D) Controlar o tráfego e bloquear acessos não autorizados.</label><br>
            <p id="resposta8"></p>
            <h3>9. O que é um ataque de força bruta?</h3>
            <label><input type="radio" name="q9" value="a"> A) Enviar vírus por pen drive.</label><br>
            <label><input type="radio" name="q9" value="b"> B) Tentar todas as combinações possíveis de senha até encontrar a correta.</label><br>
            <label><input type="radio" name="q9" value="c"> C) Hackear por meio de links falsos.</label><br>
            <label><input type="radio" name="q9" value="d"> D) Bloquear o acesso ao sistema remotamente.</label><br>
            <p id="resposta9"></p>
            <h3>10. O que significa autenticação de dois fatores (2FA)?</h3>
            <label><input type="radio" name="q10" value="a"> A) Acesso permitido para duas pessoas ao mesmo tempo.</label><br>
            <label><input type="radio" name="q10" value="b"> B) Login usando dois dispositivos diferentes.</label><br>
            <label><input type="radio" name="q10" value="c"> C) Verificação com dois métodos para aumentar a segurança. </label><br>
            <label><input type="radio" name="q10" value="d"> D) Login com dois navegadores simultâneos.</label><br>
            <p id="resposta10"></p>
            <br>
            <button type="button" onclick="verificarRespostas()">Verificar Respostas</button>

    </div>
    </section>
  </section>

<div id="resultadoFinalBox" class="oculto">
  <div class="resultado-content">
    <h2>Resultado Final</h2>
    <p id="resultadoTexto"></p>
    <button onclick="reiniciarQuiz()">Tentar Novamente</button>
    <button onclick="fecharResultado()">Fechar</button>
  </div>
</div>
  <footer>
    <p>&copy; 2025 INFOPRO</p>
  </footer>
<script src="quiz.js" defer></script>
</body>
</html>
