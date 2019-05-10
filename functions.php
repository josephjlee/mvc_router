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
