<?php

    include("../database/connection.php");
     if(isset($_POST['daily_turdal_info']))
     {
         $entry_date=$_POST['entry_date'];
         $entry_date1= new DateTime($entry_date);
         $entry_date1=date_format ($entry_date1, 'Y-m-d');
         $t_student=$_POST['total_student'];
         $prev_month_remain_turdal=$_POST['prev_month_remain_turdal'];
         $turdal_got=$_POST['turdal_got'];
         $total_turdal=$_POST['total_turdal'];
         $total_plates=$_POST['total_plates'];
         $cooked_turdal=$_POST['cooked_turdal'];
         $remaining_turdal=$_POST['remaining_turdal'];
         $student_category1=$_POST['student_category1'];
         $per_student_material=$_POST['per_student_material'];
         $per_student_expense=$_POST['per_student_expense'];
         $total_expense=$_POST['total_expense'];
         
         mysqli_query ($con,"set character_set_results='utf8'");   
         mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='0',`last_month_stock`='$remaining_turdal' WHERE `food_name`='turdal'");
      if(mysqli_query($con,"INSERT INTO turdal_report(date, total_student,prev_turdal_remain, current_month_turdal_got, total_turdal, total_plates, turdal_cooked, monthEnd_remaining_turdal,class_category,food_per_student,money_spent_per_student,total_expense)values (N'$entry_date1',N'$t_student',N'$prev_month_remain_turdal',N'$turdal_got',N'$total_turdal',N'$total_plates',N'$cooked_turdal',N'$remaining_turdal','$student_category1','$per_student_material','$per_student_expense','$total_expense')"))
      {
          echo "<script>
         window.location.href='turdal_report.php?success1=success';
         </script>";

      }else{
            echo "error in submitting data" ;
      }
     }
     ?>