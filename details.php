<?php

	include('config/db_connect.php');

	//check GET request id param
	if (isset($_GET['id'])) {
		$id = mysqli_real_escape_string($conn, $_GET['id']);

	//make sql
	$sql = "SELECT * FROM pizzas WHERE id = $id";

	//get the query result
	$result = mysqli_query($conn, $sql);

	//fetch result in array format
	$pizza = mysqli_fetch_assoc($result);


	}

?>

<!DOCTYPE html>
<html>

<?php include('templates/header.php'); ?>

<h2>More info</h2>

<?php include('templates/footer.php'); ?>


</html>