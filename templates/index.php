<!DOCTYPE html>
<html class="index">
  <head>
    <?php require_once('./includes/_header.php') ?>
    <?php
    require_once('./php/db-constants.php');
    $maxImages = 5;
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $query = "SELECT * FROM `media` GROUP BY title ORDER BY RAND() LIMIT $maxImages";
    $result = $conn->query($query);
    $resultHTML = '';

    $i = 0;
    while($row=$result->fetch_assoc()){
      $string = $row['src'];
      $metaImage = "http://".$host . "/" ."media/".$string."@1280.jpg";
      $description = $row['title'];
      $resultHTML.="<div class=\"slide\" style=\"background-image:url(http://".$host . "/" ."media/".$string."@1900.jpg)\" data-slide=\"".($i+1)."\"><div class=\"title\"><p>$description</p></div></div>";
      $i++;
    }
    //$randImages = [];
    //$randImagesDescription = [];
    /*
    while($array = $result->fetch_object()){
      $randImages[$i] = $array->src;
      $randImagesDescription[$i] = $array->title;
      $i++;
    }

   $randArray = range(0,count($randImages)-1);
   shuffle($randArray);
   $randArray = array_slice($randArray, 0, $maxImages);

    for($i = 0; $i!=$maxImages;$i++){
      $string = $randImages[$randArray[$i]];
      $metaImage = "http://".$host . "/" ."media/".$string."@1280.jpg";
      $description = $randImagesDescription[$randArray[$i]];
      $resultHTML.="<div class=\"slide\" style=\"background-image:url(http://".$host . "/" ."media/".$string."@1900.jpg)\" data-slide=\"".($i+1)."\"><div class=\"title\"><p>$description</p></div></div>";
    }*/

     ?>
<title>Página Inicial | Alice Fernandes - Web Development & Design</title>

<meta name="robots" content="index, follow"/>

<meta name="twitter:card" content="Bem vindos ao meu website. Aqui vao encontrar uma seleção dos melhores trabalhos em diferentes áreas. Se tiverem alguma ideia para um projeto e precisarem de um developer, contactem-me." />

<meta property="og:title" content="Página Inicial | Alice Fernandes - Web Development & Design" />
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
        <div class="ui-component slideshow slideshow-fullpage slideshow-absolute-pos">
          <div class="slide-container">
            <?php echo($resultHTML); ?>
            </div>
          <div class="ui-component slide-controller">
            <ul>
              <li class="slider-control" data-slide="1"> </li>
              <li class="slider-control" data-slide="2"></li>
              <li class="slider-control" data-slide="3"></li>
              <li class="slider-control" data-slide="4"></li>
              <li class="slider-control" data-slide="5"></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
