<!DOCTYPE html>
<html class="project-categories">
  <head><?php require_once('./includes/_header.php') ?>
    <?php

    require_once('./php/db-constants.php');
    $tag = $urlStrings[2];
    $tabela = 'projetos';
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    $slideHTML = '';
    $slideControllerHTML = '';
    $dataSlide = 1;

    $queryParaSlides = "SELECT * FROM `media` WHERE `tipo`='image'";

    if($tag){
         $queryParaSlides.="AND projeto_uri = (SELECT uri FROM `projetos` WHERE tags LIKE '%$tag%' LIMIT 1)";
    }else{
       $queryParaSlides.= "AND projeto_uri NOT LIKE '%fotografia%' ORDER BY rand() LIMIT 3";
    }

    $resultadoDosSlides = $conn->query($queryParaSlides);
    foreach($resultadoDosSlides as $mediaSource){
      $metaImage = "http://".$host . "/" ."media/".$mediaSource['src']."@1280.".$mediaSource['ext']."";
      $slideHTML .="<a rel=\"portfolio\" href=\"http://".$host . "/" ."media/".$mediaSource['src']."@1900.".$mediaSource['ext']."\" class=\"slide fancybox\" style=\"background-image:url(http://".$host . "/" ."media/".$mediaSource['src']."@1900.".$mediaSource['ext'].")\" data-slide=\"".$dataSlide."\"> </a>";
      $slideControllerHTML.= "<li class=\"slider-control\" data-slide=\"".$dataSlide."\"></li>";
      $dataSlide+=1;
    }

    ?>
<title>Projetos em <?php if ($urlStrings[2]) echo("de " . rawurldecode(ucwords(str_replace("-", " ", $urlStrings[2])))) ?> | Alice Fernandes - Web Development & Design</title>

<meta name="robots" content="index, follow">

<meta name="twitter:card" content="Oi, estás a ver projetos da categoria <?php echo(rawurldecode(ucfirst(str_replace("-", " ", $urlStrings[2])))) ?>. Se vires algum que gostas, recomeda aos teus amigos." />
<!--<meta name="twitter:site" content="@nytimesbits" />
<meta name="twitter:creator" content="@nickbilton" />-->
<meta property="og:title" content="Portfolio | Alice Fernandes - Web Development & Design" />
<meta property="og:description" content="Oi, estás a ver projetos da categoria <?php echo(rawurldecode(ucfirst(str_replace("-", " ", $urlStrings[2])), 'UTF-8')) ?>. Se vires algum que gostas, recomeda aos teus amigos." />
<meta property="og:image" content="<?php echo($metaImage) ?>" />
  <body>
    <input type="checkbox" id="menu-show">
    <div class="site-container"><?php require_once('./includes/_sidebar.php')   ?>
      <div class="main-content">
        <div class="ui-component slideshow slideshow-medium panel-shadow">
          <div class="slide-container">
              <?php     echo($slideHTML); ?>

          </div>
          <div class="ui-component slide-controller">
            <ul>
              <?php  echo($slideControllerHTML);?>
            </ul>
          </div>
        </div>
        <div class="panel-container">
          <div class="panel panel-noshadow panel-fullwidth align-center panel-title panel-nobackground">
            <h3>o meu portfólio</h3>
            <p> <i>Just another random subtitle </i></p>
          </div>



         <?php

         $query = "SELECT * FROM  $tabela  WHERE  `tags` LIKE  '%$tag%'";
          if($conn->query($query)){
            $result = $conn->query($query);
            while($row = $result->fetch_assoc()){

              $nome =$row['nome'];
              $tags = explode(",", $row['tags']);
              $tagsHTML = "";
              foreach($tags as $tag){
                $tagsHTML.="<a class=\"tag\" href=\"/portfolio/".htmlentities(str_replace(" ", "", $tag))."\">
                <p>".rawurldecode(str_replace("-", " ", $tag))."</p>
               </a>";
              }


              //Query for media;
             $queryImages = "SELECT * FROM media WHERE projeto_uri='".$row['uri']."' AND `tipo`='image' ORDER BY RAND() LIMIT 1 ";
             $resultImages = $conn->query($queryImages);
             $media = $resultImages->fetch_assoc();


              $resultHTML = "<div class=\"panel panel-small\"><a style=\"background-image:url(http://$host/media/".$media['src']."@1280.".$media["ext"].")\" class=\"panel-image panel-link\" href=\"/projeto/".$row['uri']."\"> <h3>".mb_convert_encoding($nome, 'UTF-8')."</h3></a>


                              <div class=\"panel-small-bottom\">".$tagsHTML."</div>
                              </div>";

            echo($resultHTML);
            }
          }else{

          }
          $conn->close();
         ?>
        </div><?php require_once('./includes/_footer.php') ?>
      </div>
    </div>
  </body>
</html>
