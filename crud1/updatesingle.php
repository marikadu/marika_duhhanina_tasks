<?php $title = "Update Your Info";
include "../layout/header.php"; 
include 'db.php';
$a = $_GET['id'];
$result = mysqli_query($conn, "SELECT * from studentinfo where id='$a' ");
$row = mysqli_fetch_array($result);

?>

<h2> Update your information below </h2>
<form name = "update" method = "post" action="">
    <input type="text" name="fname" placeholder="First Name" required value="<?php echo $row['fname'];?>"> <br><br>
    <input type="text" name="lname" placeholder="Last Name" required value="<?php echo $row['lname'];?>"> <br><br>
    <input type="text" name="city" placeholder="City" required value="<?php echo $row['city'];?>"> <br><br>
    <select name="groupid" value="<?php echo $row['groupid'];?>"> <br><br>
        <option value="BBCAP22"> BBCAP22 </option>
        <option value="BBCAP23"> BBCAP23 </option>
        <option value="BBCAP24"> BBCAP24 </option>
        <option value="BBCAP24"> Others </option>
    </select> <br><br>
    <input type="submit" value="Update Your Info" name="submit"><br><br>
    <input type="submit" value="Delete Your Info" name="submit"><br><br>

</form>

<!--make update button work and update data-->
<?php if (isset($_POST['update'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];
    $query = mysqli_query($conn, "UPDATE studentinfo set 
    fname = '$fname', 
    lname = '$lname',
    city = '$city',
    groupid = '$groupid'
    where id='$a' ");

    if($query) {
        echo "<h2> Your information is updated successfully </h2>";
    }

    else {
        echo "<h2> Record is not modified </h2>";
    }
}
?>

<!--make delete button work and delete data-->
<?php if (isset($_POST['delete'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];
    $query = mysqli_query($conn, "DELETE studentinfo set 
    fname = '$fname', 
    lname = '$lname',
    city = '$city',
    groupid = '$groupid'
    where id='$a' ");

    if($query) {
        echo "<h2> Your information is updated successfully </h2>";
    }

    else {
        echo "<h2> Record is not modified </h2>";
    }
}
?>

<?php include "../layout/footer.php"; ?>