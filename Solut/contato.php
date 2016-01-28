<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="stylesheet.css" media="screen" title="no title" charset="utf-8">
    <!--<script type="text/javascript" src="consultoria.js">-->
    </script>
    <title>Cia. Solut - Contato</title>
  </head>
  <body>
    <a href="home.html"><h1><span>-{- Solut -}-</span></h1></a>
    <pre><h1> ------------------  </h1><h2>cia.</h2></pre>
    <h2>Soluções para o seu negócio</h2>
  <div class="navigation">
    <ul>
      <li class="navbar"><a href="home.html">Home</a></li>
      <li class="navbar"><a href="empresa.html">Empresa</a></li>
      <li class="navbar"><a href="servicos.html">Nossos Serviços</a></li>
      <li class="navbar"><a href="treinamentos.html">Treinamentos</a></li>
      <li class="navbar"><a href="clientes.html">Clientes</a></li>
      <li class="navbar"><a href="contato.php">Contato</a></li>
    </ul>
  </div>
  <div id="pictures" class="contact"></div>
  <div class="article">
    <h2>Fale Conosco</h2>
  </div>
  <?php
  $nameErr = $mailErr = $msgErr = $phoneErr = $dddErr = "";
  $name = $mail = $phone = $company = $msg = $ddd = "";
  $noErr = true;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['nome'])) {
      $nameErr = "Por favor informe seu nome";
      $noErr = False;
    } else {
      $name = test_input($_POST['nome']);
      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $nameErr = "Somente serão permitidas letras e espaços em seu nome";
        $noErr = False;
      }
    }

    if (empty($_POST['mail'])) {
      $mailErr = "Por favor informe o seu e-mail";
      $noErr = False;
    } else {
      $mail = test_input($_POST['mail']);
      if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $mailErr = "Por favor insira um e-mail válido";
        $noErr = False;
      }
    }

    if (empty($_POST['ddd'])) {
      $ddd = "";
    } else {
      $ddd = test_input($_POST['ddd']);
      if (!preg_match("/^\d{2,4}$/",$ddd)) {
        $dddErr = "Apenas números serão permitidos";
        $noErr = False;
      }
    }

    if (empty($_POST['phone'])) {
      $phone = "";
    } else {
      $phone = test_input($_POST['phone']);
      if (!preg_match("/^\d{8,9}$/",$phone)) {
        $phoneErr = "Apenas números serão permitidos.
        Por favor, confirme seu telefone";
        $noErr = False;
      }
    }

    if (empty($_POST['empresa'])) {
      $company = "";
    } else {
      $company = test_input($_POST['empresa']);
    }

    if (empty($_POST['msg'])) {
      $msgErr = "Por favor, deixe a sua mensagem";
      $noErr = False;
    } else {
      $msg = test_input($_POST['msg']);
    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if ($noErr && isset($_POST['enviar'])) {
    $to = "bruno_moraleida@yahoo.com.br";
    $subject = "Contato Solut";
    $message = "Nome: " . $_POST['nome'] . "\r\n\r\n";
    $message .= "E-mail: " . $_POST['mail'] . "\r\n\r\n";
    $message .= "Telefone: (" . $_POST['ddd'] . ") " . $_POST['phone'] . "\r\n\r\n";
    $message .= "Empresa: " . $_POST['empresa'] . "\r\n\r\n";
    $message .= "Mensagem: " . $_POST['msg'];
    $success = mail($to, $subject, $message);
  }

  if(isset($success) &&  $success) { ?>
    <p>
      Obrigado, sua mensagem foi enviada!
    </p>
    <?php } else if(isset($success) &&  !$success) { ?>
    <p>
      Desculpe, houve um problema ao enviar a sua mensagem! Tente novamente
      mais tarde ou entre em contato pelos telefones abaixo.
    </p>
    <?php } ?>

  <div class="article">
    <form class="serious" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
      method="post">
      Nome:<span class="error">* <?php echo $nameErr;?></span><br>
      <input type="text" name="nome" value=""><br><br>
      E-mail:<span class="error">* <?php echo $mailErr;?></span><br>
      <input type="text" name="mail" value=""><br><br>
      Telefone comercial com DDD:<span class="error"> <?php echo $phoneErr;?>
      </span><br>
      <input id="ddd" type="text" name="ddd" value=""> -
      <input type="text" name="phone" value=""><br><br>
      Empresa:<br>
      <input type="text" name="empresa" value=""><br><br>
      Mensagem:<span class="error">* <?php echo $msgErr;?></span><br>
      <textarea name="msg" rows="8" cols="40"></textarea><br><br>
      <button type="submit" name="enviar">Enviar</button>
    </form>
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
