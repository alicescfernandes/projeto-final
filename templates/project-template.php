<!DOCTYPE html>
<html class="project-page">
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
    <meta property="og:site_name" content="David Walsh Blog"/>
  </head>
  <body>
    <?php
    require_once('./php/db-constants.php');
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $projeto = $urlStrings[2];
    $tabela = 'projetos';
    $query = "SELECT * FROM $tabela WHERE uri='$projeto'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    ?>
    <input type="checkbox" id="menu-show">
    <div class="site-container"><?php require_once('./includes/_sidebar.php') ?>
      <div class="main-content">
        <div class="ui-component slideshow slideshow-medium panel-shadow">
          <div class="slide-container">
            <?php
             //SLIDES :)
             $queryParaSlides = "SELECT * FROM media WHERE projeto_uri='".$row['uri']."'";
             $resultadoDosSlides = $conn->query($queryParaSlides);
             $slideHTML = '';
             $slideControllerHTML = '';
             $dataSlide = 1;
             foreach($resultadoDosSlides as $mediaSource){
               $slideHTML .="<div class=\"slide\" style=\"background-image:url(http://".$host . "/" ."media/".$mediaSource['src']."@1900.jpg)\" data-slide=\"".$dataSlide."\"> </div>";
               $slideControllerHTML.= "<li class=\"slider-control\" data-slide=\"".$dataSlide."\"></li>";
               //echo($mediaSource['src']);
               $dataSlide+=1;
             }

             echo($slideHTML);

              ?>
          </div>
          <div class="ui-component slide-controller">
            <ul>
              <?php  echo($slideControllerHTML);?>
            </ul>
          </div>
        </div>
        <div class="panel-container">


          <div class="panel panel-noshadow panel-fullwidth align-center panel-title panel-nobackground">
            <h3><?php echo($row['nome']) ?></h3>
            <p><i><?php echo($row['summary-line']) ?></i></p>
          </div>
          <div class="panel">
            <?php echo($row['descricao']) ?></div>
          <div class="panel">

            <?php

            $tags = explode(",", $row['tags']);
            $tagsHTML = "";
            foreach($tags as $tag){
              $tagsHTML.="<a class=\"tag\" href=\"/portfolio/".str_replace(" ", "", $tag)."\">
              <p>".str_replace("-", " ", $tag)."</p>
             </a>";
            }
            echo($tagsHTML);

             ?>
          </div>
          <div class="panel panel-noshadow panel-nobackground align-center">

            <?php
                $externalURlsHTML = '';
            if($row['external-urls']){
            $projetoURI = $row['uri'];
            $queryURL = "SELECT `github`, `codepen` FROM `external-urls` WHERE `projeto_uri`='$projetoURI'";

            $resultForUrl = $conn->query($queryURL);
            while($row = $resultForUrl->fetch_assoc()){
              $icon = '';

              foreach($row as $key=>$value){

                if($value){
                if($key != 'github'){
                  $icon = 'icon-network';
                }else{
                  $icon = 'social-'.$key;
                }
                $externalURlsHTML.="<a id=\"btn1\" class=\"ui-compoment btn btn-simple align-center\" href='$value' id=\"animation\">
                  <div class=\"button-circle-animation\"></div><i class=\"$icon\">
                  </i>Vê me no ".ucfirst($key)."</a>";
              }
              }
            }
            }

            echo($externalURlsHTML);
          ?>



            </div>
          <!--<div class="panel panel-sharer align-center">
            <div class="row">
              <div class="col100">
                <h5>Quantos likes pode este projeto ter</h5>
              </div>
            </div>
            <div class="row">
              <div class="col100">
                <p class="stats"><i class="icon-eye"></i>230</p>
                <p class="stats"><i class="icon-thumbs-up"></i>230</p>
                <p class="stats"><i class="icon-share"></i>230</p>
              </div>
            </div>
          </div>-->
        </div><?php require_once('./includes/_footer.php') ?>
      </div>
    </div>
  </body>
</html>
