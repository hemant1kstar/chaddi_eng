<?php
session_start();
$success="";
    if(isset($_POST['teacher_profile_update'])){
          $teacher_id=$_SESSION['teacher_id'];
        
           $teacher_name=$_POST['teacher_name'];
           $qualification=$_POST['qualification'];
           $designation=$_POST['designation'];
           $experience=$_POST['experience'];
           $subjects=$_POST['subjects'];
           $other_info=$_POST['other_info'];
           $training_info=$_POST['training_info'];
           $date_of_appointment=$_POST['date_of_appointment'];

         include("../../database/connection.php");
            mysqli_query ($con,"set character_set_results='utf8'");     
    $sql="UPDATE teacher_profile SET teacher_name=N'$teacher_name', qualification=N'$qualification',designation=N'$designation',experience=N'$experience',subjects=N'$subjects',other_info=N'$other_info',training_info=N'$training_info',date_of_appointment=N'$date_of_appointment'  WHERE teacher_id='$teacher_id'";    
                             
                                if($result = mysqli_query($con,$sql))  
                                {
                                   $success=1;
                                 }else{
                                        $success=0;
                            }
                              if($success==0)
                                {
                                    echo "<script>
                                    window.location = '../update_profile.php?success_info=Teacher Profile  not Updated';
                                    </script>";
                                }else{
                                    echo "<script>
                                    window.location = '../teacher_profile.php?success_info=Teacher Profile  Updated';
                                    </script>";
                                }
         
          }
?>