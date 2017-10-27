<?php
// une ouverture de balise form
// définir une action (avec funtion)
function openForm($action = "#")
{
  return "<form action='" . $action . "'>";
}
// une femerture de balise form
function closeTag($tag)
{
  return "</" . $tag . ">";
}

// 4 element type/name/value/label pour un input
// la mise en place d'un input
/*
$type = string
$name = string
$value = string
$label = string */
function createInput($type, $name, $value = "", $label)
{
  return "<label>" . $label . "</label><input type='" . $type . "' name='" .$name . "' value= '" . $value ."'>";
}
// avec un label
// mise en place des selects
function createSelect($name, $label, $options)
{

  $html = "<label>". $label . "</label>";
  $html = "<select name='" . $name ."'>";
  foreach ($options as $key => $value)
  {
    $html .= "<option value='". $value['value'] . "'>" . $value['content'] . "</option>";
  }
  $html .= "</select>";
  return $html;
}

//function date

function createDate($date, $name)
{
  return "<input type='" . $date . "' name= '" . $name . "'>";
}

// fin function date
// générer un bouton sumit
function createSumit($value)
{

 return "<input type='submit' value='" .$value ."'>";
}

//question 1

function createTag($name, $class, $contenue)
{
    return "<" . $name . " class='" . $class . "'> '" . $contenue . "'</" . $name . ">";
}

// fin question 1
