<?php

include("../database/connection.php");
if(isset($_POST['edit_book_submit']))
{
    $b_id=$_GET['book_id'];
    $b_title=$_POST['b_title'];
    $b_category=$_POST['b_category'];
    $b_author=$_POST['b_author'];
    $b_copies=$_POST['b_copies'];
    $b_publication=$_POST['b_publication'];
    $b_publisher_name=$_POST['b_publisher_name'];
    $b_isbn=$_POST['b_isbn'];
    $b_copyright_year=$_POST['b_copyright_year'];
    $b_status=$_POST['b_status'];
    
if(mysqli_query($con,"update book set book_title=N'$b_title',category_id='$b_category',author=N'$b_author'
,book_copies = '$b_copies',book_pub =N'$b_publication',publisher_name = N'$b_publisher_name',isbn = N'$b_isbn',copyright_year='$b_copyright_year',status=N'$b_status' where book_id='$b_id'")or die(mysqli_error()))
{											
   header('location:index.php');
}else{
echo "query unsucessful";
}
    
}
?>