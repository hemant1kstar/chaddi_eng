<?php
         session_start();
         if(!$_SESSION['LoggedIn_user'])
           {
                 header("location:../../login_panel/login.php?problem='Not Logged In'");
                 exit;
         }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Master Table | Paperless System</title>

    <!--    CSS For Material Design-->
    <link rel="stylesheet" href="../../css/material.blue-pink.min.css" />
    <script src="../../material_js/material.js"></script>
    <link rel="stylesheet" href="../../material_js/Material+Icons.css" />
    <link rel="stylesheet" href="../../fonts/Roboto+300,400,500,700.css" />

    <!--  End of CSS For Material Design-->

    <link rel="stylesheet" href="css/master_update.css">



</head>





<body>
    <!--    Scrollable header-->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <!-- Top row, always visible -->
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">All Student Details</span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="../index.php">Entry</a>
                    <a class="mdl-navigation__link" href="../../index.php">Home</a>
                </nav>


            </div>

            <div class="tabs mdl-js-ripple-effect">
                <a href="../master.php" class="mdl-layout__tab is-active">Student Info</a>
                <a href="../tc_info_display.php" class="mdl-layout__tab">TC Information</a>
                <a href="../other_info_display.php" class="mdl-layout__tab">Other Info</a>
                <a href="../student_grade_display.php" class="mdl-layout__tab">Student Grades</a>
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

            <!-- Your content goes here -->
            <div class="masterUpdateBlock">
                <h2 id="form_header">Update</h2>
 <?php
                include("../../database/connection.php");
if(isset($_GET['row_id']))
{
$r_id=$_GET['row_id'];
     mysqli_query ($con,"set character_set_results='utf8'"); 
    $query="select * from master where reg_no='$r_id'";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result))
    {
        $reg_no=$row['reg_no'];
        $student_name=$row['student_name'];
        $mother_name=$row['mother_name'];
        $mother_tongue=$row['Mother_tongue'];
//        $gender=$row['gender'];
//        $birth_date=$row['birthdate'];
        $age=$row['age'];
        $nationality=$row['nationality'];
        $religion=$row['religion'];
        $caste=$row['caste'];
        $sub_caste=$row['sub_caste'];
//        $category=$row['category'];
        $father_name=$row['father_name'];
        $father_occupation=$row['father_occupation'];
        $annual_income=$row['annual_income'];
        $birth_place=$row['birth_place'];
        $district=$row['district'];
        $state=$row['state'];
        $prev_class=$row['prev_class'];
        $admission_date=$row['admission_date'];                   
        $prev_school_name=$row['prev_school_name'];
        $admission_class=$row['admission_class'];
        $prev_mark_sheet=$row['prev_mark_sheet'];
        $prev_tc=$row['prev_tc'];
        $nadar_fee=$row['nadar_fee'];
        $permanent_address=$row['permanent_address'];
        $medium=$row['medium']; 
        $contact_no=$row['contact_no'];
    }
}
                
?>

                            <form action="edit_master_update.php" method="post">

                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <label class="customLabel">Registration No :</label>
<!--                                        <label><?php echo "$reg_no";?></label>-->
                                          <input class="mdl-textfield__input" type="text" id="student_name" name="reg_no" value="<?php echo "$reg_no";?>"  readonly/>

                                    </div>
                                </div>

                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="student_name" name="student_name" value="<?php echo $student_name;?>" placeholder="Student Name" required/>
<!--                                        <label class="mdl-textfield__label" for="student_name">Student Name</label>-->
                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                     <input class="mdl-textfield__input" type="text" id="mother_name" value="<?php echo $mother_name;?>" name="mother_name" placeholder="Mother Name" required/>
<!--                                        <label class="mdl-textfield__label" for="mother_name">Mother Name</label>-->

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="mother_tongue" name="mother_tongue" value="<?php echo $mother_tongue;?>" placeholder="Mother Tongue" required/>
<!--                                        <label class="mdl-textfield__label" for="mother_tongue">Mother Tongue</label>-->

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
                                            <input class="mdl-textfield__input datepicker" type="date" id="birth_date" name="birth_date"  required/>
                                        </div>
                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="age" name="age" value="<?php echo $age;?>" placeholder="Age" required />
<!--                                        <label class="mdl-textfield__label" for="age">Age</label>-->
                                        <span class="mdl-textfield__error">Input is not a number!</span>
                                    </div>

                                </div>

                                <div class="mdl-grid">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="nationality" name="nationality" value="<?php echo $nationality;?>" placeholder="Nationality"/>
<!--                                        <label class="mdl-textfield__label" for="nationality">Nationality</label>-->

                                    </div>


                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="religion" name="religion" value="<?php echo $religion;?>" placeholder="Religion" />
<!--                                        <label class="mdl-textfield__label" for="religion">Religion</label>-->

                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="caste" name="caste" value="<?php echo $caste;?>" placeholder="Caste"/>
<!--                                        <label class="mdl-textfield__label" for="caste">Caste</label>-->

                                    </div>


                                </div>

                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="sub_caste" name="sub_caste" value="<?php echo $sub_caste;?>"  placeholder="Caste"/>
<!--                                        <label class="mdl-textfield__label" for="sub_caste">Sub Caste</label>-->
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
                                        <input class="mdl-textfield__input" type="text" id="father_name" name="father_name" value="<?php echo $father_name;?>" placeholder="Father Name" required/>
<!--                                        <label class="mdl-textfield__label" for="father_name">Father Name</label>-->
                                    </div>

                                </div>

                                <div class="mdl-grid">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="father_occupation" name="father_occupation" value="<?php echo $father_occupation;?>" placeholder="Father's Occupation"/>
<!--                                        <label class="mdl-textfield__label" for="father_occupation">Father's Occupation</label>-->

                                    </div>


                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="annual_income" name="annual_income" value="<?php echo $annual_income;?>" placeholder="Annual Income"/>
<!--                                        <label class="mdl-textfield__label" for="annual_income">Annual Income</label>-->

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="birth_place" name="birth_place" value="<?php echo $birth_place;?>" placeholder="Birth Place"/>
<!--                                        <label class="mdl-textfield__label" for="birth_place">Birth Place</label>-->

                                    </div>


                                </div>


                                <div class="mdl-grid">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="district" name="district" value="<?php echo $district;?>" placeholder="Birth Place"/>
<!--                                        <label class="mdl-textfield__label" for="district">District</label>-->

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="state" name="state" value="<?php echo $state;?>" placeholder="Birth Place"/>
<!--                                        <label class="mdl-textfield__label" for="state">State</label>-->

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text"  pattern="-?[0-9]*(\.[0-9]+)?" id="prev_class" name="prev_class" value="<?php echo $prev_class;?>" placeholder="Previous Class"/>
<!--                                        <label class="mdl-textfield__label" for="prev_class">Previous Class</label>-->
<span class="mdl-textfield__error">Input is not a number!</span>
                                    </div>


                                </div>
                                  <div class="mdl-grid">
                                                       <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="current_class" name="current_class"  pattern="-?[0-9]*(\.[0-9]+)?" id="current_class"  value="<?php echo $admission_class;?>" placeholder="Current Class"/>
<!--                                        <label class="mdl-textfield__label" for="current_class">Current Class</label>-->
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
                                        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="contact_no" name="contact_no" value="<?php echo $contact_no;?>" placeholder="Contact Number" required/>
<!--                                        <label class="mdl-textfield__label" for="contact_no">Contact Number</label>-->
                                        <span class="mdl-textfield__error">Input is not a number!</span>
                                    </div>
                                </div>


                                <div class="mdl-grid">

                                    <div class="mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <label class="customLabel">Admission Date :</label>
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <input class="mdl-textfield__input datepicker" type="date" id="admission_date" name="admission_date" value="<?php echo $admission_date;?>" />
                                        </div>
                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="admission_class" name="admission_class" value="<?php echo $admission_class;?>" placeholder="Admission Class"/>
<!--                                        <label class="mdl-textfield__label" for="admission_class">Admission Class</label>-->

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="prev_school_name" name="prev_school_name" value="<?php echo $prev_school_name;?>" placeholder="Previous School Name"/>
<!--                                        <label class="mdl-textfield__label" for="prev_school_name">Previous School Name</label>-->

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
                                        <input class="mdl-textfield__input" type="text" id="permanent_address" name="permanent_address"  value="<?php echo $permanent_address;?>" placeholder="Permanent Address"/>
<!--                                        <label class="mdl-textfield__label" for="permanent_address">Permanent Address</label>-->

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <input class="mdl-textfield__input" type="text" id="medium" name="medium" value="<?php echo $medium;?>" placeholder="Medium"/>
<!--                                        <label class="mdl-textfield__label" for="medium">Medium</label>-->

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
        </main>

    </div>
</body>

</html>
