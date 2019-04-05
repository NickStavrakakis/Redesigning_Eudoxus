<!DOCTYPE html>
<html>
<head>
    <title>Εύδοξος</title>
    <meta charset="UTF-8">
    <script src="js/w3.js"></script>
    <link rel="shortcut icon" type="image/png" href="img/favicon-16x16.png"/>
    <link media="all" type="text/css" rel="stylesheet" href="breadcrumb.css">
    <link media="all" type="text/css" rel="stylesheet" href="browse.css">
</head>
<body>
    <div> <?php include 'mainbody.php';?> </div>
	<div class="breadcrumbwrap">
	    <p>Περιήγηση</p>
	    <ul class="breadcrumb">
	        <li><a href="index.php">Αρχική Σελίδα</a></li>
	        <li><a href="browse.php">Περιήγηση</a></li>
	    </ul>
	</div>
    <div class="bodywrap">
        <div class="topwrap">
            <div class="buttons" id="buttonsid">
                <button class="btn active" onclick="filterSelection('books')"> Συγγράματα</button>
                <button class="btn" onclick="filterSelection('distrpoints')"> Σημεία Διανομής</button>
            </div>
            <div class="searchbar">
                <form autocomplete="off" action="browse.php" method="get">
                    <input type="text" name="user_keywords" placeholder="Εισάγετε εδώ λέξεις κλειδιά"/>
                    <input type="submit" name="submit_keywords" value="Αναζήτηση">
                </form>
            </div>
        </div>
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

                $result_query = 'select * from books';
                $result_query2 = 'select * from distr_points';

                if(isset($_GET['submit_keywords'])){ //when the search button for the keywords in browse menu is clicked

                    $user_keywords = $_GET['user_keywords'];
                    $user_keywords = rtrim($user_keywords, ",");

                    if($user_keywords != ''){
                        $result_query = "select * from books where book_keywords like '%$user_keywords%'";
                        $result_query2 = "select * from distr_points";
                    }
                }
                $run_result = mysqli_query($con, $result_query);
                $run_result2 = mysqli_query($con, $result_query2);

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
                                <table id='books_table' cellspacing='5'>
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
                while($row_result2 = mysqli_fetch_array($run_result2)){

                    $distr_point_title = $row_result2['distr_point_title'];
                    $distr_point_address = $row_result2['distr_point_address'];
                    $distr_point_city = $row_result2['distr_point_city'];
                    $distr_point_zipcode = $row_result2['distr_point_zipcode'];
                    $distr_point_email = $row_result2['distr_point_email'];
                    $distr_point_phone = $row_result2['distr_point_phone'];
                    $distr_point_workinghours = $row_result2['distr_point_workinghours'];
                    $distr_point_map_link = $row_result2['distr_point_map_link'];
                    $distr_point_map_img = $row_result2['distr_point_map_img'];

                    echo
                        "<div class='result distrpoints' id='distr_points'>
                            <div class='result_img'>
                                <p>$distr_point_title</p>
                                <a href='https://www.google.com/maps/search/$distr_point_address+$distr_point_city' target='_blank'>
                                    <img src='img/distr_points/$distr_point_map_img'/>
                                </a>
                            </div>
                            <div class='result_txt'>
                                <table id='distrpoints_table' cellspacing='5'>
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
            ?>
            <script>
            filterSelection("books")
            function filterSelection(c) {
              var x, i;
              x = document.getElementsByClassName("result");
              if (c == "all") c = "";
              for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
              }
            }

            function w3AddClass(element, name) {
              var i, arr1, arr2;
              arr1 = element.className.split(" ");
              arr2 = name.split(" ");
              for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
              }
            }

            function w3RemoveClass(element, name) {
              var i, arr1, arr2;
              arr1 = element.className.split(" ");
              arr2 = name.split(" ");
              for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                  arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
              }
              element.className = arr1.join(" ");
            }

            var btnContainer = document.getElementById("buttonsid");
            var btns = btnContainer.getElementsByClassName("btn");
            for (var i = 0; i < btns.length; i++) {
              btns[i].addEventListener("click", function(){
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
              });
            }
            </script>
        </div>
	</div>
</body>
</html>
