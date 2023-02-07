<?php
$title = "Exercise 3";
include "header.php";

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['bdate'];
    $color = $_POST['colour'];

    echo "<h3> Your name is $fname $lname. Your Birthday date is $dob. Your chosen colour is $color. </h3>"

?>
<?php include "footer.php" ?>