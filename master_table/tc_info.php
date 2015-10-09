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

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>TC Information | Paperless System</title>

    <!--    CSS For Material Design-->
    <link rel="stylesheet" href="../css/material.blue-pink.min.css" />
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

    <!-- FUnction for the datepicker -->
    <script>
        $(function() {
            $(".datepicker").datepicker({
                dateFormat: 'dd-mm-yy'
            });
        });

    </script>

</head>

<body>

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <!-- Top row, always visible -->
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">All Student Details</span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="master.php">Master</a>
                    <a class="mdl-navigation__link" href="../index.php">Home</a>
                </nav>


            </div>
            <!-- Bottom row, not visible on scroll -->
            <!--
                  <div class="mdl-layout__header-row">
                    
                     Navigation 
                    <nav class="waterfall-demo-header-nav mdl-navigation">
                      <a class="mdl-navigation__link" href="index.php">Basic Info</a>
                      <a class="mdl-navigation__link" href="">TC</a>
                      <a class="mdl-navigation__link" href="">Other Info</a>
                      <a class="mdl-navigation__link" href="student_grade.php">Grade</a>
                    </nav>
                  </div>
-->

            <div class="tabs mdl-js-ripple-effect">
                <a href="index.php" class="mdl-layout__tab">Student Info</a>
                <a href="tc_info.php" class="mdl-layout__tab is-active">TC Information</a>
                <a href="other_info.php" class="mdl-layout__tab">Other Info</a>
                <a href="student_grade.php" class="mdl-layout__tab">Student Grades</a>
<!--                <a href="update.php" class="mdl-layout__tab">Update Student Info</a>-->
            </div>

        </header>



<!--
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Paperless System</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="../index.php">Home</a>
                <a class="mdl-navigation__link" href="master.php">Master</a>
                <a class="mdl-navigation__link" href="index.php">Entry</a>
            </nav>
        </div>
-->



        <main class="mdl-layout__content">

            <?php
                  include("../database/connection.php");
              ?>

                <?php
                   if(isset($_POST['submit_tc_info']))
                   {
                      $reg_no=$_POST['reg_no'];
                      $school_leaving_class=$_POST['school_leaving_class'];
                      $date_leaving1=$_POST['date_leaving'];
                      $dateTime1 = new DateTime($date_leaving1);
                      $date_leaving=date_format ($dateTime1, 'Y-m-d' );
                       
                      $student_progress=$_POST['student_progress'];
                      $leaving_reason=$_POST['leaving_reason'];
//                      $tc_no=$_POST['tc_no'];
                      $behaviour=$_POST['behaviour'];
                      $date1=$_POST['tc_date'];
                       
                     $dateTime = new DateTime($date1);
                     $tc_date=date_format ($dateTime, 'Y-m-d' );
                       
                      $remark=$_POST['remark'];

                    mysqli_query ($con,"set character_set_results='utf8'");      
                    mysqli_query($con,"UPDATE master SET school_leaving_class=N'$school_leaving_class',school_leaving_date=N'$date_leaving',student_progress=N'$student_progress',behaviour=N'$behaviour',school_leaving_reason=N'$leaving_reason',tc_date=N'$tc_date',tc_remark=N'$remark' WHERE reg_no='$reg_no'");
                    
                       // Code for Snackbar after the Submit button is clicked
                       echo "<script type='text/javascript'>
                    $( document ).ready(function() {
                        $.snackbar({content: 'TC information was entered successfully', timeout: 5000});
                    });
                </script>" ;
                       
                   }
                  ?>



                    <div class="page-content">
                        <!-- Your content goes here -->
                        <div class="mdl-shadow--2dp student_info_form">
                            <h2 id="form_header">Student TC Information</h2>
                            <form action="" method="post">

                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <label class="customLabel">Registration No :</label>
                                        <?php
              $result = mysqli_query($con,"SELECT * FROM master"); 
             echo "<select name='reg_no' class='dropdownOptions' required>";
             echo "<option value=''></option>";
            while($row = mysqli_fetch_array($result)){
              $reg_no1=$row['reg_no'];
             echo "<option value='$reg_no1'>$reg_no1</option>";
            }
             echo "</select>";
          ?>

                                    </div>
                                </div>

                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="school_leaving_class" name="school_leaving_class" />
                                        <label class="mdl-textfield__label" for="school_leaving_class">School Leaving Class</label>

                                    </div>
                                    <div class="mdl-cell mdl-cell-8-col-tablet mdl-cell--6-col">
                                        <label class="customLabel">Date Leaving :</label>
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input datepicker" type="text" id="date_leaving" name="date_leaving" required/>
                                        </div>
                                    </div>
                                </div>

                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="student_progress" name="student_progress" />
                                        <label class="mdl-textfield__label" for="student_progress">Student Progress</label>

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="leaving_reason" name="leaving_reason" />
                                        <label class="mdl-textfield__label" for="leaving_reason">Leaving Reason</label>

                                    </div>
                                </div>

                                <div class="mdl-grid">

<!--
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="tc_no" name="tc_no" />
                                        <label class="mdl-textfield__label" for="tc_no">TC No</label>
                                        <span class="mdl-textfield__error">Input is not a number!</span>
                                    </div>
-->

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="behaviour" name="behaviour" />
                                        <label class="mdl-textfield__label" for="behaviour">Behaviour</label>

                                    </div>
                                    <div class="mdl-cell mdl-cell-8-col-tablet mdl-cell--6-col">
                                        <label class="customLabel">TC Date :</label>
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input datepicker" type="text" id="tc_date" name="tc_date" required/>
                                        </div>
                                    </div>
                                </div>

                                <div class="mdl-grid">


                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="remark" name="remark" />
                                        <label class="mdl-textfield__label" for="remark">Remark</label>

                                    </div>
                                </div>


                                <!-- Accent-colored raised button with ripple -->

                                <div class="submitButtonDiv">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="submit_tc_info" type="submit">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>


                    </div>
        </main>

    </div>
</body>

</html>
