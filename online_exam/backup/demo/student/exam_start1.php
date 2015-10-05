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
header("location:exam_start1.php");
}
if(!isset($_SESSION['sid']) || !isset($_SESSION['tid']))
{
	header("location: index.php");
}
?>

<?php
$timestamp = time();
$diff = 3600; //<-Time of countdown in seconds.  ie. 3600 = 1 hr. or 86400 = 1 day.

//MODIFICATION BELOW THIS LINE IS NOT REQUIRED.
$hld_diff = $diff;
if(isset($_SESSION['ts'])) {
	$slice = ($timestamp - $_SESSION['ts']);	
	$diff = $diff - $slice;
}

if(!isset($_SESSION['ts']) || $diff > $hld_diff || $diff < 0) {
	$diff = $hld_diff;
	$_SESSION['ts'] = $timestamp;
}

//Below is demonstration of output.  Seconds could be passed to Javascript.
$diff; //$diff holds seconds less than 3600 (1 hour);

$hours = floor($diff / 3600) . ' : ';
$diff = $diff % 3600;
$minutes = floor($diff / 60) . ' : ';
$diff = $diff % 60;
$seconds = $diff;
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
<div id="strclock">Clock Here!</div>
				

<?php

// qn=question_no;
// trueans=true_ans;
//$rs=$result_set;

//user id should be dynamic
//sample user_id i.e $login
//$login="gg";
//
//if(!isset($_SESSION['question_no']))
//{
//	$_SESSION['question_no']=0;
//	mysqli_query($con,"delete from mst_useranswer where sess_id='" . session_id() ."'") or die(mysqli_error());
//	$_SESSION['true_ans']=0;
//}
//	
//$result_set=mysqli_query($con,"select * from mst_question where test_id=$tid") or die(mysqli_error());
//
//if(isset($_POST['submit_exam']))
//{
//  
//  $submit=$_POST['submit_exam'];
//  
//  if($submit=="Next Question")
//  {
//  	$_SESSION['question_no']=$_SESSION['question_no']+1;
//    
//  }
//	
//  if($submit=="Prev Question")
//  {
//  	$_SESSION['question_no']=$_SESSION['question_no']-1;
//    
//  }
//	
//
//  
//  if($submit=="Submit Answer")
//  {
//    if(isset($ans))
//    {
//    		    mysqli_data_seek($result_set,$_SESSION['question_no']);
//				$row1= mysqli_fetch_array($result_set);	
//                $test_que1=$row1['question'];
//                $que_op1=$row1['option1'];
//                $que_op2=$row1['option2'];
//                $que_op3=$row1['option3'];
//                $que_op4=$row1['option4'];
//                $que_ans1=$row1['answer'];
//				mysqli_query($con,"insert into mst_useranswer(sess_id, test_id, que_des, op1,op2,op3,op4,true_ans,student_ans) values ('".session_id()."', $tid,'$test_que1','$que_op1','$que_op2','$que_op3', '$que_op4','$que_ans1','$ans')") or die(mysqli_error());
//							mysqli_query($con,"insert into mst_useranswer1(sess_id, test_id, que_des, op1,op2,op3,op4,true_ans,student_ans) values ('".session_id()."', $tid,'$test_que1','$que_op1','$que_op2','$que_op3', '$que_op4','$que_ans1','$ans')") or die(mysqli_error());
//				if($ans==$que_ans1)
//				{
//							$_SESSION['true_ans']=$_SESSION['true_ans']+1;
//				}
//
//if($_SESSION['question_no']==mysqli_num_rows($result_set)-1)
//{
//        echo"<script>
//    	window.location.href = 'exam_result_display.php';
//        </script>";
//  
//}else{
//	    	$_SESSION['question_no']=$_SESSION['question_no']+1;
//}
//
//  }else{
//      echo "<script>
//      alert('Please,select one the option.');
//      </script>";
//    }
//  }
//	
//	
//	if($submit=="End Exam")
//  {
//      echo"<script>
//    	window.location.href = 'exam_result_display.php';
//        </script>";
//  }
//  
//  
//
//}
//
//if($_SESSION['question_no']>mysqli_num_rows($result_set)-1)
//{
//unset($_SESSION['question_no']);
//echo "<h1 class='error_head'>Some Error  Occured</h1>";
//session_destroy();
//echo "<h1 class='error_head'>Please <a href=index.php> Start Again</a></h1>";
//exit;
//}
//
//
//mysqli_data_seek($result_set,$_SESSION['question_no']);
//$row= mysqli_fetch_array($result_set);
//$test_que=$row['question'];
//$que_option1=$row['option1'];
//$que_option2=$row['option2'];
//$que_option3=$row['option3'];
//$que_option4=$row['option4'];
//
//
//echo "<form name='exam_form' method='post' action='exam_start.php' id='exam_form1'>";
//$que_no=$_SESSION['question_no']+1;
//$que_no_prev=$que_no-1;
//echo "<label class='que_title'>Que ".  $que_no .": $test_que</label>";
//echo "<ul>";
//echo "<li class='option_list'><input type='radio' name='ans' value='1'>$que_option1</li>";
//echo "<li class='option_list'><input type='radio' name='ans' value='2'>$que_option2</li>";
//echo "<li class='option_list'><input type='radio' name='ans' value='3'>$que_option3</li>";
//echo "<li class='option_list'><input type='radio' name='ans' value='4'>$que_option4</li>";
//echo "</ul>";
//
//
//if($que_no_prev>0)
//{
//	echo "<input type='submit' name='submit_exam' value='Prev Question' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent prev_question'>";
//}
//
//if($_SESSION['question_no']<mysqli_num_rows($result_set)-1)
//{
//echo "<input type='submit' name='submit_exam' value='Next Question' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent'>";
//}else
//echo "<input type='submit' name='submit_exam' value='Last Question' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent'>";
//
//echo "<input type='submit' name='submit_exam' value='Submit Answer' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent submit_anwser'>";
//
//echo "<div class='bottom_div'>";
//echo "<input type='submit' name='submit_exam' value='Review Answers' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent review_button'>";
//echo "<input type='submit' name='submit_exam' value='End Exam' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent result_button'>";
//echo "</div>";
//
//echo "</form>";

?>

			
	<?php
     $login="gg";
	 $que_no=0;
	 $result_set=mysqli_query($con,"select * from mst_question where test_id=$tid") or die(mysqli_error());
mysqli_data_seek($result_set,$_SESSION['questions']);
echo "<div class='exam_form'>";
echo "<form action='exam_result_examine.php' method='post'>";
     while($result_row=mysqli_fetch_array($result_set))
	 {

	 $que_no=$que_no+1; 
	 $test_que=$result_row['question'];
     $que_option1=$result_row['option1'];
     $que_option2=$result_row['option2'];
     $que_option3=$result_row['option3'];
     $que_option4=$result_row['option4'];
	echo "<label class='que_title'>Que ".  $que_no.": $test_que</label>";
	echo "<ol>";
	echo "<li class='option_list'><input type='radio' name='$que_no' value='1'>$que_option1</li>";
	echo "<li class='option_list'><input type='radio' name='$que_no' value='2'>$que_option2</li>";
	echo "<li class='option_list'><input type='radio' name='$que_no' value='3'>$que_option3</li>";
	echo "<li class='option_list'><input type='radio' name='$que_no' value='4'>$que_option4</li>";
	echo "</ol>";
	 }
echo "<input type='submit' name='submit_exam' value='Submit Exam' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent result_button'>";
echo "</form>";
echo "</div>";
	?>		
			
			
		</div>
    </div>
  </main>
</div>

	  
	  	  <script type="text/javascript">
				 var hour = <?php echo floor($hours); ?>;
				 var min = <?php echo floor($minutes); ?>;
				 var sec = <?php echo floor($seconds); ?>

				function countdown() {
				 if(sec <= 0 && min > 0) {
				  sec = 59;
				  min -= 1;
				 }
				 else if(min <= 0 && sec <= 0) {
				  min = 0;
				  sec = 0;
				 }
				 else {
				  sec -= 1;
				 }

				 if(min <= 0 && hour > 0) {
				  min = 59;
				  hour -= 1;
				 }

				 var pat = /^[0-9]{1}$/;
				 sec = (pat.test(sec) == true) ? '0'+sec : sec;
				 min = (pat.test(min) == true) ? '0'+min : min;
				 hour = (pat.test(hour) == true) ? '0'+hour : hour;

			 document.getElementById('strclock').innerHTML ="Remaining Time for Exam End:"+hour+":"+min+":"+sec;
					if(hour==0 && min==0 && sec==0)
					{
						window.location.href = 'exam_result_display.php'
					}
				 setTimeout("countdown()",1000);
				 }
				 countdown();
</script>
  </body>
</html>