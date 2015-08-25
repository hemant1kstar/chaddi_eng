<?php
       $s_class = $_GET['s_class'];
include("../database/connection.php");
  mysqli_query ($con,"set character_set_results='utf8'");
                 $sql="SELECT * FROM master where current_class='$s_class'";
                 $result = mysqli_query($con,$sql);

                 echo "<table  class='mdl-data-table mdl-js-data-table mdl-shadow--2dp'>
                      <thead><tr>
                      <th>Reg No.</th>
                      <th class='mdl-data-table__cell--non-numeric'>Student Name</th>
                      <th>Mobile No.</th><th>ADD</th></tr></thead><tbody>";
while($row = mysqli_fetch_array($result)) {
  $Stud_Mob=$row['contact_no'];
  $Stud_Name=$row['student_name'];
  $Stud_reg_no=$row['reg_no'];
    
  
    echo "<tr>";
    echo "<td>" . $Stud_reg_no . "</td>";
    echo "<td class='mdl-data-table__cell--non-numeric'>" . $Stud_Name . "</td>";
    echo "<td>" . $Stud_Mob .  "</td>";
   echo "<td><button id='button1' onClick='addmob($Stud_Mob)' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect'>ADD</button></td>";
    echo "</tr>";
}
echo "</tbody></table>";
?>