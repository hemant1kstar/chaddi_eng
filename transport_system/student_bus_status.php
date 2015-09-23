<?php
         session_start();
         if(!$_SESSION['LoggedIn_user'])
           {
                 header("location:../login_panel/login.php?problem='Not Logged In'");
                 exit;
         }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Transpotation System</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.indigo-pink.min.css">
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  
  <link rel="stylesheet" href="css/student_bus_status.css">
            <!-- SweetAlert CSS and JavaScript files-->
        <script src="dist/sweetalert.min.js"></script>
        <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
</head>
    <body>
        <!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Transpotation System</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="../index.php">Home</a>
      </nav>
    </div>
    
      <div class="tabs mdl-js-ripple-effect">
                <a href="index.php" class="mdl-layout__tab">Bus System</a>
                <a href="student_bus_status.php" class="mdl-layout__tab is-active">Student Status</a>
                <a href="student_bus_reg.php" class="mdl-layout__tab">Register Student</a>
        </div>
  </header>

  <main class="mdl-layout__content">
    <div class="page-content">
      
      
  <?php
    include("../database/connection.php");
    ?>
      <div class="student_list_div mdl-shadow--2dp">
        <h3>Student List</h3>
      <table class="list_table">
  <thead>
    <tr>
            <th class="mdl-data-table__cell--non-numeric">Student Reg No.</th>
            <th class="mdl-data-table__cell--non-numeric">Student Name</th>
            <th class="mdl-data-table__cell--non-numeric">Class</th>
            <th class="mdl-data-table__cell--non-numeric">Contact No.</th>
            <th class="mdl-data-table__cell--non-numeric">Student Drop Area</th>
            <th class="mdl-data-table__cell--non-numeric">Bus Fee Status</th>
            <th class="mdl-data-table__cell--non-numeric">Bus ID</th>
            <th class="mdl-data-table__cell--non-numeric">Bus Area</th>
            <th class="mdl-data-table__cell--non-numeric">Bus Name</th>
            <th class="mdl-data-table__cell--non-numeric">Driver Name</th>
            <th class="mdl-data-table__cell--non-numeric">Pickup Time</th>
            <th class="mdl-data-table__cell--non-numeric">Drop Time</th>


            <th class="mdl-data-table__cell--non-numeric">Update</th>
            <th class="mdl-data-table__cell--non-numeric">Delete</th>
    </tr>
  </thead>
                                <?php
                            echo "<tbody>";
                            mysqli_query ($con,"set character_set_results='utf8'"); 
//                            $result=mysqli_query($con,"SELECT * FROM student_bus_status");
//$query="SELECT student_bus_status.student_id
//FROM student_bus_status
//FULL OUTER JOIN bus_system
//ON student_bus_status.bus_id1=bus_system.bus_id
//ORDER BY student_bus_status.student_id";
$query="SELECT *
FROM student_bus_status
LEFT OUTER JOIN bus_system
ON student_bus_status.bus_id1=bus_system.bus_id";
   $result=mysqli_query($con,$query);
                            while($row= mysqli_fetch_array($result)) {
                            $student_id=$row['student_id'];
                            $student_name=$row['student_name'];
                            $student_class=$row['class'];
                            $student_contact_no=$row['contact_no'];
                            $student_drop_area=$row['student_drop_area'];
                            $bus_fee=$row['bus_fee'];
                            $bus_id=$row['bus_id1'];
                            $bus_area=$row['area'];
                            $bus_name=$row['bus_name'];
                            $driver_name=$row['driver_name'];
                            $pickup_time=$row['pickup_time'];
                            $drop_time=$row['drop_time'];

                          
                            echo "<tr>";
                            echo "<th class='mdl-data-table__cell--non-numeric'>$student_id</th>";
                            echo "<th class='mdl-data-table__cell--non-numeric'>$student_name</th>";
                            echo "<th class='mdl-data-table__cell--non-numeric'>$student_class</th>";
                            echo "<th class='mdl-data-table__cell--non-numeric'>$student_contact_no</th>";
                            echo "<th class='mdl-data-table__cell--non-numeric'>$student_drop_area</th>";
                            echo "<th class='mdl-data-table__cell--non-numeric'>$bus_fee</th>";
                            echo "<th class='mdl-data-table__cell--non-numeric'>$bus_id</th>";
                            echo "<th class='mdl-data-table__cell--non-numeric'>$bus_area</th>";                        
                            echo "<th class='mdl-data-table__cell--non-numeric'>$bus_name</th>";
                            echo "<th class='mdl-data-table__cell--non-numeric'>$driver_name</th>";
                            echo "<th class='mdl-data-table__cell--non-numeric'>$pickup_time</th>";
                            echo "<th class='mdl-data-table__cell--non-numeric'>$drop_time</th>";
                      
                              
                    echo "<th><a class='' href='edit_student_bus.php?student_id=".$student_id."' title='Edit Data'><img src='images/ic_edit_24px.svg' /></a></th>";
                                
                                echo '<th><button class="" onClick="myFunction_Delete_row(\''.$student_id.'\')" title="Delete Data"><img src="images/ic_delete_24px.svg"/></button></th>';
                            echo "</tr>";
                            }
                           echo "</tbody>";
                      ?>
</table>
      </div>
      
    </div>
  </main>
</div>
            <script>
            function myFunction_Delete_row(row_id) {
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this data!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                }, function() {
                    swal("Deleted!", "Your  file has been deleted.", "success");
                    window.location = "student_bus_delete.php?student_id1=" + row_id;
                });
            }

        </script>  
  </body>
</html>