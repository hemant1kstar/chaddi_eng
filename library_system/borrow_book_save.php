<?php
 	include("db/connection.php");
	if (isset($_POST['borrow_book_submit'])){
		
	$book_id=$_POST['book_selector'];
 	$member_id  = $_POST['mem_id'];
	$due_date  = $_POST['due_date'];
	$fine=0;
		
//		echo "$book_id<br/>";
		echo "$member_id<br/>";
		echo "$due_date<br/>";



	if ($book_id == '' ){ 
	header("location: borrow_book.php");
	?>
	

	<?php }else{
	


	mysqli_query($con,"insert into borrow (member_id,date_borrow,due_date,fine) values ('$member_id',NOW(),'$due_date','$fine')")or die(mysql_error());
	$query = mysqli_query($con,"select * from borrow order by borrow_id DESC")or die(mysql_error());
	$row = mysqli_fetch_array($query);
	$borrow_id  = $row['borrow_id']; 
	

$N = count($book_id);
for($i=0; $i < $N; $i++)
{
	 mysqli_query($con,"insert borrowdetails (book_id,borrow_id,borrow_status) values('$book_id[$i]','$borrow_id','pending')")or die(mysql_error());

}
header("location: borrow_book.php");
} 
		
}

?>
	
	

	
	