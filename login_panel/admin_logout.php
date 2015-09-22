<?php
$success="";

           @ob_start();
           session_start();    
unset($_SESSION['LoggedIn_user']);
unset($_SESSION['user_name']);
     $success=1;
?>

<?php
  if($success==0)
    {
        echo "<script>
        window.location ='login.php?problem=Please Login';
        </script>";
    }else{
           echo "<script>
           window.location ='login.php?problem=You have successfully Logged Out';
           </script>";
        }
?>

