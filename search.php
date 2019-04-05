<!DOCTYPE html>
<html>
<head>
    <title>Εύδοξος</title>
    <meta charset="UTF-8">
    <script src="js/w3.js"></script>
    <link rel="shortcut icon" type="image/png" href="img/favicon-16x16.png"/>
    <link media="all" type="text/css" rel="stylesheet" href="breadcrumb.css">
    <link media="all" type="text/css" rel="stylesheet" href="search.css">
</head>
<body>
    <div> <?php include 'mainbody.php';?> </div>
   <div class="breadcrumbwrap">
        <p>Αναζήτηση </p>
        <ul class="breadcrumb">
            <li><a href="index.php">Αρχική Σελίδα</a></li>
            <li><a href="search.php">Αναζήτηση</a></li>
        </ul>
    </div>
    <div class="bodywrap">
		<div class="searchwrap">
            <p> Η πλατφόρμα μας υποστηρίζει την λειτουργία Σύνθετης Αναζήτησης των <font color="#0C8CCC">Συγγραμάτων</font> και των <font color="#0C8CCC">Σημειών Διανομής</font>.<br /> Συμπληρώστε τα πεδία που σας ενδιαφέρουν για να προβληθούν τα φιλτραρισμένα αποτελέσματα. </p>
				<form autocomplete="off" action="results.php" method="get">
                    <table class="table books">
						<tr>
							<td colspan="20" align="center"><h2>Συγγράματα</h2></td>
						</tr>
						<tr>
							<td>Τίτλος</td>
    						<td>Συγγραφέας</td>
                            <td>Λέξεις Κλειδιά</td>
                            <td>ISBN</td>
						</tr>
						<tr>
							<td><input type="text" name="book_title"  /></td>
                            <td><input type="text" name="book_authors" /></td>
                            <td><input type="text" name="book_keywords" /></td>
                            <td><input type="text" name="book_isbn" /></td>
                            <td align="center" colspan="5"><input type="submit" name="submit1"  value="Αναζήτηση"/></td>
						</tr>
					</table>
				</form>
				<form autocomplete="off" action="results.php" method="get">
					<table class="table distrpoints">
						<tr>
							<td colspan="5" align="center"><h2>Σημεία Διανομής</h2></td>
						</tr>
						<tr>
							<td>Τίτλος</td>
                            <td>Διεύθυνση</td>
                            <td>Περιοχή</td>
						</tr>
						<tr>
							<td><input type="text" name="distr_point_title"  /></td>
							<td><input type="text" name="distr_point_address" /></td>
							<td><input type="text" name="distr_point_city" /></td>
                            <td align="center" colspan="5"><input type="submit" name="submit2"  value="Αναζήτηση"/></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
