<!DOCTYPE html>
<html>
<head>
    <title>Εύδοξος</title>
    <meta charset="UTF-8">
    <script src="js/w3.js"></script>
    <link rel="shortcut icon" type="image/png" href="img/favicon-16x16.png"/>
    <link media="all" type="text/css" rel="stylesheet" href="breadcrumb.css">
    <link media="all" type="text/css" rel="stylesheet" href="professors.css">
</head>
<body>
    <div> <?php include 'mainbody.php';?>
    </div>
    <div class="breadcrumbwrap">
        <p> Δισάσκοντες </p>
        <ul class="breadcrumb">
            <li><a href="index.php">Αρχική Σελίδα</a></li>
            <li><a href="professors.php">Δισάσκοντες</a></li>
        </ul>
    </div>
    <div class="bodywrap">
        <div class="introwrap">
            <p>Στην πλατφόρμα μας, oι διδάσκοντες των Τμημάτων έχουν πρόσβαση στην Κεντρική Βάση των Συγγραμμάτων και μπορούν να επιλέξουν ποια Συγγράμματα θα προτείνουν για το μάθημά τους ή τις θεματικές ενότητες.</p>
            <!-- <p>Επιπλέον, μπορεί να επιλέξει τα συγγράματα που επιθυμεί να παραλάβει στο τρέχον εξάμηνο, να ενημερωθεί για την διαδικασία παραλαβής τους και να πραγματοποιήσει προεπισκόπηση των δηλώσεων που έχει κάνει στο παρελθόν.</p> -->
            <p><a href="un_con.php">Όροι και Προϋποθέσεις</a> για το πρόγραμμα "Εύδοξος". Οδηγίες για τη διαδικασία αναζήτησης επιλογής συγγραμμάτων θα βρείτε <a href="un_con.php">εδώ</a>. </p>
        </div>
        <div class="professorcard">
            <a href="un_con.php">
                <img class="professorcard declaration">
                <h3>Δήλωσεις Συγγραμμάτων</h3>
            </a>
        </div>
        <div class="professorcard">
            <a href="un_con.php">
                <img class="professorimg search_b">
                <h3>Aναζήτηση Συγγραμάτων</h3>
            </a>
        </div>
        <?php
            if(!isset($_SESSION['id'])){
                echo '<div class="professorcard">
                        <a href="Signup-professor.php">
                            <img class="professorimg signup">
                            <h3>Εγγραφή</h3>
                        </a>
                    </div>'
                ;
            }
            else{
                isset($_SESSION['id']);
                if($_SESSION['id']==2){
                    echo '<div class="professorcard">
                            <a href="profile-professor.php">
                                <img class="professorimg profilepr">
                                <h3>Προφίλ</h3>
                            </a>
                        </div>'
                    ;
                }
                else{
                    echo '<div class="professorcard">
                            <a href="Signup-professor.php">
                                <img class="professorimg signup">
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
