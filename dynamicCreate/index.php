<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--    CSS For Material Design-->
    <link rel="stylesheet" href="../css/material.brown-light_green.min.css" />
    <script src="../material_js/material.js"></script>
    <link rel="stylesheet" href="../material_js/icon?family=Material+Icons">
    <link rel="stylesheet" href="../fonts/Roboto+300,400,500,700.css" />
    <!--  End of CSS For Material Design-->

    <link rel="stylesheet" href="css/style.css">
    <title>Create Tables</title>

    <!--        it must for checkbox select-->
    <script src="../jquery/jquery-2.1.4.min.js"></script>

    <!-- SweetAlert CSS and JavaScript files-->
    <script src="dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">

</head>

<body>



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
                    <a class="mdl-navigation__link" href="backup/backup_db.php">Backup</a>
                    <a class="mdl-navigation__link" href="../index.php">Home</a>
                </nav>

            </div>

        </header>
<!--
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Dynamic Content</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="backup/backup_db.php">Backup</a>
                <a class="mdl-navigation__link" href="../index.php">Home</a>
            </nav>
        </div>
-->
        <main class="mdl-layout__content">
            <div class="page-content mdl-shadow--4dp">
                <!--                Floating FAB button -->
                <div>
                    <a href="create_table_layout.php" id="addTable" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored addTable">
                        <img class="material-icons" src="../images/dynamicTables/ic_add_24px.svg" />
<!--                        <i class="material-icons">add</i>-->
                    </a>
                    <div class="mdl-tooltip mdl-tooltip--large" for="addTable">
                        Add New Tables
                    </div>
                </div>

                <?php
   include("database/connection.php");
   mysqli_query ($con,"set character_set_results='utf8'"); 
   $result = mysqli_query($con,"show tables");

   echo "<div class='mdl-grid'>";

        while($table = mysqli_fetch_array($result)) {
            echo "<div class='mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col'>";
            echo "<div class='mdl-card mdl-shadow--2dp demo-card-square'>";
            $tablename1=ucwords($table[0]);
            echo "<a href='table_display.php?q=`$table[0]`'  class='mdl-card__title mdl-card--expand mdl-button mdl-js-button mdl-js-ripple-effect'>";
            echo " <div>";
            echo "<h2 class='mdl-card__title-text'>$tablename1</h2>";
            echo " </div>";
            echo "</a>";
            echo "<div class='mdl-card__actions mdl-card--border'>";
            echo '<button class="mdl-button mdl-js-button mdl-button--primary delete_button1" onClick="myFunction_Delete(\''.$table[0].'\')">Delete Table</button>';
            echo "</div>";
            echo "</div>";
            echo "</div>";
            
        }
           echo "</div>";
?>

            </div>

        </main>
    </div>

    <script>
        function myFunction_Delete(t_name) {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            }, function() {
                swal("Deleted!", "Your  file has been deleted.", "success");
                window.location = "table_delete.php?q=" + t_name;
            });
        }

    </script>


</body>

</html>
