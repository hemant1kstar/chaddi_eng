<html>
<head>
    <title>Transpotation System</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
                <a href="index.php" class="mdl-layout__tab">Bus System</a>
                <a href="student_bus_status.php" class="mdl-layout__tab is-active">Student Status</a>
                <a href="student_bus_reg.php" class="mdl-layout__tab">Register Student</a>
        </div>
  </header>

  <main class="mdl-layout__content">
    <div class="page-content">
      
  <?php
include("../database/connection.php");
if(isset($_POST['student_bus_edit']))
{
//  $student_id1=$_POST['student_id1'];
  $student_name1=$_POST['student_name1'];
  $student_class1=$_POST['student_class1'];
  $student_no1=$_POST['student_no1'];
  $student_drop_area1=$_POST['student_drop_area1'];
  $bus_fee1=$_POST['bus_fee1'];
  $bus_id1=$_POST['bus_id1'];
  
mysqli_query ($con,"set character_set_results='utf8'");
$sql = "UPDATE student_bus_status SET student_name=N'$student_name1',class='$student_class1',contact_no='$student_no1',student_drop_area=N'$student_drop_area1',bus_fee='$bus_fee1' WHERE bus_id1='$bus_id1'";

if ($con->query($sql) === TRUE) {
//     header("Location:student_bus_status.php");
   echo "<script>
          window.location = 'student_bus_status.php';
          </script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
  
}

if(isset($_GET['student_id']))
{
  $student_id=$_GET['student_id'];
  mysqli_query ($con,"set character_set_results='utf8'");
  $query="select * from student_bus_status where student_id='$student_id'";
  $result=mysqli_query($con,$query);
  while($row1=mysqli_fetch_array($result))
  { 
      $s_name=$row1['student_name'];
      $s_class=$row1['class'];
      $s_drop_area=$row1['student_drop_area'];
      $s_contact_no=$row1['contact_no'];
  }
}
    ?>
      
<a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" href="student_bus_status.php">
 Back
</a>
      <div class="bus_add_div mdl-shadow--2dp">
        <div class="mdl-grid">
<form action="" method="post">
  <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--6-col">
    <input class="mdl-textfield__input" type="text" id="student_id1" name="student_id1" value="<?php echo $student_id?>" readonly/>
    <label class="mdl-textfield__label" for="student_id1">Student ID</label>
  </div>
  
  <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--6-col">
    <input class="mdl-textfield__input" type="text" id="student_drop_area1" name="student_drop_area1" value="<?php echo $s_drop_area;?>"/>
    <label class="mdl-textfield__label" for="student_drop_area1">Student Drop Area</label>
  </div>
  
  <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--6-col">
    <input class="mdl-textfield__input" type="text" id="student_name1" name="student_name1" value="<?php echo $s_name;?>"/>
    <label class="mdl-textfield__label" for="student_name1">Student Name</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--6-col">
    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="student_class1" name="student_class1"  value="<?php echo $s_class;?>"/>
    <label class="mdl-textfield__label" for="student_class1">Class</label>
    <span class="mdl-textfield__error">Input is not a number!</span>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--6-col">
    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="student_no1" name="student_no1" value="<?php echo $s_contact_no;?>"/>
    <label class="mdl-textfield__label" for="student_no1">Contact Number</label>
    <span class="mdl-textfield__error">Input is not a number!</span>
  </div>
  

  
      <div class="dropdown mdl-cell mdl-cell--6-col">
      <label>Bus Fee</label>
<select name="bus_fee1" required>
  <option value=""></option>
  <option value="Paid">Paid</option>
  <option value="Not Paid">Not Paid</option>
      </select>
  </div>
      <div class="dropdown mdl-cell mdl-cell--6-col">
      <label>Bus ID</label>
<select name="bus_id1" required>
  <option value=""></option>
  <?php
$query1="select * from bus_system";
$result1=mysqli_query($con,$query1);
while($row1=mysqli_fetch_array($result1))
{
 $bus_id1=$row1['bus_id'];
 echo "<option value='$bus_id1'>$bus_id1</option>";
}
?>
      </select>
  </div>
  
  <div class="submit_div">
    <input type="submit" value="Submit" name="student_bus_edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
  </div>
  
  
</form>
        </div>
      </div>
      
    </div>
  </main>
</div>


    
    </body>
</html>