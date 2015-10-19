                    <?php

            include("../database/connection.php");
  

     if(isset($_POST['monthly_stock_info']))
     {
         $stock_year=$_POST['stock_year'];
         $stock_month=$_POST['stock_month'];
         $rice_got=$_POST['rice_got'];
         $mugdal_got=$_POST['mugdal_got'];
         $turdal_got=$_POST['turdal_got'];
         $masurdal_got=$_POST['masurdal_got'];
         $turdal_got=$_POST['turdal_got'];
         $masurdal_got=$_POST['masurdal_got'];
         $sugar_got=$_POST['sugar_got'];
         $matki_got=$_POST['matki_got'];
         $mug_got=$_POST['mug_got'];
         $chavli_got=$_POST['chavli_got'];
         $harbara_got=$_POST['harbara_got'];
         $jire_got=$_POST['jire_got'];
         $mohari_got=$_POST['mohari_got'];
         $halad_got=$_POST['halad_got'];
         $mirchi_powder_got=$_POST['mirchi_powder_got'];
         $soyabin_got=$_POST['soyabin_got'];
         $salt_got=$_POST['salt_got'];
         $vatana_got=$_POST['vatana_got'];
         $vegetables_got=$_POST['vegetables_got'];
        
        mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='$rice_got' WHERE `food_name`='rice'");
        mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='$mugdal_got' WHERE `food_name`='mugdal'");
        mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='$turdal_got' WHERE `food_name`='turdal'");
        mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='$masurdal_got' WHERE `food_name`='masurdal'");
        mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='$sugar_got' WHERE `food_name`='sugar'");
        mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='$matki_got' WHERE `food_name`='matki'");
        mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='$mug_got' WHERE `food_name`='mug'");
        mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='$chavli_got' WHERE `food_name`='chavli'");
        mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='$harbara_got' WHERE `food_name`='harbara'");
        mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='$vatana_got' WHERE `food_name`='vatana'");
        mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='$jire_got' WHERE `food_name`='jire'");
        mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='$mohari_got' WHERE `food_name`='mohari'");
        mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='$halad_got' WHERE `food_name`='halad'");
        mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='$mirchi_powder_got' WHERE `food_name`='mirchi_powder'");
        mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='$soyabin_got' WHERE `food_name`='soyabin'");
        mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='$salt_got' WHERE `food_name`='salt'");
        mysqli_query($con,"UPDATE `food_daily_stock` SET `current_month_stock`='$vegetables_got' WHERE `food_name`='vegetables'");

            
      if(mysqli_query($con,"INSERT INTO `monthly_stock`(`year`, `month`, `rice`, `mugdal`, `turdal`, `masurdal`, `sugar`, `matki`, `mug`, `chavli`, `harbara`, `vatana`, `jire`, `mohari`, `halad`, `mirchi_powder`, `soyabin`, `salt`, `vegetables`) VALUES ('$stock_year','$stock_month','$rice_got','$mugdal_got','$turdal_got','$masurdal_got','$sugar_got','$matki_got','$mug_got','$chavli_got','$harbara_got','$vatana_got','$jire_got','$mohari_got','$halad_got','$mirchi_powder_got','$soyabin_got','$salt_got','$vegetables_got')"))
      {
         echo "<script>
         window.location.href='monthly_stock.php?success1=success';
         </script>";

      }else{
         echo "error in submitting data" ;
      }
     }
     ?>