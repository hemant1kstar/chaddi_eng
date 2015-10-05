
            <?php
                  include("../../database/connection.php");

                   if(isset($_POST['submit_tc_info']))
                   {
                      $reg_no=$_POST['reg_no'];
                      $school_leaving_class=$_POST['school_leaving_class'];
                      $date_leaving1=$_POST['date_leaving'];
                      $dateTime1 = new DateTime($date_leaving1);
                      $date_leaving=date_format ($dateTime1, 'Y-m-d' );
                       
                      $student_progress=$_POST['student_progress'];
                      $leaving_reason=$_POST['leaving_reason'];
                      $tc_no=$_POST['tc_no'];
                      $behaviour=$_POST['behaviour'];
                      $date1=$_POST['tc_date'];
                       
                     $dateTime = new DateTime($date1);
                     $tc_date=date_format ($dateTime, 'Y-m-d' );
                       
                      $remark=$_POST['remark'];

                    mysqli_query ($con,"set character_set_results='utf8'");      
                    mysqli_query($con,"UPDATE master SET school_leaving_class=N'$school_leaving_class',school_leaving_date=N'$date_leaving',student_progress=N'$student_progress',behaviour=N'$behaviour',school_leaving_reason=N'$leaving_reason',tc_no=N'$tc_no',tc_date=N'$tc_date',tc_remark=N'$remark' WHERE reg_no='$reg_no'");
                    
                      echo "<script type='text/javascript'>
window.location.href = '../tc_info_display.php';
                </script>" ;
                       
                   }
                  ?>