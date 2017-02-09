<!DOCTYPE html>
<html class="contacts">
  <head><?php require_once('./includes/header.php') ?></head>
  <body><?php require_once('./includes/_sidebar.php') ?>
    <div class="main-content">
      <div class="ui-component slideshow slideshow-medium">
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
      </div>
    </div>
    <div class="panel-container">
      <div class="panel panel-noshadow panel-fullwidth align-center">
        <h3>Project title</h3>
        <p><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</i></p>
      </div>
      <div class="panel panel-contacts">
        <form>
          <div class="row col100">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>
          </div>
          <div class="row col100">
            <label for="email">Endereço de Contacto</label>
            <input type="email" id="email" nome="email" required>
          </div>
          <div class="row col100">
            <textarea name="mensagem" required minlength="100" maxlength="230"></textarea>
          </div>
          <div class="row col100"></div>
          <button class="ui-compoment btn-simple" type="sumbit"><i>icon-arrow</i>Enviar</button>
          <button class="ui-compoment btn-simple" type="reset"><i>icon-refresh</i>Apagar dados</button>
        </form>
      </div><?php require_once('./includes/_footer.php') ?>
    </div>
  </body>
</html>