<?php
           include("../database/connection.php");
    
     if(isset($_POST['daily_vatana_info']))
     {
         $entry_date=$_POST['entry_date'];
         $entry_date1= new DateTime($entry_date);
         $entry_date1=date_format ($entry_date1, 'Y-m-d');
         $t_student=$_POST['total_student'];
         $prev_month_remain_vatana=$_POST['prev_month_remain_vatana'];
         $vatana_got=$_POST['vatana_got'];
         $total_vatana=$_POST['total_vatana'];
         $total_plates=$_POST['total_plates'];
         $cooked_vatana=$_POST['cooked_vatana'];
         $remaining_vatana=$_POST['remaining_vatana'];
         $student_category1=$_POST['student_category1'];
         $per_student_material=$_POST['per_student_material'];
         $per_student_expense=$_POST['per_student_expense'];
         $total_expense=$_POST['total_expense'];
         
         mysqli_query ($con,"set character_set_results='utf8'");    
         
         
mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='0',`last_month_stock`='$remaining_vatana' WHERE `food_name`='vatana'");
         
      if(mysqli_query($con,"INSERT INTO vatana_report(date, total_student,prev_vatana_remain, current_month_vatana_got, total_vatana, total_plates, vatana_cooked, monthEnd_remaining_vatana,class_category,food_per_student,money_spent_per_student,total_expense)values (N'$entry_date1',N'$t_student',N'$prev_month_remain_vatana',N'$vatana_got',N'$total_vatana',N'$total_plates',N'$cooked_vatana',N'$remaining_vatana','$student_category1','$per_student_material','$per_student_expense','$total_expense')"))
      {
  echo "<script>
         window.location.href='vatana_report.php?success1=success';
         </script>";
      }else{
echo "error in submitting data" ;
      }
     }
     ?>