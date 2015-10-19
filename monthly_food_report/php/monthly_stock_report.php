<?php
 $s_year=$_GET['s_year'];
            $s_month=$_GET['s_month'];

?>
<h3 class="report_title">शालेय पोषण आहार /राष्ट्रीय मध्यान्ह भोजन योजना</h3>
<h3 class="report_title">शाळा स्तरावर ठेवावयाची  नियमित खर्च नोंदवही भाग -१ (मासिक स्टॉक)</h3>
<label class="report_sub_title">शाळेचे नाव :संत नामदेव विद्यालय, लातूर </label>
<label class="report_sub_title"> केंद्र :</label>
<label class="report_sub_title"> महिना :<?php echo $s_month;?></label>
<label class="report_sub_title"> ( कि. ग्राम मध्ये )</label><br/>
<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
    <thead>
        <tr>
            <th>अ . क्र .</th>
            <th>वस्तूचे नाव </th>
            <th>मासिक स्टॉक</th>
        </tr>
    </thead>
    <tbody>
        <?php
           
              include("../../database/connection.php");

if($s_year=="" or $s_month=="")
{
     
}else{
    
$query1=mysqli_query($con,"SELECT * 
 FROM monthly_stock Where year=$s_year and month=$s_month");
             
              $row1=mysqli_fetch_array($query1);
         $rice_got=$row1['rice'];
         $mugdal_got=$row1['mugdal'];
         $turdal_got=$row1['turdal'];
         $masurdal_got=$row1['masurdal'];
         $turdal_got=$row1['turdal'];
         $masurdal_got=$row1['masurdal'];
         $sugar_got=$row1['sugar'];
         $matki_got=$row1['matki'];
         $mug_got=$row1['mug'];
         $chavli_got=$row1['chavli'];
         $harbara_got=$row1['harbara'];
         $jire_got=$row1['jire'];
         $mohari_got=$row1['mohari'];
         $halad_got=$row1['halad'];
         $mirchi_powder_got=$row1['mirchi_powder'];
         $soyabin_got=$row1['soyabin'];
         $salt_got=$row1['salt'];
         $vatana_got=$row1['vatana'];
         $vegetables_got=$row1['vegetables'];
    
                  echo "<tr>";
                  echo "<td>1</td>";
                  echo "<td>तांदूळ </td>";
                  echo "<td>$rice_got</td>";
                  echo "</tr>";
    
                  echo "<tr>";
                  echo "<td>2</td>";
                  echo "<td>मुगडाळ </td>";
                  echo "<td>$mugdal_got</td>";
                  echo "</tr>";
    
                   echo "<tr>";
                  echo "<td>3</td>";
                  echo "<td>तुरडाळ </td>";
                  echo "<td>$turdal_got</td>";
                  echo "</tr>";
    
                  echo "<tr>";
                  echo "<td>4</td>";
                  echo "<td>मसूरडाळ </td>";
                  echo "<td>$masurdal_got</td>";
                  echo "</tr>";
    
                 echo "<tr>";
                  echo "<td>5</td>";
                  echo "<td>गुळ / साखर</td>";
                  echo "<td>$sugar_got</td>";
                  echo "</tr>";
        echo "<tr>";
                  echo "<td>6</td>";
                  echo "<td>मटकी </td>";
                  echo "<td>$matki_got</td>";
                  echo "</tr>";
        echo "<tr>";
                  echo "<td>7</td>";
                  echo "<td> मुग </td>";
                  echo "<td>$mug_got</td>";
                  echo "</tr>";
        echo "<tr>";
                  echo "<td>8</td>";
                  echo "<td> चवली </td>";
                  echo "<td>$chavli_got</td>";
                  echo "</tr>";
        echo "<tr>";
                  echo "<td>9</td>";
                  echo "<td> हरभरा </td>";
                  echo "<td>$harbara_got</td>";
                  echo "</tr>";
        echo "<tr>";
                  echo "<td>10</td>";
                  echo "<td> वाटाणा </td>";
                  echo "<td>$vatana_got</td>";
                  echo "</tr>";
        echo "<tr>";
                  echo "<td>11</td>";
                  echo "<td> जिरे </td>";
                  echo "<td>$jire_got</td>";
                  echo "</tr>";
        echo "<tr>";
                  echo "<td>12</td>";
                  echo "<td> मोहरी </td>";
                  echo "<td>$mohari_got</td>";
                  echo "</tr>";
        echo "<tr>";
                  echo "<td>13</td>";
                  echo "<td> हळद </td>";
                  echo "<td>$halad_got</td>";
                  echo "</tr>";
        echo "<tr>";
                  echo "<td>14</td>";
                  echo "<td> मिर्ची </td>";
                  echo "<td>$mirchi_powder_got</td>";
                  echo "</tr>";
    
           echo "<tr>";
                  echo "<td>15</td>";
                  echo "<td>  सोयाबीन</td>";
                  echo "<td>$soyabin_got</td>";
                  echo "</tr>";
    
           echo "<tr>";
                  echo "<td>16</td>";
                  echo "<td> मीठ </td>";
                  echo "<td>$salt_got</td>";
                  echo "</tr>";
    
           echo "<tr>";
                  echo "<td>17</td>";
                  echo "<td> भाजीपाला </td>";
                  echo "<td>$vegetables_got</td>";
                  echo "</tr>";

   
              
}
 
        ?>
    </tbody>
</table>

<div class="signature">
    <label id="principalSingature">मुख्याध्यापक स्वाक्षरी </label>
    <label id="presidentSingature">अध्यक्ष<br> शाळा व्यवस्थापन समिती </label>
</div>