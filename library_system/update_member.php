<?php
include("../database/connection.php");
if(isset($_POST['edit_member_submit']))
{
$mem_id=$_GET['mem_id'];
$firstname=$_POST['m_firstname'];
$gender=$_POST['m_gender'];
$address=$_POST['m_address'];
$contact=$_POST['m_contact'];
$type=$_POST['m_type'];
$year_level=$_POST['m_year_level'];
$status=$_POST['m_status'];

if(mysqli_query($con,"update member set name=N'$firstname',gender='$gender',address = N'$address',contact = '$contact',type = '$type',year_level = '$year_level',status = '$status' where member_id='$mem_id'")or die(mysqli_error()))
{											
//   header('location:member.php');
    echo "<script>
         window.location = 'member.php';
         </script>";
}else{
echo "query unsucessful";
}
    
}
?>