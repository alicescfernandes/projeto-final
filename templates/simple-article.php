<!DOCTYPE html>
<html class="simple-page">
  <head><!--include _includes/_header.jade-->
<?php include_once('./includes/_header.php') ?>
<?php

  require_once('./php/db-constants.php');
  $tabela = 'media';
  $maxImages = 3;
  $resultHTML = '';
  $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  $query = 'SELECT * FROM `media` ORDER BY RAND() LIMIT 3';
  $result = $conn->query($query);
  #$randImages = [];
  #$randImagesDescription = [];

  $i = 0;

  while($row = $result->fetch_object()){
    $string = $row->src;
    $metaImage = "http://".$host . "/" ."media/".$string."@1280.jpg";
    $resultHTML .="<a rel=\"portfolio\" href=\"http://".$host . "/" ."media/".$row->src."@1900.jpg\" class=\"slide fancybox\" style=\"background-image:url(http://".$host . "/" ."media/".$row->src."@1900.jpg)\" data-slide=\"".($i+1)."\"> </a>";
    $i++;
  }
 /* while($array = $result->fetch_object()){
    $randImages[$i] = $array->src;
    $randImagesDescription[$i] = $array->title;
    $i++;
  }
  $randArray = range(0,count($randImages)-1);
  shuffle($randArray);
  $randArray = array_slice($randArray, 0, $maxImages);

  for($i = 0; $i!=$maxImages;$i++){
    $string = $randImages[$randArray[$i]];
    $description = $randImagesDescription[$randArray[$i]];
    $metaImage = "http://".$host . "/" ."media/".$string."@1280.jpg";
    $resultHTML.="<div class=\"slide\" style=\"background-image:url(http://".$host . "/" ."media/".$string."@1900.jpg)\" data-slide=\"".($i+1)."\"></div>";
  }*/
?>
<title>Sobre Mim | Alice Fernandes - Web Development & Design</title>

  <meta name="robots" content="index, follow">
  <meta name="twitter:card" content="Oi. Chamo-me Alice Fernandes e sou uma webdeveloper de 20 anos. Gosto de fazer de implementar projetos desde a raiz, passando por toda as fases de desenvolvimento. Já trabalhei na área e agora trabalho em regime de freelancer." />
  <!--<meta name="twitter:site" content="@nytimesbits" />
  <meta name="twitter:creator" content="@nickbilton" />-->
  <meta property="og:title" content="Sobre Mim | Alice Fernandes - Web Development & Design" />
  <meta property="og:description" content="Oi. Chamo-me Alice Fernandes e sou uma webdeveloper de 20 anos. Gosto de fazer de implementar projetos desde a raiz, passando por toda as fases de desenvolvimento. Já trabalhei na área e agora trabalho em regime de freelancer." />
  <meta property="og:image" content="<?php echo($metaImage) ?>" />
  </head>
  <body>
    <input type="checkbox" id="menu-show">
    <div class="site-container"><!--include _includes/_sidebar.jade-->
<?php include_once('./includes/_sidebar.php') ?>
      <div class="main-content">
        <div class="ui-component slideshow slideshow-medium panel-shadow">
          <div class="slide-container">
            <div class="slide" style="background-image: url(&quot;http://localhost/media/unicuidar-03@1900.jpg&quot;); width: 1366px;"> </div>
          </div>
        </div>
        <div class="panel-container">
          <div class="panel panel-noshadow panel-fullwidth align-center panel-title panel-nobackground">
            <h3>Sobre Mim</h3>
            <p><i>Web Developer com conhecimentos de Design Gráfico e Web Design.</i></p>
          </div>
          <div class="panel panel-simple">
            <p>Olá, chamo-me Alice Fernandes e trabalho como Web Developer, mas tenho conhecimentos na área de Web Design, Fotografia e Vídeo</p>
            <p>Entrei nesta área à cerca de cinco anos, quando tirei um Curso Profissional de Multimédia na Escola Secundária D.Dinis de Lisboa. Nesse curso, aprendi muito sobre multimédia e sobre <i>softwares</i> da área, mas aquilo que sempre gostei foi programação. Ainda no curso, aprendi SQL, javascript,HTML e CSS, mas só isso não foi suficiente para mim.</p>
            <p>Foi neste curso que desenvolvi grande parte do meu portfólio em Design Gráfico, durante o estágio. Posso dizer que no geral (do curso) tive o privilégio de trabalhar com pessoas de renome e outras,menos conhecidas, mas que me deram a possibilidade de desenvolver as minhas habilidades.</p>
            <p>Depois de acabar o curso decidi-me dedicar a fundo na área da programação, e depois de alguns meses, já tinha conhecimentos sólidos em JavaScript e PHP.</p>
            <p>Hoje dedico-me ao desenvolvimento web em pleno. Desenvolvo os meus projetos, e faço outros em conjuto com outros developers. Gosto daquilo que faço e gosto de mostrar isso.</p>
            <p>Para além de desenvolvimento web, gosto de desenhar e conceber websites desde a raiz, e todos os meus projetos começam sempre num documento em branco no Photoshop. Se tiveres algumas ideias em mente, e necessitares de algum site ou plataforma web, contacta-me. Eu terei todo o prazer em trabalhar contigo</p>
          </div><!--include _includes/_footer.jade-->
        </div><?php include_once('./includes/_footer.php') ?>
      </div>
    </div>
  </body>
</html>
