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
                <a href="../master.php" class="mdl-layout__tab">Student Info</a>
                <a href="../tc_info_display.php" class="mdl-layout__tab">TC Information</a>
                <a href="../other_info_display.php" class="mdl-layout__tab is-active">Other Info</a>
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
        $aadhar_no=$row['aadhar_no'];
        $bank_account_no=$row['bank_account_no'];
        $bank_branch=$row['bank_branch'];
        $bank_branch_code=$row['bank_branch_code'];
        $lic_id_no=$row['lic_id_no'];
        $minority_details=$row['minority_details'];
        $admitted_division=$row['admitted_division'];
        $student_name1=$row['student_name1'];
//        $current_class_entry_date=$row['current_class_entry_date'];
        $fee_concession=$row['fee_concession'];
        $admission_month=$row['admission_month'];
        $admission_year=$row['admission_year'];
        $handicapped=$row['handicapped'];
//        $scholarship=$row['scholarship'];

    }
}
                
?>
                <form action="update_other_info.php" method="post">


                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <label class="customLabel">Registration No :</label>
           <input class="mdl-textfield__input" type="text" id="student_name" name="reg_no" value="<?php echo "$reg_no";?>"  readonly/>

                                    </div>
                                </div>



                                <div class="mdl-grid">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        
                                         <label class="customLabel">Aadhar Number:</label>
                                        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="aadhar_no" name="aadhar_no" value="<?php echo $aadhar_no;?>" placeholder="Aadhar Number" required/>
<!--                                        <label class="mdl-textfield__label" for="aadhar_no">Aadhar Number</label>-->
                                        <span class="mdl-textfield__error">Input is not a number!</span>
                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                                  <label class="customLabel">Bank Account Number:</label>
                 <input class="mdl-textfield__input" type="text" id="bank_account_no" name="bank_account_no" value="<?php echo $bank_account_no;?>" placeholder="Bank Account Number" required/>
<!--                                        <label class="mdl-textfield__label" for="bank_account_no">Bank Account Number</label>-->

                                    </div>


                                </div>


                                <div class="mdl-grid">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        
                                        <label class="customLabel" for="bank_branch">Bank Branch</label>
         <input class="mdl-textfield__input" type="text" id="bank_branch" name="bank_branch" value="<?php echo $bank_branch;?>" placeholder="Bank Branch" />
                                        

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                             <label class="customLabel" for="bank_branch_code">Bank Branch Code</label>
                <input class="mdl-textfield__input" type="text" id="bank_branch_code" name="bank_branch_code" value="<?php echo $bank_branch_code;?>" placeholder="Bank Branch Code" required/>
                                   

                                    </div>


                                </div>


                                <div class="mdl-grid">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <label class="customLabel"  for="lic_id_no">LIC ID Number</label>
        <input class="mdl-textfield__input" type="text" id="lic_id_no" name="lic_id_no" value="<?php echo $lic_id_no;?>" placeholder="LIC ID Number"/>
                                        

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                                 <label class="customLabel" for="minority_details">Minority Details</label>

            <input class="mdl-textfield__input" type="text" id="minority_details" name="minority_details" value="<?php echo $minority_details;?>" placeholder="Minority Details" required/>
                               
                                    </div>


                                </div>


                                <div class="mdl-grid">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                    <label class="customLabel" for="admitted_division">Admitted Division</label>
                                        <input class="mdl-textfield__input" type="text" id="admitted_division" name="admitted_division" value="<?php echo $admitted_division;?>" placeholder="Admitted Division" required />
                                

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                          <label class="customLabel"  for="student_name1">Student Name (English)</label>
                                        <input class="mdl-textfield__input" type="text" id="student_name1" name="student_name1" required="required" value="<?php echo $student_name1;?>" placeholder="Student Name" required/>
                                     

                                    </div>
                                </div>

                                <div class="mdl-grid">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                            <label class="customLabel"  for="fee_concession">Fee Concession</label>
                                        <input class="mdl-textfield__input" type="text" id="fee_concession" name="fee_concession" value="<?php echo $fee_concession;?>" placeholder="Fee Concession" required/>
                                 

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                         <label class="customLabel"  for="admission_month">Admission Month</label>
                                        <input class="mdl-textfield__input" type="text" id="admission_month" name="admission_month" value="<?php echo $admission_month;?>" placeholder="Admission Month" required/>
                                   

                                    </div>
                                </div>

                                <div class="mdl-grid">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
             <label class="customLabel"  for="admission_year">Admission Year</label>
                                        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="admission_year" name="admission_year" value="<?php echo $admission_year;?>" placeholder="Admission Year" required/>
                                  
                                        <span class="mdl-textfield__error">Input is not a number!</span>
                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <label class="customLabel"  for="handicapped">Handicapped</label>
                                        <input class="mdl-textfield__input" type="text" id="handicapped" name="handicapped" value="<?php echo $handicapped;?>" placeholder="Handicapped" required />
                                        

                                    </div>
                                </div>

                                <div class="mdl-grid">

                                   <div class="mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <label class="customLabel">Entry Date :</label>
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input datepicker" type="date" id="current_class_entry_date" name="current_class_entry_date"  required />
                                        </div>

                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">

                                        <label class="customLabel">Scholarship :</label>

                                        <select name="scholarship" class='dropdownOptions' required>
                                            <option></option>
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
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="update_other_info" type="submit">
                                        Submit
                                    </button>
                                </div>
                            </form>

                
            </div>
        </main>

    </div>
</body>

</html>