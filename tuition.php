<!DOCTYPE html>
<html>
<head>
<title>HFC Tuition Calculator</title>
</head>

<body>

<h1>Tuition Calculator</h1>

<form action = "tuition2.php" method = "post" >

<p>Residency<br> 

<select name = "residency">

<option value="1">In District Student
<option value="2">Out of District Student
<option value="3">Out of State / International Student


</select>

<p>Level 100 & 200 Courses <br> 

<input type = "number" name = "lower" min = "0" max = "25"> </p>

<p>Level 300 & 400 Courses <br> 

<input type = "number" name = "upper" min = "0" max = "25"> </p>

<p>Financial Aid<br> 

<select name = "faid">

<option value="1">No
<option value="2">Yes


</select>


<p><input type = "submit" value = "Calculate" ></p>

</form>




</body>

</html>