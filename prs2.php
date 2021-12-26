<!DOCTYPE html>
<html>
<head>
<title>Rock, Paper, Scissors Game</title>
</head>

<body>

<?php


#get inputs from player + computer

$player = substr(filter_input(INPUT_POST, 'choice', FILTER_SANITIZE_NUMBER_INT),0,1);
$computer = mt_rand(0,2);

# show player choice

if($player == 0){

    echo "<p><img src = 'images/paper1.png'  alt = \" Photo of player hand showing paper\"> &nbsp ";

}

elseif($player == 1 ){

    echo "<p><img src = 'images/rock1.png'  alt = \" Photo of player hand showing rock\"> &nbsp ";

}

elseif($player == 2){

    echo "<p><img src = 'images/scissors1.png'  alt = \" Photo of player hand showing scissors\"> &nbsp ";

}

# show computer choice


if($computer == 0){
  echo "<img src = 'images/paper2.png'  alt = \" Photo of computer hand showing paper\"> </p> ";

}

elseif($computer == 1 ){
    echo "<img src = 'images/rock2.png'  alt = \" Photo of computer hand showing rock\"> </p>";

}




elseif($computer == 2){


    echo "<img src = 'images/scissors2.png'  alt = \" Photo of computer hand showing scissors\"> </p>";
}




#display who won

if($player == $computer){

echo "<p>It's a draw.</p>"; 

}

# player wins section
# rock beats scissors
else if ($player == 1 && $computer == 2){


    echo "<p>You win!!</p>";



}

#scissors beats paper
else if ($player == 2 && $computer == 0){

    echo "<p>You win!!</p>";




}

# paper beats rock
else if ($player == 0 && $computer == 1){

    echo "<p>You win!!</p>";



}


# player loses section
# rock beats scissors
else if ($player == 2 && $computer == 1){


    echo "<p>You lose.</p>";



}

#scissors beats paper
else if ($player == 0 && $computer == 2){

    echo "<p>You lose.</p>";




}

# paper beats rock
else if ($player == 1 && $computer == 0){

    echo "<p>You lose.</p>";



}


?>

</body>

</html>