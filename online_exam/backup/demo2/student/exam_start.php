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

<?php
$timestamp = time();
$diff = 60; //<-Time of countdown in seconds.  ie. 3600 = 1 hr. or 86400 = 1 day.

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
<!DOCTYPE html>
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
//user id should be dynamic
//sample user_id i.e $login
$login="gg";
$submit="";
if(isset($_POST['submit']))
{
$submit=$_POST['submit'];
}
$query="select * from mst_question";

$rs=mysqli_query($con,"select * from mst_question where test_id=$tid") or die(mysqli_error());
if(!isset($_SESSION['qn']))
{
	$_SESSION['qn']=0;
	mysqli_query($con,"delete from mst_useranswer where sess_id='" . session_id() ."'") or die(mysqli_error());
	$_SESSION['trueans']=0;
	
}
else
{	
		if($submit=='Next Question' && isset($ans))
		{
				mysqli_data_seek($rs,$_SESSION['qn']);
				$row= mysqli_fetch_row($rs);	
				mysqli_query($con,"insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysqli_error());
							mysqli_query($con,"insert into mst_useranswer1(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysqli_error());
				if($ans==$row[7])
				{
							$_SESSION['trueans']=$_SESSION['trueans']+1;
				}
				$_SESSION['qn']=$_SESSION['qn']+1;
		}
		else if($submit=='Get Result' && isset($ans))
		{
				mysqli_data_seek($rs,$_SESSION['qn']);
				$row= mysqli_fetch_row($rs);	
				mysqli_query($con,"insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysqli_error());
							mysqli_query($con,"insert into mst_useranswer1(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysqli_error());
				if($ans==$row[7])
				{
							$_SESSION['trueans']=$_SESSION['trueans']+1;
				}
				echo "<h1 class='result_title'> Result</h1>";
				$_SESSION['qn']=$_SESSION['qn']+1;
				echo "<ul>";
			    echo "<li>Subject : </li>";
			    echo "<li>Test :</li>";
				echo "<li>Total Question : ".$_SESSION['qn'];
				echo "</li><li>True Answer : ".$_SESSION['trueans'];
				$w=$_SESSION['qn']-$_SESSION['trueans'];
				echo "</li><li>Wrong Answer : ". $w;
				echo "</li><li>Total Time :</li></ul>";
			    $true_answer=$_SESSION['trueans'];
				mysqli_query($con,"insert into mst_result(login,test_id,test_date,score) values('$login',$tid,now(),'$true_answer')") or die(mysqli_error());
				echo "<h1 class='review_head'><a href='student_result_review.php'> Review Question & Answers</a> </h1>";
				unset($_SESSION['qn']);
				unset($_SESSION['sid']);
				unset($_SESSION['tid']);
				unset($_SESSION['trueans']);
				unset($_SESSION['ts']);
				exit;
		}	
}
$rs=mysqli_query($con,"select * from mst_question where test_id=$tid") or die(mysqli_error());
if($_SESSION['qn']>mysqli_num_rows($rs)-1)
{
unset($_SESSION['qn']);
echo "<h1 class='error_head'>Some Error  Occured</h1>";
session_destroy();
echo "<h1 class='error_head'>Please <a href=index.php> Start Again</a></h1>";

exit;
}
mysqli_data_seek($rs,$_SESSION['qn']);
$row= mysqli_fetch_row($rs);
echo "<form name=myfm method=post action=exam_start.php id='form1'>";
$n=$_SESSION['qn']+1;
echo "<label class='que_title'>Que ".  $n .": $row[2]</label>";
echo "<ul>";
echo "<li class='option_list'><input type='radio' name='ans' value='1'>$row[3]</li>";
echo "<li class='option_list'><input type='radio' name='ans' value='2'>$row[4]</li>";
echo "<li class='option_list'><input type='radio' name='ans' value='3'>$row[5]</li>";
echo "<li class='option_list'><input type='radio' name='ans' value='4'>$row[6]</li>";
echo "</ul>";

if($_SESSION['qn']<mysqli_num_rows($rs)-1)
echo "<tr><td><input type=submit name=submit value='Next Question' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent'></form>";
else
echo "<tr><td><input type=submit name=submit value='Get Result' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent'></form>";
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
//						document.myfm.submit();
						window.location.href = 'exam_result.php'
					}
				 setTimeout("countdown()",1000);
				 }
				 countdown();
</script>
  </body>
</html>