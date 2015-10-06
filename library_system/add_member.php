<?php
         session_start();
         if(!$_SESSION['LoggedIn_user'])
           {
                 header("location:../login_panel/login.php?problem='Not Logged In'");
                 exit;
         }
?>
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
                <div class="page-content ">
                    <!-- Your content goes here -->
                    <!-- Accent-colored raised button with ripple -->
                    <a href="member.php" class='mdl-js-button mdl-js-ripple-effect backButton' title='Back' id="back1">
                        <img src="../images/dynamicTables/ic_arrow_back_24px.svg" alt="Back" />
                    </a>
                    <div class="contentDiv mdl-shadow--2dp">
                        <h4>Please enter member details below</h4>
                        <form action="add_member_save.php" method="post">
                            <div class="">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
            <input class="mdl-textfield__input" type="text" id="first_name" name="first_name" pattern="[a-zA-Z]{1,}" title="Enter only characters" required />
                                    <label class="mdl-textfield__label" for="first_name">Member Name</label>
                                </div>

                                <div class="dropdowns">
                                    <label class="customLabel">Gender: </label>
                                    <select name="gender" class="dropdownOptions" required>
                                        <option></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
                                    <input class="mdl-textfield__input" type="text" id="address1" name="address1" required/>
                                    <label class="mdl-textfield__label" for="address1">Address</label>
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="contact" name="contact" minlength="10" maxlength="10" required/>
                                    <label class="mdl-textfield__label" for="contact">Contact</label>
<!--                                    <span class="mdl-textfield__error">Input is not a number!</span>-->
                                </div>

                                <div class="dropdowns">
                                    <label class="customLabel">Type: </label>
                                    <select name="mem_type" class=" dropdownOptions" required>
                                        <option></option>
                                        <?php
			                    $type_query = mysqli_query($con,"select * from type");
			                    while($type_row = mysqli_fetch_array($type_query)){
			                    ?>
                                            <option value="<?php echo $type_row['borrowertype']; ?>">
                                                <?php echo $type_row['borrowertype']; ?>
                                            </option>
                                            <?php  } ?>
                                    </select>
                                </div>

                                <div class="dropdowns">
                                    <label class=" customLabel">Year Level: </label>
                                    <select name="year_level" class="dropdownOptions " required>
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

                                <div class="dropdowns">
                                    <label class="customLabel">Status: </label>
                                    <select name="status" class="dropdownOptions" required>
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
