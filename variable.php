<?php
$title = "Task 3";
include "header.php"?>

<h1>In-class Task Variable & Operators 07.02.2023 (variable.php)</h1>

<h2>1. Create a simple html form to get Firstname and Lastname <br>
    from the user and use echo echo statement to print <br>
    using h3 tag: Hello …., You are welcome to my site. <br> </h2>

<form action="action.php" method="post">
<div class=row>
    <div class="col-sm-1">
    <input type="text" name="fname" required placeholder = "First Name">
    </div>

    <div class="col-sm-1">
    <input type="text" name="lname" required placeholder = "Last Name">
    </div>

    <div class="col-sm-1">
    <input type="date" name="bdate" required placeholder = "Birthday Date">
    </div>

    <div class="col-sm-1">
    <input type="color" name="colour" required placeholder = "Colour">
    </div>

    <div class="col-sm-1">
    <input type="submit" value="Submit">
    </div>
    </form>
    </div>


    <div class="col-sm-2">
    <h2>3. Table</h2>

<table class = "table-striped">
<thead>
    <tr>
        <th scope="col"> S.N </th>
        <th scope="col"> Name </th>
        <th scope="col"> Grade </th>
    </tr>

</thead>
<tbody>
    <tr>
        <th scope="row"> 1 </th>
        <td> Pekka </td>
        <td> 5 </td>
    </tr>

    <tr>
        <th scope="row"> 2 </th>
        <td> Johanna </td>
        <td> 4 </td>
    </tr>

    <tr>
        <th scope="row"> 3 </th>
        <td> John </td>
        <td> 5 </td>
    </tr>

</tbody>
</table>
</div class="col-sm-2">

<h2>4. Write a PHP script with two string variables. <br>
    Assign any text to these variables. <br>
    Join them together.  <br>
    Print the length of the string. (Hint: string function). <br> </h2>

    <?php $word1 = "Hello";
    $word2 = "World<br>";
    echo $word1 . " " . $word2;
    echo strlen($word2)
    ?>


<h2>5. Write a script to add up the numbers: 298, 234, 46. <br>
    Use variables to store these numbers and echo statement to output your answer. <br> </h2>

    <?php
    $first_number = 298;
    $second_number = 234;
    $third_number = 46;

    $sum_total = $first_number + $second_number + $third_number;
    echo ($sum_total);
    ?>


<h2>6. Write a PHP script to detect the browser being used to view your pages. <br>
     (Use predefined variables: $_SERVER). </h2>

     <?php

   $user_agent = $_SERVER['HTTP_USER_AGENT'];
     echo $user_agent;

?>

     <h2>7. Write a PHP script in the footer section of your universal footer just below the Copyright information to <br>
        display the last modification time of a file. <br>
        (Hint: Use predefined variable $_SERVER, basename function  to get the filename , <br>
        filetime function to get the last modified time & date function to print the date and time) </h2>

<?php include "footer.php"; ?>