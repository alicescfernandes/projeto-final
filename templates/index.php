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
        <!--<div class="container">
          <div class="title">
            <p>design</p>
          </div>
        </div>-->
        <div class="ui-component slideshow slideshow-fullpage slideshow-absolute-pos">
          <div class="slide-container">
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
              $resultHTML.="<div class=\"slide\" style=\"background-image:url(http://".$host . "/" ."media/".$string."@1900.jpg)\" data-slide=\"".($i+1)."\"><div class=\"title\"><p>$description</p></div></div>";
            }
              echo($resultHTML);
             ?>
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
