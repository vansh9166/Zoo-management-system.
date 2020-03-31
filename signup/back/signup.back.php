<?php

if (isset($_POST["submit"])) {

	require "../../back/conn.php";

	$fnm = htmlspecialchars($_POST["fname"]);
	$lnm = htmlspecialchars($_POST["lname"]);
	$email = htmlspecialchars($_POST["email"]);
	$pwd = htmlspecialchars($_POST["pwd"]);

		// echo "$fnm $lnm $email $pwd";
	if (empty($fnm) || empty($lnm) || empty($email) || empty($pwd)) {
		header("Location: ../signup.php?msg=emptyVal");
		exit();
	} else if (!preg_match("/^[a-zA-Z]*$/", $fnm)) {
		header("Location: ../signup.php?msg=invalidFnm&fnm=$fnm&lnm=$lnm&eml=$email");
		exit();
	} else if (!preg_match("/^[a-zA-Z]*$/", $lnm)) {
		header("Location: ../signup.php?msg=invalidLnm&fnm=$fnm&lnm=$lnm&eml=$email");
		exit();
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../signup.php?msg=invalidEmail&fnm=$fnm&lnm=$lnm&eml=$email");
		exit();
	} else {

		// Everything is good

		$sql = "SELECT customer.cid FROM customer WHERE customer.email=?";
		$stmt = mysqli_stmt_init($con);

		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../signup.php?msg=sqlError1");
			exit();
		} else {
			mysqli_stmt_bind_param($stmt, "s", $email);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$row_count = mysqli_stmt_num_rows($stmt);

			if ($row_count == 0) {
				// No user found
				$sql = "INSERT INTO customer (cfname, clname, email, pass) VALUES (?, ?, ?, ?)";
				$stmt = mysqli_stmt_init($con);

				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: ../signup.php?msg=sqlError");
					exit();
				} else {
					$hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt, "ssss", $fnm, $lnm, $email, $hashed_pwd);
					mysqli_stmt_execute($stmt);
					session_start();
					$_SESSION["fnm"] = $fnm;
					$_SESSION["lnm"] = $lnm;
					$_SESSION["email"] = $email;
					header("Location: ../../index.php");
					exit();

				}

			} else {
				header("Location: ../signup.php?msg=userExist");
				exit();
			}
		}

	}

} else {
	header("Location: ../signup.php?msg=fillPlace");
	exit();
}