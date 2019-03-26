<?php
$jaar=1;
$beginkapitaal=1000;
$rente=4;
echo "Beginkapitaal: $beginkapitaal<br>";
echo "Rente: $rente%<br><br>";
while ($beginkapitaal <= 2000) {
  echo  "Kapitaal na $jaar jaar is: ", $beginkapitaal =+ $beginkapitaal / 100 * $rente + $beginkapitaal, " euro<br>";
  $jaar++;
}


 ?>
