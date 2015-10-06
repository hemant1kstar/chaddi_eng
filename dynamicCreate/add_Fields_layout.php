<?php
         session_start();
         if(!$_SESSION['LoggedIn_user'])
           {
                 header("location:../login_panel/login.php?problem='Not Logged In'");
                 exit;
         }
?>
<?php
include("database/connection.php");
if (isset($_GET['q'])) {  //get value as table name from url
    $link=$_GET['q'];
    
    $query="DESCRIBE $link"; //build query for get column names from table
    $results=mysqli_query($con,$query) or die('Query error:'.mysql_error());   
}
$links = trim($link,'`');
$linksTitle = strtoupper($links);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--    CSS For Material Design-->
    <link rel="stylesheet" href="../css/material.brown-light_green.min.css" />
    <script src="../material_js/material.js"></script>
    <link rel="stylesheet" href="../material_js/Material+Icons.css" />
    <link rel="stylesheet" href="../fonts/Roboto+300,400,500,700.css" />
    <!--  End of CSS For Material Design-->

    
    <link rel="stylesheet" href="css/create_table_layout.css" />
    <title>Create Tables Page</title>

</head>

<body>
    <?php
         include("database/connection.php");
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
                    <!-- Your content goes here -->
              <h2 class="contentHeader">Update <?php echo $linksTitle; ?> Fields</h2>
                    <div class="contentDiv mdl-grid">
                        <a href='table_display.php?q=<?php echo $link;?>' class='mdl-js-button mdl-js-ripple-effect backButton' title='Back'>
                            <img src="../images/dynamicTables/ic_arrow_back_24px.svg" alt="Back" />
                        </a>  
                        <form method="post" action="add_Fields.php?q=`<?php echo $link; ?>`">
                             <table>
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
                            <div class="">
                               <tr>
                                    <td><label class=""><?php echo $name;?></label></td>
<!--                                    <td><input type="text" class="" name="table_name" placeholder="" required /></td>-->
                                   <td><a href="drop_field.php?q=`<?php echo $links;?>`&q1=`<?php echo $name;?>`" title="Delete this column and all its data"><img src="../images/dynamicTables/ic_delete_24px.svg" /></a></td>
                               </tr>                    
                            </div>
                    <?php
                   }    
                 ?>
                </table>
                            
                            <div class="mdl-textfield mdl-js-textfield">
                                <input type="text" class="mdl-textfield__input" name="check_list1[]" placeholder="Enter Field Name" required>
                            </div>
                            <input type="hidden" name="datatype[]" value="VARCHAR(255)">

                            <div id="container">
                            </div>

                            <button id="btnAddAddress" class="mdl-button mdl-js-button mdl-button--primary" type="button">ADD more Fields</button>


                            <div id="submitButton">
                                <input type="submit" name="submit" value="Create" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                            </div>

                        </form>
                    </div>

                </div>
            </main>
        </div>

        <script type="text/javascript" src="../jquery/jquery-2.1.4.min.js"></script>
        <script type="text/javascript">
            $("#btnAddAddress").click(function() {
                $("#container").append('<div class="mdl-textfield mdl-js-textfield"><input type="text" class="mdl-textfield__input" name="check_list1[]" placeholder="Enter Field Name" required></div><input type="hidden" name="datatype[]" value="VARCHAR(255)">');
            });
        </script>
</body>
</html>
