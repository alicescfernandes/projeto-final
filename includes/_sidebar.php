
<label class="menu-label" for="menu-show"><i class="icon-menu"></i></label>
<nav class="sidebar">
  <label for="menu-show">
    <button class="ui-component btn btn-navbar" onclick="return clickFunction()"> <i class="icon-cross"></i>Close Menu</button>
  </label>
  <div class="container">
    <ul>
      <li class="menu-item"> <a href="http://<?php echo($_SERVER['HTTP_HOST']) ?>">Home</a></li>
      <li class="menu-item">
        <label for="submenu-toggle">Portfolio <i class="icon-chevron-down"></i></label>
      </li>
      <input type="checkbox" id="submenu-toggle"/>
      <ul class="sub-menu">
        <div class="padding-box">
          <li class="submenu-item"><a href="/portfolio/3d">3D</a></li>
          <li class="submenu-item"><a href="/portfolio/web-development">Web Development</a></li>
          <li class="submenu-item"><a href="/portfolio/design-gr&#x26;#xE1fico">Design Gráfico</a></li>
          <li class="submenu-item"><a href="/fotografia">Fotografia</a></li>
        </div>
      </ul>
      <li class="menu-item"><a href="/sobre-mim">Sobre mim</a></li>
      <li class="menu-item"><a href="/contactos">Contactos</a></li>
    </ul>
  </div>
</nav>
