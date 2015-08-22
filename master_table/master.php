<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
        <title>Master Table | Paperless System</title>
    
<!--    CSS For Material Design-->
 <link rel="stylesheet" href="../css/material.blue-pink.min.css" /> 
<script src="../material_js/material.js"></script>
    <link rel="stylesheet" href="../material_js/Material+Icons.css" />
    <link rel="stylesheet" href="../fonts/Roboto+300,400,500,700.css" />

    <!--  End of CSS For Material Design-->
    
    <link rel="stylesheet" href="../css/master.css">
      
            
  </head>
  <body>
<!--    Scrollable header-->
              <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
                <header class="mdl-layout__header">
                  <!-- Top row, always visible -->
                  <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title">All Student Details</span>
                    
                    
                  </div>
         
              <div class="tabs mdl-js-ripple-effect">
                  <a href="master.php" class="mdl-layout__tab is-active">Student Info</a>
                  <a href="tc_info_display.php" class="mdl-layout__tab">TC Information</a>
                  <a href="other_info_display.php" class="mdl-layout__tab">Other Info</a>
                  <a href="student_grade_display.php" class="mdl-layout__tab">Student Grades</a>
                </div>
                  
                  
                </header>
                
                
                
              <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">Paperless System</span>
                  <nav class="mdl-navigation">
                     <a class="mdl-navigation__link" href="../index.php">Home</a>
                    <a class="mdl-navigation__link" href="master.php">Master</a>
                    <a class="mdl-navigation__link" href="index.php">Entry</a>
                  </nav>
              </div>
                
                
                
                 <main class="mdl-layout__content">

                      <!-- Your content goes here -->
                    <div class="" id="masterTableBlock">
                         <h2 id="form_header">Master Table</h2>
                      
                      <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" id="table1">
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

                             include("../database/connection.php");

                          mysqli_query ($con,"set character_set_results='utf8'"); 
                          $query = mysqli_query($con,"SELECT * FROM master") or die(mysqli_error());
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
                            
                            $birthdate1= strtotime($birthdate);
                            $birthdate2=date('d/m/Y',$birthdate1);
                            $admission_date1= strtotime($admission_date);
                            $admission_date2=date('d/m/Y',$admission_date1);


                            echo "<tr>";
                            echo "<td>$reg_no</td>"; 
                            echo "<td class='mdl-data-table__cell--non-numeric'>$student_name</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$mother_name</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$gender</td>"; 
                            echo "<td class='mdl-data-table__cell--non-numeric'>$Mother_tongue</td>";
                            echo "<td>$birthdate2</td>"; 
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
                            echo "<td>$admission_date2</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$admission_class</td>"; 
                            echo "<td class='mdl-data-table__cell--non-numeric'>$prev_mark_sheet</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$prev_tc</td>"; 
                            echo "<td class='mdl-data-table__cell--non-numeric'>$nadar_fee</td>"; 
                            echo "<td class='mdl-data-table__cell--non-numeric'>$permanent_address</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$medium</td>"; 
                            echo "</tr>";
                          }

                          ?>

                        </tbody>
                      </table>

                    </div>
                  </main>

            </div>
  </body>
</html>