
<?php
if(isset($_GET['student_id1']))
{
 include("../database/connection.php");

$id1=$_GET['student_id1'];
//     echo "$link";
$query3=mysqli_query($con,"delete from student_bus_status where student_id='$id1'");
if($query3)
{
        header("Location:student_bus_status.php");
}else{
     echo "error in deleting student Bus";
}
}
?>