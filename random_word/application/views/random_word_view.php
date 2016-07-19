<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Random Word Project</title>
</head>
<style type="text/css">
	#container{
		margin: 0 auto;
	}
	#random{
		width:400px;
		height: 100px;
		border: 1px solid black;
		margin-bottom: 10px;
		text-align: center;
		line-height: 100px;
		font-size: 2em;
	}

</style>
<body>
	<div id="container">
		<h1>Random Word  (attempt # <?php echo $this->session->userdata('counter'); ?>)</h1>
		<div id="random">
			<?php echo $num ?>	
		</div>
		
		<form action="random/generate" method="post">
			<input type="submit" value="Generate">
		</form>

	</div>
	
</body>
</html>