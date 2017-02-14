<!DOCTYPE html>
<html class="project-categories">
  <head><?php require_once('./includes/_header.php') ?>

<title>Fotografias | Alice Fernandes - Web Development & Design</title>


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
          <div class="panel panel-noshadow panel-fullwidth align-center panel-title panel-nobackground">
            <h3>Fotografias</h3>
            <p> <i>*snap* *snap*</i></p>
          </div>
          <div class="panel panel-small panel-foto"><a class="panel-link" href="#" style="background-image:url(../img/slide2-dummy@1280.jpg);"></a>
            <h3>Maasai</h3>
          </div>
          <div class="panel panel-small panel-foto"><a class="panel-link" href="#" style="background-image:url(../img/slide1-dummy@1280.jpg);"></a>
            <h3>Maasai </h3>
          </div>
          <div class="panel panel-small panel-foto"><a class="panel-link" href="#" style="background-image:url(../img/slide3-dummy@1280.jpg);"></a>
            <h3>Maasai</h3>
          </div>
          <div class="panel panel-small panel-foto"><a class="panel-link" href="#"></a>
            <h3>Maasai</h3>
          </div>
          <div class="panel panel-small panel-foto"><a class="panel-link" href="#"></a>
            <h3>Maasai</h3>
          </div>
        </div><?php require_once('./includes/_footer.php') ?>
      </div>
    </div>
  </body>
</html>
