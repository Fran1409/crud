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

<a href="index.php">Home</a>

<h1>Change data:</h1>
<form action="" method="post">
    <label for="makeup">Update name:</label>
    <input type="text" name="updateName" value="<?= $_GET['name']?>"><br>
    <label for="brand">Update brand: </label>
    <input type="text" name="updateBrand" value="<?= $_GET['brand']?>"><br>
    <label for="price">Update price: </label>
    <input type="text" name="updatePrice" value="<?= $_GET['price']?>"><br>
    <input type="submit" value="Change palette" name="edit">
</form>

</body>
</html>