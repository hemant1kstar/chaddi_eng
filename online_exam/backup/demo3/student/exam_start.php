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
//user id should be dynamic
//sample user_id i.e $login
//$login="gg";
//$submit="";
//if(isset($_POST['submit']))
//{
//$submit=$_POST['submit'];
//}
//$query="select * from mst_question";
//
//$rs=mysqli_query($con,"select * from mst_question where test_id=$tid") or die(mysqli_error());
//if(!isset($_SESSION['qn']))
//{
//	$_SESSION['qn']=0;
//	mysqli_query($con,"delete from mst_useranswer where sess_id='" . session_id() ."'") or die(mysqli_error());
//	$_SESSION['trueans']=0;
//	
//}
//else
//{	
//		if($submit=='Next Question' && isset($ans))
//		{
//				mysqli_data_seek($rs,$_SESSION['qn']);
//				$row= mysqli_fetch_row($rs);	
//				mysqli_query($con,"insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysqli_error());
//							mysqli_query($con,"insert into mst_useranswer1(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysqli_error());
//				if($ans==$row[7])
//				{
//							$_SESSION['trueans']=$_SESSION['trueans']+1;
//				}
//				$_SESSION['qn']=$_SESSION['qn']+1;
//		}
//		else if($submit=='Get Result' && isset($ans))
//		{
//				mysqli_data_seek($rs,$_SESSION['qn']);
//				$row= mysqli_fetch_row($rs);	
//				mysqli_query($con,"insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysqli_error());
//							mysqli_query($con,"insert into mst_useranswer1(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysqli_error());
//				if($ans==$row[7])
//				{
//							$_SESSION['trueans']=$_SESSION['trueans']+1;
//				}
//				echo "<h1 class='result_title'> Result</h1>";
//				$_SESSION['qn']=$_SESSION['qn']+1;
//				echo "<ul>";
//			    echo "<li>Subject : </li>";
//			    echo "<li>Test :</li>";
//				echo "<li>Total Question : ".$_SESSION['qn'];
//				echo "</li><li>True Answer : ".$_SESSION['trueans'];
//				$w=$_SESSION['qn']-$_SESSION['trueans'];
//				echo "</li><li>Wrong Answer : ". $w;
//				echo "</li><li>Total Time :</li></ul>";
//			    $true_answer=$_SESSION['trueans'];
//				mysqli_query($con,"insert into mst_result(login,test_id,test_date,score) values('$login',$tid,now(),'$true_answer')") or die(mysqli_error());
//				echo "<h1 class='review_head'><a href='student_result_review.php'> Review Question & Answers</a> </h1>";
//				unset($_SESSION['qn']);
//				unset($_SESSION['sid']);
//				unset($_SESSION['tid']);
//				unset($_SESSION['trueans']);
//				unset($_SESSION['ts']);
//				exit;
//		}	
//}
//$rs=mysqli_query($con,"select * from mst_question where test_id=$tid") or die(mysqli_error());
//if($_SESSION['qn']>mysqli_num_rows($rs)-1)
//{
//unset($_SESSION['qn']);
//echo "<h1 class='error_head'>Some Error  Occured</h1>";
//session_destroy();
//echo "<h1 class='error_head'>Please <a href=index.php> Start Again</a></h1>";
//
//exit;
//}
//mysqli_data_seek($rs,$_SESSION['qn']);
//$row= mysqli_fetch_row($rs);
//echo "<form name=myfm method=post action=exam_start.php id='form1'>";
//$n=$_SESSION['qn']+1;
//echo "<label class='que_title'>Que ".  $n .": $row[2]</label>";
//echo "<ul>";
//echo "<li class='option_list'><input type='radio' name='ans' value='1'>$row[3]</li>";
//echo "<li class='option_list'><input type='radio' name='ans' value='2'>$row[4]</li>";
//echo "<li class='option_list'><input type='radio' name='ans' value='3'>$row[5]</li>";
//echo "<li class='option_list'><input type='radio' name='ans' value='4'>$row[6]</li>";
//echo "</ul>";
//
//if($_SESSION['qn']<mysqli_num_rows($rs)-1)
//echo "<input type=submit name=submit value='Next Question' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent'></form>";
//else
//echo "<input type=submit name=submit value='Get Result' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent'></form>";
?>
	

<?php

// qn=question_no;
// trueans=true_ans;
//$rs=$result_set;

//user id should be dynamic
//sample user_id i.e $login
$login="gg";

if(!isset($_SESSION['question_no']))
{
	$_SESSION['question_no']=0;
	mysqli_query($con,"delete from mst_useranswer where sess_id='" . session_id() ."'") or die(mysqli_error());
	$_SESSION['true_ans']=0;
}
	
$result_set=mysqli_query($con,"select * from mst_question where test_id=$tid") or die(mysqli_error());

if(isset($_POST['submit_exam']))
{
  
  $submit=$_POST['submit_exam'];
  
  if($submit=="Next Question")
  {
  	$_SESSION['question_no']=$_SESSION['question_no']+1;
    
  }
	

  
  if($submit=="Submit Answer")
  {
    if(isset($ans))
    {
    		    mysqli_data_seek($result_set,$_SESSION['question_no']);
				$row1= mysqli_fetch_array($result_set);	
                $test_que1=$row1['question'];
                $que_op1=$row1['option1'];
                $que_op2=$row1['option2'];
                $que_op3=$row1['option3'];
                $que_op4=$row1['option4'];
                $que_ans1=$row1['answer'];
				mysqli_query($con,"insert into mst_useranswer(sess_id, test_id, que_des, op1,op2,op3,op4,true_ans,student_ans) values ('".session_id()."', $tid,'$test_que1','$que_op1','$que_op2','$que_op3', '$que_op4','$que_ans1','$ans')") or die(mysqli_error());
							mysqli_query($con,"insert into mst_useranswer1(sess_id, test_id, que_des, op1,op2,op3,op4,true_ans,student_ans) values ('".session_id()."', $tid,'$test_que1','$que_op1','$que_op2','$que_op3', '$que_op4','$que_ans1','$ans')") or die(mysqli_error());
				if($ans==$que_ans1)
				{
							$_SESSION['true_ans']=$_SESSION['true_ans']+1;
				}

if($_SESSION['question_no']==mysqli_num_rows($result_set)-1)
{
        echo"<script>
    	window.location.href = 'test_result_display.php';
        </script>";
  
}else{
	    	$_SESSION['question_no']=$_SESSION['question_no']+1;
}

  }else{
      echo "<script>
      alert('Please,select one the option.');
      </script>";
    }
  }
	
	
	if($submit=="Get Result")
  {
      echo"<script>
    	window.location.href = 'test_result_display.php';
        </script>";
  }
  
  

}

if($_SESSION['question_no']>mysqli_num_rows($result_set)-1)
{
unset($_SESSION['question_no']);
echo "<h1 class='error_head'>Some Error  Occured</h1>";
session_destroy();
echo "<h1 class='error_head'>Please <a href=index.php> Start Again</a></h1>";
exit;
}


mysqli_data_seek($result_set,$_SESSION['question_no']);
$row= mysqli_fetch_array($result_set);
$test_que=$row['question'];
$que_option1=$row['option1'];
$que_option2=$row['option2'];
$que_option3=$row['option3'];
$que_option4=$row['option4'];


echo "<form name='exam_form' method='post' action='exam_start.php' id='exam_form1'>";
$que_no=$_SESSION['question_no']+1;
echo "<label class='que_title'>Que ".  $que_no .": $test_que</label>";
echo "<ul>";
echo "<li class='option_list'><input type='radio' name='ans' value='1'>$que_option1</li>";
echo "<li class='option_list'><input type='radio' name='ans' value='2'>$que_option2</li>";
echo "<li class='option_list'><input type='radio' name='ans' value='3'>$que_option3</li>";
echo "<li class='option_list'><input type='radio' name='ans' value='4'>$que_option4</li>";
echo "</ul>";



if($_SESSION['question_no']<mysqli_num_rows($result_set)-1)
{
echo "<input type='submit' name='submit_exam' value='Next Question' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent'>";
}else
echo "<input type='submit' name='submit_exam' value='Last Question' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent'>";

echo "<input type='submit' name='submit_exam' value='Submit Answer' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent submit_anwser'>";

echo "<div class='bottom_div'>";
echo "<input type='submit' name='submit_exam' value='Review Answers' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent review_button'>";
echo "<input type='submit' name='submit_exam' value='Get Result' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent result_button'>";
echo "</div>";

echo "</form>";

?>
			
			
			
			
		</div>
    </div>
  </main>
</div>

  </body>
</html>