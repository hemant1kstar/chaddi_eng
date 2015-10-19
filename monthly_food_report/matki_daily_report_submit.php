<?php

    include("../database/connection.php");

     if(isset($_POST['daily_matki_info']))
     {
         $entry_date=$_POST['entry_date'];
         $entry_date1= new DateTime($entry_date);
         $entry_date1=date_format ($entry_date1, 'Y-m-d');
         $t_student=$_POST['total_student'];
         $prev_month_remain_matki=$_POST['prev_month_remain_matki'];
         $matki_got=$_POST['matki_got'];
         $total_matki=$_POST['total_matki'];
         $total_plates=$_POST['total_plates'];
         $cooked_matki=$_POST['cooked_matki'];
         $remaining_matki=$_POST['remaining_matki'];
         $student_category1=$_POST['student_category1'];
         $per_student_material=$_POST['per_student_material'];
         $per_student_expense=$_POST['per_student_expense'];
         $total_expense=$_POST['total_expense'];
         
         mysqli_query ($con,"set character_set_results='utf8'");  
         
    mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='0',`last_month_stock`='$remaining_matki' WHERE `food_name`='matki'");
         
      if(mysqli_query($con,"INSERT INTO matki_report(date, total_student,prev_matki_remain, current_month_matki_got, total_matki, total_plates, matki_cooked, monthEnd_remaining_matki,class_category,food_per_student,money_spent_per_student,total_expense)values (N'$entry_date1',N'$t_student',N'$prev_month_remain_matki',N'$matki_got',N'$total_matki',N'$total_plates',N'$cooked_matki',N'$remaining_matki','$student_category1','$per_student_material','$per_student_expense','$total_expense')"))
      {
echo "<script>
         window.location.href='matki_report.php?success1=success';
         </script>";
      }else{
         echo "error in submitting data" ;
      }
     }
     ?>