<!DOCTYPE html>
<html class="project-categories">
  <head><?php require_once('./includes/_header.php'); $request =  explode("/", $_SERVER['REQUEST_URI']); ?>

<title><?PHP switch($request[1]){
  case 'animacao':
    echo('Animação');
    break;
  default:
    echo('Fotografia');
} ?> | Alice Fernandes - Web Development & Design</title>

<?php
require_once('./php/db-constants.php');
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

 $query = "SELECT * FROM `media` WHERE projeto_uri='".$request[1]."' ORDER BY RAND()";
 $result = $conn->query($query);

 $resultHTML = "";
 $randImages = [];
 $randImagesDescription = [];
 $randImagesEXT = [];
 $a = 0;

 while($row = $result->fetch_object()){
   $randImages[$a] = $row->src;
   $randImagesDescription[$a] = $row->nome;
   $randImagesEXT[$a] = $row->ext;
   $a++;
   //Create panels
   $resultHTML.='<div class="panel panel-small panel-foto "><a rel="galeria" class="panel-link fancybox" href="http://'.$host.'/media/'.$row->src.'@1280.'.$row->ext.'" style="background-image:url(http://'.$host.'/media/'.$row->src.'@1280.'.$row->ext.');" title="'.$row->nome.'">
                 <h3>'.mb_convert_encoding($row->nome,'UTF-8').'</h3>
                 </a></div>';
 }
  $maxImages = 3;
 $slideHTML = '';
 $slideControllerHTML = '';
 /* $randArray = range(0,count($randImages)-1);
  shuffle($randArray);
  $randArray = array_slice($randArray, 0, $maxImages);
   for($i = 0; $i!=$maxImages; $i++){)
      $Sliderow = $result->fetch_object()
     $string = $randImages[$randArray[$i]];
     $metaImage = "http://".$host . "/" ."media/".$string."@1280.jpg";
     $description = $randImagesDescription[$randArray[$i]];
     $slideHTML.="<a href=\"http://".$host . "/" ."media/".$string."@1900.".$randImagesEXT[$randArray[$i]]."\" rel=\"galeria\"class=\"slide fancybox\" title=\"$description\" style=\"background-image:url(http://".$host . "/" ."media/".$string."@1900.".$randImagesEXT[$randArray[$i]].")\" data-slide=\"".($i+1)."\"></a>";
   }*/

   $result2 = $conn->query($query);

   for($i = 0; $i!=$maxImages; $i++){
     $slideRow = $result2->fetch_object();
     if($slideRow->cover){
     $src = $slideRow->src;
     $metaImage = "http://".$host . "/" ."media/".$src."@1280.".$slideRow->ext."";
     $description = $slideRow->nome;
     $slideHTML.="<a href=\"http://".$host . "/" ."media/".$src."@1900.".$slideRow->ext."\" rel=\"galeria\"class=\"slide fancybox\" title=\"$description\" style=\"background-image:url(http://".$host . "/" ."media/".$src."@1900.".$slideRow->ext.")\" data-slide=\"".($i+1)."\"></a>";
     $slideControllerHTML.='<li class="slider-control" data-slide="'.($i+1).'"></li>';
     }
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
              <?php echo($slideControllerHTML)?>
            </ul>
          </div>
        </div>
        <div class="panel-container">
          <div class="panel panel-noshadow panel-fullwidth align-center panel-title panel-nobackground">
            <h3><?PHP switch($request[1]){
              case 'animacao':
                echo('Animação');
                break;
              default:
                echo('Fotografia');
            } ?></h3>
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
