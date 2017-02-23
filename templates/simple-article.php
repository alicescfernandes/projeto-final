<!DOCTYPE html>
<html class="simple-page">
  <head><!--include _includes/_header.jade-->
<?php include_once('./includes/_header.php') ?>
<?php

  require_once('./php/db-constants.php');
  $tabela = 'media';
  $maxImages = 3;
  $resultHTML = '';
  $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  $query = 'SELECT * FROM `media` ORDER BY RAND() LIMIT 3';
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
 /* while($array = $result->fetch_object()){
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


 //ARTICLE content
 $queryContent = "SELECT * FROM `articles` WHERE `uri`='$urlStrings[1]'";
 $resultContent =  $conn->query($queryContent);
 $rowContent = $resultContent->fetch_object();
?>
<title><?php echo($rowContent->title) ?> | Alice Fernandes - Web Development & Design</title>

  <meta name="robots" content="index, follow">
  <meta name="twitter:card" content="Oi. Chamo-me Alice Fernandes e sou uma webdeveloper de 20 anos. Gosto de fazer de implementar projetos desde a raiz, passando por toda as fases de desenvolvimento. Já trabalhei na área e agora trabalho em regime de freelancer." />
  <!--<meta name="twitter:site" content="@nytimesbits" />
  <meta name="twitter:creator" content="@nickbilton" />-->
  <meta property="og:title" content="Sobre Mim | Alice Fernandes - Web Development & Design" />
  <meta property="og:description" content="Oi. Chamo-me Alice Fernandes e sou uma webdeveloper de 20 anos. Gosto de fazer de implementar projetos desde a raiz, passando por toda as fases de desenvolvimento. Já trabalhei na área e agora trabalho em regime de freelancer." />
  <meta property="og:image" content="<?php echo($metaImage) ?>" />
  </head>
  <body>
    <input type="checkbox" id="menu-show">
    <div class="site-container"><!--include _includes/_sidebar.jade-->
<?php include_once('./includes/_sidebar.php') ?>
      <div class="main-content">
        <div class="ui-component slideshow slideshow-medium panel-shadow">
          <div class="slide-container">
            <div class="slide" style="background-image: url(&quot;http:///<?php echo($host)?>/media/unicuidar-03@1900.jpg&quot;);"> </div>
          </div>
        </div>
        <div class="panel-container">
          <div class="panel panel-noshadow panel-fullwidth align-center panel-title panel-nobackground">
            <h3><?php echo(mb_convert_encoding($rowContent->title,'UTF-8')) ?> </h3>
            <p><i><?php echo(mb_convert_encoding($rowContent->subtitle,'UTF-8')) ?> </i></p>
          </div>
          <div class="panel panel-simple">
            <?php echo(mb_convert_encoding($rowContent->article,'UTF-8')) ?>
            </div><!--include _includes/_footer.jade-->
        </div><?php include_once('./includes/_footer.php') ?>
      </div>
    </div>
  </body>
</html>
