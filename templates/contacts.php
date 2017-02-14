<!DOCTYPE html>
<html class="contacts">
  <head><!--include _includes/_header.jade-->
<?php include_once('./includes/_header.php') ?>

 <title></title>

<meta name="description" content="Free Web tutorials">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta name="author" content="John Doe">
<meta name="robots" content="index, follow"> 

<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@nytimesbits" />
<meta name="twitter:creator" content="@nickbilton" />
<meta property="og:url" content="http://bits.blogs.nytimes.com/2011/12/08/a-twitter-for-my-sister/" />
<meta property="og:title" content="A Twitter for My Sister" />
<meta property="og:description" content="In the early days, Twitter grew so quickly that it was almost impossible to add new features because engineers spent their time trying to keep the rocket ship from stalling." />
<meta property="og:image" content="http://graphics8.nytimes.com/images/2011/12/08/technology/bits-newtwitter/bits-newtwitter-tmagArticle.jpg" />
<meta property="og:type" content="blog"/>
<meta property="og:site_name" content="David Walsh Blog"/>

  </head>
  <body>
    <input type="checkbox" id="menu-show">
    <div class="site-container"><!--include _includes/_sidebar.jade-->
<?php include_once('./includes/_sidebar.php') ?>
      <div class="main-content">
        <div class="ui-component slideshow slideshow-medium panel-shadow">
          <div class="slide-container">
            <div class="slide" style="background-image:url(img/slide1-dummy@1900.jpg);" data-slide="1"></div>
            <div class="slide" style="background-image:url(img/slide2-dummy@1900.jpg);" data-slide="2"></div>
            <div class="slide" style="background-image:url(img/slide3-dummy@1900.jpg);" data-slide="3"></div>
          </div>
          <div class="ui-component slide-controller">
            <ul>
              <li class="slider-control" data-slide="1"></li>
              <li class="slider-control" data-slide="2"></li>
              <li class="slider-control" data-slide="3"></li>
            </ul>
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
            $mail->Subject = "Novo Pedido de contacto";
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
                <label for="nome">Nome</label>
                <input placeholder="O teu nome, óbvio"  type="text" id="nome" name="nome" required>
              </div>
              <div class="form-row">
                <label for="email">Endereço de Contacto</label>
                <input placeholder="O teu mail, para eu te contactar de volta" type="email" id="email" name="email" required>
              </div>
              </div>
              <div class="row col70">
              <div class="form-row">
                <label for="mensagem">Mensagem: </label>
                <textarea placeholder="Sem spam por favor :)" id="mensagem" name="mensagem" required minlength="10" maxlength="230"></textarea>
              </div>
              </div>

                </div><!--include _includes/_footer.jade-->
              <button class="ui-compoment btn btn-simple" type="sumbit"><i class="icon-paper-plane"></i>Enviar<div class="button-circle-animation"></div></button>
              <button class="ui-compoment btn btn-simple" type="reset"><i class="icon-cycle"></i>Apagar dados</button>

          </form>

        <?php }else{


          ?>
            <div class="panel panel-contacts align-center">
              <i class="icon-thumbs-up"></i><h3>E-mail enviado com sucesso</h3><p>Agora é só esperar que eu te responda :) </p>
            </div>
         <?php }?>
       </div>
        <?php include_once('./includes/_footer.php') ?>
      </div>

        </div>




    </div>
  </body>
</html>
