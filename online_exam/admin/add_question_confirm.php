<?php
  if(isset($_POST['add_question']))
  {
    include("../../database/connection.php");
    $test_id=$_POST['test_id'];
    $question_name=$_POST['question_name'];
    $option1=$_POST['option1'];
    $option2=$_POST['option2'];
    $option3=$_POST['option3'];
    $option4=$_POST['option4'];
    $correct_ans=$_POST['correct_ans'];
//    echo "$test_id";
    
      $sql="insert into mst_question(test_id,question,option1,option2,option3,option4,answer)values('$test_id','$question_name','$option1','$option2','$option3','$option4','$correct_ans')";
  if(mysqli_query($con,$sql))
  {
            echo "<script>
                   window.location ='add_questions.php?success_info=Question added succesfully';
                  </script>";
  }else{
    echo "Error in adding subject";
  }

  }
?>