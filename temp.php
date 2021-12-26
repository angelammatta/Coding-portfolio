<!DOCTYPE html>

<head>

<meta charset = "utf-8"/>
<link href="css/temp.css"  rel="stylesheet" type = "text/css"/>   
<title>Average Temperature Calculator</title>

</head>

<body>

<h1>Average Temperature Calculator </h1>

<img src = "images/sky.jpg" alt = "Image of a slightly cloudy sky"/>

<form action = "temp2.php" method = "post">
<table>

<tr>
<td>Zip Code:</td>
<td><input type = "number" name = "zipCode" min = "0" max = "99999" required></td>
</tr>


<tr>
<td>Sunday:</td>
<td><input type = "number" name = "sundayTemp" min = "-20" max = "150" required></td>
</tr>


<tr>
<td>Monday:</td>
<td><input type = "number" name = "mondayTemp" min = "-20" max = "150" required></td>
</tr>


<tr>
<td>Tuesday:</td>
<td><input type = "number" name = "tuesdayTemp" min = "-20" max = "150" required></td>
</tr>


<tr>
<td>Wednesday:</td>
<td><input type = "number" name = "wednesdayTemp" min = "-20" max = "150" required></td>
</tr>


<tr>
<td>Thursday:</td>
<td><input type = "number" name = "thursdayTemp" min = "-20" max = "150" required></td>
</tr>


<tr>
<td>Friday:</td>
<td><input type = "number" name = "fridayTemp" min = "-20" max = "150" required></td>
</tr>


<tr>
<td>Saturday:</td>
<td><input type = "number" name = "saturdayTemp" min = "-20" max = "150" required></td>
</tr>


<tr>
<td colspan = "2"><input type = "submit" value = "Calculate"></td>
</tr>

</table>
</form>

</body>
</html>

