<!DOCTYPE html>

<html class="index">
  <head><?php require_once('./includes/_header.php') ?></head>
  <body>
    <input type="checkbox" id="menu-show">
    <div class="site-container"><?php require_once('./includes/_sidebar.php') ?>
      <div class="main-content">
        <header><span class="letring">
            <p>Alice Fernandes</p>
            <p>Design & Development</p></span></header>
        <div class="container">
          <div class="title">
            <p>design</p>
          </div>
        </div>
        <div class="ui-component slideshow slideshow-fullpage slideshow-absolute-pos">
          <div class="slide-container">
            <?php

            require_once('./php/db-constants.php');
            $tabela = 'media';
            $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

            $query = 'SELECT DISTINCT * FROM media';
            $result = $conn->query($query);
            $array = $result->fetch_assoc();
            // /var_dump($array);
            $maxImages = 3;
            $currentLoop = 0;
            $randImages = [];

            for($i = 0; $i!=$maxImages;$i++){
              $randImages[$i] = rand(1,2);
            }
            var_dump($randImages);


             ?>
            <div class="slide" style="background-image:url(<?php echo("http://".$host . "/" ."img/slide1-dummy@1900.jpg") ?>);" data-slide="1"></div>
            <div class="slide" style="background-image:url(<?php echo("http://".$host . "/" ."img/slide2-dummy@1900.jpg") ?>);" data-slide="2"></div>
            <div class="slide" style="background-image:url(<?php echo("http://".$host . "/" ."img/slide3-dummy@1900.jpg") ?>);" data-slide="3"></div>
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
