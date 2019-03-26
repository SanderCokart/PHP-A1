<?php
$width = 30;
$color = 'red';
$thickness = 10;
$increments = 30;

while ($width <= 300) {
  echo "<hr color=$color width=$width size=$thickness align=center>";
  $width += $increments;
}
?>
