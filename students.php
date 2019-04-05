<!DOCTYPE html>
<html>
<head>
    <title>Εύδοξος</title>
    <meta charset="UTF-8">
    <script src="js/w3.js"></script>
    <link rel="shortcut icon" type="image/png" href="img/favicon-16x16.png"/>
    <link media="all" type="text/css" rel="stylesheet" href="breadcrumb.css">
    <link media="all" type="text/css" rel="stylesheet" href="students.css">
</head>
<body>
    <div> <?php include 'mainbody.php';?>
    </div>
    <div class="breadcrumbwrap">
        <p> Φοιτητές </p>
        <ul class="breadcrumb">
            <li><a href="index.php">Αρχική Σελίδα</a></li>
            <li><a href="students.php">Φοιτητές</a></li>
        </ul>
    </div>
    <div class="bodywrap">
        <div class="introwrap">
            <p>Στην πλατφόρμα μας, ο φοιτητής έχει την δυνατότητα να δει όλα τα μαθήματα/θεματικές ενότητες του προγράμματος σπουδών του Τμήματός του και τα αντίστοιχα προτεινόμενα συγγράμματα/σειρές συγγραμμάτων, μαζί με διάφορες πληροφορίες για κάθε ένα από αυτά.</p>
            <p>Επιπλέον, μπορεί να επιλέξει τα συγγράματα που επιθυμεί να παραλάβει στο τρέχον εξάμηνο, να ενημερωθεί για την διαδικασία παραλαβής τους και να πραγματοποιήσει προεπισκόπηση των δηλώσεων που έχει κάνει στο παρελθόν.</p>
            <p><a href="un_con.php">Όροι και Προϋποθέσεις</a> συμμετοχής φοιτητών στο πρόγραμμα "Εύδοξος". Οδηγίες για τη διαδικασία επιλογής συγγραμμάτων θα βρείτε <a href="un_con.php">εδώ</a>. </p>
        </div>
        <div class="studentcard">
            <a href="un_con.php">
                <img class="studentcard declaration">
                <h3>Δήλωσεις Συγγραμμάτων</h3>
            </a>
        </div>
        <div class="studentcard">
            <a href="un_con.php">
                <img class="studentimg exchange">
                <h3>Ανταλλαγή Συγγραμάτων</h3>
            </a>
        </div>
        <?php
            if(!isset($_SESSION['id'])){
                echo '<div class="studentcard">
                        <a href="Signup-students.php">
                            <img class="studentimg signup">
                            <h3>Εγγραφή</h3>
                        </a>
                    </div>'
                ;
            }
            else{
                isset($_SESSION['id']);
                if($_SESSION['id']==1){
                    echo '<div class="studentcard">
                            <a href="profile-student.php">
                                <img class="studentimg profilep">
                                <h3>Προφίλ</h3>
                            </a>
                        </div>'
                    ;
                }
                else{
                    echo '<div class="studentcard">
                            <a href="Signup-students.php">
                                <img class="studentimg signup">
                                <h3>Εγγραφή</h3>
                            </a>
                        </div>'
                    ;
                }
            }
        ?>
    </div>
</body>
</html>
