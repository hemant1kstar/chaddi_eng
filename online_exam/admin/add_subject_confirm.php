<?php
if(isset($_POST['add_sub']))
{
include("../../database/connection.php");
  $sub_name=$_POST['subject_name'];
//  echo "$sub_name";
  $sql="insert into mst_subject(sub_name)values('$sub_name')";
  if(mysqli_query($con,$sql))
  {
            echo "<script>
                   window.location ='add_subject.php?success_info=subject added succesfully';
                  </script>";
  }else{
    echo "Error in adding subject";
  }
}
?>