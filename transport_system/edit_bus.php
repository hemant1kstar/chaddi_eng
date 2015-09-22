<html>
<head>
    <title>Transpotation System</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.indigo-pink.min.css">
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  
  <link rel="stylesheet" href="css/add_bus.css">
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
if(isset($_POST['edit_bus_confirm']))
{
  $bus_id1=$_GET['bus_id'];
  $bus_name1=$_POST['bus_name1'];
  $driver_name1=$_POST['driver_name1'];
  $pickup_time1=$_POST['pick_time1'];
  $drop_time1=$_POST['drop_time1'];
  $bus_area1=$_POST['area1'];
  
  $sql = "UPDATE bus_system SET bus_name='$bus_name1',driver_name='$driver_name1',pickup_time='$pickup_time1',drop_time='$drop_time1',area='$bus_area1' WHERE bus_id='$bus_id1'";

if ($con->query($sql) === TRUE) {
     header("Location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
  
}

if(isset($_GET['bus_id']))
{
  $bus_id=$_GET['bus_id'];
  $query="select * from bus_system where bus_id='$bus_id'";
  $result=mysqli_query($con,$query);
  while($row1=mysqli_fetch_array($result))
  { 
    $bus_name=$row1['bus_name'];
    $driver_name=$row1['driver_name'];
    $pickup_time=$row1['pickup_time'];
    $drop_time=$row1['drop_time'];
  }
}
    ?>
      <div class="bus_add_div mdl-shadow--2dp">
        <div class="mdl-grid">
<form action="" method="post">
  <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--6-col">
    <input class="mdl-textfield__input" type="text" id="bus_name1" name="bus_name1" value="<?php echo $bus_name;?>"/>
    <label class="mdl-textfield__label" for="bus_name1">Bus Number or Bus Name</label>
  </div>
    <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--6-col">
    <input class="mdl-textfield__input" type="text" id="driver_name1" name="driver_name1" value="<?php echo $driver_name;?>"/>
    <label class="mdl-textfield__label" for="driver_name1">Driver Name</label>
  </div>
    <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--6-col">
    <input class="mdl-textfield__input" type="text" id="pick_time1" name="pick_time1" value="<?php echo $pickup_time?>"/>
    <label class="mdl-textfield__label" for="pick_time1">PickUp Time</label>
  </div>
      <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--6-col">
    <input class="mdl-textfield__input" type="text" id="drop_time1" name="drop_time1" value="<?php echo $drop_time;?>"/>
    <label class="mdl-textfield__label" for="drop_time1">Drop Time</label>
  </div>
    <div class="dropdown mdl-cell mdl-cell--6-col">
      <label>Select the area</label>
<select name="area1" required>
  <option value=""></option>
  <option value="Shivaji Chowk">Shivaji Chowk</option>
  <option value="Nandi Stop">Nandi Stop</option>
  <option value="Renapur Naka">Renapur Naka</option>
      </select>
  </div>
  
  <div class="submit_div">
    <input type="submit" value="Submit" name="edit_bus_confirm" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
  </div>
</form>
        </div>
      </div>
      
    </div>
  </main>
</div>
      


    
    </body>
</html>