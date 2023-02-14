<?php $title = "Update Your Info";
include "../layout/header.php"; 
include 'db.php';
$a = $_GET['id'];
$result = mysqli_query($conn, "Select * from studentinfo where id = '$a' ");
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
    </select>
    <input type="update" value="Update Your Info" name="submit"><br><br>
    <input type="delete" value="Delete Your Info" name="submit"><br><br>

</form>

<?php include "../layout/footer.php"; ?>