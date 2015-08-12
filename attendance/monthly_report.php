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

    <link rel="stylesheet" href="../css/main.css">
    <link href='../attendance/css/attendance.css' rel='stylesheet'>

</head>

<body>
    <!--    Waterfall header-->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <!-- Top row, always visible -->
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Attendance System</span>
                
                
            </div>

            <div class="tabs mdl-js-ripple-effect">
                <a href="index.php" class="mdl-layout__tab">Daily Attendance</a>
                <a href="monthly_report.php" class="mdl-layout__tab is-active">Monthly Attendance Report</a>
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



                    <div class="attendance_div mdl-shadow--2dp">

                        <form action="" method="post">

                            <h2 id="form_header">Entry Attendance</h2>


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
                                            <option value="12">Deb</option>
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



                    <div class="attendance_div mdl-shadow--2dp">

                        <h2 id="form_header">Monthly Report :
                                 <?php 
                                    if(isset($_POST['submit'])){
                                        $month=$_POST['month'];
                                         echo "$month";
                                     }
                                 ?>
                               </h2>

                        <div class="mdl-grid">


                            <?php
                                      $con=mysqli_connect("localhost","root","","school_project");
                                          if (mysqli_connect_errno())
                                          {
                                              echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                          }
                       ?>

                                <?php

                            if(isset($_POST['submit'])){
                              
                           echo  "<table class='mdl-data-table mdl-js-data-table  mdl-shadow--2dp'>";
                           echo  "<thead>";
                           echo  "<tr>";
                           echo  "<td>Reg No.</td><td>Student Name</td><td>Gender</td><td>Caste and Subcaste</td><td>Birthdate</td>";

         
//                                $timing1=$_POST['timing'];
//                                $date1=$_POST['date1'];
//                                $date2=$_POST['date2'];
                                $class1=$_POST['class'];
                                $month=$_POST['month'];
                                $year=$_POST['year'];
                                $days = cal_days_in_month(CAL_GREGORIAN, $month, $year); 
                          mysqli_query ($con,"set character_set_results='utf8'"); 

//                              echo "$month<br/>";
//                              echo "$year<br/>";
//                              echo "$year-$month-01";
//                              echo "$year-$month-$days";
                        $sql1="SELECT date,timing FROM calendar WHERE date BETWEEN '$year-$month-01' AND '$year-$month-$days'  ORDER BY date";
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
                        $sql3 = "SELECT * FROM master where current_class='$class1'";
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
    <script src="../attendance/js/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <script>
        $(function() {
            $('#datepicker1').datepicker({
                dateFormat: 'yy-mm-dd',
                maxDate: 0
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
