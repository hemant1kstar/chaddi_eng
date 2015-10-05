<?php
session_start();
include("../connection.php");
extract($_POST);
extract($_GET);
extract($_SESSION);
if(isset($subid) && isset($testid))
{
$_SESSION['sid']=$subid;
$_SESSION['tid']=$testid;
header("location:exam_start.php");
}
if(!isset($_SESSION['sid']) || !isset($_SESSION['tid']))
{
	header("location: index.php");
}
?>


<html>
  <head>
    <title>Student Exam Panel</title>
<!--    CSS For Material Design-->
<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.indigo-pink.min.css">
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!--    Custom Css-->
    <link rel="stylesheet" href="css/start_exam.css">
    
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
		<div class="mdl-shadow--2dp exam_div">
<?php



$login="gg";

	$query1="select sub_name from mst_subject where sub_id='$sid'";
	$result1=mysqli_query($con,$query1);
	while($row1=mysqli_fetch_array($result1))
	{
		$subject_name=$row1['sub_name'];
	}

$query2="select test_name from mst_test where test_id='$tid'";
	$result2=mysqli_query($con,$query2);
	while($row2=mysqli_fetch_array($result2))
	{
		$test_name=$row2['test_name'];
	}

				echo "<h1 class='result_title'> Result</h1>";
				$_SESSION['question_no']=$_SESSION['question_no']+1;
				echo "<ul>";
			    echo "<li>Subject : $subject_name </li>";
			    echo "<li>Test : $test_name</li>";
				echo "<li>Total Question : ".$_SESSION['question_no'];
				echo "</li><li>True Answer : ".$_SESSION['true_ans'];
				$wrong_answers=$_SESSION['question_no']-$_SESSION['true_ans'];
				echo "</li><li>Wrong Answer : ". $wrong_answers;
				echo "</li></ul>";
			    $true_answer=$_SESSION['true_ans'];
				mysqli_query($con,"insert into mst_result(login,subject_id,test_id,test_date,score) values('$login','$sid','$tid',now(),'$true_answer')") or die(mysqli_error());
				echo "<h1 class='review_head'><a href='student_result_review.php'> Review Question & Answers</a> </h1>";
  				unset($_SESSION['question_no']);
				unset($_SESSION['sid']);
				unset($_SESSION['tid']);
				unset($_SESSION['true_ans']);
				unset($_SESSION['ts']);
				exit;

  



?>
          
		</div>
    </div>
  </main>
</div>

  </body>
</html>