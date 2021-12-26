<!DOCTYPE html>

<head>

<meta charset = "utf-8"/>
<link href="style.css"  rel="stylesheet" type = "text/css"/>   
<title>Coin Flipper </title>

</head>

<body>


<?php

$heads = 0;
$tails = 0;

for($x = 1;$x <= 20; $x++){

$flip = rand(0,1); # 0 heads, 1 tails 

if($flip == 0 ){

echo "<p>Flip #$x: Heads <img src = 'images/heads.png' alt = 'image of a coin head' /> </p>";
 $heads++;

}

else{

    echo "<p>Flip #$x: Tails <img src = 'images/tails.png' alt = 'image of a coin tail' /> </p>";
    $tails++;

}


}


echo "<p> Number of coins flipped heads: $heads (". ($heads/20) * 100 ."%) </p>";

echo "<p> Number of coins flipped tails: $tails (". ($tails/20) * 100 ."%) </p>";







?>

</body>

</html>