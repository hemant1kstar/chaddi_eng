<?php
            include("../database/connection.php");

     if(isset($_POST['daily_halad_info']))
     {
         $entry_date=$_POST['entry_date'];
         $entry_date1= new DateTime($entry_date);
         $entry_date1=date_format ($entry_date1, 'Y-m-d');
         $t_student=$_POST['total_student'];
         $prev_month_remain_halad=$_POST['prev_month_remain_halad'];
         $halad_got=$_POST['halad_got'];
         $total_halad=$_POST['total_halad'];
         $total_plates=$_POST['total_plates'];
         $cooked_halad=$_POST['cooked_halad'];
         $remaining_halad=$_POST['remaining_halad'];
         $student_category1=$_POST['student_category1'];
         $per_student_material=$_POST['per_student_material'];
         $per_student_expense=$_POST['per_student_expense'];
         $total_expense=$_POST['total_expense'];
         
         mysqli_query ($con,"set character_set_results='utf8'");    
         
mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='0',`last_month_stock`='$remaining_halad' WHERE `food_name`='halad'");
         
      if(mysqli_query($con,"INSERT INTO halad_report(date, total_student,prev_halad_remain, current_month_halad_got, total_halad, total_plates, halad_cooked, monthEnd_remaining_halad,class_category,food_per_student,money_spent_per_student,total_expense)values (N'$entry_date1',N'$t_student',N'$prev_month_remain_halad',N'$halad_got',N'$total_halad',N'$total_plates',N'$cooked_halad',N'$remaining_halad','$student_category1','$per_student_material','$per_student_expense','$total_expense')"))
      {
   echo "<script>
         window.location.href='halad_report.php?success1=success';
         </script>";
      }else{
echo "error in submitting data" ;
      }
     }
     ?>