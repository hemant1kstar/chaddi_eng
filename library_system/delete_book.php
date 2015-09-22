
<?php
include("../database/connection.php");
$id=$_GET['b_id'];
mysqli_query($con,"update book set status = 'Archive' where book_id='$id'")or die(mysql_error());
header('location:index.php');
?>