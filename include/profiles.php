<?php
if(isset($_POST['profiles-submit'])){
	session_start();
	require_once 'dbsconn.php';
	$conn=new mysqli($servername,$dbusername,$dbpassword,$dbname);
	if($conn->connect_error){
			die($conn->connect_error);

	}

	mysqli_query($conn, "SET NAMES 'utf8'");
	mysqli_query($conn, "SET CHARACTER SET 'utf8'");
	$username=$_POST['uid'];
	$email=$_POST['mail'];
	$password=$_POST['pwd'];
	$repassword=$_POST['pwd-repeat'];
	$nme=$_POST['nm'];
	$surnme=$_POST['srnm'];
	$school=$_POST['school'];
	$department=$_POST['depart'];
	if(empty($username) || empty($email) || empty($password) || empty($repassword) ){
		header("Location: ../profile-student.php?error=emptyfields&uid=".$username."&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department);
		exit();
	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/",$username)){
		header("Location: ../profile-student.php?error=invaliduidemail&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department);
		exit();
	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		header("Location: ../profile-student.php?error=invalidemail&uid=".$username."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department);
		exit();
	}
	else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
		header("Location: ../profile-student.php?error=invaliduid&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department);
		exit();
	}
	else if($password!==$repassword){
		header("Location: ../profile-student.php?error=passwordcheck&uid=".$username."&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department);
		exit();
	}
	else {
		$session_val=$_SESSION['uid'];
		if($session_val!==$username){
		echo "lit";
		$sql = "SELECT usrstudents FROM students WHERE usrstudents='$username'";
		$result=$conn->query($sql);
		if(!$result){
			header("Location: ../profile-student.php?error=sqlerror&uid=".$username."&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department);
			exit();
		}
		else{
				$rows=$result->num_rows;
				if($rows>0){
					header("Location: ../profile-student.php?error=usernameexists&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department);
					exit();
				}
		}
		}
		$session_val_2=$_SESSION['email'];
		if($session_val_2!==$email){
		$sql = "SELECT usrstudents FROM students WHERE emailstudents='$email'";
		$result=$conn->query($sql);
		if(!$result){
			header("Location: ../profile-student.php?error=sqlerror2&uid=".$username."&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department);
			exit();
		}
		else{
				$rows=$result->num_rows;
				if($rows>0){
					header("Location: ../profile-student.php?error=emailexists&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department);
					exit();
				}
		}
		}
		/*prof*/
		$sql = "SELECT emailprf FROM professors WHERE emailprf='$email'";
		$result=$conn->query($sql);
		if(!$result){
			header("Location: ../profile-student.php?error=sqlerror2&uid=".$username."&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
			exit();
		}
		else{
				$rows=$result->num_rows;
				if($rows>0){
					header("Location: ../profile-student.php?error=emailexists&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
					exit();
				}
		}
		$sql = "SELECT usrprf FROM professors WHERE usrprf='$username'";
		$result=$conn->query($sql);
		if(!$result){
			header("Location: ../profile-student.php?error=sqlerror2&uid=".$username."&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
			exit();
		}
		else{
				$rows=$result->num_rows;
				if($rows>0){
					header("Location: ../profile-student.php?error=usernameexists&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
					exit();
				}
		}
		$hashedpdw=password_hash($password,PASSWORD_DEFAULT);
		$sql="UPDATE students SET usrstudents='$username', emailstudents='$email', pwdstudents='$hashedpdw', namestudents='$nme', surnamestudents='$surnme', schoolstudents='$school', departmentstudents='$department' WHERE usrstudents='$session_val'";
		$result=$conn->query($sql);
		if(!$result){
			header("Location: ../profile-student.php?error=sqlerror3&uid=".$username."&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department);
			exit();
		}
		else{
			$_SESSION['uid']=$username;
			$_SESSION['email']=$email;
			$_SESSION['nme']=$nme;
			$_SESSION['surnme']=$surnme;
			$_SESSION['school']=$school;
			$_SESSION['depart']=$department;
			header("Location: ../profile-student.php?profileupdate=success");
			exit();
		}
	}
	$conn->close();
}
else{
	header("Location: ../index.php?");
	exit();
}
