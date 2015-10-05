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
                                            <select name="class" class="dropdownOptions" id="class1" required>
<!--                                                <option value=""></option>-->
                                                <option value="1">1st Class</option>
                                                <option value="2">2nd Class</option>
                                                <option value="3">3rd Class</option>
                                                <option value="4">4th Class</option>
                                                <option value="5">5th Class</option>
                                                <option value="6">6th Class</option>
                                                <option value="7">7th Class</option>
                                                <option value="8">8th Class</option>
                                                <option value="9">9th Class</option>
                                                <option value="10">10th Class</option>

                                            </select>
                                        </label>

                                    </div>

    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <label class="customLabel">Division :
                                            <select name="division" class="dropdownOptions" onchange="showUser(this.value)"  id="division1" required>
                                                <option></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>

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
                                        <div class="" id="student_list">
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

<!--<div id="txtHint"><b>Person info will be listed here...</b></div>-->

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
function showUser(s_division) {
var s_class=document.getElementById('class1').value;
    if (s_division == "") {
        document.getElementById("student_list").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("student_list").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","fetch_student.php?stu_division="+s_division+"&stu_class="+s_class,true);
        xmlhttp.send();
    }
}
</script>


</body>

</html>
