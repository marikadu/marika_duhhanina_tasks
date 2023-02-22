<?php $title = "A simple CRUD app";
include "../layout/header.php"; ?>

<form method="post" action="" onsubmit="return crud()" name="form1">
    <input type="text" name="fname" placeholder="First Name" required onblur=fnameVal()> <br><br>
    <input type="text" name="lname" placeholder="Last Name" required><br><br>
    <input type="text" name="city" placeholder="City" required><br><br>
    <select name="groupid">
        <option value="BBCAP22"> BBCAP22 </option>
        <option value="BBCAP23"> BBCAP23 </option>
        <option value="BBCAP24"> BBCAP24 </option>
        <option value="BBCAP24"> Others </option>
    </select>
    <input type="submit" value="Submit" name="submit">

</form>

<?php
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];

    include 'db.php';
    $sql="insert into studentinfo (fname, lname, city, groupid)
    values('$fname', '$lname', '$city', '$groupid')";

    if($conn -> query($sql) === TRUE) {
        echo "New record added";}
    else {
      echo "Error: " . $sql . "<br>" . $conn -> $error;}

    $conn -> close();
}

?>

<?php include "../layout/footer.php"; ?>