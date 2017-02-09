
<label class="menu-label" for="menu-show"><i class="icon-menu"></i></label>
<nav class="sidebar">
  <label for="menu-show">
    <button class="ui-component btn btn-navbar" onclick="return clickFunction()"> <i class="icon-cross"></i>Close Menu</button>
  </label>
  <div class="container">
    <ul>
      <li class="menu-item"> <a href="index.php">Home</a></li>
      <li class="menu-item"> 
        <label for="submenu-toggle">Portfolio</label>
      </li>
      <input type="checkbox" id="submenu-toggle"/>
      <ul class="sub-menu">
        <div class="padding-box">
          <li class="submenu-item"><a href="/projetos/3d">3D</a></li>
          <li class="submenu-item"><a href="/projetos/web-development">Web Development</a></li>
          <li class="submenu-item"><a href="/projetos/design-grafico">Design Gráfico</a></li>
          <li class="submenu-item"><a href="/fotografia">Fotografia</a></li>
        </div>
      </ul>
      <li class="menu-item"><a href="/sobre-mim">Sobre mim</a></li>
      <li class="menu-item"><a href="/contactos">Contactos</a></li>
    </ul>
  </div>
</nav>