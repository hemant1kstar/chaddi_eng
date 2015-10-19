<?php
            include("../database/connection.php");
  
     if(isset($_POST['daily_harbara_info']))
     {
         $entry_date=$_POST['entry_date'];
         $entry_date1= new DateTime($entry_date);
         $entry_date1=date_format ($entry_date1, 'Y-m-d');
         $t_student=$_POST['total_student'];
         $prev_month_remain_harbara=$_POST['prev_month_remain_harbara'];
         $harbara_got=$_POST['harbara_got'];
         $total_harbara=$_POST['total_harbara'];
         $total_plates=$_POST['total_plates'];
         $cooked_harbara=$_POST['cooked_harbara'];
         $remaining_harbara=$_POST['remaining_harbara'];
         $student_category1=$_POST['student_category1'];
         $per_student_material=$_POST['per_student_material'];
         $per_student_expense=$_POST['per_student_expense'];
         $total_expense=$_POST['total_expense'];
         
         mysqli_query ($con,"set character_set_results='utf8'"); 
         
 mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='0',`last_month_stock`='$remaining_harbara' WHERE `food_name`='harbara'");
         
      if(mysqli_query($con,"INSERT INTO harbara_report(date, total_student,prev_harbara_remain, current_month_harbara_got, total_harbara, total_plates, harbara_cooked, monthEnd_remaining_harbara,class_category,food_per_student,money_spent_per_student,total_expense)values (N'$entry_date1',N'$t_student',N'$prev_month_remain_harbara',N'$harbara_got',N'$total_harbara',N'$total_plates',N'$cooked_harbara',N'$remaining_harbara','$student_category1','$per_student_material','$per_student_expense','$total_expense')"))
      {
 echo "<script>
         window.location.href='harbara_report.php?success1=success';
         </script>";
      }else{
   echo "error in submitting data" ;
      }
     }
     ?>