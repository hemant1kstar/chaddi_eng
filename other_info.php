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

    <!-- CSS and JS for Jquery datepicker -->
    <link rel="stylesheet" href="jquery-ui-1.11.4.custom/jquery-ui.min.css" />
    <script src="jquery/jquery-2.1.4.min.js"></script>
    <script src="jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <!-- End of CSS and JS for Jquery datepicker -->

    <link rel="stylesheet" href="css/main.css">

    <!-- FUnction for the datepicker -->
    <script>
        $(function() {
            $(".datepicker").datepicker({
                dateFormat: 'dd-mm-yy',
                minDate: 0
            });
        });

    </script>


</head>

<body>
    <!--    Waterfall header-->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <!-- Top row, always visible -->
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Entry Student Details</span>
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
            <!-- Bottom row, not visible on scroll -->
            <!--
                  <div class="mdl-layout__header-row">
                    <div class="mdl-layout-spacer"></div>
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
                <a href="other_info.php" class="mdl-layout__tab is-active">Other Info</a>
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
    include("connection.php");
?>

                <?php
     if(isset($_POST['submit_other_info']))
     {

        $reg_no=$_POST['reg_no'];
        $aadhar_no=$_POST['aadhar_no'];
        $bank_account_no=$_POST['bank_account_no'];
        $bank_branch=$_POST['bank_branch'];
        $bank_branch_code=$_POST['bank_branch_code'];
        $lic_id_no=$_POST['lic_id_no'];
        $minority_details=$_POST['minority_details'];
        $admitted_division=$_POST['admitted_division'];
        $student_name1=$_POST['student_name1'];
        $current_class=$_POST['current_class'];
        $current_class_entry_date=$_POST['current_class_entry_date'];
        $status=$_POST['status'];
        $contact_no=$_POST['contact_no'];
        $fee_concession=$_POST['fee_concession'];
        $admission_month=$_POST['admission_month'];
        $admission_year=$_POST['admission_year'];
        $handicapped=$_POST['handicapped'];
        $scholarship=$_POST['scholarship'];
      
      
      mysqli_query ($con,"set character_set_results='utf8'");      
      mysqli_query($con,"UPDATE master SET aadhar_no=N'$aadhar_no',bank_account_no=N'$bank_account_no',bank_branch=N'$bank_branch',bank_branch_code=N'$bank_branch_code',lic_id_no=N'$lic_id_no',minority_details=N'$minority_details',admitted_division=N'$admitted_division',student_name1=N'$student_name1',current_class=N'$current_class',current_class_entry_date=N'$current_class_entry_date',status=N'$status',contact_no=N'$contact_no',fee_concession=N'$fee_concession',admission_month=N'$admission_month',admission_year=N'$admission_year',handicapped=N'$handicapped',scholarship=N'$scholarship' WHERE reg_no='$reg_no'");
      echo "Student Other Details inserted successfully...";
     }
    ?>


                    <div class="page-content">
                        <!-- Your content goes here -->
                        <div class="mdl-shadow--2dp student_info_form">
                            <h2 id="form_header">Student Other Details</h2>
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

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="aadhar_no" name="aadhar_no" required/>
                                        <label class="mdl-textfield__label" for="aadhar_no">Aadhar Number</label>
                                        <span class="mdl-textfield__error">Input is not a number!</span>
                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="bank_account_no" name="bank_account_no" required/>
                                        <label class="mdl-textfield__label" for="bank_account_no">Bank Account Number</label>

                                    </div>


                                </div>


                                <div class="mdl-grid">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="bank_branch" name="bank_branch" />
                                        <label class="mdl-textfield__label" for="bank_branch">Bank Branch</label>

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="bank_branch_code" name="bank_branch_code" required/>
                                        <label class="mdl-textfield__label" for="bank_branch_code">Bank Branch Code</label>

                                    </div>


                                </div>


                                <div class="mdl-grid">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="lic_id_no" name="lic_id_no" />
                                        <label class="mdl-textfield__label" for="lic_id_no">LIC ID Number</label>

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="minority_details" name="minority_details" required/>
                                        <label class="mdl-textfield__label" for="minority_details">Minority Details</label>

                                    </div>


                                </div>


                                <div class="mdl-grid">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="admitted_division" name="admitted_division" />
                                        <label class="mdl-textfield__label" for="admitted_division">Admitted Division</label>

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="student_name1" name="student_name1" required="required" />
                                        <label class="mdl-textfield__label" for="student_name1">Student Name (English)</label>

                                    </div>
                                </div>

                                <div class="mdl-grid">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="current_class" name="current_class" />
                                        <label class="mdl-textfield__label" for="current_class">Current Class</label>

                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <label class="customLabel">Entry Date :</label>
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input datepicker" type="text" id="current_class_entry_date" name="current_class_entry_date" />
                                        </div>

                                    </div>

                                </div>

                                <div class="mdl-grid">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
<!--
                                        <input class="mdl-textfield__input" type="text" id="status" name="status" />
                                        <label class="mdl-textfield__label" for="status">Status</label>
-->
                                 <label class="customLabel">Status :</label> 
                                    <select  name="status" class='dropdownOptions' required>
                                     <option value=''></option>
                                     <option value='Present'>Present</option>
                                     <option value='Left School'>Left School</option>
                                    </select>

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="contact_no" name="contact_no" required/>
                                        <label class="mdl-textfield__label" for="contact_no">Contact Number</label>
                                        <span class="mdl-textfield__error">Input is not a number!</span>
                                    </div>

                                </div>

                                <div class="mdl-grid">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="fee_concession" name="fee_concession" />
                                        <label class="mdl-textfield__label" for="fee_concession">Fee Concession</label>

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="admission_month" name="admission_month" />
                                        <label class="mdl-textfield__label" for="admission_month">Admission Month</label>

                                    </div>
                                </div>

                                <div class="mdl-grid">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="admission_year" name="admission_year" required/>
                                        <label class="mdl-textfield__label" for="admission_year">Admission Year</label>
                                        <span class="mdl-textfield__error">Input is not a number!</span>
                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="handicapped" name="handicapped" />
                                        <label class="mdl-textfield__label" for="handicapped">Handicapped</label>

                                    </div>
                                </div>

                                <div class="mdl-grid">


                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
<!--
                                        <input class="mdl-textfield__input" type="text" id="scholarship" name="scholarship" />
                                        <label class="mdl-textfield__label" for="scholarship">Scholarship</label>
-->
                            <label class="customLabel">Scholarship :</label> 
                                        
                                    <select  name="scholarship" class='dropdownOptions' required>
                                     <option value='No'>नाही</option>
                                     <option value='Savitri_Bai'>सावेत्री बाई</option>
                                     <option value='Handicapped'>अपंग</option>
                                     <option value='Unclean_business'>अस्वच्छ व्यवसाय</option>
                                     <option value='Minority'>अल्पसंख्याक</option>
                                     <option value='Metric_before'>मेट्रिकपूर्व</option>
                                     <option value='Attendance_bhatta'>उपस्थितीभत्ता</option>
                                     <option value='Adivasi_Scholarship'>आदिवासी शिष्यवृत्ती</option>
                                    </select>

                                    </div>
                                </div>


                                <!-- Accent-colored raised button with ripple -->

                                <div class="submitButtonDiv">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="submit_other_info" type="submit">
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
