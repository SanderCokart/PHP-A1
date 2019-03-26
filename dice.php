<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Een dobbelsteen werpen</title>
  </head>
  <body>
    <form action="dice.php" method="post">
      <input type="submit" value="Throw dice!" name="throwdice">
      <input type="submit" value="Stop" name="stop">
    </form>
  </body>
</html>

<?php
session_start();
	//$_SESSION["dicecount"] = array(0,0,0,0,0,0);
	if(isset($_POST['throwdice']) && (!isset($_POST['stop']))){
		for ($i=0; $i < 5; $i++) {  //je gooit dus iedere keer 6x. waarom?
		  $dice = mt_rand(1,6);
		  echo "<br /><img src=\"Dice/$dice.PNG\" />";
		  $_SESSION["dicecount"][$dice-1] +=1;
		}

	  echo "<br>1 is ".$_SESSION["dicecount"][0]. " keren gegooid";
	  echo "<br>2 is ".$_SESSION["dicecount"][1]. " keren gegooid";
	  echo "<br>3 is ".$_SESSION["dicecount"][2]. " keren gegooid";
	  echo "<br>4 is ".$_SESSION["dicecount"][3]. " keren gegooid";
	  echo "<br>5 is ".$_SESSION["dicecount"][4]. " keren gegooid";
	  echo "<br>Aantal worpen (controle):".array_sum($_SESSION["dicecount"]);
	}

  if(isset($_POST['stop'])){
    $_SESSION["dicecount"] = array(0,0,0,0,0,0); 
	echo "op nul gesteld";
  }
 ?>
