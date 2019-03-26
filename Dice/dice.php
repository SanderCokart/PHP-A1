<?php

$a = 1;
$dicethrow[0]=$dicethrow[1]=$dicethrow[2]=$dicethrow[3]=$dicethrow[4]=$dicethrow[5] =0;
while ($a <= 5) {
  $dice = mt_rand(1,6);
  $dicethrow[$dice-1] ++;
  echo "<br /><img src=\"$dice.PNG\" />";
  $a++;
}
for($i=0;$i<sizeof($dicethrow);$i++){
  $tempdice = $i+1;
echo'<br />er zijn ' .$dicethrow[$i].' keer '.$tempdice.'gerold<br>';
}

echo "<input type=\"submit\" value=\"Submit\">";
echo "<input type=\"submit\" value=\"Stop\">";1
?>
