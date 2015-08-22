<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
        <title>Student Grades Table | Paperless System</title>
    
<!--    CSS For Material Design-->
 <link rel="stylesheet" href="../css/material.blue-pink.min.css" /> 
<script src="../material_js/material.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
                  <a href="master.php" class="mdl-layout__tab">Student Info</a>
                  <a href="tc_info_display.php" class="mdl-layout__tab">TC Information</a>
                  <a href="other_info_display.php" class="mdl-layout__tab">Other Info</a>
                  <a href="student_grade_display.php" class="mdl-layout__tab  is-active">Student Grades</a>
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
                        <h2 id="form_header">Student Grades Table</h2>
                      
                      <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" id="table1">
                        <thead>
                          <tr>
                            <th>Sr No.</th>
                            <th>Reg No.</th>
                            <th class="mdl-data-table__cell--non-numeric">Student Name</th>
                            <th>Exam Seat No.</th>
                            <th>10th class</th>
                            <th>9th class</th>
                            <th>8th class</th>
                            <th>7th class</th>
                            <th>6th class</th>
                            <th>5th class</th>
                            <th>4th class</th>
                            <th>3rd class</th>
                            <th>2nd class</th>
                            <th>1st class</th>
                          </tr>
                        </thead>
                        <tbody>
        <?php
 include("../database/connection.php");
        mysqli_query ($con,"set character_set_results='utf8'"); 
        $query = mysqli_query($con,"SELECT * FROM master") or die(mysqli_error());

        $sr_no=1;
        while($row=mysqli_fetch_array($query))
        {
          
          $reg_no=$row['reg_no'];
          $name=$row['student_name'];
          $exam_seat_no=$row['exam_seat_no'];
          $class10_percentage=$row['10_percentage'];
          $class9_percentage=$row['9_percentage'];
          $class8_grade=$row['8_grade'];
          $class7_grade=$row['7_grade'];
          $class6_grade=$row['6_grade'];
          $class5_grade=$row['5_grade'];
          $class4_grade=$row['4_grade'];
          $class3_grade=$row['3_grade'];
          $class2_grade=$row['2_grade'];
          $class1_grade=$row['1_grade'];
      
            
          echo "<tr>";
          echo "<td>$sr_no</td>"; 
          echo "<td>$reg_no</td>";
          echo "<td>$name</td>";
          echo "<td>$exam_seat_no</td>";
          echo "<td>$class10_percentage</td>";
          echo "<td>$class9_percentage</td>"; 
          echo "<td>$class8_grade</td>"; 
          echo "<td>$class7_grade</td>"; 
          echo "<td>$class6_grade</td>"; 
          echo "<td>$class5_grade</td>"; 
          echo "<td>$class4_grade</td>"; 
          echo "<td>$class3_grade</td>"; 
          echo "<td>$class2_grade</td>"; 
          echo "<td>$class1_grade</td>"; 
       
          echo "</tr>";
          
           $sr_no++;
        }

        ?>

                        </tbody>
                      </table>

                    </div>
                  </main>

            </div>
  </body>
</html>