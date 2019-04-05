<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Εύδοξος</title>
    <meta charset="UTF-8">
    <script src="js/w3.js"></script>
    <link rel="shortcut icon" type="image/png" href="img/favicon-16x16.png"/>
    <link media="all" type="text/css" rel="stylesheet" href="mainbody.css">
    <link media="all" type="text/css" rel="stylesheet" href="marquees.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="rowtop">
        <div class="announcements">
            <div class="marquee">
                <span class="marquee__inner">Οι δηλώσεις συγγραμμάτων για το χειμερινό εξάμηνο παρατείνονται μέχρι τις 17/01/2019 - Η διανομή των δηλωθέντων συγγραμμάτων θα ολοκληρωθεί στις 25/01/2019</span>
            </div>
        </div>
        <div class="userprofile">
			<?php
				if(isset($_GET['error'])){
					if ($_GET['error']=="emptyfields")
						echo "<script>alert('Παρακαλώ συμπληρώστε όλα τα απαραίτητα πεδία!')</script>";
					if ($_GET['error']=="sqlerror")
					    echo "<script>alert('Πρόβλημα Σύνδεσης με την Βάση Δεδομένων')</script>";
					if ($_GET['error']=="wrongpassword")
					    echo "<script>alert('Εσφαλμένη Εισαγωγή Κωδικού')</script>";
					if ($_GET['error']=="wrongusername")
						echo "<script>alert('Εσφαλμένη Εισαγωγή Username')</script>";
				}
				if(!isset($_SESSION['id'])){
				echo '<script type="text/javascript"> myfuntion(); </script>';
				echo '
					<div class="signup_button">
						<span>/ Εγγραφή</span>
					 	<div class="signup-content">
							<table>
								<tr>
									<th> <a href="Signup-students.php">Φοιτητής</a> </th>
									<th> <a href="un_con.php">Γραμματεία</a> </th>
								</tr>
								<tr>
									<th> <a href="un_con.php">Εκδότης</a> </th>
									<th> <a href="Signup-professor.php">Διδάσκοντας</a> </th>
								</tr>
								<tr>
									<th> <a href="un_con.php">Βιβλιοθήκη</a> </th>
									<th> <a href="un_con.php">Διαθέτης</a> </th>
								</tr>
							</table>
						</div>
					</div>

					<button class="login_button" onclick="myFunction()">Σύνδεση</button>
					<div id="login_form">
						<form autocomplete="off" action="include/login.php" method="post">
							<table><tr>
								<th> 	<input type="text" name="mailud" placeholder="Username/E-mail"> </th>
								<th> 	<input type="password" name="pwd" placeholder="Password"> </th>
								<th> 	<button type="submit" name="login-submit"><i class="fa fa-sign-in"></i></button> </th>
							<tr></table>
						</form>
					</div>'
				;
				}
				else{
					echo '
						<div class="logout_button">
							<form autocomplete="off" action="include/logout.php" method="post">
								<button type="submit" name="logout-submit">Αποσύνδεση</button>
							</form>
						</div>'
					;
					if($_SESSION['id']==1){
						echo '
							<div class="profile-s">
								<form autocomplete="off" action="profile-student.php" method="post">
									<button type="submit" name="profiles-submit">Προφίλ</button>
								</form>
							</div>'
						;
					}
					else{
						echo '
							<div class="profile-p">
								<form autocomplete="off" action="profile-professor.php" method="post">
									<button type="submit" name="profilep-submit">Προφίλ</button>
								</form>
							</div>'
						;
					}
				}
			?>
		</div>
    </div>
    <div class="logowrap">
        <a href="index.php" title="Εύδοξος">
            <img src="img/logo.png" alt="Αρχική Σελίδα">
        </a>
    </div>
    <div class="navbar">
        <div class="homepage">
            <a href="index.php"><i class="fa fa-home fa-lg"></i></a>
        </div>

		<div class="search">
            <a href="search.php"><i class="fa fa-search fa-lg"></i></a>
        </div>
        <div class="jobs">
            <a href="students.php">ΦΟΙΤΗΤΕΣ</a>
            <a href="un_con.php">ΓΡΑΜΜΑΤΕΙΕΣ</a>
            <a href="un_con.php">ΕΚΔΟΤΕΣ</a>
            <a href="professors.php">ΔΙΔΑΣΚΟΝΤΕΣ</a>
            <a href="un_con.php">ΒΙΒΛΙΟΘΗΚΕΣ</a>
            <a href="un_con.php">ΔΙΑΘΕΤΕΣ</a>
			<a href="browse.php">ΠΕΡΙΗΓΗΣΗ</a>
            <div class="dropdown">
                ΧΡΗΣΙΜΑ
                <div class="dropdown-content">
                    <a href="announcements.php">Ανακοινώσεις</a>
                    <a href="faq.php">Συχνές Ερωτήσεις</a>
                    <a href="information.php">Πληροφορίες</a>
                    <a href="contact.php">Επικοινωνία</a>
                </div>
            </div>
        </div>
	</div>
    <div class="footer">
        <p>Γιαννακίδης Γιάννης - 1115201500025 | Σταυρακάκης Νικόλας - 1115201500149</p>
    </div>
</body>
<script>
function myFunction() {
  var x = document.getElementById('login_form');
  if (x.style.display === 'block') {
    x.style.display = 'none';
  } else {
    x.style.display = 'block';
  }
}
</script>
</html>
