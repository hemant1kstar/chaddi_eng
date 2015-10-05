<?php
        include("../../database/connection.php");

if(isset($_POST['submit_student_grade']))
     {

        $reg_no=$_POST['reg_no'];
        $exam_seat_no=$_POST['exam_seat_no'];
        $class10_percentage=$_POST['class10_percentage'];
        $class9_percentage=$_POST['class9_percentage'];
        $class8_grade=$_POST['class8_grade'];
        $class7_grade=$_POST['class7_grade'];
        $class6_grade=$_POST['class6_grade'];
        $class5_grade=$_POST['class5_grade'];
        $class4_grade=$_POST['class4_grade'];
        $class3_grade=$_POST['class3_grade'];
        $class2_grade=$_POST['class2_grade'];
        $class1_grade=$_POST['class1_grade'];

      

      
      
      mysqli_query ($con,"set character_set_results='utf8'");      
  if(mysqli_query($con,"UPDATE master SET   exam_seat_no=N'$exam_seat_no',10_percentage=N'$class10_percentage',9_percentage=N'$class9_percentage',8_grade=N'$class8_grade',7_grade=N'$class7_grade',6_grade=N'$class6_grade',5_grade=N'$class5_grade',4_grade=N'$class4_grade',3_grade=N'$class3_grade',2_grade=N'$class2_grade',1_grade=N'$class1_grade' WHERE reg_no='$reg_no'"))
      {
 echo "<script type='text/javascript'>
window.location.href = '../student_grade_display.php';
                </script>" ;

      }else{
        echo "error in script";
      }
     }
    ?>