<!DOCTYPE html>
<html>
<head>
<title>HFC Tuition Calculator</title>
</head>

<body>

<h1>Tuition Calculator</h1>

<?php
$residency = substr(filter_input(INPUT_POST, 'residency', FILTER_SANITIZE_NUMBER_INT),0,1);
$lower = substr(filter_input(INPUT_POST, 'lower', FILTER_SANITIZE_NUMBER_INT),0,2);
$upper = substr(filter_input(INPUT_POST, 'upper', FILTER_SANITIZE_NUMBER_INT),0,2);
$faid = substr(filter_input(INPUT_POST, 'faid', FILTER_SANITIZE_NUMBER_INT),0,1);

if (($lower == "" and $upper == "") or ($lower == 0 and $upper == 0))
   exit("Invalid Input. You must enter with at least 1 credit hour <a href=\"javascript:history.go(-1)\">Go Back</a>");


if ($residency == 1)
   {
    $residency = "in-district";
    $tuition = ($lower * 105.75) + ($upper * 200) + (($lower + $upper) * 23) + 50 + 60;
   }

 else if($residency == 2){

    $residency = "Out of District Student";
    $tuition = ($lower * 184.50) + ($upper * 265) + (($lower + $upper) * 23) + 50 + 60;


 }

else if($residency == 3){

    $residency = "Out of State / International Student";
    $tuition = ($lower * 267.50) + ($upper * 350) + (($lower + $upper) * 23) + 50 + 60;


}

echo "<p>Total $residency tuition cost of $lower 100-200 credit hours and $upper 300-400 credit hours
is $". number_format($tuition,2) . "</p>";   


if($faid == 2){

echo "<p> Helpful Webpages </p>";
echo "<p> 

<a href = 'https://www.hfcc.edu/financial-aid'> https://www.hfcc.edu/financial-aid</a>
<a href = 'https://www.hfcc.edu/tuition-and-payment'>https://www.hfcc.edu/tuition-and-payment</a>
<a href = 'https://www.hfcc.edu/steps/payment'>https://www.hfcc.edu/steps/payment</a>

</p>";




}



?>




</body>

</html>