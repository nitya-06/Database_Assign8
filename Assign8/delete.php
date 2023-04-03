<?php
session_start();
ini_set('display_errors', 1);
error_reporting(-1);
$ID = $_SESSION['ID'];

$conn = mysqli_connect('localhost', 'nitya', 'satyam', 'db');
// Check connection
if ($conn === false) {
    echo 'ERROR: Could not connect. ';
    die('ERROR: Could not connect. ' . mysqli_connect_error());
}
//echo("ki");
$sql = "delete from user where ID = $ID ";

$result = mysqli_query($conn, $sql);

if($result){
  header("Location: after_delete.php");
}

?>
<!-- <form action="logout.php">
    <button type="submit">
        Log out
    </button>
    </form> -->
