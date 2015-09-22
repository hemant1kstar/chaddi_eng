<?php
     session_start();  //Session start
include("../database/connection.php");
if(isset($_POST['submit_teacher']))
{
     $username=test_input($_POST['teacher_user']);
     $password=test_input($_POST['teacher_pass']);
               mysqli_query ($con,"set character_set_results='utf8'");
                $result = mysqli_query($con,"SELECT * FROM teacher_profile");
                while($row = mysqli_fetch_array($result))
             {

                      $teacher_username=$row['username'];  
                      $teacher_password=$row['password']; 
   if($username==$teacher_username && $password==$teacher_password)
        {
         $_SESSION['LoggedIn_teacher']='teacher_logged_in';     
         $_SESSION['user_name']=$row['teacher_name'];
         $_SESSION['teacher_id']=$row['teacher_id'];
         $url="Location:../teacher_profile/index.php" ;
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
  if($username !=$teacher_username && $password !=v)
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