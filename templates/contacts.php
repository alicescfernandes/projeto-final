

<!DOCTYPE html>
<html class="contacts">
  <head><!--include _includes/_header.jade-->
<?php include_once('./includes/_header.php') ?>

<?php
/*
  require_once('./php/db-constants.php');
  $tabela = 'media';
  $maxImages = 3;
  $resultHTML = '';
  $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  $query = "SELECT * FROM `media` ORDER BY RAND() LIMIT 3";
  $result = $conn->query($query);
  #$randImages = [];
  #$randImagesDescription = [];


  $i = 0;
 while($row = $result->fetch_object()){
   $string = $row->src;
   $metaImage = "http://".$host . "/" ."media/".$string."@1280.jpg";
   $resultHTML .="<a rel=\"portfolio\" href=\"http://".$host . "/" ."media/".$row->src."@1900.jpg\" class=\"slide fancybox\" style=\"background-image:url(http://".$host . "/" ."media/".$row->src."@1900.jpg)\" data-slide=\"".($i+1)."\"> </a>";
   $i++;
 }

  /*while($array = $result->fetch_object()){
    $randImages[$i] = $array->src;
    $randImagesDescription[$i] = $array->title;
    $i++;
  }
  $randArray = range(0,count($randImages)-1);
  shuffle($randArray);
  $randArray = array_slice($randArray, 0, $maxImages);

  for($i = 0; $i!=$maxImages;$i++){
    $string = $randImages[$randArray[$i]];
    $description = $randImagesDescription[$randArray[$i]];
    $metaImage = "http://".$host . "/" ."media/".$string."@1280.jpg";
    $resultHTML.="<div class=\"slide\" style=\"background-image:url(http://".$host . "/" ."media/".$string."@1900.jpg)\" data-slide=\"".($i+1)."\"></div>";
  }*/
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
        <div class="ui-component slideshow slideshow-medium panel-shadow">
          <div class="slide-container">
            <div rel="portfolio" href="http://localhost/media/unicuidar-03@1900.jpg" class="slide" style="background-image: url(&quot;http://localhost/media/unicuidar-03@1900.jpg&quot;); width: 1366px;"> </div>
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
                 <label for="subject">Título da mensagem</label>
                 <input  type="text" id="subject" name="subject" required>
               </div>
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
