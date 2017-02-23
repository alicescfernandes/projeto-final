<!DOCTYPE html>
<html class="search">
  <head><!--include _includes/_header.jade-->
<?php
include_once ('./includes/_header.php') ?>

<?php

/*
require_once('./php/db-constants.php');
$tabela = 'media';
$maxImages = 3;
$resultHTML = '';
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query = "SELECT * FROM `media` ORDER BY RAND() LIMIT 3";
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

/*while($array = $result->fetch_object()){
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


 <title>Pesquisar | Alice Fernandes - Web Development & Design</title>


<meta name="robots" content="index, follow">
<meta name="twitter:card" content="Precisas de algum developer para o teu projeto" />
<?php /*<meta name="twitter:site" content="@nytimesbits" />
<meta name="twitter:creator" content="@AliceFernandes" /> */ ?>
<meta property="og:title" content="Contactos | Alice Fernandes - Web Development & Design" />
<meta property="og:description" content="Precisas de algum developer para o teu projeto, conctacta-me" />
<meta property="og:image" content="<?php
echo ($metaImage) ?>" />

  </head>
  <body>
    <input type="checkbox" id="menu-show">
    <div class="site-container"><!--include _includes/_sidebar.jade-->
<?php
include_once ('./includes/_sidebar.php') ?>
      <div class="main-content">
        <div class="ui-component slideshow slideshow-medium panel-shadow">
          <div class="slide-container">
            <div rel="portfolio" href="http://<?php

echo ($host) ?>/media/unicuidar-03@1900.jpg" class="slide" style="background-image: url(&quot;http://<?php echo($host) ?>/media/unicuidar-03@1900.jpg&quot;); "> </div>
          </div>
        </div>
        <div class="panel-container">
          <div class="panel panel-noshadow panel-fullwidth align-center panel-title panel-nobackground">
            <h3>Pesquisar por <i>tags</i></h3>
            <p><i>Procura pelo o tipo de projeto que queres ver.</i></p>
          </div>


            <form method="POST" action="<?php
$_SERVER['PHP_SELF'] ?>" >
              <div class="panel panel-search">

              <div class="row col70">
              <div class="form-row">
                <label for="nome"><h3>O que procuras?</h3></label>
                <input placeholder="Quero ver projetos em..." type="text" minlength="3" id="nome" name="search" required>
                  <button class="ui-compoment btn btn-simple panel-noshadow" type="sumbit"><i class="icon-magnifying-glass"></i>Pesquisar<div class="button-circle-animation"></div></button>
              </div>

              </div>


                </div><!--include _includes/_footer.jade-->


          </form>

        <?php

if (isset($_POST['search'])) {
	$tagToSearch = rawurlencode(str_replace(" ", "-", mb_strtolower($_POST['search'], 'UTF-8')));
	include_once ('php/db-constants.php');

	$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	$query = "SELECT * FROM `projetos` WHERE `tags` LIKE '%$tagToSearch%'";
	if ($conn->query($query)) {
		$result = $conn->query($query);
		if ($result->num_rows != 0) {
			while ($row = $result->fetch_assoc()) {
				$nome = $row['nome'];
				$tags = explode(",", $row['tags']);
				$tagsHTML = "";
				foreach($tags as $tag) {
					$tagsHTML.= "<a class=\"tag\" href=\"/portfolio/" . htmlentities(str_replace(" ", "", $tag)) . "\">
              <p>" . rawurldecode(str_replace("-", " ", $tag)) . "</p>
             </a>";
				}

				// Query for media;

				$queryImages = "SELECT * FROM media WHERE projeto_uri='" . $row['uri'] . "' AND `tipo`='image' ORDER BY RAND() LIMIT 1 ";
				$resultImages = $conn->query($queryImages);
				$media = $resultImages->fetch_assoc();
				$resultHTML = "<div class=\"panel panel-small\"><a style=\"background-image:url(http://$host/media/" . $media['src'] . "@1280." . $media["ext"] . ")\" class=\"panel-image panel-link\" href=\"/projeto/" . $row['uri'] . "\"> <h3>" . mb_convert_encoding($nome, 'UTF-8') . "</h3></a>


                            <div class=\"panel-small-bottom\">" . $tagsHTML . "</div>
                            </div>";
				echo ($resultHTML);
			}
		}else{
      echo("<div class=\"panel panel-search align-center\"><h5>Não foram encontrados projetos com os parâmetros dessa pesquisa.<br>Tente novamente</h5></div>");
    }
	}
}

?>
       </div>
        <?php
include_once ('./includes/_footer.php') ?>
      </div>

        </div>




    </div>
  </body>
</html>
