<!DOCTYPE html>
<html class="simple-page">
  <head><!--include _includes/_header.jade-->
<?php include_once('./includes/_header.php') ?>
<?php

  require_once('./php/db-constants.php');
  $tabela = 'media';
  $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  $query = 'SELECT * FROM `media` GROUP BY title';
  $result = $conn->query($query);
  $randImages = [];
  $randImagesDescription = [];

  $i = 0;
  while($array = $result->fetch_object()){
    $randImages[$i] = $array->src;
    $randImagesDescription[$i] = $array->title;
    $i++;
  }
  $maxImages = 3;
  $resultHTML = '';
  $randArray = range(0,count($randImages)-1);
  shuffle($randArray);
  $randArray = array_slice($randArray, 0, $maxImages);

  for($i = 0; $i!=$maxImages;$i++){
    $string = $randImages[$randArray[$i]];
    $description = $randImagesDescription[$randArray[$i]];
    $metaImage = "http://".$host . "/" ."media/".$string."@1900.jpg";
    $resultHTML.="<div class=\"slide\" style=\"background-image:url(http://".$host . "/" ."media/".$string."@1900.jpg)\" data-slide=\"".($i+1)."\"><div class=\"title\"><p>$description</p></div></div>";
  }
?>
<title>Sobre Mim | Alice Fernandes - Web Developemnt & Design</title>

  <meta name="robots" content="index, follow">
  <meta name="twitter:card" content="Oi. Chamo-me Alice Fernandes e sou uma webdeveloper de 20 anos. Gosto de fazer de implementar projetos desde a raiz, passando por toda as fases de desenvolvimento. Já trabalhei na área e agora trabalho em regime de freelancer." />
  <!--<meta name="twitter:site" content="@nytimesbits" />
  <meta name="twitter:creator" content="@nickbilton" />-->
  <meta property="og:title" content="Sobre Mim | Alice Fernandes - Web Developemnt & Design" />
  <meta property="og:description" content="Oi. Chamo-me Alice Fernandes e sou uma webdeveloper de 20 anos. Gosto de fazer de implementar projetos desde a raiz, passando por toda as fases de desenvolvimento. Já trabalhei na área e agora trabalho em regime de freelancer." />
  <meta property="og:image" content="<?php $metaImage ?>" />
  </head>
  <body>
    <input type="checkbox" id="menu-show">
    <div class="site-container"><!--include _includes/_sidebar.jade-->
<?php include_once('./includes/_sidebar.php') ?>
      <div class="main-content">
        <div class="ui-component slideshow slideshow-medium panel-shadow">
          <div class="slide-container">
            <?php echo($resultHTML); ?>
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
            <h3>Sobre Mim</h3>
            <p><i>Alice Fernandes: Junior Javascript Wizard</i></p>
          </div>
          <div class="panel panel-simple">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur hendrerit purus, ut volutpat enim posuere a. Donec efficitur quam nec orci aliquam, ac fringilla ipsum vehicula. Praesent sagittis lacinia diam. Suspendisse fringilla varius diam, in rhoncus libero auctor ut. Aliquam sed justo lorem. Vivamus venenatis lacus ligula, faucibus aliquet enim malesuada at. Sed vel eros nunc. Donec erat risus, tincidunt vitae commodo vel, congue eget lectus.</p>
            <p>Praesent at nulla lacinia, condimentum diam eget, mattis libero. Nullam condimentum pretium posuere. In in luctus dui. Nullam ornare scelerisque nisl nec varius. Aliquam erat volutpat. Aenean accumsan vulputate maximus. Maecenas quam mauris, mattis at neque vel, imperdiet accumsan dui. Nullam et risus et mi fringilla volutpat at et mi. In gravida cursus massa id fermentum. Donec aliquam arcu nec risus tincidunt viverra. Aenean blandit faucibus condimentum.</p>
            <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur hendrerit purus, ut volutpat enim posuere a. Donec efficitur quam nec orci aliquam, ac fringilla ipsum vehicula. Praesent sagittis lacinia diam. Suspendisse fringilla varius diam, in rhoncus libero auctor ut. Aliquam sed justo lorem. Vivamus venenatis lacus ligula, faucibus aliquet enim malesuada at. Sed vel eros nunc. Donec erat risus, tincidunt vitae commodo vel, congue eget lectus.</p>
            <p>Praesent at nulla lacinia, condimentum diam eget, mattis libero. Nullam condimentum pretium posuere. In in luctus dui. Nullam ornare scelerisque nisl nec varius. Aliquam erat volutpat. Aenean accumsan vulputate maximus. Maecenas quam mauris, mattis at neque vel, imperdiet accumsan dui. Nullam et risus et mi fringilla volutpat at et mi. In gravida cursus massa id fermentum. Donec aliquam arcu nec risus tincidunt viverra. Aenean blandit faucibus condimentum.</p>
          </div><!--include _includes/_footer.jade-->
        </div><?php include_once('./includes/_footer.php') ?>
      </div>
    </div>
  </body>
</html>
