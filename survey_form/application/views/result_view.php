<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>result</title>
</head>
<body>
	<div class="alert alert-success">
		Thanks for submitting this form! You have submitted this form <?php echo $this->session->userdata('counter'); ?>
		time(s) now.
 	</div>
	<div id="body">
		<?php var_dump($this->session->userdata); ?>
		<h3>Submitted Information</h3>
		<p>Name: <?php echo $survey_info['first_name']; ?></p>
		<p>Dojo Location: <?php echo $survey_info['location']; ?></p>
		<p>Favorite Language: <?php echo $survey_info['language']; ?></p>
		<p>Comment: <?php echo $survey_info['comment']; ?></p>
		<a href="/Surveys" class='btn btn-primary'> Go back</a>
	</div>
</body>
</html>