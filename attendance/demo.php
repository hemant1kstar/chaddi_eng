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
               <link href='../attendance/css/attendance.css' rel='stylesheet'>
            
  </head>
  <body>
<!--    Waterfall header-->
              <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
                <header class="mdl-layout__header mdl-layout__header--scroll">
                  <!-- Top row, always visible -->
                  <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title">Attendance System</span>
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
       
                  <div class="tabs mdl-js-ripple-effect">
                  <a href="index.php" class="mdl-layout__tab is-active">Daily Attendance</a>
                  <a href="monthly_report.php" class="mdl-layout__tab">Monthly Attendance Report</a>
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
                      <!-- Your content goes here -->
                      <?php
                                      $con=mysqli_connect("localhost","root","","santh");
                                          if (mysqli_connect_errno())
                                          {
                                              echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                          }
                       ?>
                      
                      <?php
//include("../database/connection.php");
//$success="";
                            if(isset($_POST['submit'])){
                             $date1=$_POST['date'];
                             $subject=$_POST['subject'];
                                if(!empty($_POST['check_list'])){
                                    foreach($_POST['check_list'] as $selected){
            $result = mysqli_query($con,"INSERT INTO
            attendance(student_id,date,subject)VALUES('$selected','$date1','$subject')"); 
                                 
                                    }
                                  
                                } 
                                  echo "Attendance inserted successfully";
                                     
                            }

?>
                      
                  <div class="attendance_div row">
                    
                         <form action=""  method="post">
    
                            <h4 class="label_heading">Entry Attendance</h4>
                                <div class="">
                                <div class="">
                                    <label>Class :</label>
                                </div>
                        <div class="">
                                        <select name="class" class="form-control" onchange="subjectChange()" id="class1" required>
                                            <option  value=""></option>
                                            <option  value="fe">6th Class</option>
                                            <option  value="se">7th Class</option>
 
                                        </select>
                                    </div>
                                    <div class=""><label> Timing:</label></div>
                                    <div class="" id="subject_dropdown">
            
                                    </div>
                                </div>
                            <div class="">
                                <div class="">
                                    <label>Date :</label>
                                </div>
                                    <div class="col-md-3">
                                        <input type="text" name="date" class="form-control" id="datepicker" required>
                                    </div>
                            </div>
                        
                     <div class="">
                              <div class="" id="student_dropdown">
                                <table class="">
                                     <thead>
                                        <tr>
                                        <th>Roll No</th>
                                        <th>Student Name</th>
                                        <th>Attendance (only absent select)</th>
                                        </tr>
                                   </thead>
                                        <tbody>
                                </tbody>
                            </table>
                        </div>
                        </div>
                        <div class=''>
                            <input type='submit' class='btn btn-success' name='submit' value='Submit' >
                        </div>
                    </form>

             </div>


                   </div>
                  </main>

            </div>
     <script src="../attendance/js/jquery-1.11.2.min.js"></script>
   <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
         <?php
                  echo " <script>
                  $(function() {
            $('#datepicker').datepicker({dateFormat: 'yy-mm-dd', minDate: 0 });
                       });
                </script>";
      ?>
    
        <script>
        function subjectChange() {
    if (document.getElementById("class1").value == "fe"){
        document.getElementById("subject_dropdown").innerHTML = "<?php
               $con=mysqli_connect("localhost","root","","santh");
                                          if (mysqli_connect_errno())
                                          {
                                              echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                          }
      echo "<select name='subject'  required>";
                      echo "<option></option>"; 
                      echo "<option  value='Morning'>Morning</option>";
                      echo "<option  value='Afternoon'>Afternoon</option>";
     echo "</select>";
             ?>";
        changeStudent();
    }     
    else if(document.getElementById("class1").value == "se"){
        document.getElementById("subject_dropdown").innerHTML = "<?php
           $con=mysqli_connect("localhost","root","","santh");
                                          if (mysqli_connect_errno())
                                          {
                                              echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                          }
      echo "<select name='subject' required>";
                     echo "<option></option>"; 
                      echo "<option  value='Morning'>Morning</option>";
                      echo "<option  value='Afternoon'>Afternoon</option>";
     echo "</select>";
             ?>";
          changeStudent();
       
    }                
}
    </script>
    <script>
        function changeStudent(){
            if (document.getElementById("class1").value == "fe"){
               document.getElementById("student_dropdown").innerHTML = "<?php
                    $con=mysqli_connect("localhost","root","","santh");
                                          if (mysqli_connect_errno())
                                          {
                                              echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                          }
                 echo "<table class='mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp'>";
                 echo "<thead>";
                 echo "<tr><th>Roll No</th><th>Student Name</th><th>Attendance (only absent select)</th></tr>";
                 echo "</thead><tbody>";
                 $result = mysqli_query($con,"SELECT * FROM students where class='1st year'"); 
                 while($row = mysqli_fetch_array($result)){
                    echo "<tr><td>".$row['roll_no']."</td>";
                    echo "<td> ".$row['name']."</td>";
                    echo "<td><input type='checkbox' name='check_list[]' value={$row['student_id']} class='check'></td>";                               echo  "</tr>"; 
                    
                    }
                   echo "</tbody></table>";
        ?>";
                
        }     
        else if(document.getElementById("class1").value == "se"){
                           document.getElementById("student_dropdown").innerHTML = "<?php
                    $con=mysqli_connect("localhost","root","","santh");
                                          if (mysqli_connect_errno())
                                          {
                                              echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                          }
                 echo "<table class='mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp'>";
                 echo "";
                 echo "<tr><th>Roll No</th><th>Student Name</th><th>Attendance (only absent select)</th></tr>";
                 echo "";
                 $result = mysqli_query($con,"SELECT * FROM students where class='2nd year'"); 
                 while($row = mysqli_fetch_array($result)){
                    echo "<tr><td>".$row['roll_no']."</td>";
                    echo "<td> ".$row['name']."</td>";
                    echo "<td><input type='checkbox' name='check_list[]' value={$row['student_id']} class='check'></td>";                               echo  "</tr>";       
                    }
                   echo "</table>";
        ?>";
        }
        }
    </script>

  </body>
</html>