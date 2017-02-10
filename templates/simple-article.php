<!DOCTYPE html>
<html class="simple-page">
  <head><!--include _includes/_header.jade-->
<?php include_once('./includes/_header.php') ?>
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
