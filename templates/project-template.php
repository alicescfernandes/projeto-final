<!DOCTYPE html>
<html class="project-page">
  <head><?php require_once('./includes/_header.php') ?></head>
  <body>
    <input type="checkbox" id="menu-show">
    <div class="site-container"><?php require_once('./includes/_sidebar.php') ?>
      <div class="main-content">
        <div class="ui-component slideshow slideshow-medium panel-shadow">
          <div class="slide-container">
            <div class="slide" style="background-image:url(<?php echo("http://".$host . "/" ."img/slide1-dummy@1900.jpg") ?>);" data-slide="1"></div>
            <div class="slide" style="background-image:url(<?php echo("http://".$host . "/" ."img/slide2-dummy@1900.jpg") ?>);" data-slide="2"></div>
            <div class="slide" style="background-image:url(<?php echo("http://".$host . "/" ."img/slide3-dummy@1900.jpg") ?>);" data-slide="3"></div>
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

          <?php
          require_once('./php/db-constants.php');
          $projeto = $urlStrings[2];
          $tabela = 'projetos';
          $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
          $query = "SELECT * FROM $tabela WHERE uri='$projeto'";
          $result = $conn->query($query);
          $row = $result->fetch_assoc();
           ?>
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
