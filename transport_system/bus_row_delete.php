
<?php
if(isset($_GET['row_id1']))
{
   include("db/connection.php");

$id1=$_GET['row_id1'];
//     echo "$link";
$query3=mysqli_query($con,"delete from bus_system where bus_id='$id1'");
if($query3)
{
        header("Location:index.php");
}else{
     echo "error in deleting row";
}
}
?>