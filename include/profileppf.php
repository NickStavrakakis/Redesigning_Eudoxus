<?php
if(isset($_POST['profilepf-submit'])){
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
	$phone=$_POST['phone'];
	$degree=$_POST['degree'];
	if(empty($username) || empty($email) || empty($password) || empty($repassword) ){
		header("Location: ../profile-professor.php?error=emptyfields&uid=".$username."&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
		exit();
	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/",$username)){
		header("Location: ../profile-professor.php?error=invaliduidemail&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
		exit();
	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		header("Location: ../profile-professor.php?error=invalidemail&uid=".$username."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
		exit();
	}
	else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
		header("Location: ../profile-professor.php?error=invaliduid&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
		exit();
	}
	else if($password!==$repassword){
		header("Location: ../profile-professor.php?error=passwordcheck&uid=".$username."&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
		exit();
	}
	else if(!empty($phone) && strlen($phone)!=10){
		header("Location: ../profile-professor.php?error=phonelen&uid=".$username."&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
		exit();
	}
	else {
		$sql = "SELECT usrstudents FROM students WHERE usrstudents='$username'";
		$result=$conn->query($sql);
		if(!$result){
			header("Location: ../profile-professor.php?error=sqlerror&uid=".$username."&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
			exit();
		}
		else{
				$rows=$result->num_rows;
				if($rows>0){
					header("Location: ../profile-professor.php?error=usernameexists&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
					exit();
				}
		}
		$sql = "SELECT usrstudents FROM students WHERE emailstudents='$email'";
		$result=$conn->query($sql);
		if(!$result){
			header("Location: ../profile-professor.php?error=sqlerror2&uid=".$username."&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
			exit();
		}
		else{
				$rows=$result->num_rows;
				if($rows>0){
					header("Location: ../profile-professor.php?error=emailexists&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
					exit();
				}
		}
		/*/ proff /*/
		$session_val_2=$_SESSION['email'];
		if($session_val_2!==$email){
		$sql = "SELECT emailprf FROM professors WHERE emailprf='$email'";
		$result=$conn->query($sql);
		if(!$result){
			header("Location: ../profile-professor.php?error=sqlerror2&uid=".$username."&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
			exit();
		}
		else{
				$rows=$result->num_rows;
				if($rows>0){
					header("Location: ../profile-professor.php?error=emailexists&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
					exit();
				}
		}
		}
		$session_val=$_SESSION['uid'];
		if($session_val!==$username){
		$sql = "SELECT usrprf FROM professors WHERE usrprf='$username'";
		$result=$conn->query($sql);
		if(!$result){
			header("Location: ../profile-professor.php?error=sqlerror2&uid=".$username."&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
			exit();
		}
		else{
				$rows=$result->num_rows;
				if($rows>0){
					header("Location: ../profile-professor.php?error=usernameexists&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
					exit();
				}
		}
		}
		$hashedpdw=password_hash($password,PASSWORD_DEFAULT);
		$sql="UPDATE professors SET usrprf='$username', emailprf='$email', pwdprf='$hashedpdw', nmeprf='$nme', surnmeprf='$surnme', schoolprf='$school', departprf='$department', phoneprf='$phone',degreeprf='$degree' WHERE usrprf='$session_val'";
		$result=$conn->query($sql);
		if(!$result){
			header("Location: ../profile-professor.php?error=sqlerror3&uid=".$username."&email=".$email."&nme=".$nme."&surnme=".$surnme."&school=".$school."&department=".$department."&phone=".$phone."&degree=".$degree);
			exit();
		}
		else{
			$_SESSION['uid']=$username;
			$_SESSION['email']=$email;
			$_SESSION['nme']=$nme;
			$_SESSION['surnme']=$surnme;
			$_SESSION['school']=$school;
			$_SESSION['depart']=$department;
			$_SESSION['phone']=$phone;
			$_SESSION['degree']=$degree;
			header("Location: ../profile-professor.php?profileupdate=success");
			exit();
		}
	}
	$conn->close();
}
else{
	header("Location: ../index.php?");
			exit();
}
