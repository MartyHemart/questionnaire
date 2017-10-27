  <?php
  require_once("creat.php");
  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>welcome</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div>
  <img src="img/quizz.jpg" class="img-fluid imgcenter" alt="Responsive image">
</div>
  <?php
  echo "<center>";
  echo openForm("./scriptbackup.php");

  // question 1
  echo "<br>";
  echo createTag("legend", "textcouleur", "Quel est l'editeur de texte ?");
  echo createInput("radio", "myradio", "safari", "safari");
  echo createInput("radio", "myradio", "chrome", "chrome");
  echo createInput("radio", "myradio", "atome", "atome");
  echo createInput("radio", "myradio", "windows", "windows");
  echo "<br>";

  // fin question 1

  echo createTag("legend", "textcouleur2", "Quel est le navigateur web ?");
  echo createInput("radio", "myradio2", "unity", "unity");
  echo createInput("radio", "myradio2", "chrome", "chrome");
  echo createInput("radio", "myradio2", "atome", "atome");
  echo createInput("radio", "myradio2", "windows", "windows");
  echo "<br>";

  echo createTag("legend", "textcouleur", "Comment s'appel le premier PC ?");
  echo createInput("radio", "myradio3", "Multivac", "Multivac");
  echo createInput("radio", "myradio3", "The_Engine", "The Engine");
  echo createInput("radio", "myradio3", "Colossus", "Colossus");
  echo createInput("radio", "myradio3", "Z3", "Z3");
  echo "<br>";

  echo createTag("legend", "textcouleur2", "Quel est le nom de la marque qui produit des téléphones modifiable ?");
  echo createInput("text", "myname", "tape ici", "");
  echo "<br>";

  echo createTag("legend", "textcouleur", "Comment s'appel le premier PC");
  echo createInput("radio", "myradio4", "1987", "1987");
  echo createInput("radio", "myradio4", "1963", "1963");
  echo createInput("radio", "myradio4", "1966", "1966");
  echo createInput("radio", "myradio4", "1974", "1974");
  echo "<br>";

  echo createTag("legend", "textcouleur2", "En quel année est mort Steve Job ?");
  echo createDate("date", "myradio5");
  echo "<br>";

  echo createTag("legend", "textcouleur", "Quels sont les créations de Apple ");
  echo createInput("checkbox", "myradio6[]", "DidiChuxing", "DidiChuxing");
  echo createInput("checkbox", "myradio6[]", "tvOS", "tvOS");
  echo createInput("checkbox", "myradio6[]", "appletv", "appletv");
  echo createInput("checkbox", "myradio6[]", "Directx", "Directx");
  echo "<br>";



  echo createSumit("voir le resultat");
  echo closeTag("form");

echo "</center>";  ?>
</body>
</html>
