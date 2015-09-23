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
                      <h4>Edit Member details below</h4>
                      <?php
                        $mem_id=$_GET['mem_id'];
                        mysqli_query ($con,"set character_set_results='utf8'"); 
	                    $m_query = mysqli_query($con,"select * from member where member_id='$mem_id'");
			            while($m_row = mysqli_fetch_array($m_query)){
                            $member_firstname=$m_row['name'];
//                            $member_gender=$m_row['gender'];
                            $member_address=$m_row['address'];
                            $member_contact=$m_row['contact'];
                            $member_type=$m_row['type'];
                            $member_year_level=$m_row['year_level'];
                            $member_status=$m_row['status'];
                        }
                      
                      ?>
                        <form action="update_member.php?mem_id=<?php echo $mem_id;?>" method="post">
                        <div class="mdl-grid">
                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col">
                    <input class="mdl-textfield__input" type="text" id="m_firstname" name="m_firstname" value="<?php echo $member_firstname;?>"/>
                            <label class="mdl-textfield__label" for="m_firstname">Firstname</label>
                          </div>
                            
                            
                            
                        <div class="mdl-cell--8-col">
                            <label>Gender</label>
                            <select name="m_gender" class="mdl-cell--4-col" required>
                                <option value=""></option>
                                <option value="Male">Male</option>
				                <option value="Female">Female</option>
                            </select>
                        </div>
                            
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col">
                            <input class="mdl-textfield__input" type="text" id="m_address" name="m_address" value="<?php echo $member_address;?>"/>
                            <label class="mdl-textfield__label" for="m_address">Address</label>
                          </div>
                            
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col">
                        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="m_contact" name="m_contact" value="<?php echo $member_contact;?>" />
                            <label class="mdl-textfield__label" for="m_contact">Contact</label>
                            <span class="mdl-textfield__error">Input is not a number!</span>
                          </div>
                            

                            
                        <div class="mdl-cell--8-col">
                             <label>Member Type</label>
	                         <select name="m_type" required>
									<option></option>
									<option>Student</option>
									<option>Teacher</option>
                                    <option>Staff</option>
                                    <option>Non-Teaching</option>
				                </select>
                        </div>
                            
                        <div class="mdl-cell--8-col">
                             <label>Year Level</label>
	                         <select name="m_year_level" required>
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
                             <label>Status</label>
	                         <select name="m_status" required>
									<option></option>
			                        <option>Active</option>
									<option>Banned</option>
				                </select>
                        </div>
                            
                        </div>
                            <input type="submit" name="edit_member_submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" />
                      </form>
                </div>

            </div>
        </main>

    </div>

</body>

</html>
