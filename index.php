<?php
	
	include('config/db_connect.php');

	//write query from all pizzas
	$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';	

	//make query and get result
	$result = mysqli_query($conn, $sql);

	//fetch the resulting rows as an array
	//(Warning) function mysqli_fetch has been DEPRECATED as of PHP 5.3.0 and REMOVED as of PHP 5.4.0.
	$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

	//free result from memory
	mysqli_free_result($result);

	//close conection
	mysqli_close($conn);


?>

<!DOCTYPE html>
<html>

	<?php include('templates/header.php'); ?>

	<h4 class="center grey-text">Pizzas</h4>
	<div class="container">
		<div class="row">
			<?php foreach ($pizzas as $pizza): ?>
				<div class="col s6 m3">
					<div class="card z-deph-0">
						<div class="card-content cemter">
							<h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
							<ul>
								<?php foreach (explode(",", $pizza['ingredients']) as $pizzaIngredients): ?>
								<li><?php echo htmlspecialchars($pizzaIngredients); ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="details.php?id=<?php echo $pizza['id'] ?>">more info</a>
						</div>
					</div>
				</div>
				
			<?php endforeach; ?>

		</div>
	</div>

	<?php include('templates/footer.php'); ?>

	<form action="">
		
	</form>


</html>