<?php
         session_start();
         if(!$_SESSION['LoggedIn_user'])
           {
                 header("location:../login_panel/login.php?problem='Not Logged In'");
                 exit;
         }
?>
<?php
include("../database/connection.php");
$id=$_GET['b_id'];
mysqli_query($con,"update book set status = 'Archive' where book_id='$id'")or die(mysql_error());
//header('location:index.php');
   echo "<script>
          window.location = 'index.php';
          </script>";
?>