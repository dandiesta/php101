<html>
	<head><title>Exercise #3</title></head>
	<body>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<h3><b>Please input your name: </b></h3>
			<input type="text" name="name" />
			<input type="submit" name="submit" value="Submit Name"/>

			<?php
				$name = $_POST['name'];

				echo "<h4>Hello {$name}</h4>";
			?>
		</form>
	</body>
</html>