<?php
include 'db.php';
$email = $_GET['email'];

$query = mysqli_query($conn, "DELETE FROM marika_feedback WHERE
email = '$email'");


if ($query) {
    echo "<h2>Feedback deleted successfully</h2>";
} else {
    echo "<h2>Failed to delete a feedback</h2> " . mysqli_error($conn);
}
mysqli_close($conn);
?>