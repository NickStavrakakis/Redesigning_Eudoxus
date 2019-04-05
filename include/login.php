<?php
if(isset($_POST['login-submit'])){
	require_once 'dbsconn.php';
	$conn=new mysqli($servername,$dbusername,$dbpassword,$dbname);
	if($conn->connect_error){
			die($conn->connect_error);
	}
	mysqli_query($conn, "SET NAMES 'utf8'");
	mysqli_query($conn, "SET CHARACTER SET 'utf8'");
	$username=$_POST['mailud'];
	$password=$_POST['pwd'];
	if(empty($username)|| empty($password)){
		header("Location: ../index.php?error=emptyfields");
		exit();
	}
	else{
		/* students*/
		$sql= "SELECT * FROM students WHERE usrstudents='$username' OR emailstudents='$username'";
		$result=$conn->query($sql);
		if(!$result){
			header("Location: ../index.php?error=sqlerror");
			exit();
		}
		else{
			$rows=$result->num_rows;
			if($rows>0){
				$result->data_seek(0);
				$row=$result->fetch_array(MYSQLI_ASSOC);
				$pwdcheck=password_verify($password,$row['pwdstudents']);
				if($pwdcheck==false){
					header("Location: ../index.php?error=wrongpassword");
					exit();
				}
				else{
					session_start();
					$_SESSION['id']=1;
					$_SESSION['uid']=$row['usrstudents'];
					$_SESSION['email']=$row['emailstudents'];
					$_SESSION['nme']=$row['namestudents'];
					$_SESSION['surnme']=$row['surnamestudents'];
					$_SESSION['school']=$row['schoolstudents'];
					$_SESSION['depart']=$row['departmentstudents'];
					header("Location: ../index.php?login=success");
					exit();
				}
			}
		}
		/*prof*/
		$sql= "SELECT * FROM professors WHERE usrprf='$username' OR emailprf='$username'";
		$result=$conn->query($sql);
		if(!$result){
			header("Location: ../index.php?error=sqlerror");
			exit();
		}
		else{
			$rows=$result->num_rows;
			if($rows>0){
				$result->data_seek(0);
				$row=$result->fetch_array(MYSQLI_ASSOC);
				$pwdcheck=password_verify($password,$row['pwdprf']);
				if($pwdcheck==false){
					header("Location: ../index.php?error=wrongpassword");
					exit();
				}
				else{
					session_start();
					$_SESSION['id']=2;
					$_SESSION['uid']=$row['usrprf'];
					$_SESSION['email']=$row['emailprf'];
					$_SESSION['nme']=$row['nmeprf'];
					$_SESSION['surnme']=$row['surnmeprf'];
					$_SESSION['school']=$row['schoolprf'];
					$_SESSION['depart']=$row['departmentprf'];
					$_SESSION['phone']=$row['phoneprf'];
					$_SESSION['degree']=$row['degreeprf'];
					header("Location: ../index.php?login=success");
					exit();
				}
			}
			else{
				header("Location: ../index.php?error=wrongusername");
				exit();
			}
		}
	}
}
else{
	header("Location: ../index.php?");
	exit();
}
