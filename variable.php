<?php
$title = "Exercise 3";
include "header.php"?>

<h1>In-class Task Variable & Operators 07.02.2023 (variable.php)</h1>

<h2>Create a simple html form to get Firstname and Lastname 
    from the user and use echo echo statement to print 
    using h3 tag: Hello …., You are welcome to my site. </h2>

<form action.php method="post">
    First Name: <input type="text" name="fname"><br>
    Last Name: <input type="text" name="lname"><br>
    Birth Date: <input type="date" name="bdate"><br>
    Select colour: <input type="color" name="colour"><br>
    <input type="submit" value="Submit">

</form>
<?php include "footer.php" ?>