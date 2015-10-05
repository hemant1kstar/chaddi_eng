<?php
session_start();
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
?>