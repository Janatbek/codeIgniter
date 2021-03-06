<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Time Display</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		/*font: 13px/20px normal Helvetica, Arial, sans-serif;*/
		color: #4F5155;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
		text-align: center;
	
	}
	h1{
		border:1px solid black;
		width:400px;
		display: inline-block;
	}
	#time_display{
		font-size: 2em;
		text-align: center;
		border:1px solid black;
		width: 500px;
		margin:0 auto;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>The current time and date:</h1>
	<div id='time_display'> <p><?php echo $month; ?></p><p><?php echo $time; ?></p> </div>	
</div>

</body>
</html>