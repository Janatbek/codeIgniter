<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Product 1 | Semi Restful Route Demo</title>
</head>
<body>
	<?php foreach ($itemsList as $toShow) { 
	?>
	<h1>Product <?php echo$toShow['id']; ?> </h1>
	<div>
		<table>
			<tr>
				<td>Name:</td>
				<td><?php echo$toShow['name']; ?></td>		
			</tr>
			<tr>
				<td>Description:</td>
				<td><?php echo$toShow['description']; ?></td>
			</tr>
			<tr>
				<td>Price::</td>
				<td><?php echo$toShow['price']; ?></td>
			</tr>
		</table>
	</div>
	<a href="/products/edit/<?php echo$toShow['id']; ?>">Edit</a> | <a href="/products/index">Back</a>
	<?php
	}
	?>
	




</body>
</html>