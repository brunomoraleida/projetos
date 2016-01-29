<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="stylesheet.css" media="screen" title="no title"
     charset="utf-8">
    <script type="text/javascript" src="consultoria.js" /></script>
    <title>Cia. Solut</title>
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
      <ul>
        <li class="navbar"><a href="home.php">Home</a></li>
        <li class="navbar"><a href="empresa.php">Empresa</a></li>
        <li class="navbar"><a href="servicos.php">Nossos Serviços</a></li>
        <li class="navbar"><a href="treinamentos.php">Treinamentos</a></li>
        <li class="navbar"><a href="clientes.php">Clientes</a></li>
        <li class="navbar"><a href="contato.php">Contato</a></li>
      </ul>
    </div>
    <div id="pictures" class="bread"></div>
    <div class="article">
      <article>
      <h2>Ninguém tem um produto como o seu...</h2>
      <h3>A Solut tem a cara do seu negócio!</h3>
      <p>Navegue pelo menu e conheça nossos serviços e treinamentos</p>
      </article>
    </div>
    <div class="footer">
      <p>
        Fale conosco:
      </p>
      <img src="imagens/face.png" alt="" />
      <p>
        Facebook
      </p>
      <img src="imagens/e_mail.png" alt="" />
      <p>
        contato@solut.com.br
      </p>
      <img src="imagens/telefone.png" alt="" />
      <p>
        (11) 97458-9177 || (11) 98275-7379
      </p>
    </div>
  </body>
</html>
