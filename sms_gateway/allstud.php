<?php
include("../database/connection.php");
         mysqli_query ($con,"set character_set_results='utf8'");
        $sql="SELECT * FROM master";
        $result = mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($result)) 
                   {
                        $Stud_Mob=$row['contact_no'];
                          echo $Stud_Mob.",";
                   }    
?>