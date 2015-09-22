<!DOCTYPE html>
<html lang="en">
<?php include("../database/connection.php");?>

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
        <!-- SweetAlert CSS and JavaScript files-->
        <script src="dist/sweetalert.min.js"></script>
        <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">

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
                    <a href="view_return_books.php" class="mdl-layout__tab">Returned Books</a>
                    <a href="advance_search.php" class="mdl-layout__tab is-active">Advanced Search</a>
                </div>

            </header>

            <main class="mdl-layout__content">
                <div class="page-content ">
                    <!-- Your content goes here -->
                    <div class="contentDiv advancedSearch mdl-shadow--2dp">
                        <form action="" method="post">
                            <div class="mdl-grid">
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" id="book_title" name="book_title" />
                                    <label class="mdl-textfield__label" for="book_title">Book Title</label>
                                </div>

                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" id="book_author" name="book_author" />
                                    <label class="mdl-textfield__label" for="book_author">Book Author</label>
                                </div>
                            </div>
                            
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="ad_submit">Submit</button>
                            
                        </form>
                    </div>

                    <div class="contentDiv">

                        <?php
if(isset($_POST['ad_submit']))
{
    $title1=$_POST['book_title'];
    $author1=$_POST['book_author'];
                       echo "<table class='mdl-data-table mdl-js-data-table'>";
                       echo "<thead>";
                       echo "<tr>";
                       echo "<th>Book ID</th>";
                       echo "<th>Book Title</th>";
                       echo "<th>Category</th>";
                       echo "<th>Author</th>";
                       echo "<th>Book Publication</th>";
                       echo "<th>Publisher Name</th>";
                       echo "<th>ISBN</th>";
                       echo "<th>CopyRight Year</th>";
                       echo "<th>Status</th>";
                       echo "<th>Date Book Added</th>";
                       echo "<th>Update</th>";
                       echo "<th>Delete</th>";
                       echo "</tr>";
                       echo "</thead>";
                       echo "<tbody>";
                            mysqli_query ($con,"set character_set_results='utf8'"); 
                    $user_query=mysqli_query($con,"select * from book where status != 'Archive' and book_title LIKE  N'%$title1%'OR status != 'Archive' and author LIKE N'%$author1%'")or die(mysql_error());
                            while($result1= mysqli_fetch_array($user_query)) {
                            $book_id1=$result1['book_id'];
                            $book_title1=$result1['book_title'];
                            $book_category1=$result1['category_id'];
                            $book_author1=$result1['author'];
                            $book_publication1=$result1['book_pub'];
                            $book_publisher_name1=$result1['publisher_name'];
                            $book_isbn_no1=$result1['isbn'];
                            $book_copyright_year1=$result1['copyright_year'];
                            $book_status1=$result1['status'];
                            $book_date_added1=$result1['date_added'];
                                
                            $cat_query = mysqli_query($con,"select * from category where category_id = '$book_category1'")
                                or die(mysqli_error());
				            $cat_row = mysqli_fetch_array($cat_query);
                            $book_category_name1=$cat_row['category_name'];
                                
                            echo "<tr>";
                            echo "<td>$book_id1</td>";
                            echo "<td>$book_title1</td>";
                            echo "<td>$book_category_name1</td>";
                            echo "<td>$book_author1</td>";
                            echo "<td>$book_publication1</td>";
                            echo "<td>$book_publisher_name1</td>";
                            echo "<td>$book_isbn_no1</td>";
                            echo "<td>$book_copyright_year1</td>";
                            echo "<td>$book_status1</td>";
                            echo "<td>$book_date_added1</td>";
                                echo "<td class='divhide'><a class='mdl-js-button mdl-js-ripple-effect' href='edit_book.php?b_id=".$book_id1."' title='Edit Data'><img src='../images/dynamicTables/ic_edit_24px.svg' /></a></td>";
                                echo '<td class="divhide"><button class="mdl-js-button mdl-js-ripple-effect deleteRowButton" onClick="myFunction_Delete_row(\''.$book_id1.'\')" title="Delete Complete Row"><img src="../images/dynamicTables/ic_delete_24px.svg" /></button></td>';
                            echo "</tr>";
                            }
       echo "</tbody>";
       echo "</table>";
}
                            ?>


                    </div>

                </div>
            </main>

        </div>


        <script>
            function myFunction_Delete_row(b_name) {
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this data!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                }, function() {
                    swal("Deleted!", "Your  file has been deleted.", "success");
                    window.location = "delete_book.php?b_id=" + b_name;
                });
            }

        </script>
    </body>

</html>
