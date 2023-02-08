<?php
$title = "Task 4";
include "header.php"?>

<h1>In-class Task Control flow and loops 08.02.2023 (controlflow.php)</h1>

<h2>1. Write a script that gets the current month <br>
and prints one of the following responses, <br>
depending on whether it's August or not: <br>
It's August, so it's still holiday. <br>
Not August, this is Month-name so I don't have any holidays</h2>

<?php
$d = date("F");

     if ($d == "August") {
        echo "It's August, so it's still holiday. <br>";}

    else {
        echo "Not August, this is $d so I don't have any holidays.";}
?>

<h2>2. Assign colour red to a variable name $color and <br>
    check to print one the following responses <br>
    (if else statement)</h2>

    <?php
    $color = "red";

    if ($color == "red") {
        echo "The colour is red. <br>";}
    
    else {
        echo "The color is not red.";}
    ?>

<h2>3. Write a program to grade students based on <br>
     their total score for a subject. <br>
    Use variable to hold the total score.</h2>

    <?php
    $grade = 70;

    if ($grade >= 80) {
        echo "Excellent <br>";}
    
    elseif ($grade >= 70 && $grade < 80) {
        echo "Great";}

    elseif ($grade >= 60 && $grade < 70) {
        echo "Good";}

    elseif ($grade >= 50 && $grade < 60) {
        echo "Pass";}

    elseif ($grade <= 50) {
        echo "Fail";}
    ?>

<h2>4. Write a program to get inputs (age and name) from the user and based on their age, <br>
    decide if he/she is eligible for voting. <br>
    (18 or more than 18 years is eligible for voting,) <br></h2>

    <?php
    $age = 15;

    if ($age >= 18) {
        echo "You are eligible for voting. <br>";}
    
    else {
        echo "You are not eligible for voting. <br> ";}
    ?>


<h2>5. In task 5, you used $_SERVER['HTTP_USER_AGENT']; <br>
    to get the browser name. <br>
    Use Switch statement with strops function to <br>
    print the name of the browser as below: <br>
If someone is using Chrome it should print, you are using Goolge Chrome…. </h2>

<?php
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

     if (strpos($user_agent,'Edg') == True) {
    echo ("You are using Microsoft Edge.");
     }

     elseif (strpos($user_agent,'Firefox') == True) {
        echo ("You are using Firefox.");
    }

        elseif (strpos($user_agent,'Chrome') == True) {
        echo ("You are using Google Chrome");
    }
?>


<?php include "footer.php"; ?>