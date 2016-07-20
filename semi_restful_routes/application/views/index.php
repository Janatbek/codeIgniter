<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Store</title>
</head>
<body>

<div id="container">
	<h1>Products</h1>

	<table>
			<tr>
				<th>Name</th>
				<th>Description</th>
				<th>Price</th>
				<th>Actions</th>
			</tr>
	
		<tbody>
		<?php foreach ($store_items as $item) {
			
		?>
			<tr>
				<td><?=$item['name']?></td>
				<td><?=$item['description']?></td>
				<td><?=$item['price']?></td>
				<td>
					<a href="/products/show/<?=$item['id']?>">Show</a> | <a href="/products/edit/<?=$item['id']?>">Edit</a> | <a href="destroy/<?=$item['id']?>">REMOVE</a>
				</td>
			</tr>
		<?php
		} 
		?>
			
		</tbody>
	</table>
			<a href="/products/add">Add a new product</a>

</div>

</body>
</html>
