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

    <link rel="stylesheet" href="css/add_book.css">

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
                <a href="index.php" class="mdl-layout__tab is-active">Books</a>
                <a href="borrow_book.php" class="mdl-layout__tab">Borrow Book</a>
                <a href="member.php" class="mdl-layout__tab">Member</a>
                <a href="view_borrow_books.php" class="mdl-layout__tab">Borrowed Books</a>
                <a href="view_return_books.php" class="mdl-layout__tab">Returned Books</a>
                <a href="advance_search.php" class="mdl-layout__tab">Advanced Search</a>
            </div>

        </header>

        <main class="mdl-layout__content">
            <div class="page-content mdl-shadow--2dp">
                <!-- Your content goes here -->
                <!-- Accent-colored raised button with ripple -->
           <a href="index.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"  id="back1">Back</a>
                  <div class="contentDiv">
                      <h4>Please Enter Book details below</h4>
                        <form action="book_save.php" method="post">
                        <div class="mdl-grid">
                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col">
                            <input class="mdl-textfield__input" type="text" id="b_title" name="b_title"/>
                            <label class="mdl-textfield__label" for="b_title">Book Title</label>
                          </div>
                            
                        <div class="mdl-cell--8-col">
                            <label>Category</label>
                            <select name="b_category" class="mdl-cell--4-col" required>
                                <option></option>
                            <?php
            mysqli_query ($con,"set character_set_results='utf8'");
			$cat_query = mysqli_query($con,"select * from category");
			while($cat_row = mysqli_fetch_array($cat_query)){
			?>
			<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['category_name']; ?></option>
			<?php  } ?>
                            </select>
                        </div> 
                            
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col">
                            <input class="mdl-textfield__input" type="text" id="b_author" name="b_author"/>
                            <label class="mdl-textfield__label" for="b_author">Author</label>
                          </div>
                            
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col">
                        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="b_copies" name="b_copies"/>
                            <label class="mdl-textfield__label" for="b_copies">Book Copies</label>
                            <span class="mdl-textfield__error">Input is not a number!</span>
                          </div>
                            
                         <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col">
                            <input class="mdl-textfield__input" type="text" id="b_publication" name="b_publication"/>
                            <label class="mdl-textfield__label" for="b_publication">Book Publication</label>
                          </div>
                            
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col">
                            <input class="mdl-textfield__input" type="text" id="b_publisher_name" name="b_publisher_name"/>
                            <label class="mdl-textfield__label" for="b_publisher_name">Publisher Name</label>
                          </div>
                            
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col">
                            <input class="mdl-textfield__input" type="text" id="b_isbn" name="b_isbn"/>
                            <label class="mdl-textfield__label" for="b_isbn">ISBN No.</label>
                          </div>
                            
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col">
                            <input class="mdl-textfield__input" type="text" id="b_copyright_year" name="b_copyright_year"/>
                            <label class="mdl-textfield__label" for="b_copyright_year">Copyright Year</label>
                          </div>
                            
                        <div class="mdl-cell--8-col">
                            <label>Status</label>
                            <select name="b_status" class="mdl-cell--4-col">
                                <option value=""></option>
                                <option value="New">New</option>
				                <option value="Old">Old</option>
				                <option value="Lost">Lost</option>
				                <option value="Damage">Damage</option>
<!--				                <option value="Replacement">Subject for Replacement</option>-->
                            </select>
                            </div>
                            
                        </div>
                            <input type="submit" name="add_book_submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" />
                      </form>
                </div>

            </div>
        </main>

    </div>

</body>

</html>
