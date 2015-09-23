<?php
         session_start();
         if(!$_SESSION['LoggedIn_teacher'])
           {
                 header("location:../login_panel/login.php?problem='Not Logged In'");
                 exit;
         }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Enter Daily Attendance | Paperless System</title>

    <!--    CSS For Material Design-->
    <link rel="stylesheet" href="../css/material.indigo-orange.min.css" />
    <script src="../material_js/material.js"></script>
    <link rel="stylesheet" href="../material_js/Material+Icons.css" />
    <link rel="stylesheet" href="../fonts/Roboto+300,400,500,700.css" />
    <!--  End of CSS For Material Design-->

    <!-- CSS and JS for Jquery datepicker -->
    <link rel="stylesheet" href="../jquery-ui-1.11.4.custom/jquery-ui.min.css" />
    <script src="../jquery/jquery-2.1.4.min.js"></script>
    <script src="../jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <!-- End of CSS and JS for Jquery datepicker -->

    <!-- CSS and JS for Snackbar -->
    <link href="../css/snackbar.min.css" rel="stylesheet">
    <link href="../material_js/material_for_snackbar.css" rel="stylesheet">
    <script src="../material_js/snackbar.min.js" type="text/javascript"></script>
    <!-- End of CSS and JS for Snackbar -->

    <link rel="stylesheet" href="../css/main.css">
    <link href='../attendance/css/attendance.css' rel='stylesheet'>

    
</head>

<body>
    
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <!-- Top row, always visible -->
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Attendance</span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation ">
                    <a class="mdl-navigation__link" href="../teacher_profile/index.php">Home</a>
                </nav>

            </div>

            <div class="tabs mdl-js-ripple-effect">
                <a href="index.php" class="mdl-layout__tab is-active">Daily Attendance</a>
                <a href="monthly_report.php" class="mdl-layout__tab">Monthly Attendance Report</a>
            </div>

        </header>



<!--
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Paperless System</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="../index.php">Home</a>
            </nav>
        </div>
-->



        <main class="mdl-layout__content">
            <div class="page-content">
                <!-- Your content goes here -->

                <?php
    include("../database/connection.php");
?>
                    <?php

                            if(isset($_POST['submit'])){
                             $date1=$_POST['date'];
                              $dateTime = new DateTime($date1);
                              $formatted_date=date_format ($dateTime, 'Y-m-d' );
                             $timing=$_POST['timing'];
                                if(!empty($_POST['check_list'])){
                                    foreach($_POST['check_list'] as $selected){
            $result = mysqli_query($con,"INSERT INTO
            attendance(reg_no,date,timing)VALUES('$selected','$formatted_date','$timing')"); 
                                 
                                    }
                                } 
                                // Code for Snackbar after the Submit button is clicked
                                echo "<script type='text/javascript'>
                                            $( document ).ready(function() {
                                                $.snackbar({content: 'Attendance inserted successfully', timeout: 5000});
                                            });
                                        </script>" ;       
                            }

?>
                

                        <div class="attendance_div reg_info mdl-shadow--2dp">

                            <form action="" method="post">

                                <h2 id="form_header">Attendance Entry</h2>


                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <label class="customLabel">Class :
                                            <select name="class" class="dropdownOptions" onchange="changeStudent()" id="class1" required>
                                                <option value=""></option>
                                                <option value="6">6th Class</option>
                                                <option value="7">7th Class</option>

                                            </select>
                                        </label>

                                    </div>


                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <label class="customLabel"> Timing:
                                            <select name='timing' class="dropdownOptions" required>
                                                <option></option>
                                                <option value='Morning'>Morning</option>
                                                <option value='Afternoon'>Afternoon</option>
                                            </select>
                                        </label>

                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <label class="customLabel">Date :
                                            <input type="text" name="date" class="dropdownOptions" id="datepicker" required>
                                        </label>

                                    </div>

                                </div>

                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--12-col">
                                        <div class="" id="student_dropdown">
                                            <table class='mdl-data-table mdl-js-data-table  mdl-shadow--2dp'>
                                                <thead>
                                                    <tr>
                                                        <th>Reg No.</th>
                                                        <th class='mdl-data-table__cell--non-numeric'>Student Name</th>
                                                        <th>Attendance (Tick only absent students)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                                <div class=''>
                                    <input type='submit' class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent submitAttendance" name='submit' value='Submit'>
                                </div>

                            </form>


                        </div>


            </div>
        </main>

    </div>
    

    <?php
                  echo " <script>
                  $(function() {
            $('#datepicker').datepicker({dateFormat: 'dd-mm-yy', minDate: 0 });
                       });
                </script>";
      ?>

        <script>
            function changeStudent() {
                if (document.getElementById("class1").value == "6") {
                    document.getElementById("student_dropdown").innerHTML = "<?php
                    $con = mysqli_connect("localhost", "root", "", "school_project");
                    if (mysqli_connect_errno()) {
                        echo "Failed to connect to MySQL: ".mysqli_connect_error();
                    }
                    echo "<table class='mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp'>";
                    echo "<thead>";
                    echo "<tr><th>Reg No.</th><th class='mdl-data-table__cell--non-numeric'>Student Name</th><th>Attendance (Select only absent)</th></tr>";
                    echo "</thead><tbody>";
                    mysqli_query($con, "set character_set_results='utf8'");
                    $result = mysqli_query($con, "SELECT * FROM master where current_class='6'");
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr><td>".$row['reg_no'].
                        "</td>";
                        echo "<td class='mdl-data-table__cell--non-numeric'> ".$row['student_name'].
                        "</td>";
                        echo "<td><label class='mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect' for='checkbox-1'>";
                        echo "<input type='checkbox' id='checkbox-1'  name='check_list[]' value={$row['reg_no']} class='mdl-checkbox__input'>";
                        echo "</label></td>";
                        echo "</tr>";

                    }
                    echo "</tbody></table>"; ?> ";

                } else if (document.getElementById("class1").value == "7") {
                    document.getElementById("student_dropdown").innerHTML = "<?php
                    $con = mysqli_connect("localhost", "root", "", "school_project");
                    if (mysqli_connect_errno()) {
                        echo "Failed to connect to MySQL: ".mysqli_connect_error();
                    }
                    echo "<table class='mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp'>";
                    echo "<thead>";
                    echo "<tr><th>Reg No.</th><th class='mdl-data-table__cell--non-numeric'>Student Name</th><th>Attendance (Select only absent)</th></tr>";
                    echo "</thead><tbody>";
                    mysqli_query($con, "set character_set_results='utf8'");
                    $result = mysqli_query($con, "SELECT * FROM master where current_class='7'");
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr><td>".$row['reg_no'].
                        "</td>";
                        echo "<td class='mdl-data-table__cell--non-numeric'> ".$row['student_name'].
                        "</td>";
                        echo "<td><input type='checkbox' name='check_list[]' value={$row['reg_no']} class='check'></td>";
                        echo "</tr>";

                    }
                    echo "</tbody></table>"; ?> ";

                }
            }

        </script>

</body>

</html>
