<?php

 $width = $_REQUEST['width'];
 $thickness = $_REQUEST['thickness'];
 $color = $_REQUEST['color'];
 $increment = $_REQUEST['increment'];
 $maxwidth = $_REQUEST['maxwidth'];

while ($width < $maxwidth) {
  echo "<hr color=$color width=$width size=$thickness align=center>";
  $width += $increment;
}
 ?>
