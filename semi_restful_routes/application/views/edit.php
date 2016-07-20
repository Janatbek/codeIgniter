<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Product 1 | Semi Restful Route Demo</title>
</head>
<body>

<h1>Edit Product 3</h1>
<div>
<form action="update" method="post">
<p>Name:</p>
<label><input type="text" value="T-Shirt"></label>
<p>Description:</p>
<label><input type="text" value="with CodingDojo logo"></label>
<p>Price:</p>
<label><input type="text" value="Price"></label>
<input type="submit" value="Update">

<a href="show">Show</a> | <a href="index">Back</a>

</body>
</html>