<!DOCTYPE html>
<html class="project-categories">
  <head><?php require_once('./includes/_header.php') ?>
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
    <meta property="og:site_name" content="David Walsh Blog"/></head>
  <body>
    <input type="checkbox" id="menu-show">
    <div class="site-container"><?php require_once('./includes/_sidebar.php')   ?>
      <div class="main-content">
        <div class="ui-component slideshow slideshow-medium panel-shadow">
          <div class="slide-container">
            <?php

            require_once('./php/db-constants.php');
            $tag = $urlStrings[2];
            $tabela = 'projetos';
            $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

            //SELECT * FROM `media` WHERE projeto_uri = (SELECT uri FROM `projetos` WHERE tags LIKE '%web-development%' LIMIT 1)

            $slideHTML = '';
            $slideControllerHTML = '';
            $dataSlide = 1;

            $queryParaSlides = "SELECT * FROM `media` WHERE projeto_uri = (SELECT uri FROM `projetos` WHERE tags LIKE '%$tag%' LIMIT 1)";
            $resultadoDosSlides = $conn->query($queryParaSlides);



            foreach($resultadoDosSlides as $mediaSource){
              $slideHTML .="<div class=\"slide\" style=\"background-image:url(http://".$host . "/" ."media/".$mediaSource['src']."@1900.jpg)\" data-slide=\"".$dataSlide."\"> </div>";
              $slideControllerHTML.= "<li class=\"slider-control\" data-slide=\"".$dataSlide."\"></li>";
              //echo($mediaSource['src']);
              $dataSlide+=1;
            }

            echo($slideHTML);

            ?>
           <!--<div class="slide" style="background-image:url(<?php// echo("http://".$host . "/" ."img/slide1-dummy@1900.jpg") ?>)"; data-slide="1"></div>
            <div class="slide" style="background-image:url(<?php //echo("http://".$host . "/" ."img/slide2-dummy@1900.jpg") ?>)"; data-slide="2"></div>
            <div class="slide" style="background-image:url(<?php //echo("http://".$host . "/" ."img/slide3-dummy@1900.jpg") ?>)"; data-slide="3"></div>-->
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
                $tagsHTML.="<a class=\"tag\" href=\"/portfolio/".str_replace(" ", "", $tag)."\">
                <p>".str_replace("-", " ", $tag)."</p>
               </a>";
              }


              //Query for media;


             $queryImages = "SELECT * FROM media WHERE projeto_uri='".$row['uri']."' LIMIT 1";
             $resultImages = $conn->query($queryImages);
             $media = $resultImages->fetch_assoc();


              $resultHTML = "<div class=\"panel panel-small\"><a class=\"panel-link\" href=\"/projeto/".$row['uri']."\"></a>
                             <div style=\"background-image:url(http://$host/media/".$media['src']."@1280.jpg)\" class=\"panel-image\"></div>
                                <h3>$nome</h3>
                              <div class=\"panel-small-bottom\">$tagsHTML</div>
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
