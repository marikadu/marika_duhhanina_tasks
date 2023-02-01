<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first php page</title>
</head>
<body>

<?php include "header.php";?>
    <h1>3.1 Write a simple PHP script to print your information (Name and your groupid).</h1>

<?php
echo "Marika Duhhanina <br>";
echo "BBCAP22";
?>

<h1>3.2 Write PHP code to display the following message.</h1>

<?php
echo "Hello World!<br>";
echo "My name is \"David\"";
?>

<h1>3.3 Current date. </h1>

<?php echo date("d.m.y");
include "footer.php";?>

</body>
</html>