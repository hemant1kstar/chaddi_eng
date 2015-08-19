  <?php

if (isset($_GET['q'])) {  
      
        include("database/connection.php");
        $table_name=$_GET['q'];
      $query=mysqli_query($con,"DROP TABLE `$table_name`");
if($query)
{
        header("Location:index.php");
}else{
     echo "error in deleting table";
}
}
     
?>  