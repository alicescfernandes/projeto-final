<!DOCTYPE html>
<html class="project-categories">
  <head><?php require_once('./includes/_header.php') ?>

<title>Fotografias | Alice Fernandes - Web Development & Design</title>

<?php
require_once('./php/db-constants.php');
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

 $query = "SELECT * FROM `media` WHERE projeto_uri='fotografia'";
 $result = $conn->query($query);

 $resultHTML = "";
 $randImages = [];
 $randImagesDescription = [];
 $a = 0;

 while($row = $result->fetch_object()){
   $randImages[$a] = $row->src;
   $randImagesDescription[$a] = $row->title;
   $a++;

   $resultHTML.='<div class="panel panel-small panel-foto "><a rel="galeria" class="panel-link fancybox" href="http://'.$host.'/media/'.$row->src.'@1280.jpg" style="background-image:url(http://'.$host.'/media/'.$row->src.'@1280.jpg);" title="'.$row->nome.'"></a>
                      <h3>'.$row->nome.'</h3>
                   </div>';
 }
  $maxImages = 3;
  $slideHTML = '';
  $randArray = range(0,count($randImages)-1);
  shuffle($randArray);
  $randArray = array_slice($randArray, 0, $maxImages);
   for($i = 0; $i!=$maxImages; $i++){
     $string = $randImages[$randArray[$i]];
     $metaImage = "http://".$host . "/" ."media/".$string."@1280.jpg";
     $description = $randImagesDescription[$randArray[$i]];
     $slideHTML.="<div class=\"slide\" style=\"background-image:url(http://".$host . "/" ."media/".$string."@1900.jpg)\" data-slide=\"".($i+1)."\"><div class=\"title\"><p>$description</p></div></div>";
   }

 ?>

<meta name="robots" content="index, follow">

<meta name="twitter:card" content="summary" />
<!--<meta name="twitter:site" content="@nytimesbits" />
<meta name="twitter:creator" content="@nickbilton" />-->
<meta property="og:title" content="title" />
<meta property="og:description" content="summary" />
<meta property="og:image" content="http://graphics8.nytimes.com/images/2011/12/08/technology/bits-newtwitter/bits-newtwitter-tmagArticle.jpg" />

  </head>
  <body>
    <input type="checkbox" id="menu-show">
    <div class="site-container"><?php require_once('./includes/_sidebar.php') ?>
      <div class="main-content">
        <div class="ui-component slideshow slideshow-medium panel-shadow">
          <div class="slide-container"><?php echo($slideHTML)?>
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
            <h3>Fotografias</h3>
            <p> <i>*snap* *snap*</i></p>
          </div>

          <?php

          echo($resultHTML);

           ?>
        </div><?php require_once('./includes/_footer.php') ?>
      </div>
    </div>
  </body>
</html>
