<?php
            include("../database/connection.php");

     if(isset($_POST['daily_mohari_info']))
     {
         $entry_date=$_POST['entry_date'];
         $entry_date1= new DateTime($entry_date);
         $entry_date1=date_format ($entry_date1, 'Y-m-d');
         $t_student=$_POST['total_student'];
         $prev_month_remain_mohari=$_POST['prev_month_remain_mohari'];
         $mohari_got=$_POST['mohari_got'];
         $total_mohari=$_POST['total_mohari'];
         $total_plates=$_POST['total_plates'];
         $cooked_mohari=$_POST['cooked_mohari'];
         $remaining_mohari=$_POST['remaining_mohari'];
         $student_category1=$_POST['student_category1'];
         $per_student_material=$_POST['per_student_material'];
         $per_student_expense=$_POST['per_student_expense'];
         $total_expense=$_POST['total_expense'];
         
         mysqli_query ($con,"set character_set_results='utf8'");  
         
 mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='0',`last_month_stock`='$remaining_mohari' WHERE `food_name`='mohari'");
         
      if(mysqli_query($con,"INSERT INTO mohari_report(date, total_student,prev_mohari_remain, current_month_mohari_got, total_mohari, total_plates, mohari_cooked, monthEnd_remaining_mohari,class_category,food_per_student,money_spent_per_student,total_expense)values (N'$entry_date1',N'$t_student',N'$prev_month_remain_mohari',N'$mohari_got',N'$total_mohari',N'$total_plates',N'$cooked_mohari',N'$remaining_mohari','$student_category1','$per_student_material','$per_student_expense','$total_expense')"))
      {
echo "<script>
         window.location.href='mohari_report.php?success1=success';
         </script>";
      }else{
echo "error in submitting data" ;
      }
     }
     ?>