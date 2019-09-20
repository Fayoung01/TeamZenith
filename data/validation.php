<?php

	include_once 'db.php';

	$errors = array();

	// To check if the button is clicked
	if(isset($_POST['submit'])) {
		$Firstname = mysqli_real_escape_string($connection, @$_POST['firstname']);

		$Lastname = mysqli_real_escape_string($connection, @$_POST['lastname']);

		$Email = mysqli_real_escape_string($connection, @$_POST['email']);

		$Password1 = mysqli_real_escape_string($connection, @$_POST['password1']);

		$Password2 = mysqli_real_escape_string($connection, @$_POST['password2']);

		//Error Handlers
		if (empty($Firstname) || empty($Lastname) || empty($Email) || empty($Password1)) {
			array_push($errors, "one/more fields are empty");
		} else if (!preg_match("/^[A-Za-z]*$/", $Firstname)) {
			array_push($errors, "Your firstname is incorrect");
		} else if (!preg_match("/^[A-Za-z]*$/", $Lastname)) {
			array_push($errors, "Your lastname is incorrect");
		} else if ($Password1 != $Password2) {
			array_push($errors, "Your passwords do not match");
		} else if(!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
			array_push($errors, "Your email is incorrect");
		} else {
			$password = md5($Password1);
			$sql = "INSERT INTO users(firstname, lastname, email, password) VALUES ('$Firstname', '$Lastname', '$Email', '$password')";
			mysqli_query($connection, $sql);
			header("location: data/success.php");
			$_SESSION['Email'] = $Email;
			$_SESSION['Password'] = $password;
		}
	}

	// Validation For Login

	if(isset($_POST['login'])) {
		$Email = mysqli_real_escape_string($connection, $_POST['email']);
		$Password = mysqli_real_escape_string($connection, $_POST['password']);

		if (!$Email && !$Password) {
			array_push($errors, "Your fields are empty");
		} else if(!$Email) {
			array_push($errors, "Your email is empty");
		} else if(!$Password) {
			array_push($errors, "Your password is empty");
		} else {
			$password = md5($Password);
			$query = "SELECT * FROM users WHERE email='$Email' AND password='$password'";
			$result = mysqli_query($connection, $query);

			if (mysqli_num_rows($result) == 1) {
				header("location: welcome.php");
			} else {
				array_push($errors, "Register to login");
			}
		}
	}

?>