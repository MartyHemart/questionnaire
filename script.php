<?php

echo "<center>";
$point = 0;
//var_dump($_GET);die;

// premiere question
if (isset($_GET["choix"]) == "Atome") {
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
if (isset($_GET["choix1"]) == "chrome") {
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
  if(isset($_GET["choix2"]) == "Z3") {
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
  if(isset($_GET["choix3"]) === "motorola") {
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
if(isset($_GET["choix4"]) == "1963") {
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
if(isset($_GET["choix5"]) == "2011-10-05") {
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
$apple = $_GET["choix6"];
if (in_array(array("DidiChuxing", "tvOS", "appletv"), $apple)) {
   echo "Bonne réponse";
   echo '<br>';
   $point += 1;
 }
 else {
  echo "mauvaisse réponse";
  echo '<br>';
 };
//fin question 7

echo "Bravo ! vous avez " . $point . " point(s)";

echo "</center>";
