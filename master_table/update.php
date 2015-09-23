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


    <title>Update Student Information | Paperless System</title>

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

    <!-- For separate styles other than MAIN>CSS file -->
    <link rel="stylesheet" href="../css/update.css">


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
                <a href="tc_info.php" class="mdl-layout__tab">TC Information</a>
                <a href="other_info.php" class="mdl-layout__tab">Other Info</a>
                <a href="student_grade.php" class="mdl-layout__tab">Student Grades</a>
                <a href="update.php" class="mdl-layout__tab is-active">Update Student Info</a>
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




                <div class="page-content">
                    <!-- Your content goes here -->
                    <div class="mdl-shadow--2dp student_info_form" id="display_student_table">
                        <h2 id="form_header">Student Search Profile</h2>
                        <form action="" method="post">
                            <div class="">
                                <label class="customLabel" id="displayTableRegistrationLabel">Registration No :</label>
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
                                    <button class=" mdl-button mdl-js-button mdl-button--primary mdl-js-ripple-effect" name="submit_update" type="submit" id="displayTableButton">Submit</button>
                            </div>


                        </form>


                        <h5 id="studentDetailsHeader">Student Details</h5>

                        <table class="mdl-data-table mdl-js-data-table table1" id="table1">
                            <thead>
                                <tr>
                                    <th>Reg. No. </th>
                                    <th class="mdl-data-table__cell--non-numeric">Student Name</th>
                                    <th class="mdl-data-table__cell--non-numeric">Mother Name</th>
                                    <th class='mdl-data-table__cell--non-numeric'>Gender</th>
                                    <th class="mdl-data-table__cell--non-numeric">Mother Tongue</th>
                                    <th>Birth Date</th>
                                    <th>Age</th>
                                    <th class="mdl-data-table__cell--non-numeric">Nationality</th>
                                    <th class="mdl-data-table__cell--non-numeric">Religion</th>
                                    <th class="mdl-data-table__cell--non-numeric">Caste</th>
                                    <th class="mdl-data-table__cell--non-numeric">Sub-Caste</th>
                                    <th class="mdl-data-table__cell--non-numeric">Category</th>
                                    <th class="mdl-data-table__cell--non-numeric">Father Name</th>
                                    <th class="mdl-data-table__cell--non-numeric">Father Occupation</th>
                                    <th>Annual Income</th>
                                    <th class="mdl-data-table__cell--non-numeric">Birth Place</th>
                                    <th class="mdl-data-table__cell--non-numeric">District</th>
                                    <th class="mdl-data-table__cell--non-numeric">State</th>

                                    <th>Prev Class</th>
                                    <th class="mdl-data-table__cell--non-numeric">Prev School Name</th>
                                    <th>Admission Date</th>
                                    <th>Admission Class</th>
                                    <th class="mdl-data-table__cell--non-numeric">Prev Mark Sheet</th>
                                    <th class="mdl-data-table__cell--non-numeric">Prev Tc</th>
                                    <th class="mdl-data-table__cell--non-numeric">Nadar Fee</th>
                                    <th class="mdl-data-table__cell--non-numeric">Permanent Address</th>
                                    <th class="mdl-data-table__cell--non-numeric">Medium</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                   if(isset($_POST['submit_update']))
                   {


                     $reg_no2=$_POST['reg_no'];
              
                          mysqli_query ($con,"set character_set_results='utf8'"); 
                          $query = mysqli_query($con,"SELECT * FROM master where reg_no='$reg_no2'") or die(mysqli_error());
                          while($row=mysqli_fetch_array($query))
                          {
                            $reg_no=$row['reg_no'];
                            $student_name=$row['student_name'];
                            $mother_name=$row['mother_name'];
                            $gender=$row['gender'];
                            $Mother_tongue=$row['Mother_tongue'];
                            $birthdate=$row['birthdate'];
                            $age=$row['age'];
                            $nationality=$row['nationality'];
                            $religion=$row['religion'];


                            $caste=$row['caste'];
                            $sub_caste=$row['sub_caste'];
                            $category=$row['category'];
                            $father_name=$row['father_name'];
                            $father_occupation=$row['father_occupation'];
                            $annual_income=$row['annual_income'];
                            $birth_place=$row['birth_place'];
                            $district=$row['district'];
                            $state=$row['state'];

                            $prev_class=$row['prev_class'];
                            $prev_school_name=$row['prev_school_name'];
                            $admission_date=$row['admission_date'];
                            $admission_class=$row['admission_class'];
                            $prev_mark_sheet=$row['prev_mark_sheet'];
                            $prev_tc=$row['prev_tc'];
                            $nadar_fee=$row['nadar_fee'];
                            $permanent_address=$row['permanent_address'];
                            $medium=$row['medium'];


                            echo "<tr>";
                            echo "<td>$reg_no</td>"; 
                            echo "<td class='mdl-data-table__cell--non-numeric'>$student_name</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$mother_name</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$gender</td>"; 
                            echo "<td class='mdl-data-table__cell--non-numeric'>$Mother_tongue</td>";
                            echo "<td>$birthdate</td>"; 
                            echo "<td>$age</td>"; 
                            echo "<td class='mdl-data-table__cell--non-numeric'>$nationality</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$religion</td>"; 
                            echo "<td class='mdl-data-table__cell--non-numeric'>$caste</td>"; 
                            echo "<td class='mdl-data-table__cell--non-numeric'>$sub_caste</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$category</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$father_name</td>"; 
                            echo "<td class='mdl-data-table__cell--non-numeric'>$father_occupation</td>";
                            echo "<td>$annual_income</td>"; 
                            echo "<td class='mdl-data-table__cell--non-numeric'>$birth_place</td>"; 
                            echo "<td class='mdl-data-table__cell--non-numeric'>$district</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$state</td>"; 

                            echo "<td>$prev_class</td>"; 
                            echo "<td class='mdl-data-table__cell--non-numeric'>$prev_school_name</td>";
                            echo "<td>$admission_date</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$admission_class</td>"; 
                            echo "<td class='mdl-data-table__cell--non-numeric'>$prev_mark_sheet</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$prev_tc</td>"; 
                            echo "<td class='mdl-data-table__cell--non-numeric'>$nadar_fee</td>"; 
                            echo "<td class='mdl-data-table__cell--non-numeric'>$permanent_address</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$medium</td>"; 
                            echo "</tr>";
                          }
                   }

                          ?>



                            </tbody>
                        </table>

                        <!--                    </div>-->
                    </div>

                    <div class="mdl-shadow--2dp student_info_form">
                        <h2 id="form_header">Student Update Profile</h2>


                        <?php
                   if(isset($_POST['submit_update_profile']))
                   {
        $reg_no3=$_POST['reg_no3'];
        $student_name1=$_POST['student_name'];
        $mother_name1=$_POST['mother_name'];
        $mother_tongue1=$_POST['mother_tongue'];
        $gender1=$_POST['gender'];
//        $birth_date1=$_POST['birth_date'];
        $date1=$_POST['birth_date'];
         
        $dateTime = new DateTime($date1);
        $birth_date=date_format ($dateTime, 'Y-m-d');
        $age1=$_POST['age'];
        $nationality1=$_POST['nationality'];
        $religion1=$_POST['religion'];
        $caste1=$_POST['caste'];
        $sub_caste1=$_POST['sub_caste'];
        $category1=$_POST['category'];
        $father_name1=$_POST['father_name'];
        $father_occupation1=$_POST['father_occupation'];
        $annual_income1=$_POST['annual_income'];
        $birth_place1=$_POST['birth_place'];
        $district1=$_POST['district'];
        $state1=$_POST['state'];
        $prev_class1=$_POST['prev_class'];
        $admission_date1=$_POST['admission_date'];
         
        $dateTime2 = new DateTime($admission_date1);
        $admission_date1=date_format ($dateTime2, 'Y-m-d');
                       
        $prev_school_name1=$_POST['prev_school_name'];
        $admission_class1=$_POST['admission_class'];
        $prev_mark_sheet1=$_POST['prev_mark_sheet'];
        $prev_tc1=$_POST['prev_tc'];
        $nadar_fee1=$_POST['nadar_fee'];
        $permanent_address1=$_POST['permanent_address'];
        $medium1=$_POST['medium'];
                       
        $current_class1=$_POST['current_class'];
        $status1=$_POST['status'];
        $contact_no1=$_POST['contact_no'];

                    mysqli_query ($con,"set character_set_results='utf8'");      
mysqli_query($con,"UPDATE master SET student_name=N'$student_name1',mother_name=N'$mother_name1',gender=N'$gender1',Mother_tongue=N'$mother_tongue1',birthdate=N'$birth_date',age=N'$age1',nationality=N'$nationality1',religion=N'$religion1',caste=N'$caste1',sub_caste=N'$sub_caste1',category=N'$category1',father_name=N'$father_name1',father_occupation=N'$father_occupation1',annual_income=N'$annual_income1',birth_place=N'$birth_place1',district=N'$district1',state=N'$state1',prev_class='$prev_class1',admission_date=N'$admission_date1',prev_school_name=N'$prev_school_name1',admission_class=N'$admission_class1',prev_mark_sheet=N'$prev_mark_sheet1',prev_tc=N'$prev_tc1',nadar_fee=N'$nadar_fee1',permanent_address=N'$permanent_address1',medium=N'$medium1',current_class=N'$current_class1',status=N'$status1',contact_no=N'$contact_no1'  WHERE reg_no='$reg_no3'");
                       
if($status1=='Present'){
$status2="Active";
}else{
$status2="Banned";
}
mysqli_query($con1,"update member set name=N'$student_name1',gender='$gender1',address = N'$permanent_address1',contact = '$contact_no1',type = 'Student',year_level = '$current_class1',status = '$status2' where member_id='$reg_no3'");
                       
                       // Code for Snackbar after the Submit button is clicked
                       echo "<script type='text/javascript'>
                    $( document ).ready(function() {
                        $.snackbar({content: 'Student data was updated successfully', timeout: 5000});
                    });
                </script>" ;
                       
                   }
                  ?>
                            <form action="" method="post">

                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <label class="customLabel">Registration No :</label>
                                        <?php
              $result = mysqli_query($con,"SELECT * FROM master"); 
echo "<select name='reg_no3' class='dropdownOptions' required>";
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
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="student_name" name="student_name" required/>
                                        <label class="mdl-textfield__label" for="student_name">Student Name</label>
                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="mother_name" name="mother_name" required/>
                                        <label class="mdl-textfield__label" for="mother_name">Mother Name</label>

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="mother_tongue" name="mother_tongue" required/>
                                        <label class="mdl-textfield__label" for="mother_tongue">Mother Tongue</label>

                                    </div>
                                </div>


                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">

                                        <label class="customLabel">Gender :</label>

                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="male">
                                            <input type="radio" id="male" class="mdl-radio__button" name="gender" value="M" checked />
                                            <span class="mdl-radio__label">Male</span>
                                        </label>

                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="female">
                                            <input type="radio" id="female" class="mdl-radio__button" name="gender" value="F" />
                                            <span class="mdl-radio__label"> Female</span>
                                        </label>
                                    </div>

                                    <div class="mdl-cell mdl-cell-8-col-tablet mdl-cell--4-col">
                                        <label class="customLabel">Birthdate :</label>
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <input class="mdl-textfield__input datepicker" type="text" id="birth_date" name="birth_date" required/>
                                        </div>
                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="age" name="age" required />
                                        <label class="mdl-textfield__label" for="age">Age</label>
                                        <span class="mdl-textfield__error">Input is not a number!</span>
                                    </div>

                                </div>

                                <div class="mdl-grid">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="nationality" name="nationality" />
                                        <label class="mdl-textfield__label" for="nationality">Nationality</label>

                                    </div>


                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="religion" name="religion" />
                                        <label class="mdl-textfield__label" for="religion">Religion</label>

                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="caste" name="caste" />
                                        <label class="mdl-textfield__label" for="caste">Caste</label>

                                    </div>


                                </div>

                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="sub_caste" name="sub_caste" />
                                        <label class="mdl-textfield__label" for="sub_caste">Sub Caste</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <label class="customLabel">Category :</label>
                                        <select class="dropdownOptions" name="category" required>
                                            <option value="Open">OPEN</option>
                                            <option value="OBC">OBC</option>
                                            <option value="SC">SC</option>
                                            <option value="ST">ST</option>
                                            <option value="VJ">VJ</option>
                                            <option value="SBC">SBC</option>
                                        </select>
                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="father_name" name="father_name" required/>
                                        <label class="mdl-textfield__label" for="father_name">Father Name</label>
                                    </div>

                                </div>

                                <div class="mdl-grid">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="father_occupation" name="father_occupation" />
                                        <label class="mdl-textfield__label" for="father_occupation">Father's Occupation</label>

                                    </div>


                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="annual_income" name="annual_income" />
                                        <label class="mdl-textfield__label" for="annual_income">Annual Income</label>

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="birth_place" name="birth_place" />
                                        <label class="mdl-textfield__label" for="birth_place">Birth Place</label>

                                    </div>


                                </div>


                                <div class="mdl-grid">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="district" name="district" />
                                        <label class="mdl-textfield__label" for="district">District</label>

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="state" name="state" />
                                        <label class="mdl-textfield__label" for="state">State</label>

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="prev_class" name="prev_class" />
                                        <label class="mdl-textfield__label" for="prev_class">Previous Class</label>

                                    </div>


                                </div>
                                  <div class="mdl-grid">
                                                       <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="current_class" name="current_class"  pattern="-?[0-9]*(\.[0-9]+)?" id="current_class" />
                                        <label class="mdl-textfield__label" for="current_class">Current Class</label>
<span class="mdl-textfield__error">Input is not a number!</span>
                                    </div>
                                      
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--4-col">
                                        <label class="customLabel">Status :</label>
                                        <select name="status" class='dropdownOptions' required>
                                            <option value=''></option>
                                            <option value='Present'>Present</option>
                                            <option value='Left School'>Left School</option>
                                        </select>

                                    </div>
                                      
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="contact_no" name="contact_no" required/>
                                        <label class="mdl-textfield__label" for="contact_no">Contact Number</label>
                                        <span class="mdl-textfield__error">Input is not a number!</span>
                                    </div>
                                </div>


                                <div class="mdl-grid">

                                    <div class="mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <label class="customLabel">Admission Date :</label>
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <input class="mdl-textfield__input datepicker" type="text" id="admission_date" name="admission_date" />
                                        </div>
                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="admission_class" name="admission_class" />
                                        <label class="mdl-textfield__label" for="admission_class">Admission Class</label>

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="prev_school_name" name="prev_school_name" />
                                        <label class="mdl-textfield__label" for="prev_school_name">Previous School Name</label>

                                    </div>


                                </div>

                                <div class="mdl-grid">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">

                                        <label class="customLabel">Previous Mark Sheet :</label>

                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="prev_mark_sheet_yes">
                                            <input type="radio" id="prev_mark_sheet_yes" class="mdl-radio__button" name="prev_mark_sheet" value="Yes" checked />
                                            <span class="mdl-radio__label">Yes</span>
                                        </label>

                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="prev_mark_sheet_no">
                                            <input type="radio" id="prev_mark_sheet_no" class="mdl-radio__button" name="prev_mark_sheet" value="No" />
                                            <span class="mdl-radio__label"> No</span>
                                        </label>
                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">

                                        <label class="customLabel">Previous TC :</label>

                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="prev_tc_yes">
                                            <input type="radio" id="prev_tc_yes" class="mdl-radio__button" name="prev_tc" value="Yes" checked />
                                            <span class="mdl-radio__label">Yes</span>
                                        </label>

                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="prev_tc_no">
                                            <input type="radio" id="prev_tc_no" class="mdl-radio__button" name="prev_tc" value="No" />
                                            <span class="mdl-radio__label"> No</span>
                                        </label>
                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">

                                        <label class="customLabel">Nadar Fee :</label>

                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="nadar_fee_yes">
                                            <input type="radio" id="nadar_fee_yes" class="mdl-radio__button" name="nadar_fee" value="Yes" checked />
                                            <span class="mdl-radio__label">Yes</span>
                                        </label>

                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="nadar_fee_no">
                                            <input type="radio" id="nadar_fee_no" class="mdl-radio__button" name="nadar_fee" value="No" />
                                            <span class="mdl-radio__label"> No</span>
                                        </label>
                                    </div>

                                </div>

                                <div class="mdl-grid">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="medium" name="medium" />
                                        <label class="mdl-textfield__label" for="medium">Medium</label>

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="permanent_address" name="permanent_address" />
                                        <label class="mdl-textfield__label" for="permanent_address">Permanent Address</label>

                                    </div>

                                </div>


                                <!-- Accent-colored raised button with ripple -->
                                <div class="submitButtonDiv">

                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="submit_update_profile" type="submit">
                                        Update
                                    </button>
                                </div>
                            </form>

                    </div>


                </div>
        </main>

    </div>
</body>

</html>
