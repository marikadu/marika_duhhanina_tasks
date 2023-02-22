<?php
$title = "Task 1";
include "header.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first php page</title>
</head>
<body>

<?php // 3.1?>
<h1>3.1 Write a simple PHP script to print your information (Name and your groupid)</h1>
<?php
echo "Marika Duhhanina <br>";
echo "BBCAP22";
?>

<?php // 3.2?>
<h1>3.2 Write PHP code to display the following message</h1>
<?php
echo "Hello World!<br>";
echo "My name is \"David\"";
?>

<?php // 3.3?>
<h1>3.3 Current date</h1>
<?php echo date("d.m.y")?>

<?php
/* Other way to complete 3.4
<?php // 3.4?>
<?php $title = "PHP is interesting"?>
<h1>3.4 <?php echo $title?> </h>
*/
?>

<?php
$title1 = "PHP is interesting";
echo "<h1>" . $title1 . "</h1>";
?>

<?php // 3.5?>
<h1>3.5 Table</h1>
<?php 
$g1 = 5;
$g2 = 4;
$g3 = 5;
echo "<table>

<tr>
<th> S.N </th><th> Name </th><th> Grade </th>
</tr>

<tr>
<td> 1 </th><th> Pekka </th><th> $g1 </td>
</tr>

<tr>
<td> 2 </th><th> Johanna </th><th> $g2 </td>
</tr>

<tr>
<td> 3 </th><th> John </th><th> $g3 </td>
</tr>


</table>";
?>

<?php // 4?>
<h1>4 Screenshot</h1>
<img src="docker.png">

<input type="button" onclick="hello()" value="Click Me">
<script>
document.write("Hello this is interesting");
</script>

<button onclick="add()">Click to Add </button>
<hr>
<p id="place1" style="color:red; background-color:yellow;"> </p>
<span id="place2" style="color:blue; background-color:grey;"> </span>
<script>
    document.getElementById("place1").innerHTML = "This will go to place1";
    document.getElementById("place2").innerHTML = "This will go to span";
</script>

<h2> Change Background Colour <h2>
<form>
    <input type="colour" name="background" onchange="changeColour('background', this.value)">
</form>

<?php include "footer.php"; ?>

</body>
</html>