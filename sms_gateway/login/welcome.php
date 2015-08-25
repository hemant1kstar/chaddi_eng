<?php
     session_start();  //Session start
include("../../database/connection.php");
if(isset($_POST['submitteacher']))
{
     $username=test_input($_POST['teachuser']);
     $password=test_input($_POST['teachpass']);

                $result = mysqli_query($con,"SELECT * FROM teacher_profile");
                while($row = mysqli_fetch_array($result))
             {

                      $teacher_username=$row['username'];  
                      $teacher_password=$row['password']; 
   if($username==$teacher_username && $password==$teacher_password)
        {
         $_SESSION['LoggedIn']='teacher_logged_in';     
         $_SESSION['teacher_id']=$row['teacher_id'];
         $url="Location:../index.php" ;
         header($url);   
        exit;
        }    
   $problem="";
 if($username==$teacher_username && $password !=$teacher_password)
     {
         $problem='Invalid Password';
    }
  if($username !=$teacher_username && $password==$teacher_password)
   {
    $problem="Invalid Username";
    }
  if($username !=$teacher_username && $password !=$teacher_password)
   {
    $problem="Invalid Username and Password";
  }
                 
   }
    $url="Location:login.php?problem=$problem" ;
    header($url);    
    exit; 
     }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>