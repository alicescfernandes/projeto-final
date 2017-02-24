<!DOCTYPE html>
<html class="project-page">
  <head><?php require_once('./includes/_header.php') ?>
    <?php
    require_once('./php/db-constants.php');
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $projeto = $urlStrings[2];
    $tabela = 'projetos';
    $query = "SELECT * FROM $tabela WHERE uri='$projeto'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();

    $queryParaSlides = "SELECT * FROM media WHERE projeto_uri='".$row['uri']."'  AND `tipo`='image'";
    $resultadoDosSlides = $conn->query($queryParaSlides);
    $slideHTML = '';
    $slideControllerHTML = '';
    $dataSlide = 1;
    foreach($resultadoDosSlides as $mediaSource){
      $metaImage = "http://".$host . "/" ."media/".$mediaSource['src']."@1280.".$mediaSource['ext']."";

      $slideHTML .="<a data-fancybox=\"portfolio\" href=\"http://".$host . "/" ."media/".$mediaSource['src']."@1900.".$mediaSource['ext']."\" class=\"slide fancybox\" style=\"background-image:url(http://".$host . "/" ."media/".$mediaSource['src']."@1900.".$mediaSource['ext'].")\" data-slide=\"".$dataSlide."\"> </a>";
      $slideControllerHTML.= "<li class=\"slider-control\" data-slide=\"".$dataSlide."\"></li>";
      //echo($mediaSource['src']);
      $dataSlide+=1;
    }

    ?>
<title>Projeto <?php echo(mb_convert_encoding($row['nome'],'UTF-8'))?> | Alice Fernandes - Web Development & Design</title>

<meta name="robots" content="index, follow">
<meta name="twitter:card" content="Projeto <?php echo($row['nome']) ?> | Alice Fernandes - Web Development & Design" />
<!--<meta name="twitter:site" content="@nytimesbits" />
<meta name="twitter:creator" content="@nickbilton" />-->
<meta property="og:title" content="Projeto <?php echo($row['nome']) ?> | Alice Fernandes - Web Development & Design" />
<meta property="og:description" content="<?php echo($row['descricao']) ?>" />
<meta name="description" content="<?php echo($row['descricao']) ?>">

<meta property="og:image" content="<?php echo($metaImage) ?>" />

  </head>
  <body>

    <input type="checkbox" id="menu-show">
    <div class="site-container"><?php require_once('./includes/_sidebar.php') ?>
      <div class="main-content">
        <?php
        include '_audio.php';
        ?>
        <div class="ui-component slideshow slideshow-medium panel-shadow">
          <div class="slide-container">
            <?php
             //SLIDES :)
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
            <h3><?php echo(mb_convert_encoding($row['nome'], 'UTF-8')) ?></h3>
            <p><i><?php echo(mb_convert_encoding($row['summary-line'], 'UTF-8')) ?></i></p>
          </div>
          <div class="panel">
            <?php echo(mb_convert_encoding($row['descricao'], 'UTF-8')) ?>
          </div>

            <?php
              $queryParaVideo = "SELECT * FROM `media` WHERE `tipo`='video' AND `projeto_uri`='$projeto'";
              $resultVideo = $conn->query($queryParaVideo);
              if($resultVideo->num_rows != 0){

                $rowVideo = $resultVideo->fetch_object();
                $src = $rowVideo->src;
                $ext = $rowVideo->ext
              ?>
              <div class="panel">
                <div class="video video-js vjs-default-skin vjs-controls-enabled"><video  data-setup="{}" id="video" controls><source src="<?php echo("http://$host/media/$src.$ext")?>" type="video/mp4"></video></div>
              </div>
            <?php
          }
             ?>
          <div class="panel">

            <?php

            $tags = explode(",", $row['tags']);
            $tagsHTML = "";
            foreach($tags as $tag){
              $tagsHTML.="<a class=\"tag\" href=\"/portfolio/".str_replace(" ", "", $tag)."\">
              <p>".rawurldecode(str_replace("-", " ", $tag))."</p>
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

    <script>
    window.addEventListener('onload', function(){

      var myPlayer = videojs('video').ready(function(){
        this.on("ended", function(){
        closePopup();
        });
      })
    })

    </script>

  </body>
</html>
