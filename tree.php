<?php

$color = $_REQUEST['color'];
$shape = $_REQUEST['shape'];
$size = $_REQUEST['size'];

// ----------------------------------------------------------------------------------------------------------------------

if ($color == "red"){

  if ($shape == "round") {
    if ($size == "small") {
      echo "<h1>Merry christmas and a happy new year!</h1><img src = \"https://i.ytimg.com/vi/R2rbknMkEVM/hqdefault.jpg\" <br> <h2>&#169 Heba Abaas From The Stream</h2>";}
      elseif ($size == "medium") {
      echo "<h1>I hope you hate them as much as I do...</h1><img src = \"https://ih1.redbubble.net/image.26797170.4708/st%2Csmall%2C215x235-pad%2C210x230%2Cf8f8f8.lite-1u2.jpg\"";}
        elseif ($size == "large") {
        echo "<h1>I don't know any large red round fruits....<br> Have this circle I found on the internet instead!</h1><img src=\"http://chinalatinanyc.com/wp-content/uploads/2018/06/lovely-red-circle-rug-charming-shaggy-modern-small-large-rugs-5cm-in-red-round-rug.jpg\"";}
  }

    elseif ($shape == "square") {
      if ($size == "small") {
      echo "<h1>Do you remember these?<img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8sJS8qFT7rc3L_qMuuzKkHI2GRVUwQbrDBtjEaHWE7-Hzb3UI\"";}
        elseif ($size == "medium") {
        echo "<h1>square apples? wtf?<br> I don't know what else you could possible have meant....</h1><img src=\"http://www.fruitshaper.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/1/3/132410b16b0ksukvwhtkwt_1_2_1.jpg\"";}
          elseif ($size == "large") {
            echo "<h1>You have to be more specific than that...</h1><img src = \"https://www.containerstore.com/catalogimages/138060/LqrRecBoxLgRed10055484_x.jpg?width=1200&height=1200&align=center\"";}
}

      elseif ($shape == "elipse") {
        if ($size == "small") {
        echo "<h1>We are not taking any pills here!</h1><img src=\"https://i1.wp.com/www.avoiceformen.com/wp-content/uploads/sites/2/2016/09/red-pill-2.jpg?fit=750%2C420&ssl=1\"";}
          elseif ($size == "medium") {
          echo "<h1>Things are looking awfully pear shaped....</h1><img src =\"http://usapears.org/wp-content/uploads/2012/11/red-bartlett-pear.jpg\"<br><h2>Yes...red pears exist..</h2>";}
            elseif ($size == "large") {
            echo "<h1> Hey...at leasts its elipse shaped...</h1><img src =\"https://cute.kawaii.at/images/product_images/info_images/cool-red-brown-eraser-American-Football-163765-1.jpg\"";}
}

}
// ----------------------------------------------------------------------------------------------------------------------
elseif ($color == "green") {

  if ($shape == "round") {
    if ($size == "small") {
    echo "<h1>A green apple I guess...</h1><img src = \"http://www.wenzeasy.com/113-medium_default/green-apple-pc.jpg\"";}
      elseif ($size == "medium") {
      echo "<h1>Small melons count too!</h1><img src = \"https://cdn.hmclause.com/wp-content/uploads/2015/03/Melon-Fiji-small.jpg\"";}
        elseif ($size == "large") {
        echo "<h1>They come in many sizes and shapes...</h1><img src =\"http://www.freakingnews.com/pictures/62000/Men-Lifting-Huge-Watermelon--62448.jpg\"";}
}

  elseif ($shape == "square") {
    echo " <img src=\"https://cdn.shopify.com/s/files/1/0301/0501/products/creeper.png?v=1537403970\"></a> <h1>Were you suprised at all? THERE ARE NO SQUARE FRUITS!</h1>";}

    elseif ($shape = "elipse") {
      echo "<h1>MORE WATERMELONS!</h1><img src = \"https://images-na.ssl-images-amazon.com/images/I/919eKYhhBUL._SY550_.jpg\"";}
}
// ----------------------------------------------------------------------------------------------------------------------
elseif ($color == "purple") {
  echo "<h1>My library for purple fruits is somewhat limited.... Apologies!</h1><img src = \"https://previews.123rf.com/images/utima/utima1302/utima130200024/18022181-aubergine-with-leaves-isolated-on-white.jpg\"";}
 ?>


<!DOCTYPE html>
