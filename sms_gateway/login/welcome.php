<?php
     session_start();  //Session start
include("../../database/connection.php");
if(isset($_POST['submitteacher']))
{
     $username=test_input($_POST['teachuser']);
     $password=test_input($_POST['teachpass']);

   if($username=='sms' && $password=='gateway@2015')
        {
         $_SESSION['LoggedIn_SMS']='admin_logged_in';     
         $url="Location:../index.php" ;
         header($url);   
        exit;
        }    
   $problem="";
 if($username=='sms' && $password !='gateway@2015')
     {
         $problem='Invalid Password';
    }
  if($username !='sms' && $password=='gateway@2015')
   {
    $problem="Invalid Username";
    }
  if($username !='sms' && $password !='gateway@2015')
   {
    $problem="Invalid Username and Password";
  }
                 
    $url="Location:login.php?login_problem=$problem" ;
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