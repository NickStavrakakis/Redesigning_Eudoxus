<!DOCTYPE html>
<html>
<head>
    <title>Εύδοξος</title>
    <meta charset="UTF-8">
    <script src="js/w3.js"></script>
    <link rel="shortcut icon" type="image/png" href="img/favicon-16x16.png"/>
    <link media="all" type="text/css" rel="stylesheet" href="breadcrumb.css">
    <link media="all" type="text/css" rel="stylesheet" href="browse.css">
    <style>
    .result {
        display: block; /* Hide all elements by default */
    }
    </style>
</head>
<body>
    <div> <?php include 'mainbody.php';?> </div>
	<div class="breadcrumbwrap">
	    <p>Αποτελέσματα Αναζήτησης</p>
	    <ul class="breadcrumb">
	        <li><a href="index.php">Αρχική Σελίδα</a></li>
	        <li><a href="search.php">Αναζήτηση</a></li>
	        <li>Αποτελέσματα Αναζήτησης</li>
	    </ul>
	</div>
    <div class="bodywrap">
        <div class="resultwrap">
            <!-- <a href="search.html">Go Back</a> -->
            <?php
                //establishing connection
                $con = mysqli_connect("localhost","root","","sdi1500025-sdi1500149");
                // Check connection
                if (mysqli_connect_errno()){
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                mysqli_query($con, "SET NAMES 'utf8'");
                mysqli_query($con, "SET CHARACTER SET 'utf8'");

                if(isset($_GET['submit1'])){ //when the search button for books is clicked

                    $book_title = $_GET['book_title'];
                    $book_authors = $_GET['book_authors'];
                    $book_keywords = $_GET['book_keywords'];
                    $book_isbn = $_GET['book_isbn'];

                    if( ($book_title == '') AND ($book_authors == '') AND ($book_keywords == '') AND ($book_isbn == '')){
                        echo "<center><b>Συμπληρώστε τουλάχιστον ένα πεδίο</b></center>";
                        exit();
                    }

                    else if( ($book_title != '') AND ($book_authors == '') AND ($book_keywords == '') AND ($book_isbn == ''))
                        $result_query = "select * from books where book_title='$book_title'";
                    else if( ($book_title == '') AND ($book_authors != '') AND ($book_keywords == '') AND ($book_isbn == ''))
                        $result_query = "select * from books where book_authors like '%$book_authors%'";
                    else if( ($book_title == '') AND ($book_authors == '') AND ($book_keywords != '') AND ($book_isbn == ''))
                        $result_query = "select * from books where book_keywords like '%$book_keywords%'";
                    else if( ($book_title == '') AND ($book_authors == '') AND ($book_keywords == '') AND ($book_isbn != ''))
                        $result_query = "select * from books where book_isbn='$book_isbn'";

                    else if( ($book_title != '') AND ($book_authors != '') AND ($book_keywords == '') AND ($book_isbn == ''))
                        $result_query = "select * from books where book_title='$book_title' and book_authors like '%$book_authors%'";
                    else if( ($book_title != '') AND ($book_authors == '') AND ($book_keywords != '') AND ($book_isbn == ''))
                        $result_query = "select * from books where book_title='$book_title' and book_keywords like '%$book_keywords%'";
                    else if( ($book_title != '') AND ($book_authors == '') AND ($book_keywords == '') AND ($book_isbn != ''))
                        $result_query = "select * from books where book_title='$book_title' and book_isbn='$book_isbn'";
                    else if( ($book_title == '') AND ($book_authors != '') AND ($book_keywords != '') AND ($book_isbn == ''))
                        $result_query = "select * from books where book_authors like '%$book_authors%' and book_keywords like '%$book_keywords%'";
                    else if( ($book_title == '') AND ($book_authors != '') AND ($book_keywords == '') AND ($book_isbn != ''))
                        $result_query = "select * from books where book_authors like '%$book_authors%' and book_isbn='$book_isbn'";
                    else if( ($book_title == '') AND ($book_authors == '') AND ($book_keywords != '') AND ($book_isbn != ''))
                        $result_query = "select * from books where book_keywords like '%$book_keywords%' and book_isbn='$book_isbn'";

                    else if( ($book_title != '') AND ($book_authors != '') AND ($book_keywords != '') AND ($book_isbn == ''))
                        $result_query = "select * from books where book_title='$book_title' and book_authors like '%$book_authors%' and book_keywords like '%$book_keywords%'";
                    else if( ($book_title != '') AND ($book_authors != '') AND ($book_keywords == '') AND ($book_isbn != ''))
                        $result_query = "select * from books where book_title='$book_title' and book_authors like '%$book_authors%' and book_isbn='$book_isbn'";
                    else if( ($book_title == '') AND ($book_authors != '') AND ($book_keywords != '') AND ($book_isbn != ''))
                        $result_query = "select * from books where book_authors like '%$book_authors%' and book_keywords like '%$book_keywords%' and book_isbn='$book_isbn'";

                    $run_result = mysqli_query($con, $result_query);

                    //if(mysqli_num_rows($run_result) < 1){
                    // 	echo "<center><b>Oops! Sorry, nothing here...</b></center>";
                    // 	exit();
                    // }

                    while($row_result = mysqli_fetch_array($run_result)){

                        $book_title = $row_result['book_title'];
                        $book_isbn = $row_result['book_isbn'];
                        $book_authors = $row_result['book_authors'];
                        $book_year = $row_result['book_year'];
                        $book_publisher = $row_result['book_publisher'];
                        $book_price = $row_result['book_price'];
                        $book_site = $row_result['book_site'];
                        $book_img = $row_result['book_img'];

                        if($book_site=='')
                            $msg_book_site="-";
                        else
                            $msg_book_site="<a href=$book_site target='_blank'>εδώ</a>";

                        echo
                            "<div class='result books' id='books'>
                                <p>$book_title</p>
                                <div class='result_img'>
                                    <img src='img/books/$book_img'/>
                                </div>
                                <div class='result_txt'>
                                    <table id='books_table' width='290' cellspacing='5'>
                                        <tr>
                                            <td valign='top' align='left'><b>Συγγραφείς:</b></td>
                                            <td valign='top' align='right'>$book_authors</td>
                                        </tr>
                                        <tr>
                                            <td valign='top' align='left'><b>Έτος Έκδοσης:</b></td>
                                            <td valign='top' align='right'>$book_year</td>
                                        </tr>
                                        <tr>
                                            <td valign='top' align='left'><b>ISBN:</b></td>
                                            <td valign='top' align='right'>$book_isbn</td>
                                        </tr>
                                        <tr>
                                            <td valign='top' align='left'><b>Εκδόσεις:</b></td>
                                            <td valign='top' align='right'>$book_publisher</td>
                                        </tr>
                                        <tr>
                                            <td valign='top' align='left'><b>Τιμή:</b></td>
                                            <td valign='top' align='right'>$book_price €</td>
                                        </tr>
                                        <tr>
                                            <td valign='top' align='left'><b>Ιστοσελίδα Βιβλίου:</b></td>
                                            <td valign='top' align='right'>$msg_book_site</td>
                                        </tr>

                                    </table>
                                </div>
                            </div>"
                        ;
                    }
                }
                else if(isset($_GET['submit2'])){ //when the search button is clicked

    				$distr_point_title = $_GET['distr_point_title'];
    				$distr_point_address = $_GET['distr_point_address'];
    				$distr_point_city = $_GET['distr_point_city'];

    				if( ($distr_point_title == '') AND ($distr_point_address == '') AND ($distr_point_city == '') ){
    					echo "<center><b>Συμπληρώστε τουλάχιστον ένα πεδίο</b></center>";
    					exit();
    				}

    				else if( ($distr_point_title != '') AND ($distr_point_address == '') AND ($distr_point_city == ''))
    					$result_query = "select * from distr_points where distr_point_title='$distr_point_title'";
    				else if( ($distr_point_title == '') AND ($distr_point_address != '') AND ($distr_point_city == ''))
    					$result_query = "select * from distr_points where distr_point_address='$distr_point_address'";
    				else if( ($distr_point_title == '') AND ($distr_point_address == '') AND ($distr_point_city != ''))
    					$result_query = "select * from distr_points where distr_point_city='$distr_point_city'";

    				else if( ($distr_point_title != '') AND ($distr_point_address != '') AND ($distr_point_city == ''))
    					$result_query = "select * from distr_points where distr_point_title='$distr_point_title' and distr_point_address='$distr_point_address'";
    				else if( ($distr_point_title != '') AND ($distr_point_address == '') AND ($distr_point_city != ''))
    					$result_query = "select * from distr_points where distr_point_title='$distr_point_title' and distr_point_city='$distr_point_city'";
    				else if( ($distr_point_title == '') AND ($distr_point_address != '') AND ($distr_point_city != ''))
    					$result_query = "select * from distr_points where distr_point_address='$distr_point_address' and distr_point_city='$distr_point_city'";

    				else if( ($distr_point_title != '') AND ($distr_point_address != '') AND ($distr_point_city != ''))
    					$result_query = "select * from distr_points where distr_point_title='$distr_point_title' and distr_point_address='$distr_point_address' and distr_point_city='$distr_point_city'";

    				$run_result = mysqli_query($con, $result_query);
    				if(mysqli_num_rows($run_result) < 1){
    					echo "<center><b>Oops! Sorry, nothing here...</b></center>";
    					exit();
    				}

                    while($row_result = mysqli_fetch_array($run_result)){

                        $distr_point_title = $row_result['distr_point_title'];
                        $distr_point_address = $row_result['distr_point_address'];
                        $distr_point_city = $row_result['distr_point_city'];
                        $distr_point_zipcode = $row_result['distr_point_zipcode'];
                        $distr_point_email = $row_result['distr_point_email'];
                        $distr_point_phone = $row_result['distr_point_phone'];
                        $distr_point_workinghours = $row_result['distr_point_workinghours'];
                        $distr_point_map_link = $row_result['distr_point_map_link'];
                        $distr_point_map_img = $row_result['distr_point_map_img'];

                        echo
                            "<div class='result distr_points' id='distr_points'>
                                <div class='result_img'>
                                    <p>$distr_point_title</p>
                                    <a href='https://www.google.com/maps/search/$distr_point_address+$distr_point_city' target='_blank'>
                                        <img src='img/distr_points/$distr_point_map_img'/>
                                    </a>
                                </div>
                                <div class='result_txt'>
                                    <table id='distrpoints_table' width='290' cellspacing='5'>
                                        <tr>
                                            <td valign='top' align='left'><b>Διεύθυνση:</b></td>
                                            <td valign='top' align='right'>$distr_point_address</td>
                                        </tr>
                                        <tr>
                                            <td valign='top' align='left'><b>Περιοχή:</b></td>
                                            <td valign='top' align='right'>$distr_point_city</td>
                                        </tr>
                                        <tr>
                                            <td valign='top' align='left'><b>Ταχ. Κώδικας:</b></td>
                                            <td valign='top' align='right'>$distr_point_zipcode</td>
                                        </tr>
                                        <tr>
                                            <td valign='top' align='left'><b>E-mail</b></td>
                                            <td valign='top' align='right'>$distr_point_email</td>
                                        </tr>
                                        <tr>
                                            <td valign='top' align='left'><b>Τηλέφωνο:</b></td>
                                            <td valign='top' align='right'>$distr_point_phone</td>
                                        </tr>
                                        <tr>
                                            <td valign='top' align='left'><b>Ωράριο Λειτ.:	</b></td>
                                            <td valign='top' align='right'>$distr_point_workinghours</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>"
                        ;
                    }
                }
            ?>
        </div>
	</div>
</body>
</html>
