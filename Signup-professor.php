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
        <p> Εγγραφή Διδάσκοντα </p>
    	<ul class="breadcrumb">
            <li><a href="index.php">Αρχική Σελίδα</a></li>
            <li><a href="Signup-professor.php">Εγγραφή Διδάσκοντα</a></li>
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
					else if($_GET['error']=="phonelen"){
							echo '<p class="signuperror"><font color="red">Το τηλέφωνο πρέπει να αποτελείται από 10 αριθμούς</font></p>';
					}
				}
			?>
			<div class="form">
				<form autocomplete="off" action="include/signuppf.php" method="post"> <br>
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
								<select name="school" id="school">
									<option disabled selected value>--επιλέξτε Πανεπιστήμιο--</option>
									<option value="ΕΘνικό Καποδιστριακό Πανεπιστήμιο Αθηνών">ΕΘνικό Καποδιστριακό Πανεπιστήμιο Αθηνών</option>
									<option value="Οικονομικό Πανεπιστήμιο ΑΘηνών">Οικονομικό Πανεπιστήμιο ΑΘηνών</option>
									<option value="Πανεπιστήμιο Πειραία">Πανεπιστήμιο Πειραία</option>
								</select>
						 </th>
							<th>
								Τμήμα: <br>
								<select name="depart" id="depart">
									<option disabled selected value>--επιλέξτε Tμήμα--</option>
									<option value="﻿Αγγλικής Γλωσσάς Και Φιλολογίας">﻿Αγγλικής Γλωσσάς Και Φιλολογίας</option>
									<option value="Γαλλικής Γλωσσάς Και Φιλολογίας">Γαλλικής Γλωσσάς Και Φιλολογίας</option>
									<option value="Γερμανικής Γλωσσάς Και Φιλολογίας">Γερμανικής Γλωσσάς Και Φιλολογίας</option>
									<option value="Ιταλικής Γλωσσάς Και Φιλολογίας">Ιταλικής Γλωσσάς Και Φιλολογίας</option>
									<option value="Ισπανικής Γλωσσάς Και Φιλολογίας">Ισπανικής Γλωσσάς Και Φιλολογίας</option>
									<option value="Θεολογίας">Θεολογίας</option>
									<option value="Κοινωνικής Θεολογίας">Κοινωνικής Θεολογίας</option>
									<option value="Φιλοσοφίας - Παιδαγωγικής & Ψυχολογίας">Φιλοσοφίας - Παιδαγωγικής & Ψυχολογίας</option>
									<option value="Φιλολογίας">Φιλολογίας</option>
									<option value="Ιστορίας & Αρχαιολογίας">Ιστορίας & Αρχαιολογίας</option>
									<option value="Νομικής">Νομικής</option>
									<option value="Θεατρικών Σπουδών">Θεατρικών Σπουδών</option>
									<option value="Πολίτικης Επιστήμης & Δημοσιάς Διοίκησης">Πολίτικης Επιστήμης & Δημοσιάς Διοίκησης</option>
									<option value="Επικοινωνίας & Μέσων Μαζικής Ενημέρωσης">Επικοινωνίας & Μέσων Μαζικής Ενημέρωσης</option>
									<option value="Σλαβικών Σπουδών">Σλαβικών Σπουδών</option>
									<option value="Τούρκικων Σπουδών Και Σύγχρονων Ασιατικών Σπουδών">Τούρκικων Σπουδών Και Σύγχρονων Ασιατικών Σπουδών</option>
									<option value="Ψυχολογίας">Ψυχολογίας</option>
									<option value="Επιστήμης Φυσικής Αγωγής Και Αθλητισμού">Επιστήμης Φυσικής Αγωγής Και Αθλητισμού</option>
									<option value="Παιδαγωγικό Δημοτικής Εκπαίδευσης">Παιδαγωγικό Δημοτικής Εκπαίδευσης</option>
									<option value="Εκπαίδευσης & Αγωγής Στην Προσχολική Ηλικία">Εκπαίδευσης & Αγωγής Στην Προσχολική Ηλικία</option>
									<option value="Μουσικών Σπουδών">Μουσικών Σπουδών</option>
									<option value="Μεθοδολογίας, Ιστορίας & Θεωρίας Της Επιστήμης">Μεθοδολογίας, Ιστορίας & Θεωρίας Της Επιστήμης</option>
									<option value="Μαθηματικών">Μαθηματικών</option>
									<option value="Φυσικής">Φυσικής</option>
									<option value="Χημείας">Χημείας</option>
									<option value="Γεωλογίας & Γεωπεριβαλλοντος">Γεωλογίας & Γεωπεριβαλλοντος</option>
									<option value="Βιολογίας">Βιολογίας</option>
									<option value="Πληροφορικής Και Τηλεπικοινωνιών">Πληροφορικής Και Τηλεπικοινωνιών</option>
									<option value="Ιατρικής">Ιατρικής</option>
									<option value="Οδοντιατρικής">Οδοντιατρικής</option>
									<option value="Νοσηλευτικής">Νοσηλευτικής</option>
									<option value="Φαρμακευτικής">Φαρμακευτικής</option>							</th>
								</select>
							</th>
						</tr>
						<tr>
							<th>
								Τηλέφωνο: <br>
								<input type="text" name="phone" value="<?php echo isset($_POST["phone"]) ? $_POST["phone"] : ''; ?>"><br>
							 </th>
							<th>
								Τίτλος Πτυχίου: <br>
								<input type="text" name="degree" value="<?php echo isset($_POST["degree"]) ? $_POST["degree"] : ''; ?>"><br>
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
								<button class="submit" type="submit" name="signuppf-submit">Εγγραφή</button>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
