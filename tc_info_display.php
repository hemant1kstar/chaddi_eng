<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
        <title>TC Table | Paperless System</title>
    
<!--    CSS For Material Design-->
 <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.blue-pink.min.css" /> 
<script src="material_js/material.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">

    <!--  End of CSS For Material Design-->
    
    <link rel="stylesheet" href="css/master.css">
      
            
  </head>
  <body>
<!--    Scrollable header-->
              <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
                <header class="mdl-layout__header">
                  <!-- Top row, always visible -->
                  <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title">Entry Student Details</span>
                    
                    
                  </div>
         
              <div class="tabs mdl-js-ripple-effect">
                  <a href="master.php" class="mdl-layout__tab">Student Info</a>
                  <a href="tc_info_display.php" class="mdl-layout__tab is-active">TC Information</a>
                  <a href="other_info_display.php" class="mdl-layout__tab">Other Info</a>
                  <a href="student_grade_display.php" class="mdl-layout__tab">Student Grades</a>
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

                      <!-- Your content goes here -->
                    <div class="" id="masterTableBlock">
                         <h2 id="form_header">TC Table</h2>
                      
                      <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" id="table1">
                        <thead>
                                <tr>
                                  <th>Sr. No.</th>
                                  <th>T.C.No.</th>
                                  <th>Date of T.C. issued</th>
                                  <th class="mdl-data-table__cell--non-numeric">Name</th>
                                  <th>Adm.No.</th>
                                  <th>Class</th>
                                  <th>Date of Leaving</th>
                                  <th class="mdl-data-table__cell--non-numeric">Reason for Leaving</th>
                                  <th class="mdl-data-table__cell--non-numeric">Remarks</th>
                                </tr>
                        </thead>
                        <tbody>
        <?php
 include("connection.php");
        mysqli_query ($con,"set character_set_results='utf8'"); 
        $query = mysqli_query($con,"SELECT * FROM master") or die(mysql_error());
        $sr_no=1;
        while($row=mysqli_fetch_array($query))
        {
          
          $tc_no=$row['tc_no'];
          $date_issued=$row['tc_date'];
          $name=$row['student_name'];
          $adm_no=$row['reg_no'];
          $class=$row['school_leaving_class'];
          $reason=$row['school_leaving_reason'];
          $remark=$row['tc_remark'];
          $date_leaving=$row['school_leaving_date'];
          
          $date_issued1 = strtotime($date_issued);
          $date_issued2=date('d/m/Y',$date_issued1);
          $date_leaving1= strtotime($date_leaving);
          $date_leaving2=date('d/m/Y',$date_leaving1);
         
          echo "<tr>";
          echo "<td>$sr_no</td>"; 
          echo "<td>$tc_no</td>";
          echo "<td>$date_issued2</td>";
          echo "<td class='mdl-data-table__cell--non-numeric'>$name</td>"; 
          echo "<td>$adm_no</td>";
          echo "<td>$class</td>"; 
          echo "<td>$date_leaving2</td>"; 
          echo "<td class='mdl-data-table__cell--non-numeric'>$reason</td>";
          echo "<td class='mdl-data-table__cell--non-numeric'>$remark</td>"; 
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