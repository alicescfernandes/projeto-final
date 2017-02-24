<!DOCTYPE html>
<html class="index">
  <head>
    <?php require_once('./includes/_header.php') ?>
    <?php
    require_once('./php/db-constants.php');
    $maxImages = 5;
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $query = "SELECT * FROM `media` WHERE title IS NOT NULL GROUP BY title ORDER BY RAND() LIMIT $maxImages";// EXPLICAÇÃO DE COMPONENTE | Esta query vai selecionar todas a s imagens que estão antabela média. Esta tabela contem o src, title de cada imagem. A função RAND() que é usada com o ORDER BY ordena de maneira aleatória as imagens.
    $result = $conn->query($query);
    $resultHTML = '';

    $i = 0;
    while($row=$result->fetch_assoc()){
      $string = $row['src'];
      $metaImage = "http://".$host . "/" ."media/".$string."@1280.jpg";
      $description = $row['title'];

      /* EXPLICAÇÃO DE COMPONENTE

      Depois de feita a query à base de dados, o PHP corre pelas linhas do result set e gera o html necessário para os slides.
      A imagem do slide é colocada como fundo, porque asism fica mais fácil redimensionar a imagem, e porque posso manipular a posição e o tamanho da imagem como uma mascara

      */

      $resultHTML.="<div class=\"slide\" style=\"background-image:url(http://".$host . "/" ."media/".$string."@1900.jpg)\" data-slide=\"".($i+1)."\"><div class=\"title\"><p>$description</p></div></div>";
      $i++;
    }


     ?>
<title>Página Inicial | Alice Fernandes - Web Development & Design</title>

<meta name="robots" content="index, follow"/>

<meta name="twitter:card" content="Bem vindos ao meu website. Aqui vao encontrar uma seleção dos melhores trabalhos em diferentes áreas. Se tiverem alguma ideia para um projeto e precisarem de um developer, contactem-me." />

<meta property="og:title" content="Página Inicial | Alice Fernandes - Web Development & Design" />
<meta property="og:description" content="Bem vindos ao meu website. Aqui vao encontrar uma seleção dos melhores trabalhos em diferentes áreas. Se tiverem alguma ideia para um projeto e precisarem de um developer, contactem-me." />
<meta property="og:image" content="<?php echo($metaImage) ?>" />
<meta name="description" content="Bem vindos ao meu website. Aqui vao encontrar uma seleção dos melhores trabalhos em diferentes áreas. Se tiverem alguma ideia para um projeto e precisarem de um developer, contactem-me.">

  </head>
  <body>
    <input type="checkbox" id="menu-show">
    <div class="site-container"><?php require_once('./includes/_sidebar.php') ?>

      <div class="main-content">
        <?php
        include '_audio.php';
        ?>
        <header><span class="letring">
            <p>Alice Fernandes</p>
            <p>Design & Development</p></span></header>
        <div class="ui-component slideshow slideshow-fullpage slideshow-absolute-pos">
          <div class="slide-container">
            <!-- EXPLICAÇÃO DE COMPONENTE
            É nesta div que é colocado o conteúdo gerado com PHP.
            -->
            <?php echo($resultHTML); ?>
            </div>
          <div class="ui-component slide-controller">
            <ul>
            <!-- EXPLICAÇÃO DE COMPONENTE

            Cada elemento da lista corresponde a uma imagem no slide.
            As imagens são retiradas da base de dados aleatóriamente, mas o numero de slides já está pré -estabelecido.
            Para colocar mais slides, basta aumentar o numero de itens e colocar mais titles na tabela media.

            -->
              <li class="slider-control" data-slide="1"> </li>
              <li class="slider-control" data-slide="2"></li>
              <li class="slider-control" data-slide="3"></li>
              <li class="slider-control" data-slide="4"></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
