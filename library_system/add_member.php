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

    <link rel="stylesheet" href="css/add_member.css">

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
                <a href="member.php" class="mdl-layout__tab is-active">Member</a>
                <a href="view_borrow_books.php" class="mdl-layout__tab">Borrowed Books</a>
                <a href="view_return_books.php" class="mdl-layout__tab">Returned Books</a>
                <a href="advance_search.php" class="mdl-layout__tab">Advanced Search</a>
            </div>

        </header>

        <main class="mdl-layout__content">
            <div class="page-content mdl-shadow--2dp">
                <!-- Your content goes here -->
                <!-- Accent-colored raised button with ripple -->
           <a href="member.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"  id="back1">Back</a>
                  <div class="contentDiv">
                      <h4>Please Enter Book details below</h4>
                        <form action="add_member_save.php" method="post">
                        <div class="mdl-grid">
                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col">
                            <input class="mdl-textfield__input" type="text" id="first_name" name="first_name"/>
                            <label class="mdl-textfield__label" for="first_name">Member Name</label>
                          </div>
                            
                        <div class="mdl-cell--8-col">
                            <label>Gender</label>
                            <select name="gender" class="mdl-cell--4-col" required>
                                <option></option>
                                <option value="Male">Male</option>
				                <option value="Female">Female</option>
                            </select>
                        </div> 
                            
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col">
                            <input class="mdl-textfield__input" type="text" id="address1" name="address1"/>
                            <label class="mdl-textfield__label" for="address1">Address</label>
                          </div>
                            
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col">
                        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="contact" name="contact"/>
                            <label class="mdl-textfield__label" for="contact">Contact</label>
                            <span class="mdl-textfield__error">Input is not a number!</span>
                          </div>
                            
                        <div class="mdl-cell--8-col">
                            <label class="dropdown1">Type</label>
                            <select name="mem_type" class="mdl-cell--4-col dropdown1" required>
                                <option></option>
                                <?php
			                    $type_query = mysqli_query($con,"select * from type");
			                    while($type_row = mysqli_fetch_array($type_query)){
			                    ?>
			             <option value="<?php echo $type_row['borrowertype']; ?>"><?php echo $type_row['borrowertype']; ?></option>
			                    <?php  } ?>
                            </select>
                        </div>
                            
                        <div class="mdl-cell--8-col">
                            <label class="dropdown1">Year Level</label>
                            <select name="year_level" class="mdl-cell--4-col dropdown1" required>
									<option> </option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
                                    <option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
                                    <option>9</option>
									<option>10</option>
									<option>Faculty</option>
				            </select>            
                        </div>
                            
                        <div class="mdl-cell--8-col">
                            <label class="dropdown1">Status</label>
                            <select name="status" class="mdl-cell--4-col dropdown1" required>
									<option> </option>
									<option>Active</option>
									<option>Banned</option>
				            </select>            
                        </div>
                            <input type="submit" name="add_member_submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" />
                      </form>
                </div>

            </div>
        </main>

    </div>

</body>

</html>
