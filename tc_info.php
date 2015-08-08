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
                <header class="mdl-layout__header">
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
                  <a href="tc_info.php" class="mdl-layout__tab is-active">TC Information</a>
                  <a href="other_info.php" class="mdl-layout__tab">Other Info</a>
                  <a href="student_grade.php" class="mdl-layout__tab">Student Grades</a>
                  <a href="" class="mdl-layout__tab">Update Student Info</a>
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
                   if(isset($_POST['submit_tc_info']))
                   {
                      $reg_no=$_POST['reg_no'];
                      $school_leaving_class=$_POST['school_leaving_class'];
                      $date_leaving=$_POST['date_leaving'];
                      $student_progress=$_POST['student_progress'];
                      $leaving_reason=$_POST['leaving_reason'];
                      $tc_no=$_POST['tc_no'];
                      $behaviour=$_POST['behaviour'];
                      $tc_date=$_POST['tc_date'];
                      $remark=$_POST['remark'];

                    mysqli_query ($con,"set character_set_results='utf8'");      
                    mysqli_query($con,"UPDATE master SET school_leaving_class=N'$school_leaving_class',school_leaving_date=N'$date_leaving',student_progress=N'$student_progress',behaviour=N'$behaviour',school_leaving_reason=N'$leaving_reason',tc_no=N'$tc_no',tc_date=N'$tc_date',tc_remark=N'$remark' WHERE reg_no='$reg_no'");
                    echo "Student TC Details inserted successfully...";
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
             echo "<select name='reg_no' class='form-control' required>";
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
                            <input class="mdl-textfield__input" type="text" id="school_leaving_class" name="school_leaving_class"/>
                            <label class="mdl-textfield__label" for="school_leaving_class">School Leaving Class</label>
                          
                        </div>
                            <div class="mdl-cell mdl-cell-4-col-tablet mdl-cell--6-col">
                      <label class="customLabel">Date Leaving :</label>
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="date" id="date_leaving" name="date_leaving" required/>
                      </div>
                        </div>
                      </div>
                      
                      <div class="mdl-grid">
                             <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                            <input class="mdl-textfield__input" type="text" id="student_progress" name="student_progress"/>
                            <label class="mdl-textfield__label" for="student_progress">Student Progress</label>
                          
                        </div>
                        
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                            <input class="mdl-textfield__input" type="text" id="leaving_reason" name="leaving_reason"/>
                            <label class="mdl-textfield__label" for="leaving_reason">Leaving Reason</label>
                          
                        </div>
                      </div>
                      
                                  <div class="mdl-grid">

               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="tc_no" name="tc_no"/>
                            <label class="mdl-textfield__label" for="tc_no">TC No</label>
                            <span class="mdl-textfield__error">Input is not a number!</span>
                          </div>
                                    
                    <div class="mdl-cell mdl-cell-4-col-tablet mdl-cell--6-col">
                      <label class="customLabel">TC Date :</label>
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="date" id="tc_date" name="tc_date" required/>
                      </div>
                        </div>
                      </div>
                      
                    <div class="mdl-grid">
                        

                               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                            <input class="mdl-textfield__input" type="text" id="behaviour" name="behaviour"/>
                            <label class="mdl-textfield__label" for="behaviour">Behaviour</label>
                          
                        </div>
                                                   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                            <input class="mdl-textfield__input" type="text" id="remark" name="remark"/>
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