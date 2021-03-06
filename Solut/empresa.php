<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="stylesheet.css" media="screen" title="no title" charset="utf-8">
    <!--<script type="text/javascript" src="consultoria.js">-->
    </script>
    <title>Cia. Solut - Empresa</title>
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
  <div id="pictures" class="empresa"></div>
  <div class="article">
    <h2>A Solut tem a cara do seu negócio</h2>
  </div>
  <div class="article">
    <article class="serious">
      <p>Se você quer começar um negócio e precisa de ajuda ou é um empresário
        experiente que necessita de soluções rápidas para os problemas do dia a
        dia, a Solut quer te ajudar.</p>
      <p>Temos uma proposta inovadora na prestação de serviços de consultoria
        para serviços de alimentação e indústrias. Serviços ágeis e sem complicação
        desenhados especialmente para o seu negócio e executados por consultores
        experientes.</p>
      <p>Solicite uma proposta.</p>
    </article>
  </div>
  <div class="article">
    <article class="serious">
      <h4>Nossas Especialidades</h4>
      <ul>
        <li>Panificação, Confeitaria e Salgados</li>
        <li>Serviços de Alimentação</li>
        <li>Fábricas e Centrais de Produção de Alimentos</li>
        <li>Produtos de Panificação e refeições congeladas</li>
      </ul>
    </article>
  </div>
  <div class="article">
    <article class="serious">
      <h4>Conheça quem vai te atender</h4>
      <table>
        <tr>
          <td><img class="profile" src="imagens/julia.jpg" alt="" /></td>
          <td><p><span>Júlia Leitão</span> é Engenheira de Alimentos com MBA
            em Gastronomia e especialização em Transformações Químicas pela
            UNICAMP. É certificada no curso "Liderança 360º" ministrado por
            Abílio Diniz na Fundação Getúlio Vargas e também em técnicas de
            panificação avançada e fermentação natural pela Escola Levain.
            Seus 12 anos de consultoria foram desenvolvidos
            atendendo mais de 300 empresas de varejo na área de panificação,
            confeitaria
            e salgados em 20 estados brasileiros. Tem grande experiência em
            Técnicas de Congelamento destes produtos. Por oito anos atuou como
            Gerente Industrial e de Produção no setor.</p></td>
        </tr>
        <tr>
          <td><img class="profile" src="imagens/LinkedIn 2.jpg" alt="" /></td>
          <td><p><span>Bruno Moraleida</span> é Engenheiro de Alimentos e
            Especialista em Gerenciamento de Projetos pela Fundação Getúlio
            Vargas. Desenvolveu nos últimos 7
            anos diversos projetos em indústrias de alimentos e bebidas para
            melhoria e implantação de processos. Trabalhou como Gerente de
            Produção no ramo de panificação e massas congeladas e como
            coordenador de projetos em Indústria de Bebidas Multinacional até
            se juntar à Solut no ano de 2016.</p>
          </td>
        </tr>
      </table>
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
