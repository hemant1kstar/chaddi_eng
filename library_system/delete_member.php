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
if(isset($_GET['r_id']))
{
$id=$_GET['r_id'];
mysqli_query($con,"delete from member where member_id='$id'") or die(mysqli_error());
//header('location:member.php');
   echo "<script>
          window.location = 'member.php';
          </script>";
}
?>