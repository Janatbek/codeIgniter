<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../../assets/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style type="text/css">
	#center{
		width: 500px;
		margin: 0 auto;
		margin-top: 50px;
		/*display: inline-block;*/
	}
	.btn{
		float:right;
	}
</style>
</head>
<body>

	  <div id="center" class="row">
	    <form class="col s12" action="/login/create" method="post">
	    	<fieldset>
	    		<legend>Login</legend>
	    	      <div class="row">
			        <div class="input-field col s12">
			          <input id="email" name="email" type="email" class="validate">
			          <label for="email">Email</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
			          <input id="password" name="password" type="password" class="validate">
			          <label for="password">Password</label>
			        </div>
			      </div>
			      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
   					 <i class="material-icons right">send</i>
 				 </button>
	    	</fieldset>
	     </form>
	  </div>

	<div id="center" class="row">
	    <form class="col s12" action="/login/register" method="post">
			<fieldset>
				<legend>Register</legend>
			      <div class="row">
				        <div class="input-field col s12">
				          <label for="first_name">First Name</label>
				          <input id="first_name" name="first_name" type="text" class="validate">
				        </div>
			        <div class="input-field col s12">
			          <input id="last_name" name="last_name" type="text" class="validate">
			          <label for="last_name">Last Name</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
			          <input id="email" name="email" type="email" class="validate">
			          <label for="email">Email</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
			          <input id="password" name="password" type="password" class="validate">
			          <label for="password">Password</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
			          <input id="password" name="password" type="password" class="validate">
			          <label for="password">Confirm password</label>
			        </div>
			      </div>
			      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    				<i class="material-icons right">send</i>
  				</button>
			</fieldset>
	    </form>
  </div>


		<!--Import jQuery before materialize.js-->
      <script name="" type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../../assets/js/materialize.min.js"></script>
</body>
</html>