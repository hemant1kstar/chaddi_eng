<?php
            include("../database/connection.php");

     if(isset($_POST['daily_chavli_info']))
     {
         $entry_date=$_POST['entry_date'];
         $entry_date1= new DateTime($entry_date);
         $entry_date1=date_format ($entry_date1, 'Y-m-d');
         $t_student=$_POST['total_student'];
         $prev_month_remain_chavli=$_POST['prev_month_remain_chavli'];
         $chavli_got=$_POST['chavli_got'];
         $total_chavli=$_POST['total_chavli'];
         $total_plates=$_POST['total_plates'];
         $cooked_chavli=$_POST['cooked_chavli'];
         $remaining_chavli=$_POST['remaining_chavli'];
        $student_category1=$_POST['student_category1'];
         $per_student_material=$_POST['per_student_material'];
         $per_student_expense=$_POST['per_student_expense'];
         $total_expense=$_POST['total_expense'];
         
         mysqli_query ($con,"set character_set_results='utf8'"); 
         
    mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='0',`last_month_stock`='$remaining_chavli' WHERE `food_name`='chavli'");
         
      if(mysqli_query($con,"INSERT INTO chavli_report(date, total_student,prev_chavli_remain, current_month_chavli_got, total_chavli, total_plates, chavli_cooked, monthEnd_remaining_chavli,class_category,food_per_student,money_spent_per_student,total_expense)values (N'$entry_date1',N'$t_student',N'$prev_month_remain_chavli',N'$chavli_got',N'$total_chavli',N'$total_plates',N'$cooked_chavli',N'$remaining_chavli','$student_category1','$per_student_material','$per_student_expense','$total_expense')"))
      {
 echo "<script>
         window.location.href='chavli_report.php?success1=success';
         </script>";
      }else{
echo "error in submitting data" ;
      }
     }
     ?>