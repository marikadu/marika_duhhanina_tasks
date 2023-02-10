<?php $title = "A simple CRUD app";
include "../header.php"; ?>

<form method="post" action="">
    <input type="text" name="fname" placeholder="First Name" required> <br>
    <input type="text" name="lname" placeholder="Last Name" required><br>
    <input type="text" name="city" placeholder="City" required><br>
    <select name="groupid">
        <option value="BBCAP22"> BBCAP22 </option>
        <option value="BBCAP23"> BBCAP23 </option>
        <option value="BBCAP24"> BBCAP24 </option>
    </select>
    <input type="submit" value="Submit" name="submit">

</form>

<?php
if (isset($_POST['submit'])) {
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $city= $_POST['city'];
    $groupid= $_POST['groupid'];

    include 'db.php';
    $sql="insert into studentsinfo (fname, lname, city, groupid)
    values('$fname', '$lname', '$city', '$groupid')";

    if($conn -> query($sql) === TRUE) {
        echo "New record added";}
    else {
      echo "Error: " . $sql . "<br>" . $conn -> error;}

    $conn -> close();
}

?>

<?php include "../footer.php"; ?>