<?php
$unit = $_REQUEST['unit'];
$temperature = $_REQUEST['temperature'];

if ($unit == "CK") {
  echo $temperature + 273;
}

elseif ($unit == "CF") {
  echo (9 * $temperature / 5) +32;
}
 ?>
