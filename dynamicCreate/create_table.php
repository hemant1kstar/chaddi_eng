<html lang="en">
<meta charset="utf-8">
<!-- SweetAlert CSS and JavaScript files-->  
    <script src="dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">

<?php

    include("database/connection.php");
    if(isset($_POST["submit"])){
                $count=0;
                $table=$_POST["table_name"];
                if(!empty($_POST['check_list1'])){
                    foreach($_POST['check_list1'] as $selected){ 
                        $varname[$count]=$selected;
                        $count++;
                    }
                $countd=0;   
                               $sql=null;           
                    if(!empty($_POST['datatype'])){
                        foreach($_POST['datatype'] as $selected){ 
                            $datatype[$countd]=$selected;
                            $countd++;
                        }  
             
                    for($i=0;$i<sizeof($varname);$i++){
                       $sql=$sql."`".$varname[$i]."`"." ".$datatype[$i]." CHARACTER SET utf8 collate utf8_general_ci,";
                     }
                    $sqla=substr_replace($sql, "", -1);
                    mysqli_query ($con,"set character_set_results='utf8'"); 
                    $sqla="create table"." "."`".$table."`"."(`id` int(5) NOT NULL AUTO_INCREMENT,$sqla,PRIMARY KEY (`id`))";
                    mysqli_query ($con,"ALTER TABLE $table MODIFY $sqla varchar(300) CHARACTER SET utf8 collate utf8_general_ci;"); 
                    if ($con->query($sqla) === TRUE){
                        if(isset($_POST['ckeck2'])){
                            
                        if ($_POST['ckeck2'] == 'checkbox_checked')
                        {
                            mysqli_query ($con,"ALTER TABLE $table ADD student_name varchar(300) CHARACTER SET utf8 collate utf8_general_ci");  
                        $class1=$_POST['class1'];
                            $division1=$_POST['division1'];
//                            echo "$class1";
//                            echo "$division1";
                            $con2=mysqli_connect("localhost","root","","school_project");
                                if (mysqli_connect_errno())
                                {
                                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                }
                            mysqli_query ($con2,"set character_set_results='utf8'"); 
                            $query="select student_name from master where current_class='$class1' and admitted_division='$division1'";
                            $result11=mysqli_query($con2,$query);
                            while($row1=mysqli_fetch_array($result11))
                            {
                            $student_name1=$row1['student_name'];
//                            echo "$student_name1<br/>";  
                    mysqli_query ($con,"INSERT INTO $table (student_name)VALUES (N'$student_name1')"); 
                            }
                         header("Location:index.php");   
                            
                        }
                    }
                        else{
                         header("Location:index.php");
                        }
                    }else{
?>
                        <script>
                           if(confirm("field names and table names not to same?")) {
                                window.location.href = "create_table_layout.php";
                            }else{
                            window.location.href = "create_table_layout.php";
                            }   
                        </script>

<?php  
                      }
                        $con->close();  
                    } 
                }
    }
?>

<!--
<script>
    function myFunction(){
swal({   title: "Are you sure?",   text: "You will not be able to recover this file!",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Yes, delete it!",   closeOnConfirm: false }, function(){   swal("Deleted!", "Your  file has been deleted.", "success");   
    }
</script>-->
