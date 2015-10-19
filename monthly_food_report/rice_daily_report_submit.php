<?php
include("../database/connection.php");

     if(isset($_POST['daily_rice_info']))
     {
         $entry_date=$_POST['entry_date'];
         $entry_date1= new DateTime($entry_date);
         $entry_date1=date_format ($entry_date1, 'Y-m-d');
         $t_student=$_POST['total_student'];
         $prev_month_remain_rice=$_POST['prev_month_remain_rice'];
         $rice_got=$_POST['rice_got'];
         $total_rice=$_POST['total_rice'];
         $total_plates=$_POST['total_plates'];
         $cooked_rice=$_POST['cooked_rice'];
         $remaining_rice=$_POST['remaining_rice'];
         $student_category1=$_POST['student_category1'];
         $per_student_material=$_POST['per_student_material'];
         $per_student_expense=$_POST['per_student_expense'];
         $total_expense=$_POST['total_expense'];
         
         mysqli_query ($con,"set character_set_results='utf8'");     
         
    mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='0',`last_month_stock`='$remaining_rice' WHERE `food_name`='rice'");
         
         
      if(mysqli_query($con,"INSERT INTO rice_report(date,total_student,prev_rice_remain,current_month_rice_got,total_rice,total_plates,cooked_rice,monthEnd_remaining_rice,class_category,food_per_student,money_spent_per_student,total_expense)
      values  (N'$entry_date1',N'$t_student',N'$prev_month_remain_rice',N'$rice_got',N'$total_rice',N'$total_plates',N'$cooked_rice',N'$remaining_rice','$student_category1','$per_student_material','$per_student_expense','$total_expense')"))
      {
          echo "<script>
         window.location.href='index.php?success1=success';
         </script>";

      }else{
         echo "error in submitting data" ;
      }
     }
     ?>