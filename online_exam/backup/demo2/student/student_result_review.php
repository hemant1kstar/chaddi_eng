<?php
session_start();
extract($_POST);
extract($_SESSION);
include("../connection.php");
	if(isset($_POST['submit']))
	{
		$submit=$_POST['submit'];
	}else
	{
	$submit="";
	}
if($submit=='Finish')
{
//	mysqli_query($con,"delete from mst_useranswer where sess_id='" . session_id() ."'") or die(mysqli_error());
	unset($_SESSION['qn']);
	header("Location: index.php");
	exit;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Student Exam Panel</title>
<!--    CSS For Material Design-->
<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.indigo-pink.min.css">
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!--    Custom Css-->
    <link rel="stylesheet" href="css/student_result_review.css">
    
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
<!--
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Title</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
    </nav>
  </div>
-->
  <main class="mdl-layout__content">
    <div class="page-content">

      <div class="mdl-shadow--2dp result_review">
        <?php
          echo "<h3 class='review_title'> Review Test Question</h3>";

          if(!isset($_SESSION['qn']))
          {
                  $_SESSION['qn']=0;
          }
          else if($submit=='Next Question' )
          {
              $_SESSION['qn']=$_SESSION['qn']+1;

          }

          $rs=mysqli_query($con,"select * from mst_useranswer where sess_id='" . session_id() ."'") or die(mysqli_error());
          mysqli_data_seek($rs,$_SESSION['qn']);
          $row= mysqli_fetch_row($rs);
          echo "<form name=myfm method='post' action='student_result_review.php'>";
          
          $n=$_SESSION['qn']+1;
          echo "<h5 class='que_title'>Que ".  $n .": $row[2]</h5>";
          echo "<ol>";
          echo "<li class=".($row[7]==1?'tans':'style8').">$row[3]</li>";
          echo "<li class=".($row[7]==2?'tans':'style8').">$row[4]</li>";
          echo "<li class=".($row[7]==3?'tans':'style8').">$row[5]</li>";
          echo "<li class=".($row[7]==4?'tans':'style8').">$row[6]</li>";
          echo "</ol>";
          if($_SESSION['qn']<mysqli_num_rows($rs)-1)
          echo "<input type='submit' name='submit' value='Next Question' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent'>";
          else
          echo "<input type='submit' name='submit' value='Finish' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent'>";
          echo "</form>";
         ?>
        
      </div>
    </div>
  </main>
</div>
  </body>
</html>