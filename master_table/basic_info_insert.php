<?php

    include("../database/connection.php");

$success=0;

     if(isset($_POST['submit_student_info']))
     {
        $reg_no=$_POST['reg_no'];
        $student_name=$_POST['student_name'];
        $mother_name=$_POST['mother_name'];
        $mother_tongue=$_POST['mother_tongue'];
        $gender=$_POST['gender'];
        $date1=$_POST['birth_date'];
         
        $dateTime = new DateTime($date1);
        $birth_date=date_format ($dateTime, 'Y-m-d');
         
        $age=$_POST['age'];
        $nationality=$_POST['nationality'];
        $religion=$_POST['religion'];
        $caste=$_POST['caste'];
        $sub_caste=$_POST['sub_caste'];
        $category=$_POST['category'];
        $father_name=$_POST['father_name'];
        $father_occupation=$_POST['father_occupation'];
        $annual_income=$_POST['annual_income'];
        $birth_place=$_POST['birth_place'];
        $district=$_POST['district'];
        $state=$_POST['state'];
        $prev_class=$_POST['prev_class'];
        $admission_date1=$_POST['admission_date'];
         
        $dateTime2 = new DateTime($admission_date1);
        $admission_date=date_format ($dateTime2, 'Y-m-d');
         
         
        $prev_school_name=$_POST['prev_school_name'];
        $admission_class=$_POST['admission_class'];
        $prev_mark_sheet=$_POST['prev_mark_sheet'];
        $prev_tc=$_POST['prev_tc'];
        $nadar_fee=$_POST['nadar_fee'];
        $permanent_address=$_POST['permanent_address'];
        $medium=$_POST['medium'];
         
        $current_class=$_POST['current_class'];
        $status=$_POST['status'];
        $contact_no=$_POST['contact_no'];
        
        $birthdate_inwords=$_POST['birthdate_inwords'];
      
   
         
                 
 $target_file="";
if (isset($_FILES['student_img'])) {
    
    $s_reg_no=$_POST['reg_no']; 
    
    if(!is_dir("../student_images/$s_reg_no"))
  {
mkdir("../student_images/$s_reg_no"); 
  }


                 $target_dir = "../student_images/$s_reg_no/";
//                 $target_dir1 = "student_images/";
                 $target_file = $target_dir . basename($_FILES["student_img"]["name"]);
//                 $target_file1 = $target_dir1 . basename($_FILES["student_img"]["name"]);
                 $uploadOk = 1;
                 $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                  
                    
                  $check = getimagesize($_FILES["student_img"]["tmp_name"]);
                        if($check !== false) {
//                            echo "File is an image - " . $check["mime"] . ".";
                            $uploadOk = 1;
                        } else {
//                            echo "File is not an image.";
                            $uploadOk = 0;
                        }
                                    
                    if ($uploadOk == 0) {
                        echo "Sorry, your file was not uploaded.";
                    } else {
                        if (move_uploaded_file($_FILES["student_img"]["tmp_name"], $target_file)) {
//                            echo "The file ". basename( $_FILES["student_img"]["name"]). " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    }
//echo "$target_file1";
                       
               
               }
         
$document_file="";
if (isset($_FILES['student_document'])) {
    
    $s_reg_no=$_POST['reg_no']; 
    
    if(!is_dir("../student_document/$s_reg_no"))
  {
mkdir("../student_document/$s_reg_no"); 
  }


                 $document_dir = "../student_document/$s_reg_no/";
//                 $target_dir1 = "student_images/";
    $fileCount = count($_FILES["student_document"]["name"]);
     for ($i = 0; $i < $fileCount; $i++) {
    
                 $document_file = $document_dir . basename($_FILES["student_document"]["name"][$i]);
//                 $target_file1 = $target_dir1 . basename($_FILES["student_img"]["name"]);
                 $uploadOk1 = 1;
                 $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                  
            
                                    
                    if ($uploadOk1 == 0) {
                        echo "Sorry, your file was not uploaded.";
                    } else {
                       
                        if (move_uploaded_file($_FILES["student_document"]["tmp_name"][$i], $document_file)) {
//                            echo "The file ". basename( $_FILES["student_img"]["name"]). " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                       
                    }
//echo "$target_file1";
                       
}
               }
         
 mysqli_query ($con,"set character_set_results='utf8'");    
                  
if($status=='Present'){
$status1="Active";
}else{
$status1="Banned";
}
 
         mysqli_query($con,"insert into member(member_id,name,gender,address,contact,type,year_level,status) values($reg_no,N'$student_name','$gender',N'$permanent_address','$contact_no','Student','$current_class','$status1')");
       
    
       
 
        
if(mysqli_query($con,"INSERT INTO master(reg_no,student_name,mother_name,gender,Mother_tongue,birthdate,age,nationality,religion,caste,sub_caste,category,father_name,father_occupation,annual_income,birth_place,district,state,prev_class,admission_date,prev_school_name,admission_class,prev_mark_sheet,prev_tc,nadar_fee,permanent_address,medium,current_class,status,contact_no,birthdate_inwords,student_img_url,document_pdf_url)values
      (N'$reg_no',N'$student_name',N'$mother_name',N'$gender',N'$mother_tongue',N'$birth_date',N'$age',N'$nationality',N'$religion',N'$caste',N'$sub_caste',N'$category',N'$father_name',N'$father_occupation',N'$annual_income',N'$birth_place',N'$district',N'$state',N'$prev_class',N'$admission_date',N'$prev_school_name',N'$admission_class',N'$prev_mark_sheet',N'$prev_tc',N'$nadar_fee',N'$permanent_address',N'$medium',N'$current_class',N'$status',N'$contact_no',N'$birthdate_inwords','$target_file','$document_file')"))
{
   $success=1;
   echo "<script>
          window.location = 'index.php?success='+$success;
      </script>";
}else{
   echo "<script>
          window.location = 'index.php?success='+$success;
      </script>";
}
     }


?>