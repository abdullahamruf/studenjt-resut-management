
<?php
$mysqli = new mysqli("localhost", "root", "", "project");

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($mysqli, "DELETE FROM course WHERE serial_no = $serial_no");
	echo "Rcord deleted!"; 
header('location: markshow.php');
}