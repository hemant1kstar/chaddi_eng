<?php
            $s_year=$_GET['s_year'];
            $s_month=$_GET['s_month'];
            $s_category=$_GET['s_category'];
if($s_category=="1to5")
{
    $stu_category1="१ ते ५";
}else{
$stu_category1="६ ते ८";
}
?>

<h3 class="report_title">शालेय पोषण आहार /राष्ट्रीय मध्यान्ह भोजन योजना ( <?php echo $stu_category1;?> )</h3>
<h3 class="report_title">शाळा स्तरावर ठेवावयाची  नियमित खर्च नोंदवही भाग -१ (मुग हिशोब )</h3>
<label class="report_sub_title">शाळेचे नाव :संत नामदेव विद्यालय, लातूर </label>
<label class="report_sub_title"> केंद्र :</label>
<label class="report_sub_title"> महिना :</label>
<label class="report_sub_title"> ( मुग कि. ग्राम मध्ये )</label>
<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
    <thead>
        <tr>
            <th>अ . क्र .</th>
            <th>दिनांक </th>
            <th>पटसंख्या </th>
            <th>मागील महिना शिल्लक मुग </th>
            <th>चालू महिना प्राप्त मुग </th>
            <th>एकून मुग </th>
            <th>लाभाथ्री संख्या ( ताटांची संख्या )</th>
            <th>मुग वापरली </th>
            <th>महिना अखेर शिल्लक मुग </th>
            <th>प्रती विद्यार्थी वस्तू (ग्राम मध्ये )</th>
            <th>प्रती विद्यार्थी खर्च  </th>
            <th>एकूण खर्च</th>
            <th>मुख्याध्यापक स्वाक्षरी</th>
        </tr>
    </thead>
    <tbody>
        <?php

              include("../../database/connection.php");
              mysqli_query ($con,"set character_set_results='utf8'");
//              $query1 = mysqli_query($con,"SELECT * FROM mug_report") or die(mysqli_error());
if($s_year=="" or $s_month=="")
{
     
}else{
    
$query1=mysqli_query($con,"SELECT * 
 FROM mug_report Where YEAR(date)=$s_year and MONTH(date)=$s_month and class_category='$s_category'");
              $s_no=1;
              while($row1=mysqli_fetch_array($query1))
             {
                  $e_date=$row1['date'];
                  $e_date1= strtotime($e_date);
                  $e_date1=date('d/m/y',$e_date1);
                  $t_student=$row1['total_student'];
                  $prev_mug=$row1['prev_mug_remain'];
                  $current_mug_got=$row1['current_month_mug_got'];
                  $total_mug1=$row1['total_mug'];
                  $total_plates1=$row1['total_plates'];
                  $cooked_mug1=$row1['mug_cooked'];
                  $remaining_mug1=$row1['monthEnd_remaining_mug'];
                  
                  $food_per_student=$row1['food_per_student'];
                  $money_spent_per_student=$row1['money_spent_per_student'];
                  $total_expense=$row1['total_expense'];
                  
                  echo "<tr>";
                  echo "<td>$s_no</td>";
                  echo "<td>$e_date1</td>";
                  echo "<td>$t_student</td>";
                  echo "<td>$prev_mug</td>";
                  echo "<td>$current_mug_got</td>";
                  echo "<td>$total_mug1</td>";
                  echo "<td>$total_plates1</td>";
                  echo "<td>$cooked_mug1</td>";
                  echo "<td>$remaining_mug1</td>";
                  echo "<td>$food_per_student</td>";
                  echo "<td>$money_spent_per_student</td>";
                  echo "<td>$total_expense</td>";
                  echo "<td></td>";
                  echo "</tr>";

              $s_no++;
              }
}
 
        ?>
    </tbody>
</table>

    

<div class="signature">
    <label id="principalSingature">मुख्याध्यापक स्वाक्षरी </label>
    <label id="presidentSingature">अध्यक्ष<br> शाळा व्यवस्थापन समिती </label>
</div>
