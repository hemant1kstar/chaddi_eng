<?php
         include("database/connection.php");
        if (isset($_GET['q'])) {  //get value as table name from url
        $link=$_GET['q'];
        $query="DESCRIBE $link"; //build query for get column names from table
        $results=mysqli_query($con,$query) or die('Query error:'.mysql_error());
        }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.brown-light_green.min.css">
    <link rel="stylesheet" href="css/add.css">
    <link rel="stylesheet" href="css/edit_row.css">
    <script src="../material_js/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
    </head>
<body>
    
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Dynamic Content</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="./index.php">Home</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Title</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="./index.php">Home</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">
        <!-- Your content goes here -->
    <div class='mdl-grid'>
            <?php
                if(isset($_POST["submit_edit"]))
                {
                   $dCreate_id=$_GET['Create_id'];
                      foreach($_POST["col_name"] as $cna=>$value1){
                              $row5= mysqli_fetch_array($results);
                              $columnname1=$row5[0];
//                              echo "columnname: $columnname1<br/>";
//                                    echo "columnvalue: $value1<br/>";
                          if($columnname1=='id'){

                          }else{
//                            echo "$link";
//                            echo "$columnname1<br>";
//                            echo "$value1<br>";
                                 mysqli_query($con,"UPDATE $link set `$columnname1`='$value1' WHERE id='$dCreate_id'"); 
                          }
                       }
                       header("Location:table_display.php?q=$link");

                }
        ?>
    </div>
  <div class='mdl-grid'>
            <form method="post" action="">
<!--                <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp dataadd">-->
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

//this field is hidden which is not editable by user
                 echo "<input name='col_name[]' value='$dCreate_id' class='mdl-textfield__input mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet hidden1' type='text' readonly>";
                    while($row1=mysqli_fetch_array($result))
                    { 
                       $arraylen=sizeof($columnname);
                       for($co=1;$co<$arraylen;$co++){ 
                             $col_value=$row1[$co];
              echo "<label class='mdl-cell mdl-cell--3-col mdl-cell--8-col-tablet'>$columnname[$co]</label>";
              echo "<input type='text' class='mdl-textfield__input mdl-cell mdl-cell--3-col mdl-cell--8-col-tablet' name='col_name[]' value='$col_value' required>";
                        }
                        $co++;
                    }
                  ?>


            <br/>
            <input type="submit" name="submit_edit" value="Submit" class="mdl-button mdl-js-button mdl-button--raised submitbtn">

            </form>
      </div>
      
      </div>
  </main>
</div>

</body>
</html>