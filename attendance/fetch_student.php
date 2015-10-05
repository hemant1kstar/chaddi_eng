<?php
$stu_division=$_GET['stu_division'];
$stu_class=$_GET['stu_class'];

            include("../database/connection.php");
                    echo "<table class='mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp'>";
                    echo "<thead>";
                    echo "<tr><th>Reg No.</th><th class='mdl-data-table__cell--non-numeric'>Student Name</th><th>Attendance (Select only absent)</th></tr>";
                    echo "</thead><tbody>";
                    mysqli_query($con, "set character_set_results='utf8'");
                    $result = mysqli_query($con, "SELECT * FROM master where admitted_division='$stu_division' and current_class='$stu_class'");
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr><td>".$row['reg_no'].
                        "</td>";
                        echo "<td class='mdl-data-table__cell--non-numeric'> ".$row['student_name'].
                        "</td>";
                        echo "<td><label class='mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect' for='checkbox-1'>";
                        echo "<input type='checkbox' id='checkbox-1'  name='check_list[]' value={$row['reg_no']} class='mdl-checkbox__input'>";
                        echo "</label></td>";
                        echo "</tr>";

                    }
                    echo "</tbody></table>";

?>