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
                <a href="borrow_book.php" class="mdl-layout__tab is-active">Borrow Book</a>
                <a href="member.php" class="mdl-layout__tab">Member</a>
                <a href="view_borrow_books.php" class="mdl-layout__tab">Borrowed Books</a>
                <a href="view_return_books.php" class="mdl-layout__tab">Returned Books</a>
                <a href="advance_search.php" class="mdl-layout__tab">Advanced Search</a>
            </div>

        </header>

        <main class="mdl-layout__content">
            <div class="page-content mdl-shadow--4dp">
                <!-- Your content goes here -->
                <!-- Accent-colored raised button with ripple -->

                <div class="contentDiv">
                  <div class="mdl-grid">
                      
                      <form method="post" action="borrow_book_save.php">
                        <div class="mdl-cell mdl-cell--4-col">
                          <div class="mdl-cell mdl-cell--12-col">
                         <label>Borrower Name</label>
                            <select name="mem_id" class="mdl-cell--8-col" required>
                                <option></option>
                            <?php
                                 mysqli_query ($con,"set character_set_results='utf8'");
                                $member_query = mysqli_query($con,"select * from member");
                                while($mem_row = mysqli_fetch_array($member_query)){
                                $mem_id1=$mem_row['member_id'];
                                $firstname1=$mem_row['name']; 
                                echo "<option value='".$mem_id1."'>";
                                echo "$firstname1";
                                echo "</option>";
                                } 
                            ?>
                            </select>
                          </div>
                          <div class="mdl-cell mdl-cell--12-col">
                              <label>Due Date: </label>
                              <input type="date" name="due_date" class="mdl-cell--8-col" required>
                          </div>
                          <div class="mdl-cell mdl-cell--12-col">
            <input type="submit" name="borrow_book_submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" value="Borrow Book">
                            </div>
                      </div>
                     <div class="mdl-cell mdl-cell--8-col">
                     <table class="mdl-data-table mdl-js-data-table">
                        <thead>
                            <tr>
                                <th>Book ID</th>
                                <th>Book Title</th>
                                <th>Category</th>
                                <th>Author</th>
                                <th>Book Publication</th>
                                <th>Publisher Name</th>
                                <th>Status</th>
                                <th>Add</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            mysqli_query ($con,"set character_set_results='utf8'"); 
                            $query=mysqli_query($con,"SELECT * FROM book");
                            while($result1= mysqli_fetch_array($query)) {
                            $book_id1=$result1['book_id'];
                            $book_title1=$result1['book_title'];
                            $book_category1=$result1['category_id'];
                            $book_author1=$result1['author'];
                            $book_publication1=$result1['book_pub'];
                            $book_publisher_name1=$result1['publisher_name'];
                            $book_status1=$result1['status'];
                                
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
                            echo "<td>$book_status1</td>";
                            echo "<td><input name='book_selector[]' type='checkbox' value='".$book_id1."'></td>";
                            echo "</tr>";
                            }
                            ?>
                        </tbody>
                      </table>
                    </div>
   
                      </form>
                </div>
            </div>

            </div>
        </main>

    </div>

</body>

</html>
