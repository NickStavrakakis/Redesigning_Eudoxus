<?php
	include "mainbody.php"
?>

<!DOCTYPE html>
<html>
<head>
    <title>Εύδοξος</title>
    <meta charset="UTF-8">
    <script src="js/w3.js"></script>
    <link rel="shortcut icon" type="image/png" href="img/favicon-16x16.png"/>    <link media="all" type="text/css" rel="stylesheet" href="breadcrumb.css">
    <link media="all" type="text/css" rel="stylesheet" href="breadcrumb.css">
	<link media="all" type="text/css" rel="stylesheet" href="profile.css">
</head>
<body>
	<div class="breadcrumbwrap">
        <p> Εγγραφή Φοιτητή </p>
    	<ul class="breadcrumb">
            <li><a href="index.php">Αρχική Σελίδα</a></li>
            <li><a href="Signup-professor.php">Εγγραφή Φοιτητή</a></li>
        </ul>
    </div>
	<div class="bodywrap">
		<div class="formwrap">
			<?php
				if(isset($_GET['error'])){
					if ($_GET['error']=="emptyfields"){
							echo '<p class="signuperror"><font color="red">Κάποια απαραίτητα πεδία έμειναν κενά</font></p>';
					}
					else if($_GET['error']=="usernameexists"){
							echo '<p class="signuperror"><font color="red">Το username χρησιμοποιείται</font></p>';
					}
					else if($_GET['error']=="emailexists"){
							echo '<p class="signuperror"><font color="red">Το e-mail χρησιμοποιείται</font></p>';
					}
					else if($_GET['error']=="passwordcheck"){
							echo '<p class="signuperror"><font color="red">Λάθος στην επαναπληκτρολόγηση του password</font></p>';
					}
					else if($_GET['error']=="invaliduid"){
							echo '<p class="signuperror"><font color="red">Λάθος στην πληκτρολόγηση του username</font></p>';
					}
					else if($_GET['error']=="invalidemail"){
							echo '<p class="signuperror"><font color="red">Μη έγκυρο e-mail</font></p>';
					}
					else if($_GET['error']=="invaliduidemail"){
							echo '<p class="signuperror"><font color="red">Μη έγκυρο e-mail και λάθος στην πληκτρολόγηση του username</font></p>';
					}
				}
			?>
			<div class="form">
				<form autocomplete="off" action="include/signups.php" method="post"> <br>
					<table>
						<tr>
							<th>
								Username: <font color="red">*</font>  <br>
								<input type="text" name="uid" value="<?php echo isset($_POST["uid"]) ? $_POST["uid"] : ''; ?>" placeholder="Λατινικοί Χαρακτήρες, χωρίς κενά"><br>
							</th>
							<th>
								E-mail: <font color="red">*</font> <br>
								<input type="text" name="mail" value="<?php echo isset($_POST["mail"]) ? $_POST["mail"] : ''; ?>"> <br>
							</th>
						</tr>
						<tr>
							<th>
								Όνομα: <br>
								<input type="text" name="nm" value="<?php echo isset($_POST["nm"]) ? $_POST["nm"] : ''; ?>"><br>
							</th>
							<th>
								Επώνυμο: <br>
								<input type="text" name="srnm" value="<?php echo isset($_POST["srnm"]) ? $_POST["srnm"] : ''; ?>"><br>
							</th>
						</tr>
						<tr>
							<th>
								Σχολή: <br>
								<input type="text" name="school" value="<?php echo isset($_POST["school"]) ? $_POST["school"] : ''; ?>"><br>
							 </th>
							<th>
								Τμήμα: <br>
								<input type="text" name="depart" value="<?php echo isset($_POST["depart"]) ? $_POST["depart"] : ''; ?>"><br>
							</th>
						</tr>
						<tr>
							<th>
								Kωδικός: <font color="red">*</font> <br>
								<input type="password" name="pwd" value="<?php echo isset($_POST["pwd"]) ? $_POST["pwd"] : ''; ?>" placeholder="Λατινικοί Χαρακτήρες, Σύμβολα, χωρίς κενά"><br>
							</th>
							<th>
								Επαναπληκτρολόγηση Kωδικού: <font color="red">*</font> <br>
								<input type="password" name="pwd-repeat" value="<?php echo isset($_POST["pwd-repeat"]) ? $_POST["pwd-repeat"] : ''; ?>" placeholder="Λατινικοί Χαρακτήρες, Σύμβολα, χωρίς κενά">	<br>
							</th>
						</tr>
						<tr>
							<td colspan="2">
								<font color="red">* Aπαιτείται για Εγγραφή Χρήστη</font>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<button class="submit" type="submit" name="signups-submit">Εγγραφή</button>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
