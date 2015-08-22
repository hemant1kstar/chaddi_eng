    <!-- SweetAlert CSS and JavaScript files-->  
    <script src="dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">

<?php

    include("database/connection.php");
        if (isset($_GET['q'])) {  //get value as table name from url
            $link=$_GET['q'];
        }
            $links = trim($link,'`');
            $linksTitle = strtoupper($links);

    if(isset($_POST["submit"])){
                $count=0;
//                $table=$_POST["table_name"];
                $table=$link;
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
                       $sql=$sql."ADD COLUMN"."`".$varname[$i]."`"." ".$datatype[$i].",";
                     }
                    $sqla=substr_replace($sql, "", -1);
                        
                        $sqla="ALTER TABLE"." "."`".$linksTitle."`".$sqla;
                        
                        echo $sqla;
                        echo $linksTitle;
                    if ($con->query($sqla) === TRUE){
                        
                         header("Location:table_display.php?q=$linksTitle");
                    }
                        else{
?>
                       <script>
                           if(confirm("field names and table names not to same?")) {
                                window.location.href = "add_Fields_layout.php";
                            }else{
                            window.location.href = "add_Fields_layout.php";
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
