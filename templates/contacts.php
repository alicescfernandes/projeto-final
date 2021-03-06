

<!DOCTYPE html>
<html class="contacts">
  <head>
<?php include_once('./includes/_header.php')
  $metaImage = "http://".$host . "/" ."media/unicuidar-03@1280.jpg";
?>


 <title>Contactos | Alice Fernandes - Web Development & Design</title>


<meta name="robots" content="index, follow">
<meta name="twitter:card" content="Precisas de algum developer para o teu projeto" />
<?php /*<meta name="twitter:site" content="@nytimesbits" />
<meta name="twitter:creator" content="@AliceFernandes" /> */?>
<meta property="og:title" content="Contactos | Alice Fernandes - Web Development & Design" />
<meta property="og:description" content="Precisas de algum developer para o teu projeto, conctacta-me" />
<meta property="og:image" content="<?php echo($metaImage)?>" />

  </head>
  <body>
    <input type="checkbox" id="menu-show">
    <div class="site-container"><!--include _includes/_sidebar.jade-->
<?php include_once('./includes/_sidebar.php') ?>
      <div class="main-content">
        <?php include_once('./templates/_audio.php') ?>

        <div class="ui-component slideshow slideshow-medium panel-shadow">
          <div class="slide-container">
            <div class="slide" style="background-image: url(&quot;http://<?php echo($host) ?>/media/unicuidar-03@1900.jpg&quot;); "> </div>
          </div>
        </div>
        <div class="panel-container">
          <div class="panel panel-noshadow panel-fullwidth align-center panel-title panel-nobackground">
            <h3>Contactos</h3>
            <p><i>A melhor maneira de quebrar o gelo :)</i></p>
          </div>
            <?php
            $mailSent = 0;
            $mail = '';
            $test = 1;
            if(isset($_POST['nome'])){
            $email = '1996fernandes@gmail.com';
            $passwordDoMail = 'dkgqppmkigpzewnu';
            $SERVIDOR = 'smtp.gmail.com';
            $PROTOCOLO  = 'tls';
            $PORTA = 587;

            include('./mail/class.phpmailer.php');
            include('./mail/class.smtp.php');

            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->Host = $SERVIDOR;
            $mail->Port = $PORTA;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = $PROTOCOLO;
            $mail->Username = $email;
            $mail->Password = $passwordDoMail;
            $mail->setFrom($_POST['email'],$_POST['nome']);
            $mail->Subject = "Nova Mensagem - ".$_POST['subject'];
            $mail->IsHTML(true);
            $mail->Body = "<p>Recebeste um novo pedido de contacto de ".$_POST['nome']."</p>
                           <p>O email é ".$_POST['email']."</p>
                           <br>
                           <p>".$_POST['mensagem']."</p>";
            $mail->addAddress($email); //o mail que recebe a mensagem
              if(!$mail->send()){
                  echo($mail->ErrorInfo);
                }else{
                  $mailSent = 1;
                }

          }

            if(!$mailSent){
            ?>


            <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" >
              <div class="panel panel-contacts">



              <div class="row col30">
              <div class="form-row">
                <label for="nome">Nome:</label>
                <input placeholder="Nome próprio e apelido."  type="text" id="nome" name="nome" required>
              </div>
              <div class="form-row">
                <label for="email">Correio electrónico:</label>
                <input placeholder="O teu mail." type="email" id="email" name="email" required>
              </div>
              </div>
              <div class="row col70">
               <div class="form-row">
                 <label for="subject">Título da mensagem:</label>
                 <input  type="text" id="subject" name="subject" required>
               </div>
               <div class="form-row">
                <label for="mensagem">Mensagem: </label>
                <textarea placeholder="Diz-me em que te posso ajudar :)" id="mensagem" name="mensagem" required minlength="10" maxlength="230"></textarea>
              </div>
              </div>

                </div><!--include _includes/_footer.jade-->
              <button class="ui-compoment btn btn-simple" type="sumbit"><i class="icon-paper-plane"></i>Enviar<div class="button-circle-animation"></div></button>
              <button class="ui-compoment btn btn-simple" type="reset"><i class="icon-cycle"></i>Apagar dados</button>

          </form>

        <?php }else{


          ?>
            <div class="panel panel-contacts align-center">
              <i class="icon-emoji-happy"></i><h3>Email enviado com sucesso!</h3><p>Responderei o mais rápido possível.</p>
            </div>
         <?php }?>
       </div>
        <?php include_once('./includes/_footer.php') ?>
      </div>

        </div>
    </div>
  </body>
</html>
