<?php
        include("../database/connection.php");
 
     if(isset($_POST['daily_sugar_info']))
     {
         $entry_date=$_POST['entry_date'];
         $entry_date1= new DateTime($entry_date);
         $entry_date1=date_format ($entry_date1, 'Y-m-d');
         $t_student=$_POST['total_student'];
         $prev_month_remain_sugar=$_POST['prev_month_remain_sugar'];
         $sugar_got=$_POST['sugar_got'];
         $total_sugar=$_POST['total_sugar'];
         $total_plates=$_POST['total_plates'];
         $cooked_sugar=$_POST['cooked_sugar'];
         $remaining_sugar=$_POST['remaining_sugar'];
         $student_category1=$_POST['student_category1'];
         $per_student_material=$_POST['per_student_material'];
         $per_student_expense=$_POST['per_student_expense'];
         $total_expense=$_POST['total_expense'];
             
         mysqli_query ($con,"set character_set_results='utf8'");      
             
 mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='0',`last_month_stock`='$remaining_sugar' WHERE `food_name`='sugar'");
             
      if(mysqli_query($con,"INSERT INTO sugar_report(date, total_student,prev_sugar_remain, current_month_sugar_got, total_sugar, total_plates, sugar_cooked, monthEnd_remaining_sugar,class_category,food_per_student,money_spent_per_student,total_expense)values (N'$entry_date1',N'$t_student',N'$prev_month_remain_sugar',N'$sugar_got',N'$total_sugar',N'$total_plates',N'$cooked_sugar',N'$remaining_sugar','$student_category1','$per_student_material','$per_student_expense','$total_expense')"))
      {
         echo "<script>
         window.location.href='sugar_report.php?success1=success';
         </script>";

      }else{
 echo "error in submitting data" ;
      }
     }
     ?>