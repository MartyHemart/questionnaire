<?php

echo "<center>";
$point = 0;
//var_dump($_GET);die;

// premiere question
if (isset($_GET["myradio"]) == "Atome") {
  echo "Atome es la bonne réponse";
  echo '<br>';
  $point += 1;
}
else {
 echo "ce n'est pas la bonne réponse";
 echo '<br>';
};
 // fin premiere question
 // second question
if (isset($_GET["myradio2"]) == "chrome") {
   echo "Chrome es la bonne réponse";
   echo '<br>';
   $point += 1;
 }
 else {
  echo "ce n'est pas la bonne réponse";
  echo '<br>';
 };
  // fin second question
// debut 3 question
  if(isset($_GET["myradio3"]) == "Z3") {
    echo "Z3 es la bonne réponse";
    echo '<br>';
    $point += 1;
  }
  else {
   echo "ce n'est pas la bonne réponse";
   echo '<br>';
  };
  // fin 3 question
// debut 4 question
  if(isset($_GET["myname"]) === "motorola") {
    echo "motorola es la bonne réponse";
    echo '<br>';
    $point += 1;
  }
  else {
   echo "ce n'est pas la bonne réponse";
   echo '<br>';
  };
 // fin 4 question
 //debut question 5
if(isset($_GET["myradio4"]) == "1963") {
   echo "1963 es la bonne réponse";
   echo '<br>';
   $point += 1;
 }
 else {
  echo "ce n'est pas la bonne réponse";
  echo '<br>';
 };
//fin 5 question
//debut question 6
if(isset($_GET["myradio5"]) == "2011-10-05") {
   echo "5 octobre 2011 es la bonne réponse";
   echo '<br>';
   $point += 1;
 }
 else {
  echo "ce n'est pas la bonne réponse";
  echo '<br>';
 };
//fin question 6
//debut question 7

$response = array("DidiChuxing", "tvOS", "appletv"); //$reponse garde les bonne reponse en memoir
if(isset($_GET["myradio6"]))
{


  $apple = $_GET["myradio6"];
  if(in_array('Directx', $apple)) { //in_array verifier la mauvaise réponse dans $apple n'estb pas cocher (ici "directx")
  } else {
    if(count(array_diff($response, $apple)) == 0) {     // si directx n'est pas cocher la reponse est bonne
      echo "c'est la bonne réponse bravo !";
      echo "<br>";
      $point += 1;
    } else {
    }
  };
};
/*if (in_array(array("DidiChuxing", "tvOS", "appletv"), $apple)) {
   echo "Bonne réponse";
   echo '<br>';
   $point += 1;
 }
 else {
  echo "mauvaisse réponse";
  echo '<br>';
};*/
//fin question 7

echo "Bravo ! vous avez " . $point . " point(s)";

echo "</center>";
