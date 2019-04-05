<!DOCTYPE html>
<html>
<head>
    <title>Εύδοξος</title>
    <meta charset="UTF-8">
    <script src="js/w3.js"></script>
    <link rel="shortcut icon" type="image/png" href="img/favicon-16x16.png"/>
    <link media="all" type="text/css" rel="stylesheet" href="breadcrumb.css">
    <link media="all" type="text/css" rel="stylesheet" href="contact.css">
</head>
<body>
    <div> <?php include 'mainbody.php';?> </div>
    <div class="breadcrumbwrap">
        <p> Επικοινωνία </p>
        <ul class="breadcrumb">
            <li><a href="index.php">Αρχική Σελίδα</a></li>
            <li>Χρήσιμα</li>
            <li><a href="contact.php">Επικοινωνία</a></li>
        </ul>
    </div>
    <div class="bodywrap">
        <div class=contactwrap>
        Με το Γραφείο Αρωγής Χρηστών μπορείτε να επικοινωνήσετε είτε τηλεφωνικά στο <font color="#0C8CCC">215 215 7850</font> ( Ώρες λειτουργίας Δευτέρα με Παρασκευή 09:00 πμ - 17:00 μμ), είτε υποβάλλοντας ηλεκτρονικά το ερώτημά σας συμπληρώνοντας την παρακάτω φόρμα. <br />
        <div class=form>
            <form autocomplete="off" action="/action_page.php">
                <label for="name">Ονοματεπώνυμο</label>
                <input type="text" id="name" name="name" placeholder="">
                <label for="phone">Τηλέφωνο</label>
                <input type="text" id="phone" name="phone" placeholder="">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" placeholder="">
                <label for="usertype">Είδος Χρήστη</label>
                <select id="usertype" name="usertype">
                    <option value="" disabled selected>--επιλέξτε κατηγορία χρηστών--</option>
                    <option value="student">Φοιτητής</option>
                    <option value="secreteriat">Γραμματεία</option>
                    <option value="publisher">Εκδότης</option>
                    <option value="teacher">Διδάσκοντας</option>
                    <option value="library">Βιβλιοθήκη</option>
                    <option value="mark">Σημείο Διανομής</option>
                </select>
                <label for="reporttype">Είδος Αναφοράς</label>
                <select id="reporttype" name="reporttype">
                    <option value>--επιλέξτε είδος αναφοράς--</option>
                    <option value="type1">Πιστοποίηση</option>
                    <option value="type2">Εξαγωγή Στοιχείων</option>
                    <option value="type3">Θέματα Πρόσβασης</option>
                    <option value="type4">Θέματα Επιστροφών</option>
                    <option value="type5">Μεταβολή Στοιχείων</option>
                    <option value="type6">Γενικές Πληροφορίες</option>
                    <option value="type7">Παράπονα</option>
                </select>
                <label for="textreport">Κείμενο</label>
                <textarea placeholder="Πληκτρολογείστε εδώ το κείμενο σας..."></textarea>
                <input type="submit" value="Αποστολή">
            </form>
        </div>
    </div>

    </div>
</body>
</html>
