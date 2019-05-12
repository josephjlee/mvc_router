<?php

function vd($var) {
  echo "<pre>";
  //echo "<i>Variable: </i><b><span style='color:red'>$var</span></b><br>";
  var_dump($var);
  echo "</pre>";
}

function infDisplay($msg, $colour) {
  echo "<br><span style='color:$colour'>$msg</span>";
}

function scriptLocation($path) {
  $magicConstDir = __DIR__;
  $magicConstFile = __FILE__;
  $scriptName = $_SERVER['SCRIPT_NAME'];
  echo '<b>'.$path.'</b>';
  echo '<br>__DIR__: '.$magicConstDir;
  echo '<br>__FILE__: '.$magicConstFile;
  echo '<br>SCRIPT_NAME: '.$scriptName;
  echo '<br><br>';
}