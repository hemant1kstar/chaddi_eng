<?php
         include("database/connection.php");
        if (isset($_GET['q'])) {  //get value as table name from url
        $link=$_GET['q'];
        $query="DESCRIBE $link"; //build query for get column names from table
        $results=mysqli_query($con,$query) or die('Query error:'.mysql_error());
        }
?>
<?php
        if(isset($_POST["submit_edit"]))
        {
           $dCreate_id=$_GET['Create_id'];
            echo "$dCreate_id<br/>";

            $columnname1=array();
            $count1=0;
                $row5= mysqli_fetch_array($results);
                $columnname1[$count1]=$row5[0];
              foreach($_POST["col_name"] as $cna=>$name1){
                    
                  echo "$columnname1[$count1]<br/>";
//                mysqli_query($con,"UPDATE $link set $name='$name1' WHERE id='$dCreate_id'"); 
               echo "$name1<br/>";
                          $count1++;
               }

        }
?>
<html>
    <head>
    <link rel="stylesheet" href="mdl/material.min.css">
    <link rel="stylesheet" href="css/add.css">
    <script src="mdl/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
    </head>
<body>
    <form method="post" action="">
        <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp dataadd">
        <?php

            $columnname=array();
            $count=0;
                while($row1 = mysqli_fetch_array($results)) {
                    $columnname[$count]=$row1[0];
                    $count++;
                }
   
        ?>
            
        <?php
                  $dCreate_id=$_GET['Create_id'];
                  $result=mysqli_query($con,"SELECT * FROM $link WHERE id='$dCreate_id'");
                  echo "<input name='cid' value='$dCreate_id' disabled><br/>";
            while($row1=mysqli_fetch_array($result))
            { 
               $arraylen=sizeof($columnname);
               for($co=1;$co<$arraylen;$co++){ 
                     $col_value=$row1[$co];
                      echo "<input type='text' name='col_name[]' value='$col_value'><br/>";
                }
                $co++;
            }
          ?>


    <br/>
    <input type="submit" name="submit_edit" value="Submit" class="mdl-button mdl-js-button mdl-button--raised submitbtn">

    </form>
</body>
</html>