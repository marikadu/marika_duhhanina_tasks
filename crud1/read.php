<?php $title = "Reading Data from the database";
include "../layout/header.php"; 
include 'db.php';

$sql = "select * from studentinfo";
$result = $conn -> query($sql);

// if there is data in the table
if ($result -> num_rows > 0) {
    echo "<table class = 'table'>
        <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>City</th>
        <th>Group ID</th>
        </tr>";

    while($row = $result -> fetch_assoc()){
    echo "
        <tr>
        <th><a href = 'updatesingle.php?id=$row[id]'$row[id]'</a></th>
        <th>$row[fname]</th>
        <th>$row[lname]</th>
        <th>$row[city]</th>
        <th>$row[groupid]</th>
        </tr>";
    }
    echo "</table>";
}

else {
    echo "No results";
}
$conn -> close();
?>

<?php include "../layout/footer.php"; ?>