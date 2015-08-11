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
               <link href='../student_list/css/year_wise.css' rel='stylesheet'>
            
  </head>
  <body>
<!--    Waterfall header-->
              <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
                <header class="mdl-layout__header mdl-layout__header--scroll">
                  <!-- Top row, always visible -->
                  <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title">Student List</span>
                    <div class="mdl-layout-spacer"></div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                                mdl-textfield--floating-label mdl-textfield--align-right">
<!--
                      <label class="mdl-button mdl-js-button mdl-button--icon"
                             for="waterfall-exp">
                        <i class="material-icons">search</i>
                      </label>
-->
                      <div class="mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input" type="text" name="sample"
                               id="waterfall-exp" />
                      </div>
                    </div>
                  </div>
       
                  <div class="tabs mdl-js-ripple-effect">
                  <a href="index.php" class="mdl-layout__tab">Class Wise</a>
                  <a href="year_wise.php" class="mdl-layout__tab is-active">Year Wise</a>
                  <a href="caste_wise.php" class="mdl-layout__tab">Caste Wise</a>
                  <a href="student_status.php" class="mdl-layout__tab">Student Status</a>
<!--                  <a href="" class="mdl-layout__tab">Student Leaved</a>-->
                  <a href="division_wise.php" class="mdl-layout__tab">Division Wise</a>
                  <a href="aadhar_card_wise.php" class="mdl-layout__tab">Aadhar Card Wise</a>
                  <a href="" class="mdl-layout__tab">BPL Wise</a>
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
                      
                      
                    <div class="student_list mdl-shadow--2dp">
                    
                         <form action=""  method="post">
    
                      <h4 id="form_header">Year Wise</h4>
                      <div class="mdl-grid">
                     <div class="mdl-textfield mdl-js-textfield  mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                           <div class="">
                                <label>Year :</label>
                          </div>
                     <select name="year1" class="form-control" required>
                                            <option  value=""></option>
                                            <option  value="2011">2011</option>
                                            <option  value="2012">2012</option>
                                            <option  value="2013">2013</option>
                                            <option  value="2014">2014</option>
                                            <option  value="2015">2015</option>
                                        </select>
                    </div>
                        
                    <div>
          <input type='submit'  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent btn1" name='submit_year' value='Submit' >
                    </div>
                      </div>
                               </form>
                      </div>
                      
                  <div class="student_list mdl-shadow--2dp">
                      <h4 id="form_header">Year Wise Student List</h4>
                      <div class="mdl-grid">
                        <?php
                            include("../database/connection.php");
                            if(isset($_POST['submit_year'])){
                              $year=$_POST['year1'];
                              
                           echo  "<table class='mdl-data-table mdl-js-data-table  mdl-shadow--2dp'>";
                           echo  "<thead>";
                           echo "<tr>";
                           echo "<th>Reg. No.</th>";
                           echo "<th class='mdl-data-table__cell--non-numeric'>Student Name</th>";
                           echo "<th class='mdl-data-table__cell--non-numeric'>Mother Name</th>";
                           echo "<th class='mdl-data-table__cell--non-numeric'>Gender</th>";
                           echo "<th class='mdl-data-table__cell--non-numeric'>Mother Tongue</th>";
                           echo "<th>Birth Date</th>";
                           echo "<th>Age</th>";
                           echo "<th class='mdl-data-table__cell--non-numeric'>Nationality</th>";
                           echo "<th class='mdl-data-table__cell--non-numeric'>Religion</th>";
                           echo "<th class='mdl-data-table__cell--non-numeric'>Caste</th>";
                           echo "<th class='mdl-data-table__cell--non-numeric'>Sub-Caste</th>";
                           echo "<th class='mdl-data-table__cell--non-numeric'>Category</th>";
                           echo "<th class='mdl-data-table__cell--non-numeric'>Father Name</th>";
                           echo "<th class='mdl-data-table__cell--non-numeric'>Father Occupation</th>";
                           echo "<th>Annual Income</th>";
                           echo "<th class='mdl-data-table__cell--non-numeric'>Birth Place</th>";
                           echo "<th class='mdl-data-table__cell--non-numeric'>District</th>";
                           echo "<th class='mdl-data-table__cell--non-numeric'>State</th>";
                           echo "<th>Prev Class</th>";
                           echo "<th class='mdl-data-table__cell--non-numeric'>Prev School Name</th>";
                           echo "<th>Admission Date</th>";
                           echo "<th>Admission Class</th>";
                           echo "<th class='mdl-data-table__cell--non-numeric'>Prev Mark Sheet</th>";
                           echo "<th class='mdl-data-table__cell--non-numeric'>Prev Tc</th>";
                           echo "<th class='mdl-data-table__cell--non-numeric'>Nadar Fee</th>";
                           echo "<th class='mdl-data-table__cell--non-numeric'>Permanent Address</th>";
                           echo  "<th class='mdl-data-table__cell--non-numeric'>Medium</th>";
                           echo "</tr>";
                           echo  "</thead>";
                           echo "<tbody>";
                              
                          mysqli_query ($con,"set character_set_results='utf8'"); 
                          $query = mysqli_query($con,"SELECT * FROM master where admission_year='$year'") or die(mysqli_error());
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

                           echo "</tbody>";
                           echo "</table>";
                            }
                         ?>

                      </div>
                         
                      </div>
                      
                      
                      
                   </div>
                  </main>

            </div>


  </body>
</html>