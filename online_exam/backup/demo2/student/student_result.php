<!DOCTYPE html>
<html>
  <head>
    <title>Student Exam Panel</title>
<!--    CSS For Material Design-->
<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.indigo-pink.min.css">
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!--    Custom Css-->
    <link rel="stylesheet" href="css/student_result.css">
    
  </head>
  <body>
  <!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Student Exam Panel</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="index.php">Home</a>
        <a class="mdl-navigation__link" href="">Signout</a>
      </nav>
    </div>
  </header>

  <main class="mdl-layout__content">
    <div class="page-content">
   <div class="mdl-shadow--2dp result_div">
     <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" href="index.php">
  Back
</a>
     <h4 class="result_heading">Online Exam Result</h4>
     <?php
include("../connection.php");
     $login_id="gg";




$rs=mysqli_query($con,"select t.test_name,t.total_que,r.test_date,r.score,r.subject_id from mst_test t, mst_result r where
t.test_id=r.test_id and r.login='$login_id'") or die(mysqli_error());


if(mysqli_num_rows($rs)<1)
{
	echo "<h5> You have not given any quiz</h1>";
	exit;
}
echo "<table class='result_table'>";
echo "<thead><tr><th>Subject</th><th>Test Name</th><th>Total Questions</th><th>Score</th><th>Date</th></tr>";
echo "</thead><tbody>";
while($row=mysqli_fetch_row($rs))
{
//  $sid=$row[4];
//	$query1="select sub_name from mst_subject where sub_id='$sid'";
//	$result1=mysqli_query($con,$query1);
//	while($row1=mysqli_fetch_array($result1))
//	{
//		$subject_name=$row1['sub_name'];
//	}
echo "<tr><td>$row[4]</td><td>$row[0]</td><td>$row[1]</td><td>$row[3]</td><td>$row[2]</td></tr>";
}
echo "</tbody></table>";
     ?>
       
      </div>
    </div>
  </main>
</div>
  </body>
</html>