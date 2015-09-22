
<?php
if(isset($_GET['row_id']))
{
   include("database/connection.php");
        if (isset($_GET['t_name'])) {  //get value as table name from url
        $link=$_GET['t_name'];
        $result=mysqli_query($con,"SELECT * FROM $link");//select value from perticular table
        $query="DESCRIBE $link"; //build query for get column names from table
        $results=mysqli_query($con,$query) or die('Query error:'.mysql_error());
        }
$id=$_GET['row_id'];
//     echo "$link";
$query3=mysqli_query($con,"delete from $link where id='$id'");
if($query3)
{
//        header("Location:table_display.php?q=$link");
      echo "<script>
            window.location = 'table_display.php?q=$link';
            </script>";
}else{
     echo "error in deleting row";
}
}
?>