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
                <a href="view_borrow_books.php" class="mdl-layout__tab is-active">Borrowed Books</a>
                <a href="view_return_books.php" class="mdl-layout__tab">Returned Books</a>
                <a href="advance_search.php" class="mdl-layout__tab">Advanced Search</a>
            </div>

        </header>

        <main class="mdl-layout__content">
            <div class="page-content ">
                <!-- Your content goes here -->
                
                <div class="contentDiv mdl-shadow--2dp">
                    <form action="" method="post">
                        <div class="topInputs">
                            <label class="customLabel">Select fine per day: </label>
                            <select name="fine_charges" class="dropdownOptions" required>
                                <option></option>
                                <option value="5">RS:5</option>
                                <option value="10">RS:10</option>
                                <option value="15">RS:15</option>
                                <option value="20">RS:20</option>
                            </select>
                            <input type="submit" name="submit_fine" value="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" id="viewBooksSubmitButton">
                        </div>
                    </form>
                    <?php
$fine_charges=5;
if(isset($_POST['submit_fine']))
{
    $fine_charges=$_POST['fine_charges'];
}
                    ?>
                    <table class="mdl-data-table mdl-js-data-table">
                        <thead>
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">Book title</th>                                 
                                <th class="mdl-data-table__cell--non-numeric">Borrower</th>                                 
                                <th class="mdl-data-table__cell--non-numeric">Year Level</th>                                 
                                <th class="mdl-data-table__cell--non-numeric">Date Borrow</th>                                 
                                <th class="mdl-data-table__cell--non-numeric">Due Date</th>                                
                                <th class="mdl-data-table__cell--non-numeric">Date Returned</th>
				                <th class="mdl-data-table__cell--non-numeric">Borrow Status</th>
                                <th class="mdl-data-table__cell--non-numeric">Total Fine</th>
                                <th class="mdl-data-table__cell--non-numeric">Return</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                mysqli_query ($con,"set character_set_results='utf8'");
                                $user_query=mysqli_query($con,"select * from borrow
								LEFT JOIN member ON borrow.member_id = member.member_id
								LEFT JOIN borrowdetails ON borrow.borrow_id = borrowdetails.borrow_id
								LEFT JOIN book on borrowdetails.book_id =  book.book_id 
								ORDER BY borrow.borrow_id DESC
								  ")or die(mysqli_error());
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['borrow_id'];
									$book_id=$row['book_id'];
									$borrow_details_id=$row['borrow_details_id'];
                                    $book_title=$row['book_title'];
                                    $firstname=$row['name'];
                                    $year_level=$row['year_level'];
                                    $date_borrow=$row['date_borrow'];
                                    $due_date=$row['due_date'];
                                    $date_return=$row['date_return'];
                                    $borrow_status=$row['borrow_status'];
                                    $fine=$row['fine'];
                                    $total_fine=0;
                                    if($fine==0)
                                    {
                                      
                                    $date2=date("Y-m-d");
                                          if($date2>$due_date)
                                        {
                                    $days = (strtotime($date2) - strtotime($due_date)) / (60 * 60 * 24);
                                    $total_fine=$days*$fine_charges;
                                        }
                                    }else{
                                        $total_fine=$row['fine'];
                                    }
                                    echo "<tr>";
									echo "<td class='mdl-data-table__cell--non-numeric'>$book_title</td>";
                                    echo "<td class='mdl-data-table__cell--non-numeric'>$firstname</td>";
                                    echo "<td class='mdl-data-table__cell--non-numeric'>$year_level</td>";
									echo "<td class='mdl-data-table__cell--non-numeric'>$date_borrow</td>";
                                    echo "<td class='mdl-data-table__cell--non-numeric'>$due_date</td>";
									echo "<td class='mdl-data-table__cell--non-numeric'>$date_return</td>";
									echo "<td class='mdl-data-table__cell--non-numeric'>$borrow_status</td>";
                                    echo "<td class='mdl-data-table__cell--non-numeric'>RS.$total_fine</td>";
                                    ?>
                        <td><a href="book_return_save.php?id=<?php echo $id; ?>& b_id=<?php echo $book_id; ?>& fine=<?php echo $total_fine;?>">Return</a></td>
                        <?php
                            echo "</tr>";
                                    }
									?>

                        </tbody>
                    </table>
                </div>

            </div>
        </main>

    </div>

</body>

</html>
