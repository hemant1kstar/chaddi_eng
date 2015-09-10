<!DOCTYPE html>
<html lang="en">
<?php include("db/connection.php");?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Library | Paperless System</title>

        <!--    CSS For Material Design-->
        <link rel="stylesheet" href="../css/material.pink-amber.min.css" />
        <script src="../material_js/material.js"></script>
        <link rel="stylesheet" href="../fonts/Roboto+300,400,500,700.css" />
        <!--  End of CSS For Material Design-->

        <link rel="stylesheet" href="../css/main.css" />

        <link rel="stylesheet" href="css/book_page_style.css">

    </head>

    <body>

        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <header class="mdl-layout__header">
                <!-- Top row, always visible -->
                <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title">Library System</span>
                    <div class="mdl-layout-spacer"></div>
                    <nav class="mdl-navigation"> <a class="mdl-navigation__link" href="../index.php">Home</a> </nav>


                </div>

                <div class="tabs mdl-js-ripple-effect">
                    <a href="index.php" class="mdl-layout__tab">Books</a>
                    <a href="borrow_book.php" class="mdl-layout__tab">Borrow Book</a>
                    <a href="member.php" class="mdl-layout__tab">Member</a>
                    <a href="view_borrow_books.php" class="mdl-layout__tab">Borrowed Books</a>
                    <a href="view_return_books.php" class="mdl-layout__tab is-active">Returned Books</a>
                    <a href="advance_search.php" class="mdl-layout__tab">Advanced Search</a>
                </div>

            </header>

            <main class="mdl-layout__content">
                <div class="page-content ">
                    <!-- Your content goes here -->

                    <div class="contentDiv mdl-shadow--2dp">
                        <div id="contentDiv">
                            <table class="mdl-data-table mdl-js-data-table">
                                <thead>
                                    <tr>
                                        <th class='mdl-data-table__cell--non-numeric'>Book title</th>
                                        <th class='mdl-data-table__cell--non-numeric'>Borrower</th>
                                        <th class='mdl-data-table__cell--non-numeric'>Year Level</th>
                                        <th class='mdl-data-table__cell--non-numeric'>Date Borrow</th>
                                        <th class='mdl-data-table__cell--non-numeric'>Due Date</th>
                                        <th class='mdl-data-table__cell--non-numeric'>Date Returned</th>
                                        <th class='mdl-data-table__cell--non-numeric'>Total Fine</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
mysqli_query ($con,"set character_set_results='utf8'");
                   $user_query=mysqli_query($con,"select * from borrow
								LEFT JOIN member ON borrow.member_id = member.member_id
								LEFT JOIN borrowdetails ON borrow.borrow_id = borrowdetails.borrow_id
								LEFT JOIN book on borrowdetails.book_id =  book.book_id 
								where borrowdetails.borrow_status = 'returned'ORDER BY borrow.borrow_id DESC
								  ")or die(mysqli_error());
									while($row2=mysqli_fetch_array($user_query)){
                                        $book_title2=$row2['book_title'];
                                        $firstname2=$row2['name'];
                                        $year_level2=$row2['year_level']; 
                                        $date_borrow2=$row2['date_borrow'];
                                        $due_date2=$row2['due_date'];
                                        $date_return2=$row2['date_return'];
                                        $total_fine=$row2['fine'];

                            echo "<tr>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$book_title2</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$firstname2</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$year_level2</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$date_borrow2</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$due_date2</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$date_return2</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$total_fine</td>";
                            echo "</tr>";
                            }
                            ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- Accent-colored raised button with ripple -->
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary" id="btnPrint">Print</button>
                    </div>

                </div>
            </main>

        </div>

        <script type="text/javascript" src="jquery/jquery-2.1.4.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $("#btnPrint").click(function() {
                    var contents = $("#contentDiv").html();
                    var frame1 = $('<iframe />');
                    frame1[0].name = "frame1";
                    frame1.css({
                        "position": "absolute",
                        "top": "-1000000px"
                    });
                    $("body").append(frame1);
                    var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
                    frameDoc.document.open();
                    //Create a new HTML document.
                    frameDoc.document.write('<html><head><title></title>');
                    frameDoc.document.write('</head><body>');
                    //Append the external CSS file.
                    frameDoc.document.write('<link href="css/print.css" rel="stylesheet" type="text/css" />');
                    //Append the DIV contents.
                    frameDoc.document.write(contents);
                    frameDoc.document.write('</body></html>');
                    frameDoc.document.close();
                    setTimeout(function() {
                        window.frames["frame1"].focus();
                        window.frames["frame1"].print();
                        frame1.remove();
                    }, 500);
                });
            });

        </script>

    </body>

</html>
