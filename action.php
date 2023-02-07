<?php
$title = "Exercise 3";
include "header.php";

$fname = $_POSE['fname'];
$lname = $_POSE['lname'];
$bdate = $_POSE['bdate'];
$color = $_POSE['color'];

echo "<h3> Your name is $fname $lname. Your Birthday date is $bdate. Your chosen colour is $color. </h3>";

?>

<?php include "footer.php" ?>