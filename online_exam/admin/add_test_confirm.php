<?php
if(isset($_POST['add_test']))
{
  include("../connection.php");
  $subject_id=$_POST['subject_id'];
  $test_name=$_POST['test_name'];
  $sql="insert into mst_test(sub_id,test_name)values('$subject_id','$test_name')";
  if(mysqli_query($con,$sql))
  {
            echo "<script>
                   window.location ='add_test.php?success_info=test added succesfully';
                  </script>";
  }else{
    echo "Error in adding subject";
  }
}

?>