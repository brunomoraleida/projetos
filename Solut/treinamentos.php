<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="stylesheet.css" media="screen" title="no title"
    charset="utf-8">
    <script type="text/javascript" src="servicos.js">
    </script>
    <title>Cia. Solut - Treinamentos</title>
  </head>
  <body>
    <div class="news">
      Assine nossa Newsletter!
      <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        Nome:<br>
        <input type="text" name="nome2" value=""><br>
        E-mail:<br>
        <input type="text" name="mail2" value=""><br>
        <button id="receive" type="submit" name="receive">Quero receber!</button>
      </form>
      <?php if(isset($_POST['receive'])) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "news_sign";
        $nome = $_POST['nome2'];
        $mail = $_POST['mail2'];

        $dbname = new mysqli($servername, $username, $password, $dbname) or die();
        mysqli_query($dbname, "INSERT INTO registros(nome, mail)
        VALUES ('$nome', '$mail')");
      }
      ?>
    </div>
    <div class="header">
      <a href="home.html"><h1><span>-{- Solut -}-</span></h1></a>
      <pre><h1> ------------------  </h1><h2>cia.</h2></pre>
      <h2>Soluções para o seu negócio</h2>
    </div>
    <div>
  <div class="navigation">
    <ul>
      <li class="navbar"><a href="home.php">Home</a></li>
      <li class="navbar"><a href="empresa.php">Empresa</a></li>
      <li class="navbar"><a href="servicos.php">Nossos Serviços</a></li>
      <li class="navbar"><a href="treinamentos.php">Treinamentos</a></li>
      <li class="navbar"><a href="clientes.php">Clientes</a></li>
      <li class="navbar"><a href="contato.php">Contato</a></li>
    </ul>
  </div>
  <div id="pictures" class="trainning"></div>
  <div class="article">
    <h2>Solut Trainning<br><span>(treinamentos in-company para capacitar todos
      os níveis de sua empresa)</span></h2>
  </div>
  <div class="article">
    <article class="serious">
      <h4>Boas Práticas de Fabricação</h4>
      <button class="plus" id="bpfOnOff" type="button" name="button">
        +
      </button><br>
      <div class="bpfOnOff">
        <h5>Objetivo</h5>
        <p>Ensinar os princípios básicos das Boas Práticas de
          Fabricação a todos os níveis da empresa</p>
        <h5>Carga Horária</h5>
        <p> 16h (padrão) ou 8h (reciclagem)</p>
      </div>
      <h4>5S - Organização no ambiente de Trabalho</h4>
      <button class="plus" id="senseOnOff" type="button" name="button">
        +
      </button><br>
      <div class="senseOnOff">
        <h5>Objetivo</h5>
        <p>Ensinar os princípios dos 5 Sensos a todos os níveis da
        empresa</p>
        <h5>Carga Horária</h5>
        <p> 40h (padrão)</p>
      </div>
      <h4>Gestão de Indicadores</h4>
      <button class="plus" id="indOnOff" type="button" name="button">
        +
      </button><br>
      <div class="indOnOff">
        <h5>Objetivo</h5>
        <p>Ensinar as melhores práticas para identificação, construção e gestão
          de indicadores de performance (KPIs).</p>
        <h5>Carga Horária</h5>
        <p> 16h (padrão)</p>
      </div>
      <h4>Identificação e Tratamento do Desperdício</h4>
      <button class="plus" id="wasteOnOff" type="button" name="button">
        +
      </button><br>
      <div class="wasteOnOff">
        <h5>Objetivo</h5>
        <p>Ensinar técnicas e melhores práticas para identificar, tratar e,
          quando possível, eliminar os desperdícios de seu negócio.</p>
        <h5>Carga Horária</h5>
        <p> 40h (padrão)</p>
      </div>
    </article>
  </div>
  <div class="footer">
    <p>Fale conosco:</p>
    <img src="imagens/face.png" alt="" />
    <p>Facebook</p>
    <img src="imagens/e_mail.png" alt="" />
    <p>contato@solut.com.br</p>
    <img src="imagens/telefone.png" alt="" />
    <p>(11) 97458-9177 || (11) 98275-7379</p>
  </div>
  </body>
</html>
