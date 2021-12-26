<!DOCTYPE html>
<html>
<head>
<title>Average Temperature</title>
</head>

<body>
    <?php

$zipCode = substr(filter_input(INPUT_POST, 'zipCode', FILTER_SANITIZE_NUMBER_INT),0,5);
$sundayTemp = substr(filter_input(INPUT_POST, 'sundayTemp', FILTER_SANITIZE_NUMBER_INT),0,5);
$mondayTemp = substr(filter_input(INPUT_POST, 'mondayTemp', FILTER_SANITIZE_NUMBER_INT),0,5);
$tuesdayTemp = substr(filter_input(INPUT_POST, 'tuesdayTemp', FILTER_SANITIZE_NUMBER_INT),0,5);
$wednesdayTemp = substr(filter_input(INPUT_POST, 'wednesdayTemp', FILTER_SANITIZE_NUMBER_INT),0,5);
$thursdayTemp = substr(filter_input(INPUT_POST, 'thursdayTemp', FILTER_SANITIZE_NUMBER_INT),0,5);
$fridayTemp = substr(filter_input(INPUT_POST, 'fridayTemp', FILTER_SANITIZE_NUMBER_INT),0,5);
$saturdayTemp = substr(filter_input(INPUT_POST, 'saturdayTemp', FILTER_SANITIZE_NUMBER_INT),0,5);

$average = ($mondayTemp+$tuesdayTemp+$wednesdayTemp+$thursdayTemp+$fridayTemp+$saturdayTemp+$sundayTemp)/7;

$average = round($average,0);


echo "<h1>Average Weekly Temperature </h1>";

echo "<p>Average Weekly Temperature is: $average degrees.</p>";

if($average >= 100){


echo "<p>That's hot.</p>";

}

else if($average >= 75){


    echo "<p>That's warm.</p>";


}

else if($average >= 50){


    echo "<p>That's chilly.</p>";


}
else{


    echo "<p>That's cold.</p>";
}



echo "<p>“Lookup weather information at <a href = 'https://www.almanac.com/weather/history/zipcode/$zipCode'>The Old Farmer’s Almanac</a> </p>";

?>

</body>
</html>

