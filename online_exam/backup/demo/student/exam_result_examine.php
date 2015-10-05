<?php
session_start();
if(isset($_POST['submit_exam']))
{
	$que_no=$_POST['$que_no'];
	echo "$que_no";
}
?>