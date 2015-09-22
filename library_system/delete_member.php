<?php
include("../database/connection.php");
if(isset($_GET['r_id']))
{
$id=$_GET['r_id'];
mysqli_query($con,"delete from member where member_id='$id'") or die(mysqli_error());
header('location:member.php');
}
?>