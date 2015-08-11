<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Paperless System</title>

    <!--    CSS For Material Design-->
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.blue-pink.min.css" />
    <script src="../material_js/material.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <!--  End of CSS For Material Design-->
    
    <!-- CSS and JS for Jquery datepicker -->
    <link rel="stylesheet" href="../jquery-ui-1.11.4.custom/jquery-ui.min.css" />
    <script src="../jquery/jquery-2.1.4.min.js"></script>
    <script src="../jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <!-- End of CSS and JS for Jquery datepicker -->

    <link rel="stylesheet" href="../css/main.css">
    <link href='../attendance/css/attendance.css' rel='stylesheet'>

</head>

<body>
    <!--    Waterfall header-->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header mdl-layout__header--scroll">
            <!-- Top row, always visible -->
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Attendance System</span>
                <div class="mdl-layout-spacer"></div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                                mdl-textfield--floating-label mdl-textfield--align-right">
                    <label class="mdl-button mdl-js-button mdl-button--icon" for="waterfall-exp">
                        <i class="material-icons">search</i>
                    </label>
                    <div class="mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input" type="text" name="sample" id="waterfall-exp" />
                    </div>
                </div>
            </div>

            <div class="tabs mdl-js-ripple-effect">
                <a href="index.php" class="mdl-layout__tab is-active">Daily Attendance</a>
                <a href="monthly_report.php" class="mdl-layout__tab">Monthly Attendance Report</a>
            </div>

        </header>



        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Paperless System</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="master.php">Master</a>
                <a class="mdl-navigation__link" href="index.php">Entry</a>
            </nav>
        </div>



        <main class="mdl-layout__content">
            <div class="page-content">
                <!-- Your content goes here -->
                <?php
                                      $con=mysqli_connect("localhost","root","","school_project");
                                          if (mysqli_connect_errno())
                                          {
                                              echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                          }
                       ?>

                    <?php

                            if(isset($_POST['submit'])){
                             $date1=$_POST['date'];
                             $timing=$_POST['timing'];
                                if(!empty($_POST['check_list'])){
                                    foreach($_POST['check_list'] as $selected){
            $result = mysqli_query($con,"INSERT INTO
            attendance(reg_no,date,timing)VALUES('$selected','$date1','$timing')"); 
                                 
                                    }
                                  
                                } 
                                  echo "Attendance inserted successfully";
                                     
                            }

?>

                        <div class="attendance_div mdl-shadow--2dp">

                            <form action="" method="post">

                                <h4 id="form_header">Entry Attendance</h4>


                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <div class="">
                                            <label>Class :</label>
                                        </div>


                                        <div class="">
                                            <select name="class" class="form-control" onchange="changeStudent()" id="class1" required>
                                                <option value=""></option>
                                                <option value="6">6th Class</option>
                                                <option value="7">7th Class</option>

                                            </select>
                                        </div>

                                    </div>


                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <div class="">
                                            <label> Timing:</label>
                                        </div>
                                        <div class="">
                                            <select name='timing' required>
                                                <option></option>
                                                <option value='Morning'>Morning</option>
                                                <option value='Afternoon'>Afternoon</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <div class="">
                                            <div class="">
                                                <label>Date :</label>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" name="date" class="form-control" id="datepicker" required>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="mdl-grid">

                                </div>

                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--12-col">
                                        <div class="" id="student_dropdown">
                                            <table class='mdl-data-table mdl-js-data-table  mdl-shadow--2dp'>
                                                <thead>
                                                    <tr>
                                                        <th>Reg No.</th>
                                                        <th class='mdl-data-table__cell--non-numeric'>Student Name</th>
                                                        <th>Attendance (only absent select)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                    <div class=''>
                                        <input type='submit' class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent btn1" name='submit' value='Submit'>
                                    </div>
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
                    echo "<tr><th>Reg No.</th><th class='mdl-data-table__cell--non-numeric'>Student Name</th><th>Attendance (only absent select)</th></tr>";
                    echo "</thead><tbody>";
                    mysqli_query($con, "set character_set_results='utf8'");
                    $result = mysqli_query($con, "SELECT * FROM master where current_class='6'");
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr><td>".$row['reg_no'].
                        "</td>";
                        echo "<td class='mdl-data-table__cell--non-numeric'> ".$row['student_name'].
                        "</td>";
                        echo "<td><input type='checkbox' name='check_list[]' value={$row['reg_no']} class='check'></td>";
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
                    echo "<tr><th>Reg No.</th><th class='mdl-data-table__cell--non-numeric'>Student Name</th><th>Attendance (only absent select)</th></tr>";
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
