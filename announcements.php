<!DOCTYPE html>
<html>
<head>
    <title>Εύδοξος</title>
    <meta charset="UTF-8">
    <script src="js/w3.js"></script>
    <link rel="shortcut icon" type="image/png" href="img/favicon-16x16.png"/>
    <link media="all" type="text/css" rel="stylesheet" href="breadcrumb.css">
    <link media="all" type="text/css" rel="stylesheet" href="announcements.css">
</head>
<body>
    <div> <?php include 'mainbody.php';?> </div>
    <div class="breadcrumbwrap">
        <p> Ανακοινώσεις </p>
        <ul class="breadcrumb">
            <li><a href="index.php">Αρχική Σελίδα</a></li>
            <li>Χρήσιμα</li>
            <li><a href="announcements.php">Ανακοινώσεις</a></li>
        </ul>
    </div>
    <div class="bodywrap">
        <div class="introwrap">
            <span class="title">Προβολή Ανακοινώσεων βάση Κατηγορίας Χρήστη:</span>
            <span class="filter">
                <select name="category" onchange="java_script_:show(this.options[this.selectedIndex].value)">
                    <option value=all>--επιλέξτε κατηγορία χρηστών--</option>
                    <option value="student">Φοιτητής</option>
                    <option value="secreteriat">Γραμματεία</option>
                    <option value="publisher">Εκδότης</option>
                    <option value="teacher">Διδάσκοντας</option>
                    <option value="library">Βιβλιοθήκη</option>
                    <option value="mark">Σημείο Διανομής</option>
                </select>
            </span>
        </div>
        <div class="announcementswrap">
            <div id="all">
                <div class="category"> <ul>
                    <li> <b>20/12/2018</b> - <i> Παράταση Περιόδου Δηλώσεων και Διανομής Συγγραμμάτων </i>  <br />  <br />
                    <li> <b>01/11/2018</b> - <i> Πρόβλημα λειτουργίας της εφαρμογής εκδοτών μέσω Mozilla Firefox </i>  <br />  <br />
                    <li> <b>23/10/2018</b> - <i> Έναρξη Δήλωσης και Διανομής Συγγραμμάτων Χειμερινής Περιόδου 2018-19 </i>  <br />  <br />
                    <li> <b>12/09/2018</b> - <i> Παράταση περιόδου καταχώρισης συνολικών καταλόγων συγγραμμάτων 2018-2019 </i>  <br />  <br />
                    <li> <b>11/05/2018</b> - <i> Προγραμματισμένες εργασίες συντήρησης 16/05/2018 </i>  <br />  <br />
                    <li> <b>09/05/2018</b> - <i> Τροποποίηση Συγκρότησης Επιτροπής Ελέγχου Κοστολόγησης Διδακτικών Συγγραμμάτων </i>  <br />  <br />
                </ul> </div>
            </div>
            <div id="student" style="display:none">
                <div class="category"> <ul>
                    <li> <b>20/12/2018</b> - <i> Παράταση Περιόδου Δηλώσεων και Διανομής Συγγραμμάτων </i>  <br />  <br />
                    <li> <b>23/10/2018</b> - <i> Έναρξη Δήλωσης και Διανομής Συγγραμμάτων Χειμερινής Περιόδου 2018-19 </i>  <br />  <br />
                    <li> <b>11/05/2018</b> - <i> Προγραμματισμένες εργασίες συντήρησης 16/05/2018 </i>  <br />  <br />
                </ul> </div>
            </div>

            <div id="secreteriat" style="display:none">
                <div class="category"> <ul>
                    <li> <b>20/12/2018</b> - <i> Παράταση Περιόδου Δηλώσεων και Διανομής Συγγραμμάτων </i>  <br />  <br />
                    <li> <b>23/10/2018</b> - <i> Έναρξη Δήλωσης και Διανομής Συγγραμμάτων Χειμερινής Περιόδου 2018-19 </i>  <br />  <br />
                    <li> <b>12/09/2018</b> - <i> Παράταση περιόδου καταχώρισης συνολικών καταλόγων συγγραμμάτων 2018-2019 </i>  <br />  <br />
                    <li> <b>11/05/2018</b> - <i> Προγραμματισμένες εργασίες συντήρησης 16/05/2018 </i>  <br />  <br />
                    <li> <b>09/05/2018</b> - <i> Τροποποίηση Συγκρότησης Επιτροπής Ελέγχου Κοστολόγησης Διδακτικών Συγγραμμάτων </i>  <br />  <br />
                </ul> </div>
            </div>

            <div id="publisher" style="display:none">
                <div class="category"> <ul>
                    <li> <b>20/12/2018</b> - <i> Παράταση Περιόδου Δηλώσεων και Διανομής Συγγραμμάτων </i>  <br />  <br />
                    <li> <b>01/11/2018</b> - <i> Πρόβλημα λειτουργίας της εφαρμογής εκδοτών μέσω Mozilla Firefox </i>  <br />  <br />
                    <li> <b>23/10/2018</b> - <i> Έναρξη Δήλωσης και Διανομής Συγγραμμάτων Χειμερινής Περιόδου 2018-19 </i>  <br />  <br />
                    <li> <b>12/09/2018</b> - <i> Παράταση περιόδου καταχώρισης συνολικών καταλόγων συγγραμμάτων 2018-2019 </i>  <br />  <br />
                    <li> <b>11/05/2018</b> - <i> Προγραμματισμένες εργασίες συντήρησης 16/05/2018 </i>  <br />  <br />
                    <li> <b>09/05/2018</b> - <i> Τροποποίηση Συγκρότησης Επιτροπής Ελέγχου Κοστολόγησης Διδακτικών Συγγραμμάτων </i>  <br />  <br />
                </ul> </div>
            </div>

            <div id="teacher" style="display:none">
                <div class="category"> <ul>
                    <li> <b>20/12/2018</b> - <i> Παράταση Περιόδου Δηλώσεων και Διανομής Συγγραμμάτων </i>  <br />  <br />
                    <li> <b>23/10/2018</b> - <i> Έναρξη Δήλωσης και Διανομής Συγγραμμάτων Χειμερινής Περιόδου 2018-19 </i>  <br />  <br />
                    <li> <b>11/05/2018</b> - <i> Προγραμματισμένες εργασίες συντήρησης 16/05/2018 </i>  <br />  <br />
                </ul> </div>
            </div>

            <div id="library" style="display:none">
                <div class="category"> <ul>
                <li> <b>23/10/2018</b> - <i> Έναρξη Δήλωσης και Διανομής Συγγραμμάτων Χειμερινής Περιόδου 2018-19 </i>  <br />  <br />
                <li> <b>12/09/2018</b> - <i> Παράταση περιόδου καταχώρισης συνολικών καταλόγων συγγραμμάτων 2018-2019 </i>  <br />  <br />
                <li> <b>11/05/2018</b> - <i> Προγραμματισμένες εργασίες συντήρησης 16/05/2018 </i>  <br />  <br />
                </ul> </div>
            </div>

            <div id="mark" style="display:none">
                <div class="category"> <ul>
                    <li> <b>20/12/2018</b> - <i> Παράταση Περιόδου Δηλώσεων και Διανομής Συγγραμμάτων </i>  <br />  <br />
                    <li> <b>23/10/2018</b> - <i> Έναρξη Δήλωσης και Διανομής Συγγραμμάτων Χειμερινής Περιόδου 2018-19 </i>  <br />  <br />
                    <li> <b>11/05/2018</b> - <i> Προγραμματισμένες εργασίες συντήρησης 16/05/2018 </i>  <br />  <br />
                </ul> </div>
            </div>
        </div>
    </div>
</body>
</html>
