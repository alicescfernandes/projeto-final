<!DOCTYPE html>
<html class="index">
  <head><?php require_once('./includes/_header.php') ?>
    <?php
    require_once('./php/db-constants.php');
    /*$tabela = 'media';
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
      $metaImage = "http://".$host . "/" ."media/".$string."@1900.jpg";
      $description = $randImagesDescription[$randArray[$i]];
      $resultHTML.="<div class=\"slide\" style=\"background-image:url(http://".$host . "/" ."media/".$string."@1900.jpg)\" data-slide=\"".($i+1)."\"><div class=\"title\"><p>$description</p></div></div>";
    }*/
     ?>
<title>Página Inicial | Alice Fernandes - Web Developemnt & Design</title>

<meta name="robots" content="index, follow">

<meta name="twitter:card" content="Bem vindos ao meu website. Aqui vao encontrar uma seleção dos melhores trabalhos em diferentes áreas. Se tiverem alguma ideia para um projeto e precisarem de um developer, contactem-me." />
<!--<meta name="twitter:site" content="@nytimesbits" />
<meta name="twitter:creator" content="@nickbilton" />-->
<meta property="og:title" content="Página Inicial | Alice Fernandes - Web Developemnt & Design" />
<meta property="og:description" content="Bem vindos ao meu website. Aqui vao encontrar uma seleção dos melhores trabalhos em diferentes áreas. Se tiverem alguma ideia para um projeto e precisarem de um developer, contactem-me." />
<meta property="og:image" content="<?php echo($metaImage) ?>" />
<meta name="description" content="Bem vindos ao meu website. Aqui vao encontrar uma seleção dos melhores trabalhos em diferentes áreas. Se tiverem alguma ideia para um projeto e precisarem de um developer, contactem-me.">

  </head>
  <body>
    <input type="checkbox" id="menu-show">
    <div class="site-container"><?php require_once('./includes/_sidebar.php') ?>
      <div class="main-content">
        <header><span class="letring">
            <p>Alice Fernandes</p>
            <p>Design & Development</p></span></header>
        <!--<div class="container">
          <div class="title">
            <p>design</p>
          </div>
        </div>-->
        <div class="ui-component slideshow slideshow-fullpage slideshow-absolute-pos">
          <div class="slide-container">
            <?php echo($resultHTML); ?>
            </div>
          <div class="ui-component slide-controller">
            <ul>
              <li class="slider-control" data-slide="1"> </li>
              <li class="slider-control" data-slide="2"></li>
              <li class="slider-control" data-slide="3"></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
