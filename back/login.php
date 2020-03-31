<?php

if(isset($_POST["submit"])) {
	require "conn.php";

	$email = htmlspecialchars($_POST["email"]);
	$pwd = htmlspecialchars($_POST["pwd"]);

	if (empty($email) || empty($pwd)) {
		header("Location: ../index.php?msg=emptyFields");
		exit();
	} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../index.php?msg=invalidEmail");
		exit();
	} else {
		$sql = "SELECT cid FROM customer WHERE email=?";
		$stmt = mysqli_stmt_init($con);

		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location ../index.php?msg=sqlError");
			exit();
		} else {
			mysqli_stmt_bind_param($stmt, "s", $email);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$rows = mysqli_stmt_num_rows($stmt);
			
			if($rows===1) {
			$sql = "SELECT * FROM customer WHERE email=?";
			$stmt = mysqli_stmt_init($con);

			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location ../index.php?msg=sqlError");
				exit();
			} else {
				mysqli_stmt_bind_param($stmt, "s", $email);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);
				if ($row = mysqli_fetch_assoc($result)){
					
					$pwdReal = $row['pass'];
					$pwdCheck = password_verify($pwd,$pwdReal);

					if($pwdCheck === true) {
						session_start();
					
						$_SESSION["fnm"] = $row["CFname"];
						$_SESSION["lnm"] = $row["CLname"];
						$_SESSION["email"] = $row["Email"];

						header("Location: ../index.php?msg=done");
						exit();
					} else {
						header("Location: ../index.php?msg=invalidPass");
						exit();
					}
				}
			}

		} else {
			header("Location: ../index.php?msg=noUserFound");
			exit();
		}
		}

	}
} else {
	header("Location: ../index.php?msg=notSubmited");
	exit();
}

