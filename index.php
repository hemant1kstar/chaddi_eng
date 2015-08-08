<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Paperless System</title>
                    <!--    CSS For Material Design-->
                    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.blue-pink.min.css" />
                    <script src="material_js/material.js"></script>
                    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
                        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
                            <!--  End of CSS For Material Design-->
                            <link rel="stylesheet" href="css/main.css">
                            </head>
                            <body>
                                <!--    Waterfall header-->
                                <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
                                    <header class="mdl-layout__header mdl-layout__header--scroll">
                                        <!-- Top row, always visible -->
                                        <div class="mdl-layout__header-row">
                                            <!-- Title -->
                                            <span class="mdl-layout-title">Entry Student Details</span>
                                            <div class="mdl-layout-spacer"></div>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                                mdl-textfield--floating-label mdl-textfield--align-right">
                                                <label class="mdl-button mdl-js-button mdl-button--icon"
                             for="waterfall-exp">
                                                    <i class="material-icons">search</i>
                                                </label>
                                                <div class="mdl-textfield__expandable-holder">
                                                    <input class="mdl-textfield__input" type="text" name="sample"
                               id="waterfall-exp" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Bottom row, not visible on scroll -->
                                        <!--
                  <div class="mdl-layout__header-row"><div class="mdl-layout-spacer"></div>
                     Navigation
                    <nav class="waterfall-demo-header-nav mdl-navigation"><a class="mdl-navigation__link" href="index.php">Basic Info</a><a class="mdl-navigation__link" href="">TC</a><a class="mdl-navigation__link" href="">Other Info</a><a class="mdl-navigation__link" href="student_grade.php">Grade</a></nav></div>
-->
                                        <div class="tabs mdl-js-ripple-effect">
                                            <a href="index.php" class="mdl-layout__tab is-active">Student Info</a>
                                            <a href="tc_info.php" class="mdl-layout__tab">TC Information</a>
                                            <a href="other_info.php" class="mdl-layout__tab">Other Info</a>
                                            <a href="student_grade.php" class="mdl-layout__tab">Student Grades</a>
                                            <a href="update.php" class="mdl-layout__tab">Update Student Info</a>
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
                                        <?php
//    include("connection.php");
   ?>
                                        <?php
     if(isset($_POST['submit_student_info']))
     {
//     $con = mysql_connect('localhost','root','');
//
//     mysql_select_db('school_project');
        $reg_no=$_POST['reg_no'];
        $student_name=$_POST['student_name'];
        $mother_name=$_POST['mother_name'];
        $mother_tongue=$_POST['mother_tongue'];
        $gender=$_POST['gender'];
        $birth_date=$_POST['birth_date'];
        $age=$_POST['age'];
        $nationality=$_POST['nationality'];
        $religion=$_POST['religion'];
        $caste=$_POST['caste'];
        $sub_caste=$_POST['sub_caste'];
        $category=$_POST['category'];
        $father_name=$_POST['father_name'];
        $father_occupation=$_POST['father_occupation'];
        $annual_income=$_POST['annual_income'];
        $birth_place=$_POST['birth_place'];
        $district=$_POST['district'];
        $state=$_POST['state'];
        $prev_class=$_POST['prev_class'];
        $admission_date=$_POST['admission_date'];
        $prev_school_name=$_POST['prev_school_name'];
        $admission_class=$_POST['admission_class'];
        $prev_mark_sheet=$_POST['prev_mark_sheet'];
        $prev_tc=$_POST['prev_tc'];
        $nadar_fee=$_POST['nadar_fee'];
        $permanent_address=$_POST['permanent_address'];
        $medium=$_POST['medium'];



      mysqli_query ($con,"set character_set_results='utf8'");
      mysqli_query($con,"INSERT INTO master(reg_no,student_name,mother_name,gender,Mother_tongue,birthdate,age,nationality,religion,caste,sub_caste,category,father_name,father_occupation,annual_income,birth_place,district,state,prev_class,admission_date,prev_school_name,admission_class,prev_mark_sheet,prev_tc,nadar_fee,permanent_address,medium)values
      (N'$reg_no',N'$student_name',N'$mother_name',N'$gender',N'$mother_tongue',N'$birth_date',N'$age',N'$nationality',N'$religion',N'$caste',N'$sub_caste',N'$category',N'$father_name',N'$father_occupation',N'$annual_income',N'$birth_place',N'$district',N'$state',N'$prev_class',N'$admission_date',N'$prev_school_name',N'$admission_class',N'$prev_mark_sheet',N'$prev_tc',N'$nadar_fee',N'$permanent_address',N'$medium')");
      echo "Student Details inserted successfully...";


     }
    ?>
                                        <div class="page-content">
                                            <!-- Your content goes here -->
                                            <div class="mdl-shadow--2dp student_info_form">
                                                <h2 id="form_header">Student Basic Info</h2>
                                                <form action="" method="post">
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
                                                                <input type="radio" id="male" class="mdl-radio__button" name="gender" value="M"  checked />
                                                                <span class="mdl-radio__label">Male</span>
                                                            </label>
                                                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="female">
                                                                <input type="radio" id="female" class="mdl-radio__button" name="gender" value="F" />
                                                                <span class="mdl-radio__label"> Female</span>
                                                            </label>
                                                        </div>
                                                        <div class="mdl-cell mdl-cell-8-col-tablet mdl-cell--4-col">
                                                            <label class="customLabel">Birthdate :</label>
                                                            <div class="">
                                                                <input class="mdl-textfield__input" type="date" id="birth_date" name="birth_date" required/>
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
                                                            <input class="mdl-textfield__input" type="text" id="nationality" name="nationality"/>
                                                            <label class="mdl-textfield__label" for="nationality">Nationality</label>
                                                        </div>
                                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                                            <input class="mdl-textfield__input" type="text" id="religion" name="religion"/>
                                                            <label class="mdl-textfield__label" for="religion">Religion</label>
                                                        </div>
                                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                                            <input class="mdl-textfield__input" type="text" id="caste" name="caste"/>
                                                            <label class="mdl-textfield__label" for="caste">Caste</label>
                                                        </div>
                                                    </div>
                                                    <div class="mdl-grid">
                                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                                            <input class="mdl-textfield__input" type="text" id="sub_caste" name="sub_caste"/>
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
                                                            <input class="mdl-textfield__input" type="text" id="father_occupation" name="father_occupation"/>
                                                            <label class="mdl-textfield__label" for="father_occupation">Father's Occupation</label>
                                                        </div>
                                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                                            <input class="mdl-textfield__input" type="text" id="annual_income" name="annual_income"/>
                                                            <label class="mdl-textfield__label" for="annual_income">Annual Income</label>
                                                        </div>
                                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                                            <input class="mdl-textfield__input" type="text" id="birth_place" name="birth_place"/>
                                                            <label class="mdl-textfield__label" for="birth_place">Birth Place</label>
                                                        </div>
                                                    </div>
                                                    <div class="mdl-grid">
                                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                                            <input class="mdl-textfield__input" type="text" id="district" name="district"/>
                                                            <label class="mdl-textfield__label" for="district">District</label>
                                                        </div>
                                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                                            <input class="mdl-textfield__input" type="text" id="state" name="state"/>
                                                            <label class="mdl-textfield__label" for="state">State</label>
                                                        </div>
                                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                                            <input class="mdl-textfield__input" type="text" id="prev_class" name="prev_class"/>
                                                            <label class="mdl-textfield__label" for="prev_class">Previous Class</label>
                                                        </div>
                                                    </div>
                                                    <div class="mdl-grid">
                                                        <div class="mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                                            <label class="customLabel">Admission Date :</label>
                                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                                <input class="mdl-textfield__input" type="date" id="admission_date" name="admission_date"/>
                                                            </div>
                                                        </div>
                                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                                            <input class="mdl-textfield__input" type="text" id="admission_class" name="admission_class"/>
                                                            <label class="mdl-textfield__label" for="admission_class">Admission Class</label>
                                                        </div>
                                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                                            <input class="mdl-textfield__input" type="text" id="prev_school_name" name="prev_school_name"/>
                                                            <label class="mdl-textfield__label" for="prev_school_name">Previous School Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="mdl-grid">
                                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                                            <label class="customLabel">Previous Mark Sheet :</label>
                                                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="prev_mark_sheet_yes">
                                                                <input type="radio" id="prev_mark_sheet_yes" class="mdl-radio__button" name="prev_mark_sheet" value="Yes"  checked />
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
                                                                <input type="radio" id="prev_tc_yes" class="mdl-radio__button" name="prev_tc" value="Yes"  checked />
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
                                                                <input type="radio" id="nadar_fee_yes" class="mdl-radio__button" name="nadar_fee" value="Yes"  checked />
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
                                                            <input class="mdl-textfield__input" type="text" id="medium" name="medium"/>
                                                            <label class="mdl-textfield__label" for="medium">Medium</label>
                                                        </div>
                                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                                            <input class="mdl-textfield__input" type="text" id="permanent_address" name="permanent_address"/>
                                                            <label class="mdl-textfield__label" for="permanent_address">Permanent Address</label>
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
