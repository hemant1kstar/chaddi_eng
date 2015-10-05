   <?php
   include("../../database/connection.php");
     if(isset($_POST['update_other_info']))
     {

        $reg_no=$_POST['reg_no'];
        $aadhar_no=$_POST['aadhar_no'];
        $bank_account_no=$_POST['bank_account_no'];
        $bank_branch=$_POST['bank_branch'];
        $bank_branch_code=$_POST['bank_branch_code'];
        $lic_id_no=$_POST['lic_id_no'];
        $minority_details=$_POST['minority_details'];
        $admitted_division=$_POST['admitted_division'];
        $student_name1=$_POST['student_name1'];
        $current_class_entry_date=$_POST['current_class_entry_date'];
        $fee_concession=$_POST['fee_concession'];
        $admission_month=$_POST['admission_month'];
        $admission_year=$_POST['admission_year'];
        $handicapped=$_POST['handicapped'];
        $scholarship=$_POST['scholarship'];
      
      
      mysqli_query ($con,"set character_set_results='utf8'");      
      mysqli_query($con,"UPDATE master SET aadhar_no=N'$aadhar_no',bank_account_no=N'$bank_account_no',bank_branch=N'$bank_branch',bank_branch_code=N'$bank_branch_code',lic_id_no=N'$lic_id_no',minority_details=N'$minority_details',admitted_division=N'$admitted_division',student_name1=N'$student_name1',current_class_entry_date=N'$current_class_entry_date',fee_concession=N'$fee_concession',admission_month=N'$admission_month',admission_year=N'$admission_year',handicapped=N'$handicapped',scholarship=N'$scholarship' WHERE reg_no='$reg_no'");
      
         
                 echo "<script type='text/javascript'>
window.location.href = '../other_info_display.php';
                </script>" ;
     }
    ?>