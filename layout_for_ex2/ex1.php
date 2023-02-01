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

</body>
</html>