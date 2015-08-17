<?php
$success="";

           @ob_start();
           session_start();    
unset($_SESSION['LoggedIn']);
unset($_SESSION['teacher_id']);
     $success=1;
?>

<?php
  if($success==0)
    {
        echo "<script>
        window.location ='login.php?q=Please Login';
        </script>";
    }else{
           echo "<script>
           window.location ='login.php?q=You have successfully Logged Out';
           </script>";
        }
?>

