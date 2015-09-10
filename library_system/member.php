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
                <a href="member.php" class="mdl-layout__tab is-active">Member</a>
                <a href="view_borrow_books.php" class="mdl-layout__tab">Borrowed Books</a>
                <a href="view_return_books.php" class="mdl-layout__tab">Returned Books</a>
                <a href="advance_search.php" class="mdl-layout__tab">Advanced Search</a>
            </div>

        </header>

        <main class="mdl-layout__content">
            <div class="page-content mdl-shadow--4dp">
                <!-- Your content goes here -->
                <!-- Accent-colored raised button with ripple -->
           <a href="add_member.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"  id="add_book">ADD MEMBER</a>
                  <div class="contentDiv">
                    <table class="mdl-data-table mdl-js-data-table">
                        <thead>
                            <tr>
                                <th class='mdl-data-table__cell--non-numeric'>Name</th>
                                <th class='mdl-data-table__cell--non-numeric'>Gender</th>
                                <th class='mdl-data-table__cell--non-numeric'>Address</th>
                                <th class='mdl-data-table__cell--non-numeric'>Contact</th>
                                <th class='mdl-data-table__cell--non-numeric'>Type</th>
                                <th class='mdl-data-table__cell--non-numeric'>Year Level</th>
                                <th class='mdl-data-table__cell--non-numeric'>Status</th>
                                <th class='mdl-data-table__cell--non-numeric'>Update</th>
                                <th class='mdl-data-table__cell--non-numeric'>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            mysqli_query ($con,"set character_set_results='utf8'"); 
                            $query=mysqli_query($con,"SELECT * FROM member");
                            while($result1= mysqli_fetch_array($query)) {
                            $member_id1=$result1['member_id'];
                            $firstname1=$result1['name'];
                            $gender1=$result1['gender'];
                            $address1=$result1['address'];
                            $contact1=$result1['contact'];
                            $type1=$result1['type'];
                            $year_level1=$result1['year_level'];
                            $status1=$result1['status'];
                                
                            echo "<tr>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$firstname1</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$gender1</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$address1</td>";
                            echo "<td>$contact1</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$type1</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$year_level1</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$status1</td>";
                            echo "<td class='divhide'><a href='edit_member.php?mem_id=".$member_id1."' class='mdl-js-button mdl-js-ripple-effect' title='Edit Data'><img src='images/ic_edit_24px.svg' /></a></td>";
                            echo '<td class="divhide"><button onClick="myFunction_Delete_row(\''.$member_id1.'\')" class="mdl-js-button mdl-js-ripple-effect deleteRowButton" title="Delete Complete Row"><img src="images/ic_delete_24px.svg" /></button></td>';
                            echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </main>

    </div>
    
        <script>
            function myFunction_Delete_row(r_id) {
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
                    window.location = "delete_member.php?r_id=" + r_id;
                });
            }

        </script>

</body>

</html>
