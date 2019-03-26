<?php
$actualspeed = $_REQUEST["speed"];
$advicespeed = $_REQUEST["speedlimit"];

if ($actualspeed > $advicespeed){
  echo ($actualspeed-$advicespeed)*5+30;
}
elseif ($actualspeed<=$advicespeed){
  echo "No fine needed";
}

 ?>
