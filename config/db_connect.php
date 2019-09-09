<?php

	//connect to database
	$conn = mysqli_connect("localhost", "wojcikmarcin_ninja_pizza", "Kozak011011!", "wojcikmarcin_ninja_pizza");

	//check conection
	if (!$conn) {
			echo "Connection error" . mysqli_connect_error();
		}

?>