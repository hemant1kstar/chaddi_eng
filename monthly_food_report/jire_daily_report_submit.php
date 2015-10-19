 <?php
            include("../database/connection.php");

     if(isset($_POST['daily_jire_info']))
     {
         $entry_date=$_POST['entry_date'];
         $entry_date1= new DateTime($entry_date);
         $entry_date1=date_format ($entry_date1, 'Y-m-d');
         $t_student=$_POST['total_student'];
         $prev_month_remain_jire=$_POST['prev_month_remain_jire'];
         $jire_got=$_POST['jire_got'];
         $total_jire=$_POST['total_jire'];
         $total_plates=$_POST['total_plates'];
         $cooked_jire=$_POST['cooked_jire'];
         $remaining_jire=$_POST['remaining_jire'];
         $student_category1=$_POST['student_category1'];
         $per_student_material=$_POST['per_student_material'];
         $per_student_expense=$_POST['per_student_expense'];
         $total_expense=$_POST['total_expense'];
         
         mysqli_query ($con,"set character_set_results='utf8'");  
           
 mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='0',`last_month_stock`='$remaining_jire' WHERE `food_name`='jire'");
           
      if(mysqli_query($con,"INSERT INTO jire_report(date, total_student,prev_jire_remain, current_month_jire_got, total_jire, total_plates, jire_cooked, monthEnd_remaining_jire,class_category,food_per_student,money_spent_per_student,total_expense)values (N'$entry_date1',N'$t_student',N'$prev_month_remain_jire',N'$jire_got',N'$total_jire',N'$total_plates',N'$cooked_jire',N'$remaining_jire','$student_category1','$per_student_material','$per_student_expense','$total_expense')"))
      {
echo "<script>
         window.location.href='jire_report.php?success1=success';
         </script>";

      }else{
echo "error in submitting data" ;
      }
     }
     ?>