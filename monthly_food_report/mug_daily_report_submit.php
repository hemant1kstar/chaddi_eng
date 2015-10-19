<?php
            include("../database/connection.php");

     if(isset($_POST['daily_mug_info']))
     {
         $entry_date=$_POST['entry_date'];
         $entry_date1= new DateTime($entry_date);
         $entry_date1=date_format ($entry_date1, 'Y-m-d');
         $t_student=$_POST['total_student'];
         $prev_month_remain_mug=$_POST['prev_month_remain_mug'];
         $mug_got=$_POST['mug_got'];
         $total_mug=$_POST['total_mug'];
         $total_plates=$_POST['total_plates'];
         $cooked_mug=$_POST['cooked_mug'];
         $remaining_mug=$_POST['remaining_mug'];
         $student_category1=$_POST['student_category1'];
         $per_student_material=$_POST['per_student_material'];
         $per_student_expense=$_POST['per_student_expense'];
         $total_expense=$_POST['total_expense'];
         
         
     mysqli_query ($con,"set character_set_results='utf8'");    
                  
    mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='0',`last_month_stock`='$remaining_mug' WHERE `food_name`='mug'");
         
      if(mysqli_query($con,"INSERT INTO mug_report(date, total_student,prev_mug_remain, current_month_mug_got, total_mug, total_plates, mug_cooked, monthEnd_remaining_mug,class_category,food_per_student,money_spent_per_student,total_expense)values (N'$entry_date1',N'$t_student',N'$prev_month_remain_mug',N'$mug_got',N'$total_mug',N'$total_plates',N'$cooked_mug',N'$remaining_mug','$student_category1','$per_student_material','$per_student_expense','$total_expense')"))
      {
 echo "<script>
         window.location.href='mug_report.php?success1=success';
         </script>";
      }else{
  echo "error in submitting data" ;
      }
     }
     ?>