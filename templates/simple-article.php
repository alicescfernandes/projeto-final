<!DOCTYPE html>
<html class="simple-page">
  <head><!--include _includes/_header.jade-->
<?php include_once('./includes/_header.php') ?>

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
    <input type="checkbox" id="menu-show">
    <div class="site-container"><!--include _includes/_sidebar.jade-->
<?php include_once('./includes/_sidebar.php') ?>
      <div class="main-content">
        <div class="ui-component slideshow slideshow-medium panel-shadow">
          <div class="slide-container">
            <div class="slide" style="background-image:url(img/slide1-dummy@1900.jpg);" data-slide="1"></div>
            <div class="slide" style="background-image:url(img/slide2-dummy@1900.jpg);" data-slide="2"></div>
            <div class="slide" style="background-image:url(img/slide3-dummy@1900.jpg);" data-slide="3"></div>
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
            <h3>Sobre Mim</h3>
            <p><i>Alice Fernandes: Junior Javascript Wizard</i></p>
          </div>
          <div class="panel panel-simple">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur hendrerit purus, ut volutpat enim posuere a. Donec efficitur quam nec orci aliquam, ac fringilla ipsum vehicula. Praesent sagittis lacinia diam. Suspendisse fringilla varius diam, in rhoncus libero auctor ut. Aliquam sed justo lorem. Vivamus venenatis lacus ligula, faucibus aliquet enim malesuada at. Sed vel eros nunc. Donec erat risus, tincidunt vitae commodo vel, congue eget lectus.</p>
            <p>Praesent at nulla lacinia, condimentum diam eget, mattis libero. Nullam condimentum pretium posuere. In in luctus dui. Nullam ornare scelerisque nisl nec varius. Aliquam erat volutpat. Aenean accumsan vulputate maximus. Maecenas quam mauris, mattis at neque vel, imperdiet accumsan dui. Nullam et risus et mi fringilla volutpat at et mi. In gravida cursus massa id fermentum. Donec aliquam arcu nec risus tincidunt viverra. Aenean blandit faucibus condimentum.</p>
            <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur hendrerit purus, ut volutpat enim posuere a. Donec efficitur quam nec orci aliquam, ac fringilla ipsum vehicula. Praesent sagittis lacinia diam. Suspendisse fringilla varius diam, in rhoncus libero auctor ut. Aliquam sed justo lorem. Vivamus venenatis lacus ligula, faucibus aliquet enim malesuada at. Sed vel eros nunc. Donec erat risus, tincidunt vitae commodo vel, congue eget lectus.</p>
            <p>Praesent at nulla lacinia, condimentum diam eget, mattis libero. Nullam condimentum pretium posuere. In in luctus dui. Nullam ornare scelerisque nisl nec varius. Aliquam erat volutpat. Aenean accumsan vulputate maximus. Maecenas quam mauris, mattis at neque vel, imperdiet accumsan dui. Nullam et risus et mi fringilla volutpat at et mi. In gravida cursus massa id fermentum. Donec aliquam arcu nec risus tincidunt viverra. Aenean blandit faucibus condimentum.</p>
          </div><!--include _includes/_footer.jade-->
        </div><?php include_once('./includes/_footer.php') ?>
      </div>
    </div>
  </body>
</html>
