<?php
$title = "Task 5";
include "header.php"?>

<h1>In-class Task Arrays  09.02.2023 (array.php)</h1>

<h2>1. Write a php script to display courses as list. Use &lt;li&gt; </h2>


<?php
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")
?>


<h2>2. The unset() function is used to remove element from the array.<br>
The var_dump() function is used to dump information about a variable. <br>
array_values() is an inbuilt function that <br>
returns all the values of an array and not the keys.</h2>


<form action="" method="get">
<input type="number" placeholder="Enter your first number" name="num1" required>
<input type="number" placeholder="Enter your second number" name="num2" required>
<select name="operator">
    <option value="add">Add</option>
    <option value="subtact">Subtract</option>
    <option value="multiply">Multiply</option>
    <option value="devide">Devide</option>
</select>
<input type="submit" name="cal" value="Calculate">
</form>

<?php
if (isset($_GET["cal"])) {
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

    $operator = $_GET["operator"];

    switch($operator){
        case "add":
        $result = $num1 + $num2;
        break;

        case "subtact":
        $result = $num1 - $num2;
        break;

        case "multiply":
        $result = $num1 * $num2;
        break;

        case "devide":
        $result = $num1 / $num2;
        break;

        default:
            $result = "Error: You have not selected the correct operation";
    }

    if (isset($result)) {
        echo "<h2> Result: $result</h2>";
    }
}
?>


<h2>3. Delete an element from the array below:</h2>
<p>$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");<br>
Sort the following array <br>
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");<br>
a) ascending order sort by value<br>
b) ascending order sort by Key<br>
c) descending order sort by Value<br>
d) descending order sort by Key<br></p>


<h2>4. Change the following array's all values to upper case. </h2>
<p> $courses4=array("php", "html", "javascript", "cms", "project");</p>


<h2>5. List all your favorite colors and their hexadecimal equivalents. (associative arrays) </h2>

<h2>6. PHP script to calculate and display average temperature, five lowest and highest temperatures.</h2>

<p>Recorded temperatures : 78, 60, 62, 68, 71, 68, 73,<br>
 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, <br>
 74, 62, 62, 65, 64, 68, 73, 75, 79, 73<br>
<br>
<br>
Write comments to explain the following code (when asked):<br>
*/<br>
echo "&lt;hr&gt;&lt;h2&gt; Calculation average temperature: &lt;/h2&gt;";<br>
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,<br>
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";<br>
// what is explode and what does the below code do? : <br>
$temp_array = explode(',', $month_temp);<br>
$tot_temp = 0;<br>
// What is count?<br>
$temp_array_length = count($temp_array);<br>
foreach($temp_array as $temp)<br>
{<br>
 $tot_temp += $temp;<br>
}<br>
 $avg_high_temp = $tot_temp/$temp_array_length;<br>
 echo "Average Temperature is : ".$avg_high_temp."<br>
"; <br>
// what does sort do?<br>
sort($temp_array);<br>
echo "<br> List of five lowest temperatures :";<br>
for ($i=0; $i< 5; $i++)<br>
{ <br>
echo $temp_array[$i].", ";<br>
}<br>
echo "<br>List of five highest temperatures :";<br>
// explain the following loop<br>
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)<br>
{<br>
echo $temp_array[$i].", ";<br>
}<br>
?><br>
</p>

<?php include "footer.php"; ?>