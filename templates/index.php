<!DOCTYPE html>

<html class="index">
  <head><?php require_once('./includes/_header.php') ?>
<title></title>
    <meta name="description" content="Free Web tutorials">
 <meta name="keywords" content="HTML,CSS,XML,JavaScript">
 <meta name="author" content="John Doe">

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
