<?php
$title = "Task 5";
include "header.php"?>

<h1>In-class Task Arrays  09.02.2023 (array.php)</h1>

<h2>1. Write a php script to display courses as list. Use &lt;li&gt; </h2>

<?php
$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");
echo "<li>" . $courses[0];
echo "<li>" . $courses[1];
echo "<li>" . $courses[2];
echo "<li>" . $courses[3];
echo "<li>" . $courses[4];
?>


<h2>2. The unset() function is used to remove element from the array.<br>
The var_dump() function is used to dump information about a variable. <br>
array_values() is an inbuilt function that <br>
returns all the values of an array and not the keys.<br>
Delete an element from the array below:<br></h2>
<p>$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");<br></p>

<?php
$courses1 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[0]);
?>


<h2>3. Sort the following array</h2>
<p>$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");<br>
a) ascending order sort by value<br>
b) ascending order sort by Key<br>
c) descending order sort by Value<br>
d) descending order sort by Key<br></p>

<p>a)</p>
<?php
$courses3=array("PHP" =>"1", "HTML"=>"2", "JavaScript"=>"3", "CMS"=>"4", "Project"=>"5");
asort ($courses3);
foreach ($courses3 as $c =>$c_value){
    echo "Course: " . $c . " Grade: " . $c_value . "<br>";}
?>

<p>b)</p>
<?php
$courses3=array("PHP" =>"1", "HTML"=>"2", "JavaScript"=>"3", "CMS"=>"4", "Project"=>"5");
ksort ($courses3);
foreach ($courses3 as $c =>$c_value){
    echo "Course: " . $c . " Grade: " . $c_value . "<br>";}
?>

<p>c)</p>
<?php
$courses3=array("PHP" =>"1", "HTML"=>"2", "JavaScript"=>"3", "CMS"=>"4", "Project"=>"5");
arsort ($courses3);
foreach ($courses3 as $c =>$c_value){
    echo "Course: " . $c . " Grade: " . $c_value . "<br>";}
?>

<p>d)</p>
<?php
$courses3=array("PHP" =>"1", "HTML"=>"2", "JavaScript"=>"3", "CMS"=>"4", "Project"=>"5");
KRSORT ($courses3);
foreach ($courses3 as $c =>$c_value){
    echo "Course: " . $c . " Grade: " . $c_value . "<br>";}
?>


<h2>4. Change the following array's all values to upper case. </h2>
<?php
 $courses4=array("php", "html", "javascript", "cms", "project");
 $courses4 = array_flip($courses4);
 $courses4 = array_change_key_case($courses4, CASE_UPPER);
$courses4 = array_flip($courses4);
print_r($courses4);
?>


<h2>5. List all your favorite colors and their hexadecimal equivalents. (associative arrays) </h2>
<?php
$colors = array("coral" => "#ffa6a6", "sand" => "#fae3be");
echo "Favourite colours: coral - " . $colors['coral'];
echo "<br>";
echo "Favourite colours: sand - " . $colors['sand'];
?>


<h2>6. PHP script to calculate and display average temperature, five lowest and highest temperatures.</h2>

<p>Recorded temperatures : 78, 60, 62, 68, 71, 68, 73,<br>
 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, <br>
 74, 62, 62, 65, 64, 68, 73, 75, 79, 73<br>
<?php
echo "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? : 
// "explode" breaks a string into an array
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
// What is count?
// "count" counts the sum of all of the temperatures, for example 78+60+63+ ... + 73
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do?
// "sort" sorts temperature
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop
// the following loop gets top 5 highest temperatures
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>

<h2>Calculator that we made in class</h2>

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


<?php include "footer.php"; ?>