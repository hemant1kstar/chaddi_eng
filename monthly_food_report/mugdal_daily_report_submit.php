<?php

     include("../database/connection.php");
     if(isset($_POST['daily_mugdal_info']))
     {
         $entry_date=$_POST['entry_date'];
         $entry_date1= new DateTime($entry_date);
         $entry_date1=date_format ($entry_date1, 'Y-m-d');
         $t_student=$_POST['total_student'];
         $prev_month_remain_mugdal=$_POST['prev_month_remain_mugdal'];
         $mugdal_got=$_POST['mugdal_got'];
         $total_mugdal=$_POST['total_mugdal'];
         $total_plates=$_POST['total_plates'];
         $cooked_mugdal=$_POST['cooked_mugdal'];
         $remaining_mugdal=$_POST['remaining_mugdal'];
          
         $student_category1=$_POST['student_category1'];
         $per_student_material=$_POST['per_student_material'];
         $per_student_expense=$_POST['per_student_expense'];
         $total_expense=$_POST['total_expense'];
          
         mysqli_query ($con,"set character_set_results='utf8'");    
          
           mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='0',`last_month_stock`='$remaining_mugdal' WHERE `food_name`='mugdal'");
          
          
      if(mysqli_query($con,"INSERT INTO mugdal_report(date, total_student,prev_mugdal_remain, current_month_mugdal_got, total_mugdal, total_plates, mugdal_cooked, monthEnd_remaining_mugdal,class_category,food_per_student,money_spent_per_student,total_expense)values (N'$entry_date1',N'$t_student',N'$prev_month_remain_mugdal',N'$mugdal_got',N'$total_mugdal',N'$total_plates',N'$cooked_mugdal',N'$remaining_mugdal','$student_category1','$per_student_material','$per_student_expense','$total_expense')"))
      {
         echo "<script>
         window.location.href='mugdal_report.php?success1=success';
         </script>";
      }else{
       echo "error in submitting data" ;
      }
     }
     ?>