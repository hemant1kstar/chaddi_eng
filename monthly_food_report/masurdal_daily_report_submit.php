<?php
    
include("../database/connection.php");
     if(isset($_POST['daily_masurdal_info']))
     {
         $entry_date=$_POST['entry_date'];
         $entry_date1= new DateTime($entry_date);
         $entry_date1=date_format ($entry_date1, 'Y-m-d');
         $t_student=$_POST['total_student'];
         $prev_month_remain_masurdal=$_POST['prev_month_remain_masurdal'];
         $masurdal_got=$_POST['masurdal_got'];
         $total_masurdal=$_POST['total_masurdal'];
         $total_plates=$_POST['total_plates'];
         $cooked_masurdal=$_POST['cooked_masurdal'];
         $remaining_masurdal=$_POST['remaining_masurdal'];
         $student_category1=$_POST['student_category1'];
         $per_student_material=$_POST['per_student_material'];
         $per_student_expense=$_POST['per_student_expense'];
         $total_expense=$_POST['total_expense'];
          
         mysqli_query ($con,"set character_set_results='utf8'");     
              mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='0',`last_month_stock`='$remaining_masurdal' WHERE `food_name`='masurdal'");
          
      if(mysqli_query($con,"INSERT INTO masurdal_report(date, total_student,prev_masurdal_remain, current_month_masurdal_got, total_masurdal, total_plates, masurdal_cooked, monthEnd_remaining_masurdal,class_category,food_per_student,money_spent_per_student,total_expense)values (N'$entry_date1',N'$t_student',N'$prev_month_remain_masurdal',N'$masurdal_got',N'$total_masurdal',N'$total_plates',N'$cooked_masurdal',N'$remaining_masurdal','$student_category1','$per_student_material','$per_student_expense','$total_expense')"))
      {
         echo "<script>
         window.location.href='masurdal_report.php?success1=success';
         </script>";
      }else{
           echo "error in submitting data" ;
      }
     }
     ?>