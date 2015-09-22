<?php
     session_start();  //Session start
include("../database/connection.php");
if(isset($_POST['submit_user']))
{
     $username=test_input($_POST['admin_user']);
     $password=test_input($_POST['admin_pass']);

                $result = mysqli_query($con,"SELECT * FROM admin");
                while($row = mysqli_fetch_array($result))
             {

                      $admin_username=$row['username'];  
                      $admin_password=$row['password']; 
   if($username==$admin_username && $password==$admin_password)
        {
         $_SESSION['LoggedIn_user']='admin_logged_in';     
         $_SESSION['user_name']=$row['admin_name'];
         $url="Location:../index.php" ;
         header($url);   
        exit;
        }    
   $problem="";
 if($username==$admin_username && $password !=$admin_password)
     {
         $problem='Invalid Password';
    }
  if($username !=$admin_username && $password==$admin_password)
   {
    $problem="Invalid Username";
    }
  if($username !=$admin_username && $password !=$admin_password)
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