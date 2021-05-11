
<?php
$mysqli = new mysqli("localhost", "root", "", "project");

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($mysqli, "DELETE FROM  marks WHERE id = $id");
	echo "Rcord deleted!"; 
header('location: courseshow.php');
}