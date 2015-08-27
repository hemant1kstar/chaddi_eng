            <h3 class="report_title">शालेय पोषण आहार /राष्ट्रीय मध्यान्ह भोजन योजना ( इ .  ते  )</h3>
            <h3 class="report_title">शाळा स्तरावर ठेवावयाची  नियमित खर्च नोंदवही भाग -१ ( चवली हिशोब )</h3>
            <label class="report_sub_title">शाळेचे नाव :संत नामदेव विद्यालय, लातूर </label>
            <label class="report_sub_title"> केंद्र :</label>
            <label class="report_sub_title"> महिना :</label>
            <label class="report_sub_title"> ( चवली कि. ग्राम मध्ये )</label>
        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
            <thead>
                <tr>
                    <th>अ . क्र .</th>
                    <th>दिनांक </th>
                    <th>पटसंख्या </th>
                    <th>मागील महिना शिल्लक चवली </th>
                    <th>चालू महिना प्राप्त चवली </th>
                    <th>एकून चवली </th>
                    <th>लाभाथ्री संख्या  ( ताटांची संख्या  )</th>
                    <th> शिजवलेली चवली </th>
                    <th>महिना अखेर शिल्लक चवली </th>
                    <th>मुख्याध्यापक स्वाक्षरी</th>
                </tr>
            </thead>
            <tbody>
        <?php
            $s_year=$_GET['s_year'];
            $s_month=$_GET['s_month'];
//echo "$s_year<br/>";
//echo "$s_month";
              include("../database/connection.php");
              mysqli_query ($con,"set character_set_results='utf8'");
//              $query1 = mysqli_query($con,"SELECT * FROM chavli_report") or die(mysqli_error());
if($s_year=="" or $s_month=="")
{
     
}else{
    
$query1=mysqli_query($con,"SELECT * 
 FROM chavli_report Where YEAR(date)=$s_year and MONTH(date)=$s_month");
              $s_no=1;
              while($row1=mysqli_fetch_array($query1))
             {
                  $e_date=$row1['date'];
                  $e_date1= strtotime($e_date);
                  $e_date1=date('d/m/y',$e_date1);
                  $t_student=$row1['total_student'];
                  $prev_chavli=$row1['prev_chavli_remain'];
                  $current_chavli_got=$row1['current_month_chavli_got'];
                  $total_chavli1=$row1['total_chavli'];
                  $total_plates1=$row1['total_plates'];
                  $cooked_chavli1=$row1['chavli_cooked'];
                  $remaining_chavli1=$row1['monthEnd_remaining_chavli'];
                  echo "<tr>";
                  echo "<td>$s_no</td>";
                  echo "<td>$e_date1</td>";
                  echo "<td>$t_student</td>";
                  echo "<td>$prev_chavli</td>";
                  echo "<td>$current_chavli_got</td>";
                  echo "<td>$total_chavli1</td>";
                  echo "<td>$total_plates1</td>";
                  echo "<td>$cooked_chavli1</td>";
                  echo "<td>$remaining_chavli1</td>";
                  echo "<td></td>";
                  echo "</tr>";

              $s_no++;
              }
}
 
        ?>
           </tbody>
        </table>
