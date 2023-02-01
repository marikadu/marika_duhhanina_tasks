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
<h1>3.1 Write a simple PHP script to print your information (Name and your groupid).</h1>
<?php
echo "Marika Duhhanina <br>";
echo "BBCAP22";
?>

<?php // 3.2?>
<h1>3.2 Write PHP code to display the following message.</h1>
<?php
echo "Hello World!<br>";
echo "My name is \"David\"";
?>

<?php // 3.3?>
<h1>3.3 Current date.</h1>
<?php echo date("d.m.y")?>

<?php // 3.4?>
<?php $title = "PHP is interesting"?>
<h1>3.4 <?php echo $title?> </h>


</body>
</html>