<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="stylesheet.css" media="screen" title="no title"
    charset="utf-8">
    <script type="text/javascript" src="servicos.js">
    </script>
    <title>Cia. Solut - Serviços</title>
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
  <div id="pictures" class="servicos"></div>
  <div class="article">
    <h2>Solut Express <br><span>(atendimento virtual com entrega em até 72h)
    </span></h2>
  </div>
  <div class="article">
    <article class="serious">
      <h4>Cálculo de Tabela Nutricional</h4>
      <button class="plus" id="tabNutOnOff" type="button" name="button">
        +
      </button><br>
      <p class="tabNutOnOff">Tenha a tranquilidade de ter sua tabela nutricional
        calculada e elaborada por profissionais qualificados.</p>
      <h4>Elaboração de Rótulo</h4>
      <button class="plus" id="rotOnOff" type="button" name="button">
        +
      </button><br>
      <p class="rotOnOff">Precisa de mais que uma tabela nutricional? A Solut
        elabora além de sua tabela nutricional todos os dizeres legais pertinentes
        à rotulagem do seu produto.</p>
      <h4>Balanceamento de Receita</h4>
      <button class="plus" id="recipeOnOff" type="button" name="button">
        +
      </button><br>
      <p class="recipeOnOff">Problemas com sua receita são normais e os ajustes
        necessários nem sempre tão simples. Conte com a experiência da Solut
        para dar um toque de mestre para suas receitas.</p>
      <p class="recipeOnOff">Você pode utilizar o balanceamento de receitas para:</p>
      <ul class="recipeOnOff">
        <li>Redução do custo de formulação</li>
        <li>Aumento de Shelf-life (validade)</li>
        <li>Adequação de receita à escala de produção</li>
      </ul>
    </article>
  </div>
  <div class="article">
    <h2>Solut Bakery <br><span>(atendimento presencial com consultores
      especializados)</span></h2>
  </div>
  <div class="article">
    <article class="serious">
      <h4>Desenvolvimento de Controles de Produção</h4>
      <button class="plus" id="controlOnOff" type="button" name="button">
        +
      </button><br>
      <p class="controlOnOff">Controlar a produção é o que há de mais essencial
        para um negócio de sucesso. A Solut desenvolve em conjunto com sua equipe
        os controles de produção, estoques, custos, entre outros, mais adequados
        à sua realidade.</p>
      <h4>Implantação do setor de Pré-pesagem</h4>
      <button class="plus" id="prepOnOff" type="button" name="button">
        +
      </button><br>
      <p class="prepOnOff">Otimize o seu processo de produção garantindo
        a padronização e o controle de suas receitas.
      </p>
      <h4>Desenvolvimento de Novos Produtos</h4>
      <button class="plus" id="prodDevOnOff" type="button" name="button">
        +
      </button><br>
      <p class="prodDevOnOff">
        A Solut te ajuda a aumentar o seu Mix de produtos de forma segura e
        rentável.
      </p>
      <h4>Desenvolvimento do Layout de Fabricação</h4>
      <button class="plus" id="layoutOnOff" type="button" name="button">
        +
      </button><br>
      <p class="layoutOnOff">
        Se está reformando ou montando uma nova unidade, conte com a Solut para
        desenvolver um layout de fabricação eficiente e de acordo com as normas e
        legislações vigentes.
      </p>
      <h4>Técnicas de Congelamento</h4>
      <button class="plus" id="freezeOnOff" type="button" name="button">
        +
      </button><br>
      <p class="freezeOnOff">
        Aumente a produtividade do seu negócio e evite o desabastecimento de
        suas lojas aplicando técnicas de congelamento ao seu processo.
      </p>
      <h4>Avaliação de Capacidade Instalada e de Produção</h4>
      <button class="plus" id="capacityOnOff" type="button" name="button">
        +
      </button><br>
      <p class="capacityOnOff">
        O seu negócio precisa crescer, mas a sua infraestrutura pode não estar
        preparada. A Solut te ajuda a avaliar se a capacidade de sua produção é
        adequada aos seus planos e, caso necessário, elabora o projeto de
        upgrade das instalações.
      </p>
      <h4>Avaliação de Mix de Produtos e Exposição em loja</h4>
      <button class="plus" id="mixOnOff" type="button" name="button">
        +
      </button><br>
      <p class="mixOnOff">
        Descubra novas formas de encantar o seu cliente e aumentar o Tíquete
        Médio de sua loja.
      </p>
      <h4>Cliente Oculto</h4>
      <button class="plus" id="clientOnOff" type="button" name="button">
        +
      </button><br>
      <p class="clientOnOff">
        Você não pode estar presente em todas as suas lojas durante todo o tempo.
        Se você se interessa em saber a visão do seu cliente sobre seu negócio,
        fale conosco. Iremos à sua loja fazer uma avaliação completa dos seus
        serviços.
      </p>
    </article>
  </div>
  <div class="article">
    <h2>Solut Process <br><span>(atendimento presencial com foco na melhoria de
      processos)</span></h2>
  </div>
  <div class="article">
    <article class="serious">
      <h4>Análise, Mapeamento e Documentação de Processos</h4>
      <button class="plus" id="bpmOnOff" type="button" name="button">
        +
      </button><br>
      <p class="bpmOnOff">
        Garanta a retenção do conhecimento de sua equipe através de Processos
        padronizados e de fácil entendimento. A Solut analisa, desenha e
        documenta o seu processo de acordo com os mais reconhecidos padrões.
      </p>
      <h4>Gerenciamento de Projetos de Melhoria de Processos</h4>
      <button class="plus" id="gpOnOff" type="button" name="button">
        +
      </button><br>
      <p class="gpOnOff">
        Seu processo sofre com o desperdício? Conte com a Solut para rastrear e
        tratar as cauzas raízes de maneira eficiente.
      </p>
    </article>
  </div>
  <div class="article">
    <h2>Personal Solut<br><span>(atendimento personalizado e sob medida para o
      seu negócio, consulte nossa equipe.)</span></h2>
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
