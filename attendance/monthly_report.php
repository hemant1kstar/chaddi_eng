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


    <title>Monthly Attendance Report | Paperless System</title>

    <!--    CSS For Material Design-->
    <link rel="stylesheet" href="../css/material.indigo-orange.min.css" />
    <script src="../material_js/material.js"></script>
    <link rel="stylesheet" href="../material_js/Material+Icons.css" />
    <link rel="stylesheet" href="../fonts/Roboto+300,400,500,700.css" />

    <!--  End of CSS For Material Design-->

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
                <a href="index.php" class="mdl-layout__tab">Daily Attendance</a>
                <a href="monthly_report.php" class="mdl-layout__tab is-active">Monthly Attendance Report</a>
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



                    <div class="attendance_div mdl-shadow--2dp">

                        <form action="" method="post">

                            <h2 id="form_header">Monthly Attendance Report</h2>


                            <div class="mdl-grid">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                    <label class="customLabel">Class :
                                        <select name="class" class="dropdownOptions" onchange="changeStudent()" id="class1" required>
                                            <option value=""></option>
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
                                <div class="mdl-textfield mdl-js-textfield  mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                    <label class="customLabel">Month :
                                        <select name="month" class="dropdownOptions" required>
                                            <option value=""></option>
                                            <option value="01">Jan</option>
                                            <option value="02">Feb</option>
                                            <option value="03">Mar</option>
                                            <option value="04">April</option>
                                            <option value="05">May</option>
                                            <option value="06">Jun</option>
                                            <option value="07">July</option>
                                            <option value="08">August</option>
                                            <option value="09">Sep</option>
                                            <option value="10">Oct</option>
                                            <option value="11">Nov</option>
                                            <option value="12">Dec</option>
                                        </select>
                                    </label>

                                </div>
                                <div class="mdl-textfield mdl-js-textfield  mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                    <label class="customLabel">Year :
                                        <select name="year" class="dropdownOptions" required>
                                            <option value=""></option>
                                            <option value="2015">2015</option>
                                        </select>
                                    </label>

                                </div>

                                <!--
                <div class="mdl-textfield mdl-js-textfield  mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                 <div>
                                    <label>Start Date:</label>
                                 </div>
                                 <div class="">
                                     <input type="text" name="date1" class="form-control" id="datepicker1" required>
                                </div>
                            </div>
                            
          <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                   <div class="">
                                    <label>End Date:</label>
                                 </div>
                                 <div class="">
                                     <input type="text" name="date2" class="form-control" id="datepicker2" required>
                                </div>
                            </div>
-->



                                <!--
         <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
               <div class=""><label> Timing:</label></div>
                                    <div class="">
                                        <select name='timing' required>
                                            <option></option>
                                            <option  value='Morning'>Morning</option>
                                            <option  value='Afternoon'>Afternoon</option>
                                       </select>
                                    </div>
           
        </div>
-->


                            </div>





                            <div>
                                <input type='submit' class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent submitAttendance" name='submit' value='Submit'>
                            </div>

                        </form>


                    </div>



                    <div class="attendance_div mdl-shadow--2dp reportDiv">

                        

                        <div class="">



                                <?php

                            if(isset($_POST['submit'])){
                                $class1=$_POST['class'];
                                $month=$_POST['month'];
                                $year=$_POST['year'];
                                $division=$_POST['division'];
                                $monthName = "";

                                
                                
                                if ($month == 01) {
                                    $monthName = "Jan";
                                }elseif ($month == 02) {
                                    $monthName = "Feb";
                                }elseif ($month == 03) {
                                    $monthName = "March";
                                }elseif ($month == 04) {
                                    $monthName = "April";
                                }elseif ($month == 05) {
                                    $monthName = "May";
                                }elseif ($month == 06) {
                                    $monthName = "June";
                                }elseif ($month == 07) {
                                    $monthName = "July";
                                }elseif ($month == '08') {
                                    $monthName = "Aug";
                                }elseif ($month == '09') {
                                    $monthName = "Sept";
                                }elseif ($month == 10) {
                                    $monthName = "Oct";
                                }elseif ($month == 11) {
                                    $monthName = "Nov";
                                }elseif ($month == 12) {
                                    $monthName = "Dec";
                                }
                                
                                echo "<h2 id='form_header'>Monthly Report for $monthName, $year </h2>"  ;
                           echo  "<table class='mdl-data-table mdl-js-data-table  mdl-shadow--2dp'>";
                           echo  "<thead>";
                           echo  "<tr>";
                           echo  "<td>Reg No.</td><td>Student Name</td><td>Gender</td><td>Caste and Subcaste</td><td>Birthdate</td>";

         
//                                $timing1=$_POST['timing'];
//                                $date1=$_POST['date1'];
//                                $date2=$_POST['date2'];
                               
                                $days = cal_days_in_month(CAL_GREGORIAN, $month, $year); 
                          mysqli_query ($con,"set character_set_results='utf8'"); 

//                              echo "$month<br/>";
//                              echo "$year<br/>";
//                              echo "$year-$month-01";
//                              echo "$year-$month-$days";
                        $sql1="SELECT date,timing FROM calendar WHERE date BETWEEN '$year-$month-01' AND '$year-$month-$days'  ORDER BY date ASC";
                        $result1=mysqli_query($con,$sql1);
//                        $result1=mysqli_query($con,$sql);

                       while($cal=mysqli_fetch_array($result1,MYSQLI_NUM))
                        {
                         if($cal[1]=="Morning")
                         {
                                echo "<td>$cal[0]<br>(Morning)</td>";
                         }
                          if($cal[1]=="Afternoon")
                         {
                                echo "<td>$cal[0]<br>(Afternoon)</td>";
                         }
                        
//                        $df=$cal[0];
                        }
                              
//                        $sql2="SELECT * FROM calendar WHERE date BETWEEN '$date1' AND '$date2' AND timing='Afternoon' ORDER BY date";
//                        $result2=mysqli_query($con,$sql2);
//
//
//                        while($cal2=mysqli_fetch_array($result2,MYSQLI_NUM))
//                        {
//                        echo "<td>$cal2[0](दुपार)</td>";
//           
//                        }
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        $sql3 = "SELECT * FROM master where current_class='$class1' and admitted_division='$division'";
                        $result3=mysqli_query($con,$sql3);

                        while($row=mysqli_fetch_array($result3,MYSQLI_NUM))
                        {


                        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[3]</td><td>$row[9],$row[10]</td><td>$row[5]</td>";

//                        $sql4 = " SELECT date FROM `attendance` WHERE reg_no='$row[0]' AND timing='$timing1'";
                        $sql4 = " SELECT date,timing FROM `attendance` WHERE reg_no='$row[0]'";

                        $result1=mysqli_query($con,$sql1);

                        while($cal1=mysqli_fetch_array($result1,MYSQLI_NUM))
                        {
                          
                        $status1="P";

                          $result4=mysqli_query($con,$sql4);
                        while($row1=mysqli_fetch_array($result4,MYSQLI_NUM))
                        {


                               if($row1[0]==$cal1[0] && $row1[1]==$cal1[1])
                               {
                               
                                      $status1="A";

                               }
                          

                        }
                              echo "<td>$status1</td>";

                        }

                                   echo "</tr>";

                        }

                    }

                        ?>
                                    </tbody>
                                    </table>
                        </div>
                    </div>


            </div>
        </main>

    </div>
    <script src="../jquery/jquery-2.1.4.min.js"></script>
    <script src="../jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>

    <script>
        $(function() {
            $('#datepicker1').datepicker({
                dateFormat: 'yy-mm-dd'
            });
        });

    </script>


    <script>
        $('#datepicker1').on('change', function() {
            var value12 = this.value;
            $('#datepicker2').datepicker({
                dateFormat: 'yy-mm-dd',
                maxDate: 0,
                minDate: value12
            });

        });

    </script>


</body>

</html>
