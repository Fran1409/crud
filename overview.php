<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css" rel="stylesheet" />

	<title>Make-up Stash</title>
</head>
<body>

	<h1>Make-up Stash</h1>

	<ul>
		<?php foreach ($palettes as $palette) : ?>
			<li><?= $palette['name'].' - '.$palette['brand'].' - €'.$palette['price'].' - '?>
			<a href="edit.php?editId=<?= $palette['id']?>&name=<?= $palette['name']?>&brand=<?= $palette['brand']?>&price=<?= $palette['price']?>" >edit</a>
			</li>
			
		<?php endforeach; ?>
	</ul>

	<form action="" method="post">
		<label for="makeup">Make-up Palette: </label>
		<input type="text" name="makeup"><br>
		<label for="brand">Brand: </label>
		<input type="text" name="brand"><br>
		<label for="price">Price: </label>
		<input type="text" name="price"><br>
		<input type="submit" value="Add to database" name="submit">
	</form>

</body>
</html>