<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="stylesheet" href="../css/material.brown-light_green.min.css" />
    <script src="../material_js/material.min.js"></script>
    <link rel="stylesheet" href="../material_js/Material+Icons.css" />
        <link rel="stylesheet" href="../fonts/Roboto+300,400,500,700.css" />

    <link rel="stylesheet" href="css/add.css">


    <title>Data Add Page</title>
</head>
<body>
    
    <?php
         include("database/connection.php");
        if (isset($_GET['q'])) {  //get value as table name from url
        $link=$_GET['q'];
        $query="DESCRIBE $link"; //build query for get column names from table
        $results=mysqli_query($con,$query) or die('Query error:'.mysql_error());
        $links = trim($link,'`');
        }
?>

 <!-- Always shows a header, even in smaller screens. -->
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
            <h2 class="contentHeader">Add new data in "<span class="tableName"><?php echo $links; ?></span>"</h2>

            <div class="contentDiv">
            <!-- Your content goes here -->
                <a href='table_display.php?q=<?php echo $link; ?>' class='mdl-js-button mdl-js-ripple-effect backButton' title='Back'>
                    <img src="../images/dynamicTables/ic_arrow_back_24px.svg" alt="Back" />
                </a>

            <form method="post" action="">
                <table >

        <?php
            $columnname=array();
            $count=0;
                while($row1 = mysqli_fetch_array($results)) {
                    $columnname[$count]=$row1[0];
                    $count++;
                }
            $result=mysqli_query($con,"SELECT * FROM $link"); 
            $arraylen=sizeof($columnname); //find array length
            for($co=1;$co<$arraylen;$co++){
                $name=$columnname[$co];   
        ?>
                
                       <tr>
                           <td>
                   <label class="headerLabel">
                        <?php echo $name ?>
                    </label>
                           </td>
                           <td>
                               <div id="addDataInput" class="mdl-textfield mdl-js-textfield">
                        <input type="text"  class="mdl-textfield__input" name="cname[]" value="">
                    </div>
                           </td>
                       </tr>
                
        <?php
            }
        ?>
            <?php
                if(isset($_POST["submit"])){
                    $k=1;
                    $colnames="";
                    foreach ($_POST["cname"] as $key => $value) {
                       $columnname[$k];
                        $vals[] = mysqli_real_escape_string($con, $value);
                        $colnames=$colnames."`".$columnname[$k]."`".",";
                        $k++;
                        }
                    $sqla=substr_replace($colnames, "", -1);
                    $colvals = "N'".implode("',N'",$vals)."'";
                    mysqli_query ($con,"set character_set_results='utf8'"); 
//                    echo "$colvals";
                    $query1=mysqli_query($con, "INSERT INTO $link ($sqla) VALUES ($colvals)");
                        if($query1)
                        {
//                                header("Location:table_display.php?q=$link");
                            echo "<script>
                            window.location='table_display.php?q=$link'
                            </script>";
                        }else{
                             echo "error in inserting row";
                        }
                    
                }
                  
            ?>
                    <tr >
                        <td colspan="2" id="addButton">
                        <input type="submit" name="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" value="Add">
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