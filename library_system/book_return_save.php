<?php 
include("db/connection.php");

$id=$_GET['id'];
$book_id = $_GET['b_id'];
$fine=$_GET['fine'];

echo "$id";
echo "$book_id";

if(mysqli_query($con,"update borrow LEFT JOIN borrowdetails on borrow.borrow_id = borrowdetails.borrow_id   set borrow_status='returned',date_return= CURDATE(),fine=$fine where borrow.borrow_id='$id' and borrowdetails.book_id = '$book_id'"))
{
 header('location:view_borrow_books.php');
}else{
    echo "query unsucessful";
}


?>	