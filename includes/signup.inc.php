<?php 

if(isset($_POST["signup-submit"])){
	 
	 require 'dbh.inc.php';

	 $username = $_POST["uid"];
	 $email = $_POST["mail"];
	 $password = $_POST["pwd"];
	 $passwordRepeat = $_POST["pwd-repeat"];

	 if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){
	 	header("Location: ../signup.php?error=emptyfields&uid=".$username."&email=".$email);
	 	exit();
	 }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)) {
	 	header("Location: ../signup.php?error=invalidmailuid");
	 	exit();
	 }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
	 	header("Location: ../signup.php?error=invalidmail&uid=".$username);
	 	exit();
	 }elseif (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
	 	header("Location: ../signup.php?error=invaliduid&email=".$email);
	 	exit();
	 }elseif ($password !== $passwordRepeat) {
	 	header("Location: ../signup.php?error=passwordcheck&uid=".$username."&email=".$email);
	 	exit();
	 }else {
        $signupSuccess = saveUserToDatabase($username, $email, $password, $passwordRepeat);
        $signupSuccess = true;

        if ($signupSuccess) {
            header("Location: home.php");
            exit();
        }
        else {
            header("Location: signup.php?error=usertaken");
            exit();
        }
    }
}
?>