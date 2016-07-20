<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create a new Product</title>
</head>
<body>
	<form action="/products/create" method="post">
		<label>Name <input type="text" name="name"> 
		</label>
		<label>
			Description <input type="text" name="description">
		</label>
		<label>
			Price <input type="text" name="price">
		</label>
		<input type="submit" value="create">
	</form>

	<a href="index">Go Back</a>
</body>
</html>