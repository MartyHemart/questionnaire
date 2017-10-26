<?php


$point = 0;
//var_dump($_GET);die;

// premiere question
if($_GET["choix"] == "Atome") {
  echo "Atome es la bonne réponse";
  $point += 1;
}
else {
 echo "ce n'est pas la bonne réponse";
};
 // fin premiere question
 // second question
if($_GET["choix1"] == "chrome") {
   echo "Chrome es la bonne réponse";
   $point += 1;
 }
 else {
  echo "ce n'est pas la bonne réponse";
 };
  // fin second question
// debut 3 question
  if($_GET["choix2"] == "Z3") {
    echo "Z3 es la bonne réponse";
    $point += 1;
  }
  else {
   echo "ce n'est pas la bonne réponse";
  };
  // fin 3 question
// debut 4 question
  if($_GET["choix3"] === "motorola") {
    echo "motorola es la bonne réponse";
    $point += 1;
  }
  else {
   echo "ce n'est pas la bonne réponse";
  };
 // fin 4 question
 //debut question 5
if($_GET["choix4"] == "1963") {
   echo "1963 es la bonne réponse";
   $point += 1;
 }
 else {
  echo "ce n'est pas la bonne réponse";
 };
//fin 5 question
