<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">
	
		form{
			display: inline-block;
    		width: 260px;
    		border: 1px solid black;
		}
		input[type="submit"]{
			background: blue;
			color: white;
			border:none;
			float: right;
		}
		textarea{
			width: 230px;
			height: 50px;
		}
		div{
			margin: 10px 0 0 10px;
		}
	</style>
</head>
<body>

<div id="container">
<body>
	<div id="wrapper">
		<form action="result" method="post">
			<div>
				<label for="name">Your Name:</label>
				<input type="text" name="first_name">
			</div>	
			<div>
				<label for="location">Dojo Location:</label>
				<select name="location">
					<option>Los Angeles, CA</option>
					<option>Seattle, WA</option>
					<option>Dallas, TX</option>
					<option>San Jose, CA</option>
					<option>Chicago, IL</option>
				</select>
			</div>
			<div>
				<label for="language">Favorite Language:</label>
				<select name="language">
					<option>Javascript</option>
					<option>PHP</option>
					<option>Ruby</option>
					<option>Python</option>
					<option>IO's</option>
				</select>
			</div>
			<div>
				<label for="comment">Comment (optional)</label>
				<textarea name="comment"></textarea>
				<input type="submit" value="Submit">
			</div>

		</form>

		


	</div>
</body>

		
</div>

</body>
</html>