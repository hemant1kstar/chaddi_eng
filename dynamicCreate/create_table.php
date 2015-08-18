<?php
         include("database/connection.php");
?>
<?php
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
                       $sql=$sql."`".$varname[$i]."`"." ".$datatype[$i].",";
                     }
                    $sqla=substr_replace($sql, "", -1);
                    $sqla="create table"." "."`".$table."`"."(`id` int(5) NOT NULL AUTO_INCREMENT,$sqla,PRIMARY KEY (`id`))";
                    if ($con->query($sqla) === TRUE){
                         header("Location:index.php");
                    }else{
?>
                        <script>
                           if(confirm("filed names not to same?")) {
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