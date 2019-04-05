<?php
if(isset($_POST['signuppf-submit'])){

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
	$phone=$_POST['phone'];
	$degree=$_POST['degree'];
	if(empty($username) || empty($email) || empty($password) || empty($repassword) ){
		header("Location: ../Signup-professor.php?error=emptyfields&uid=".$username."&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
		exit();
	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/",$username)){
		header("Location: ../Signup-professor.php?error=invaliduidemail&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
		exit();
	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		header("Location: ../Signup-professor.php?error=invalidemail&uid=".$username."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
		exit();
	}
	else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
		header("Location: ../Signup-professor.php?error=invaliduid&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
		exit();
	}
	else if($password!==$repassword){
		header("Location: ../Signup-professor.php?error=passwordcheck&uid=".$username."&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
		exit();
	}
	else if(!empty($phone) && strlen($phone)!=10){
		header("Location: ../Signup-professor.php?error=phonelen&uid=".$username."&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
		exit();
	}
	else {
		$sql = "SELECT usrstudents FROM students WHERE usrstudents='$username'";
		$result=$conn->query($sql);
		if(!$result){
			header("Location: ../Signup-professor.php?error=sqlerror&uid=".$username."&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
			exit();
		}
		else{
				$rows=$result->num_rows;
				if($rows>0){
					header("Location: ../Signup-professor.php?error=usernameexists&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
					exit();
				}
		}
		$sql = "SELECT usrstudents FROM students WHERE emailstudents='$email'";
		$result=$conn->query($sql);
		if(!$result){
			header("Location: ../Signup-professor.php?error=sqlerror2&uid=".$username."&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
			exit();
		}
		else{
				$rows=$result->num_rows;
				if($rows>0){
					header("Location: ../Signup-professor.php?error=emailexists&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
					exit();
				}
		}
		/*/ proff /*/
		$sql = "SELECT emailprf FROM professors WHERE emailprf='$email'";
		$result=$conn->query($sql);
		if(!$result){
			header("Location: ../Signup-professor.php?error=sqlerror2&uid=".$username."&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
			exit();
		}
		else{
				$rows=$result->num_rows;
				if($rows>0){
					header("Location: ../Signup-professor.php?error=emailexists&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
					exit();
				}
		}
		$sql = "SELECT usrprf FROM professors WHERE usrprf='$username'";
		$result=$conn->query($sql);
		if(!$result){
			header("Location: ../Signup-professor.php?error=sqlerror2&uid=".$username."&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
			exit();
		}
		else{
				$rows=$result->num_rows;
				if($rows>0){
					header("Location: ../Signup-professor.php?error=usernameexists&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
					exit();
				}
		}
		$hashedpdw=password_hash($password,PASSWORD_DEFAULT);
		$sql="INSERT INTO professors (usrprf,emailprf,pwdprf,nmeprf,surnmeprf,schoolprf,departprf,phoneprf,degreeprf) VALUES ('$username','$email','$hashedpdw','$nme','$surnme','$school','$department','$phone','$degree')";
		$result=$conn->query($sql);
		if(!$result){
			header("Location: ../Signup-professor.php?error=sqlerror3&uid=".$username."&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
			exit();
		}
		else{
			session_start();
					$_SESSION['id']=2;
					$_SESSION['uid']=$username;
					$_SESSION['email']=$email;
					$_SESSION['nme']=$nme;
					$_SESSION['surnme']=$surnme;
					$_SESSION['school']=$school;
					$_SESSION['depart']=$department;
					$_SESSION['phone']=$phone;
					$_SESSION['degree']=$degree;
			header("Location: ../index.php?signup=success");
			exit();
		}
	}
	$conn->close();
}
else{
	header("Location: ../Signup-professor.php?");
			exit();
}
