<!DOCTYPE html>
<html>
<head>
<title>Grade Calculator</title>
</head>

<body>
    <?php

$hw1 = substr(filter_input(INPUT_POST, 'hw1', FILTER_SANITIZE_NUMBER_INT),0,3);
$hw2 = substr(filter_input(INPUT_POST, 'hw2', FILTER_SANITIZE_NUMBER_INT),0,3);
$hw3 = substr(filter_input(INPUT_POST, 'hw3', FILTER_SANITIZE_NUMBER_INT),0,3);
$q1 = substr(filter_input(INPUT_POST, 'quiz1', FILTER_SANITIZE_NUMBER_INT),0,3);
$q2 = substr(filter_input(INPUT_POST, 'quiz2', FILTER_SANITIZE_NUMBER_INT),0,3);
$q3 = substr(filter_input(INPUT_POST, 'quiz3', FILTER_SANITIZE_NUMBER_INT),0,3);
$q4 = substr(filter_input(INPUT_POST, 'quiz4', FILTER_SANITIZE_NUMBER_INT),0,3);
$q5 = substr(filter_input(INPUT_POST, 'quiz5', FILTER_SANITIZE_NUMBER_INT),0,3);
$exam1 = substr(filter_input(INPUT_POST, 'exam1', FILTER_SANITIZE_NUMBER_INT),0,3);


$grade = (($hw1+$hw2+$hw3+$q1+$q2+$q3+$q4+$q5+$exam1)/425) * 100;

echo "<p>Current course grade is " . round($grade,0);

if($grade >= 90)
{

    echo " which is an A.</p>";
}

else if($grade >= 80)
{

    echo " which is a B.</p>";
}
else if($grade >= 70)
{

    echo " which is a C.</p>";
}

else if($grade >= 60)
{

    echo " which is a D.</p>";
}
else{

    echo " which is an E.</p>";
}


?>





</body>

</html>