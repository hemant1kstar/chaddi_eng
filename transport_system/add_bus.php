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
    <title>Transportation System</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.indigo-pink.min.css">
 <script src="../material_js/material.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  
  <link rel="stylesheet" href="css/add_bus.css">
</head>
    <body>
        <!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Transportation System</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="../index.php">Home</a>
      </nav>
    </div>
    
      <div class="tabs mdl-js-ripple-effect">
                <a href="index.php" class="mdl-layout__tab is-active">Bus System</a>
                <a href="student_bus_status.php" class="mdl-layout__tab">Student Status</a>
                <a href="student_bus_reg.php" class="mdl-layout__tab">Register Student</a>
        </div>
  </header>

  <main class="mdl-layout__content">
    <div class="page-content">
      
<a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" href="index.php">
 Back
</a>
      
  <?php
    include("../database/connection.php");
if(isset($_POST['bus_add_confirm']))
{
  $bus_name=$_POST['bus_name1'];
  $driver_name=$_POST['driver_name1'];
  $pickup_time=$_POST['pick_time1'];
  $drop_time=$_POST['drop_time1'];
  $bus_area=$_POST['area1'];
  
  $sql = "INSERT INTO bus_system (bus_name, driver_name, pickup_time, drop_time, area)
VALUES ('$bus_name', '$driver_name', '$pickup_time','$drop_time','$bus_area')";

if ($con->query($sql) === TRUE) {
    echo "New Bus Added successfully";
} else {
//    echo "Error: " . $sql . "<br>" . $con->error;
//  header("Location:index.php");
   echo "<script>
          window.location = 'index.php';
          </script>";
}
  
}
    ?>
      <div class="bus_add_div mdl-shadow--2dp">
        <div class="mdl-grid">
<form action="" method="post">
  <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--6-col">
    <input class="mdl-textfield__input" type="text" id="bus_name1" name="bus_name1" required/>
    <label class="mdl-textfield__label" for="bus_name1">Bus Number or Bus Name</label>
  </div>
    <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--6-col">
    <input class="mdl-textfield__input" type="text" id="driver_name1" name="driver_name1" pattern="[a-zA-Z]{1,}" title="Enter only characters" required/>
    <label class="mdl-textfield__label" for="driver_name1">Driver Name</label>
  </div>
    <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--6-col">
    <input class="mdl-textfield__input" type="text" id="pick_time1" name="pick_time1" required/>
    <label class="mdl-textfield__label" for="pick_time1">PickUp Time</label>
  </div>
      <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--6-col">
    <input class="mdl-textfield__input" type="text" id="drop_time1" name="drop_time1" required/>
    <label class="mdl-textfield__label" for="drop_time1">Drop Time</label>
  </div>
    <div class="dropdown mdl-cell mdl-cell--6-col">
      <label>Area</label>
<select name="area1" required>
  <option value=""></option>
  <option value="Shivaji Chowk">Shivaji Chowk</option>
  <option value="Nandi Stop">Nandi Stop</option>
  <option value="Renapur Naka">Renapur Naka</option>
      </select>
  </div>
  
  <div class="submit_div">
    <input type="submit" value="Submit" name="bus_add_confirm" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
  </div>
</form>
        </div>
      </div>
      
    </div>
  </main>
</div>
      


    
    </body>
</html>