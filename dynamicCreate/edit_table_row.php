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
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script src="../material_js/material.min.js"></script>
        <link rel="stylesheet" href="../material_js/Material+Icons.css" />
        <link rel="stylesheet" href="../css/material.brown-light_green.min.css" />
        <link rel="stylesheet" href="../fonts/Roboto+300,400,500,700.css" />

        <link rel="stylesheet" href="css/add.css">
        <link rel="stylesheet" href="css/edit_row.css">

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
                    <nav class="mdl-navigation ">
                        <a class="mdl-navigation__link" href="./index.php">Home</a>
                    </nav>
                </div>
            </header>
<!--
            <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">Title</span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="./index.php">Home</a>
                </nav>
            </div>
-->
            <main class="mdl-layout__content">
                <div class="page-content">
                    <!-- Your content goes here -->
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
                               mysqli_query ($con,"set character_set_results='utf8'"); 
                                 mysqli_query($con,"UPDATE $link set `$columnname1`=N'$value1' WHERE id='$dCreate_id'"); 
                          }
                       }
//                       header("Location:table_display.php?q=$link");
                     echo "<script>
                            window.location = 'table_display.php?q=$link';
                            </script>";

                }
        ?>
                        <div class='contentDiv'>
                            <a href='table_display.php?q=<?php echo $link; ?>' class='mdl-js-button mdl-js-ripple-effect backButton' title='Back'>
                                <img src="../images/dynamicTables/ic_arrow_back_24px.svg" alt="Back" />
                            </a>
                            <form method="post" action="">
                                <table>
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
                          mysqli_query ($con,"set character_set_results='utf8'");
                          $result=mysqli_query($con,"SELECT * FROM $link WHERE id='$dCreate_id'");

//this field is hidden which is not editable by user
//input is hidden in attributes. If any problem to send data then the ID input is to be shown in HTML but hidden from user.
// that is change hidden to readonly
                 echo "<input name='col_name[]' value='$dCreate_id' class='mdl-textfield__input mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet hidden1' type='text' hidden >";
                    while($row1=mysqli_fetch_array($result))
                    { 
                       $arraylen=sizeof($columnname);
                       for($co=1;$co<$arraylen;$co++){ 
                             $col_value=$row1[$co];
                           echo "<tr>";
                           echo "<td><label class='headerLabel'>$columnname[$co]</label></td>";
                           echo "<td class='editText'><div class='mdl-textfield mdl-js-textfield'><input type='text' class='mdl-textfield__input' name='col_name[]' value='$col_value' required></div></td>";
                           echo "</tr>";
                        }
                        $co++;
                    }
                  ?>


                                            <tr>
                                                <td colspan="2" id="addButton">
                                                    <input type="submit" name="submit_edit" value="OK, Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent submitbtn">
                                                </td>
                                            </tr>
                                </table>
                            </form>
                        </div>

                </div>
            </main>
        </div>

    </body>

    </html>
