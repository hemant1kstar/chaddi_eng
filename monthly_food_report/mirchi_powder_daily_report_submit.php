 <?php
            include("../database/connection.php");

     if(isset($_POST['daily_mirchi_powder_info']))
     {
         $entry_date=$_POST['entry_date'];
         $entry_date1= new DateTime($entry_date);
         $entry_date1=date_format ($entry_date1, 'Y-m-d');
         $t_student=$_POST['total_student'];
         $prev_month_remain_mirchi_powder=$_POST['prev_month_remain_mirchi_powder'];
         $mirchi_powder_got=$_POST['mirchi_powder_got'];
         $total_mirchi_powder=$_POST['total_mirchi_powder'];
         $total_plates=$_POST['total_plates'];
         $cooked_mirchi_powder=$_POST['cooked_mirchi_powder'];
         $remaining_mirchi_powder=$_POST['remaining_mirchi_powder'];
         $student_category1=$_POST['student_category1'];
         $per_student_material=$_POST['per_student_material'];
         $per_student_expense=$_POST['per_student_expense'];
         $total_expense=$_POST['total_expense'];
         
         mysqli_query ($con,"set character_set_results='utf8'");  
         
    mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='0',`last_month_stock`='$remaining_mirchi_powder' WHERE `food_name`='mirchi_powder'");
         
         
      if(mysqli_query($con,"INSERT INTO mirchi_powder_report(date, total_student,prev_mirchi_powder_remain, current_month_mirchi_powder_got, total_mirchi_powder, total_plates, mirchi_powder_cooked, monthEnd_remaining_mirchi_powder,class_category,food_per_student,money_spent_per_student,total_expense)values (N'$entry_date1',N'$t_student',N'$prev_month_remain_mirchi_powder',N'$mirchi_powder_got',N'$total_mirchi_powder',N'$total_plates',N'$cooked_mirchi_powder',N'$remaining_mirchi_powder','$student_category1','$per_student_material','$per_student_expense','$total_expense')"))
      {
          echo "<script>
         window.location.href='mirchi_powder_report.php?success1=success';
         </script>";
      }else{
            echo "error in submitting data" ;
      }
     }
     ?>