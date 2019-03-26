<?php
$speed = $_REQUEST['speed'];
$speedlimit = $_REQUEST['speedlimit'];
$fine = 30;

 if ($speed > $speedlimit) {
 while ($speed > $speedlimit) {
   $speed--;
   $fine +=5;
}
   echo "$fine";
} elseif ($speed <= $speedlimit) {
  echo "no fine will be issued";
} {
}
?>
