<?php
$success="";

           @ob_start();
           session_start();    
unset($_SESSION['LoggedIn_SMS']);
     $success=1;
?>

<?php
  if($success==0)
    {
        echo "<script>
        window.location ='login.php?login_problem=Please Login';
        </script>";
    }else{
           echo "<script>
           window.location ='login.php?login_problem=You have successfully Logged Out';
           </script>";
        }
?>

