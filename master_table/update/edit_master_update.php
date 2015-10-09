<?php
 include("../../database/connection.php");
                   if(isset($_POST['submit_update_profile']))
                   {
        $reg_no1=$_POST['reg_no'];
        $student_name1=$_POST['student_name'];
        $mother_name1=$_POST['mother_name'];
        $mother_tongue1=$_POST['mother_tongue'];
        $gender1=$_POST['gender'];
//        $birth_date1=$_POST['birth_date'];
        $date1=$_POST['birth_date'];
         
        $dateTime = new DateTime($date1);
        $birth_date=date_format ($dateTime, 'Y-m-d');
        $age1=$_POST['age'];
        $nationality1=$_POST['nationality'];
        $religion1=$_POST['religion'];
        $caste1=$_POST['caste'];
        $sub_caste1=$_POST['sub_caste'];
        $category1=$_POST['category'];
        $father_name1=$_POST['father_name'];
        $father_occupation1=$_POST['father_occupation'];
        $annual_income1=$_POST['annual_income'];
        $birth_place1=$_POST['birth_place'];
        $district1=$_POST['district'];
        $state1=$_POST['state'];
        $prev_class1=$_POST['prev_class'];
        $admission_date1=$_POST['admission_date'];
         
        $dateTime2 = new DateTime($admission_date1);
        $admission_date1=date_format ($dateTime2, 'Y-m-d');
                       
        $prev_school_name1=$_POST['prev_school_name'];
        $admission_class1=$_POST['admission_class'];
        $prev_mark_sheet1=$_POST['prev_mark_sheet'];
        $prev_tc1=$_POST['prev_tc'];
        $nadar_fee1=$_POST['nadar_fee'];
        $permanent_address1=$_POST['permanent_address'];
        $medium1=$_POST['medium'];
                       
        $current_class1=$_POST['current_class'];
        $status1=$_POST['status'];
        $contact_no1=$_POST['contact_no'];
                           $birthdate_inwords=$_POST['birthdate_inwords'];
               

                    mysqli_query ($con,"set character_set_results='utf8'");      
mysqli_query($con,"UPDATE master SET student_name=N'$student_name1',mother_name=N'$mother_name1',gender=N'$gender1',Mother_tongue=N'$mother_tongue1',birthdate=N'$birth_date',age=N'$age1',nationality=N'$nationality1',religion=N'$religion1',caste=N'$caste1',sub_caste=N'$sub_caste1',category=N'$category1',father_name=N'$father_name1',father_occupation=N'$father_occupation1',annual_income=N'$annual_income1',birth_place=N'$birth_place1',district=N'$district1',state=N'$state1',prev_class='$prev_class1',admission_date=N'$admission_date1',prev_school_name=N'$prev_school_name1',admission_class=N'$admission_class1',prev_mark_sheet=N'$prev_mark_sheet1',prev_tc=N'$prev_tc1',nadar_fee=N'$nadar_fee1',permanent_address=N'$permanent_address1',medium=N'$medium1',current_class=N'$current_class1',status=N'$status1',contact_no=N'$contact_no1',birthdate_inwords=N'$birthdate_inwords' WHERE reg_no='$reg_no1'");
                       
if($status1=='Present'){
$status2="Active";
}else{
$status2="Banned";
}
mysqli_query($con,"update member set name=N'$student_name1',gender='$gender1',address = N'$permanent_address1',contact = '$contact_no1',type = 'Student',year_level = '$current_class1',status = '$status2' where member_id='$reg_no1'");
                       
                
                       echo "<script type='text/javascript'>
window.location.href = '../master.php';
                </script>" ;
                       
                   }
                  ?>