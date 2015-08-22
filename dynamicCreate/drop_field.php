    <!-- SweetAlert CSS and JavaScript files-->  
    <script src="dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">

<?php

    include("database/connection.php");
        if (isset($_GET['q'])) {  //get value as table name from url
            $link=$_GET['q'];
            $link1=$_GET['q1'];
        }
//            $links = trim($link,'`');
//            $linksTitle = strtoupper($links);

                $table=$link;

//                        $sqla="ALTER TABLE"." "."`".$linksTitle."`".$sqla;
                        
                        $sqla="ALTER TABLE"." "."`".$link."`"."DROP COLUMN"."`".$link1."`";
                        
//                        echo $sqla;
                    if ($con->query($sqla) === TRUE)
                    {
                         header("Location:table_display.php?q=$link");
                    }else{
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
?>

<!--
<script>
    function myFunction(){
swal({   title: "Are you sure?",   text: "You will not be able to recover this file!",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Yes, delete it!",   closeOnConfirm: false }, function(){   swal("Deleted!", "Your  file has been deleted.", "success");   
    }
</script>-->
