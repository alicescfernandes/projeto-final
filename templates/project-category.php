<!DOCTYPE html>
<html class="project-categories">
  <head><?php require_once('./includes/_header.php') ?></head>
  <body>
    <input type="checkbox" id="menu-show">
    <div class="site-container"><?php require_once('./includes/_sidebar.php') ?>
      <div class="main-content">
        <div class="ui-component slideshow slideshow-medium panel-shadow">
          <div class="slide-container">
            <div class="slide" style="background-image:url(<?php echo("http://".$host . "/" ."img/slide1-dummy@1900.jpg") ?>)"; data-slide="1"></div>
            <div class="slide" style="background-image:url(<?php echo("http://".$host . "/" ."img/slide2-dummy@1900.jpg") ?>)"; data-slide="2"></div>
            <div class="slide" style="background-image:url(<?php echo("http://".$host . "/" ."img/slide3-dummy@1900.jpg") ?>)"; data-slide="3"></div>
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
            <h3>o meu portfólio</h3>
            <p> <i>Just another random subtitle </i></p>
          </div>
          
        
        
         <?php 
       
          require_once('./php/db-constants.php');
          $tag = $urlStrings[2];
          $tabela = 'projetos';
          $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

          $query = "SELECT * FROM  $tabela  WHERE  `tags` LIKE  '%$tag%'";

          if($conn->query($query)){
            $result = $conn->query($query);
            while($row = $result->fetch_assoc()){

              $nome =$row['nome'];
              $tags = explode(",", $row['tags']);
              $tagsHTML = "";
              foreach($tags as $tag){
                $tagsHTML.="<a class=\"tag\" href=\"/projetos/".str_replace(" ", "", $tag)."\">
                <p>".str_replace("-", " ", $tag)."</p>
               </a>";
              }

              $resultHTML = "<div class=\"panel panel-small\"><a class=\"panel-link\" href=\"#\"></a>
                             <div class=\"panel-image\"></div>
                                <h3>$nome</h3>
                              <div class=\"panel-small-bottom\">$tagsHTML</div>
                              </div>";

            echo($resultHTML);
            }
          }
          $conn->close();
         ?>
        </div><?php require_once('./includes/_footer.php') ?>
      </div>
    </div>
  </body>
</html>