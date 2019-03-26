<?php

// waarde van euro
$euro = 1;
//waarde van de dollar
$dollar = 1.07;

// Hoeveel je ophaald in euros
$pickup = 300000;

// landcode mobiel
$country = '01';

//euros * de waarde van de dollar
if ($country == '01') {
  $return =  $dollar * $pickup;
}

elseif ($country == '31') {
  $return = $pickup;
}

echo "you recieve this amount $return in dollars";

 ?>
