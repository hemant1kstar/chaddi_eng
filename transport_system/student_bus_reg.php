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
                <a href="student_bus_status.php" class="mdl-layout__tab">Student Status</a>
                <a href="student_bus_reg.php" class="mdl-layout__tab is-active">Register Student</a>
        </div>
  </header>

  <main class="mdl-layout__content">
    <div class="page-content">
      
  <?php
include("../database/connection.php");
if(isset($_POST['student_bus_confirm']))
{
  $student_id1=$_POST['student_id1'];
  $student_name1=$_POST['student_name1'];
  $student_class1=$_POST['student_class1'];
  $student_no1=$_POST['student_no1'];
  $student_drop_area1=$_POST['student_drop_area1'];
  $bus_fee1=$_POST['bus_fee1'];
  $bus_id1=$_POST['bus_id1'];
  
   mysqli_query ($con,"set character_set_results='utf8'"); 
  $sql = "INSERT INTO student_bus_status (student_id, student_name, class, contact_no, student_drop_area, bus_fee, bus_id1)
VALUES ('$student_id1',N'$student_name1', '$student_class1','$student_no1',N'$student_drop_area1','$bus_fee1','$bus_id1')";

if ($con->query($sql) === TRUE) {
    echo "Student Registered successfully";
} else {
    header("Location:student_bus_status.php");
}
  
}
    ?>
      <div class="bus_add_div mdl-shadow--2dp">
        <div class="mdl-grid">
<form action="" method="post">
  <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--6-col">
    <input class="mdl-textfield__input" type="text" id="student_id1" name="student_id1" onchange="change_info(this.value)"/>
    <label class="mdl-textfield__label" for="student_id1">Student ID</label>
  </div>
  
  <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--6-col">
    <input class="mdl-textfield__input" type="text" id="student_drop_area1" name="student_drop_area1"/>
    <label class="mdl-textfield__label" for="student_drop_area1">Student Drop Area</label>
  </div>
  
  <div id="myDiv">

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
    <input type="submit" value="Submit" name="student_bus_confirm" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
  </div>
  
  
</form>
        </div>
      </div>
      
    </div>
  </main>
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
function change_info(val1) {
//    alert("The input value has changed. The new value is: " + val);
  var xmlhttp;
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","fetch_student_data.php?stu_id="+val1,true);
xmlhttp.send();
}
</script>
    
    </body>
</html>