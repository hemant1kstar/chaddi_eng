
<?php
session_start();
$success="";

$teacher_id=$_SESSION['teacher_id'];
if(isset($_POST["teacher_profile_photo"])) {
  
if (file_exists("../profile_images/$teacher_id")) {
} else {
mkdir("../profile_images/$teacher_id");
}

    
$target_dir="../profile_images/$teacher_id/"; 
$target_dir1="profile_images/$teacher_id/"; 
$target_file = $target_dir . basename($_FILES["profile_photo"]["name"]);
$target_file1= $target_dir1 . basename($_FILES["profile_photo"]["name"]); 
    
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["profile_photo"]["tmp_name"]);
    if($check !== false) {
//        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        // Check if file already exists
            if (file_exists($target_file)) {
//                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }else{
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
//                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            }
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    
          // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
//                echo "Sorry, your file was not uploaded.";
                 echo "<script>
                        window.location = '../teacher_profile.php?success_info=Profile photo not Updated';
                        </script>";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["profile_photo"]["tmp_name"], $target_file)) {
//                    echo "The file ". basename( $_FILES["profile_photo"]["name"]). " has been uploaded.";
                        echo "<script>
                        window.location = '../teacher_profile.php?success_info=Profile photo Updated';
                        </script>";
                    
                } else {
//                    echo "Sorry, there was an error uploading your file.";
                        echo "<script>
                        window.location = '../teacher_profile.php?success_info=Profile photo not Updated';
                        </script>";
                }
            }

}
?>