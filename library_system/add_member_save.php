<?php 
include("db/connection.php");
if (isset($_POST['add_member_submit'])){
$firstname=$_POST['first_name'];
$lastname=$_POST['last_name'];
$gender=$_POST['gender'];
$address=$_POST['address1'];
$contact=$_POST['contact'];
$type=$_POST['mem_type'];
$year_level=$_POST['year_level'];
$status=$_POST['status'];
	
if(mysqli_query($con,"insert into member(name,gender,address,contact,type,year_level,status) values(N'$firstname','$gender',N'$address','$contact','$type','$year_level','$status')")or die(mysqli_error()))
{
    header('location:member.php');
}else{
    echo "query unsuccessful";
}

}
?>	