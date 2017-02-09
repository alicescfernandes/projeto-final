<!DOCTYPE html>
<html class="project-page">
  <head><?php require_once('./includes/_header.php') ?></head>
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
            <h3>Project title</h3>
            <p><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</i></p>
          </div>
          <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur hendrerit purus, ut volutpat enim posuere a. Donec efficitur quam nec orci aliquam, ac fringilla ipsum vehicula. Praesent sagittis lacinia diam. Suspendisse fringilla varius diam, in rhoncus libero auctor ut. Aliquam sed justo lorem. Vivamus venenatis lacus ligula, faucibus aliquet enim malesuada at. Sed vel eros nunc. Donec erat risus, tincidunt vitae commodo vel, congue eget lectus.</p>
            <p>Praesent at nulla lacinia, condimentum diam eget, mattis libero. Nullam condimentum pretium posuere. In in luctus dui. Nullam ornare scelerisque nisl nec varius. Aliquam erat volutpat. Aenean accumsan vulputate maximus. Maecenas quam mauris, mattis at neque vel, imperdiet accumsan dui. Nullam et risus et mi fringilla volutpat at et mi. In gravida cursus massa id fermentum. Donec aliquam arcu nec risus tincidunt viverra. Aenean blandit faucibus condimentum.</p>
            <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur hendrerit purus, ut volutpat enim posuere a. Donec efficitur quam nec orci aliquam, ac fringilla ipsum vehicula. Praesent sagittis lacinia diam. Suspendisse fringilla varius diam, in rhoncus libero auctor ut. Aliquam sed justo lorem. Vivamus venenatis lacus ligula, faucibus aliquet enim malesuada at. Sed vel eros nunc. Donec erat risus, tincidunt vitae commodo vel, congue eget lectus.</p>
            <p>Praesent at nulla lacinia, condimentum diam eget, mattis libero. Nullam condimentum pretium posuere. In in luctus dui. Nullam ornare scelerisque nisl nec varius. Aliquam erat volutpat. Aenean accumsan vulputate maximus. Maecenas quam mauris, mattis at neque vel, imperdiet accumsan dui. Nullam et risus et mi fringilla volutpat at et mi. In gravida cursus massa id fermentum. Donec aliquam arcu nec risus tincidunt viverra. Aenean blandit faucibus condimentum.</p>
          </div>
          <div class="panel"><a class="tag" href="#">
              <p>html</p></a><a class="tag" href="#">
              <p>CSS</p></a><a class="tag" href="#">
              <p>Web Design</p></a><a class="tag" href="#">
              <p>Web Development</p></a></div>
          <div class="panel panel-noshadow panel-nobackground align-center"><a class="ui-compoment btn btn-simple align-center" href="" id="animation">
              <div class="button-circle-animation"></div><i class="social-github"></i>Vê me no Github</a></div>
          <div class="panel panel-sharer align-center">
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
          </div>
        </div><?php require_once('./includes/_footer.php') ?>
      </div>
    </div>
  </body>
</html>