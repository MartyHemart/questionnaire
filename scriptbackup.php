<?php

session_start();
$point = 0;
// premiere question

if (isset($_GET["myradio"]) &&  $_GET["myradio"] == "atome") {
   $_SESSION['myradio'] = 'Atome est la bonne réponse';
  $point += 1;
}
else {
  $_SESSION['myradio'] = 'ce n\'est pas la bonne réponse';
};
 // fin premiere question
 // second question
if (isset($_GET["myradio2"]) && $_GET["myradio2"] == "chrome") {
  $_SESSION['myradio2'] = 'Chrome est la bonne réponse';
   $point += 1;
 }
 else {
   $_SESSION['myradio2'] = 'ce n\'est pas la bonne réponse';
 };
  // fin second question
// debut 3 question
  if(isset($_GET["myradio3"]) && $_GET['myradio3'] == "Z3") {
    $_SESSION['myradio3'] = 'Z3 est la bonne réponse';
    $point += 1;
  }
  else {
    $_SESSION['myradio3'] = 'ce n\'est pas la bonne réponse';
  };
  // fin 3 question
// debut 4 question
  if(isset($_GET["myname"]) && $_GET["myname"] === "motorola") {
    $_SESSION['myname'] = 'motorola est la bonne réponse';
    $point += 1;
  }
  else {
    $_SESSION['myname'] = 'ce n\'est pas la bonne réponse';
  };
 // fin 4 question
 //debut question 5
if(isset($_GET["myradio4"])  && $_GET["myradio4"] == "1963") {
  $_SESSION['myradio4'] = '1963 es la bonne réponse';
   $point += 1;
 }
 else {
   $_SESSION['myradio4'] = 'ce n\'est pas la bonne réponse';
 };
//fin 5 question
//debut question 6
if(isset($_GET["myradio5"]) && $_GET["myradio5"] == "2011-10-05") {
  $_SESSION['myradio5'] = '5 octobre 2011 est la bonne réponse';
   $point += 1;
 }
 else {
 $_SESSION['myradio5'] = 'ce n\'est pas la bonne réponse';
 };
//fin question 6
//debut question 7
$response = array("DidiChuxing", "tvOS", "appletv"); //$reponse garde les bonne reponse en memoir
if(isset($_GET["myradio6"]))
{
  $apple = $_GET["myradio6"];
  if(in_array('Directx', $apple)) { //in_array verifier la mauvaise réponse dans $apple n'estb pas cocher (ici "directx")
  } else {
    if(count(array_diff($response, $apple)) == 0) {    // si directx n'est pas cocher la reponse est bonne
      $_SESSION['myradio6'] = 'c\'est la bonne réponse bravo !';
      $point += 1;
    } else {
      $_SESSION['myradio6'] = 'ce n\'est pas la bonne réponse';
    }
  };
};
header('Location: /');
