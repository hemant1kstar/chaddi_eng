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
    <title>Student Basic Information | Paperless System</title>
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
                    <nav class="waterfall-demo-header-nav mdl-navigation"><a class="mdl-navigation__link" href="index.php">Basic Info</a><a class="mdl-navigation__link" href="">TC</a><a class="mdl-navigation__link" href="">Other Info</a><a class="mdl-navigation__link" href="student_grade.php">Grade</a></nav></div>
-->
            <div class="tabs mdl-js-ripple-effect">
                <a href="index.php" class="mdl-layout__tab is-active">Student Info</a>
                <a href="tc_info.php" class="mdl-layout__tab">TC Information</a>
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
if(isset($_GET['success']))
{
    
    $success1=$_GET['success'];
    
    if($success1==1)
    {
       // Code for Snackbar after the Submit button is clicked
         echo "<script type='text/javascript'>
                    $( document ).ready(function() {
                        $.snackbar({content: 'Student basic data was entered successfully', timeout: 5000});
                    });
                </script>" ;
    }else{
             echo "<script type='text/javascript'>
                    $( document ).ready(function() {
                        $.snackbar({content: 'Student basic data was not inserted', timeout: 5000});
                    });
                </script>" ;
    }
}
            
            
?>
                    <div class="page-content">
                        <!-- Your content goes here -->
                        <div class="mdl-shadow--2dp student_info_form">
                            <h2 id="form_header">Student Basic Info</h2>
                            <form action="basic_info_insert.php" method="post" enctype="multipart/form-data">
                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="reg_no" name="reg_no" required/>
                                        <label class="mdl-textfield__label" for="reg_no">Registration No</label>
                                        <span class="mdl-textfield__error">Input is not a number!</span>
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
                                    <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell-8-col-tablet mdl-cell--4-col">
                                        <label class="customLabel">Birthdate :
                                            <input class="datepicker" type="text" name="birth_date" required/>
                                        </label>
                                    </div>
                                       <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="birthdate_inwords" name="birthdate_inwords" />
                                        <label class="mdl-textfield__label" for="birthdate_inwords">Birthdate in words</label>
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
                                    <div class=" mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <label class="customLabel">Category :</label>
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <select class="dropdownOptions" name="category" required>
                                                 <option></option>
                                                <option value="OPEN">OPEN</option>
                                                <option value="OBC">OBC</option>
                                                <option value="SC">SC</option>
                                                <option value="ST">ST</option>
                                                <option value="VJ-A">VJ-A</option>
                                                <option value="SBC">SBC</option>
                                                 <option value="NT-B">NT-B</option>
                                                 <option value="NT-C">NT-C</option>
                                                 <option value="NT-D">NT-D</option>
                                            </select>
                                        </div>
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
                                    <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <label class="customLabel">Admission Date :
                                            <input class="datepicker" type="text" id="" name="admission_date" />
                                        </label>
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
                                    
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="age" name="age" required />
                                        <label class="mdl-textfield__label" for="age">Age</label>
                                        <span class="mdl-textfield__error">Input is not a number!</span>
                                    </div>
                                </div>
                                
                             <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--8-col-tablet mdl-cell--8-col file_upload">
                                        <label class="customLabel">Upload Student photo:</label>
                                          <input type="file" name="student_img"> 
                                    </div>
                                </div>
                                
                              <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--8-col-tablet mdl-cell--8-col file_upload">
                                        <label class="customLabel">Upload Student Document:</label>
                                          <input type="file" name="student_document[]" multiple> 
                                    </div>
                                </div>

                                <!-- Accent-colored raised button with ripple -->
                                <div class="submitButtonDiv">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="submit_student_info" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
        </main>
    </div>
</body>

</html>
