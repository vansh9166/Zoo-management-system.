<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style/signupStyle.css">
	<title>Sign up page</title>
</head>
<body>

	<!-- <div class="header">

	</div> -->

		
	<div class="outerSignUp">

		<form action="back/signup.back.php" method="post">

			
		<?php

		$fnmErr = $lnmErr = $emlErr = $fnmErrLbl = $lnmErrLbl = $emlErrLbl= "";

		
		
		if(isset($_GET["msg"])) {

			if($_GET["msg"] == "invalidFnm") {
				$fnmErr = 'style="border-bottom-color:red"';
				$fnmErrLbl = 'style="color:red"';
			} else if ($_GET['msg'] == "invalidLnm") {
				$lnmErr = 'style="border-bottom-color:red"';
				$lnmErrLbl = 'style="color:red"';
			} else if($_GET['msg'] == "invalidEmail") {
				$emlErr = 'style="border-bottom-color:red"';
				$emlErrLbl = 'style="color:red"';
			} else {
				$_GET["fnm"] = $_GET["lnm"] = $_GET["eml"] = "";
			}

			echo '<br>
			<input type="text" class="fnm" name="fname"'. $fnmErr .'placeholder="" value="'.$_GET['fnm'].'" required>
			<label for="fname"'.$fnmErrLbl.' id="fnm"> First Name</label>
			<br>
			<input type="text" class="lnm" name="lname" '. $lnmErr .'placeholder="" value="'.$_GET['lnm'].'" required>
			<label for="lname" '.$lnmErrLbl.'  id="lnm">Last Name </label>
			<br>
			<input type="text" class="eml" name="email"'. $emlErr .'  placeholder="" value="'.$_GET['eml'].'" required>
			<label for="email" '.$emlErrLbl.'  id="eml">E-mail</label>                 
			<br>
			<input type="password" class="pwd" name="pwd" placeholder="" required> 
			<label for="pass" id="pwd">Password</label>
			<br>';
		} else {
		?>
			<br>
			<input type="text" class="fnm" name="fname" placeholder=""  required>
			<label for="fname" id="fnm"> First Name</label>
			<br>
			<input type="text" class="lnm" name="lname" placeholder="" required>
			<label for="lname" id="lnm">Last Name </label>
			<br>
			<input type="text" class="eml" name="email" placeholder="" required>
			<label for="email" id="eml">E-mail</label>                 
			<br>
			<input type="password" class="pwd" name="pwd" placeholder="" required> 
			<label for="pass" id="pwd">Password</label>
			<br>
			
		<?php } ?>
		<!-- <span style="color:white ">i am a </span>	
			<select name="" id="">
				<option value="customer">customer</option>
				<option value="emp">emp</option>
			</select>
			<br> -->
			<input type="submit" id="signup" value="SignUp" name="submit">
			<br>
			<br>
			<a href="../index.php">Alredy have an account?</a>
			<br>
			<br>

		</form>
	</div>

	<!-- <div class="footer">

	</div> -->
	 
</body>
</html>