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

if(isset($_POST['submit_exam']))
{
  //  var_dump($_POST['ans']);
	$questions=$_POST['ans'];
	$_SESSION['questions']=0;
	$_SESSION['true_ans']=0;
	$_SESSION['wrong_ans']=0;

		

     $result_set1=mysqli_query($con,"select * from mst_question where test_id=$tid") or die(mysqli_error());
	$total_questions=mysqli_num_rows($result_set1);
                mysqli_data_seek($result_set1,$_SESSION['questions']);

    foreach ($questions as $ans_value) {
//    echo "$ans_value <br>";
					$row2= mysqli_fetch_array($result_set1);	
                $test_que1=$row2['question'];
                $que_op1=$row2['option1'];
                $que_op2=$row2['option2'];
                $que_op3=$row2['option3'];
                $que_op4=$row2['option4'];
                $que_ans1=$row2['answer'];
//    echo "$que_ans1<br>";

				if($ans_value==$que_ans1)
				{
							$_SESSION['true_ans']=$_SESSION['true_ans']+1;
				}else{
					$_SESSION['wrong_ans']=$_SESSION['wrong_ans']+1;
				}

    
}
	
//$total_questions=$_SESSION['questions'];
$right_ans=$_SESSION['true_ans'];
$wrong_ans=$_SESSION['wrong_ans'];
echo "Total Questions: $total_questions <br>";
echo "Right Answers: $right_ans <br>";
echo "Wrong Answers: $wrong_ans <br>";

}
?>