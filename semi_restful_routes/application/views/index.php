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
		<thead>
			<tr>
				<td>Name</td>
				<td>Description</td>
				<td>Price</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Hose</td>
				<td>For watering garden</td>
				<td>14.99</td>
				<td>
					<a href="show">Show</a> | <a href="edit">Edit</a> | <a href="destroy">REMOVE</a>
				</td>
			</tr>
			<tr>
				<td>Toaster</td>
				<td>Bread warming device</td>
				<td>29.99</td>
				<td>
					<a href="show">Show</a> | <a href="edit">Edit</a> | <a href="destroy">REMOVE</a>
				</td>
			</tr>
			<tr>
				<td>T-shirt</td>
				<td>with coding dojo logo</td>
				<td>39.95</td>
				<td>
					<a href="show">Show</a> | <a href="edit">Edit</a> | <a href="destroy">REMOVE</a>
				</td>
			</tr>
			<tr>
				<td>website</td>
				<td>For information</td>
				<td>15000</td>
				<td>
					<a href="show">Show</a> | <a href="edit">Edit</a> | <a href="destroy">REMOVE</a>
				</td>
			</tr>

		</tbody>
	</table>
			<a href="add_product">Add a new product</a>

</div>

</body>
</html>
