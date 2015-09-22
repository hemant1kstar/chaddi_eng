<?php 
include("../database/connection.php");
if (isset($_POST['add_book_submit'])){
$book_title=$_POST['b_title'];
$category_id=$_POST['b_category'];
$author=$_POST['b_author'];
$book_copies=$_POST['b_copies'];
$book_pub=$_POST['b_publication'];
$publisher_name=$_POST['b_publisher_name'];
$isbn=$_POST['b_isbn'];
$copyright_year=$_POST['b_copyright_year'];
$status=$_POST['b_status'];
				
if(mysqli_query($con,"insert into book (book_title,category_id,author,book_copies,book_pub,publisher_name,isbn,copyright_year,date_added,status)
 values(N'$book_title','$category_id',N'$author','$book_copies',N'$book_pub',N'$publisher_name',N'$isbn','$copyright_year',NOW(),'$status')")or die(mysql_error()))
{
//  header("location:index.php?success1='success'");
     echo "<script>
          window.location = 'index.php?success1=success';
          </script>";
}else{
  echo "query unsuccessful";
}
 
}
?>