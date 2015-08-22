<?php
         session_start();
         if(!$_SESSION['LoggedIn'])
           {
                 header("location:login/login.php?problem='Not Logged In'");
                     exit;
         }
    $teacher_id=$_SESSION['teacher_id'];
?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../css/material.orange-green.min.css" />
        <script src="../material_js/material.min.js"></script>
        <link rel="stylesheet" href="../material_js/Material+Icons.css" />
        <link rel="stylesheet" href="../fonts/Roboto+300,400,500,700.css" />
        <title>Teacher Profile</title>
        <link rel="stylesheet" href="css/style.css">

        <!--        it must for checkbox select-->
        <script src="../jquery/jquery-2.1.4.min.js"></script>
    </head>

    <body>
        <!-- Always shows a header, even in smaller screens. -->
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <header class="mdl-layout__header">
                <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title">Teacher Panel</span>
                    <!-- Add spacer, to align navigation to the right -->
                    <div class="mdl-layout-spacer"></div>
                    <!-- Navigation. We hide it in small screens. -->
                    <nav class="mdl-navigation mdl-layout--large-screen-only">
                        <a class="mdl-navigation__link" href="index.php">Home</a>
                        <a class="mdl-navigation__link" href="teacher_profile.php">Profile</a>
                        
                        <a class="mdl-navigation__link" href="login/teacher_logout.php">Logout</a>
                    </nav>
                </div>
            </header>
            <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">Teacher Panel</span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="index.php">Home</a>
                    <a class="mdl-navigation__link" href="teacher_profile.php">Profile</a>
                    
                    <a class="mdl-navigation__link" href="login/teacher_logout.php">Logout</a>
                </nav>
            </div>
            <main class="mdl-layout__content">
                <div class="page-content">
                    <!-- Your content goes here -->

                    <div>
                        <a href="create_table_layout.php" id="addTable" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored addTable">
                            <i class="material-icons">add</i>
                        </a>
                        <div class="mdl-tooltip mdl-tooltip--large" for="addTable">
                            Add New Tables
                        </div>
                    </div>

                    <?php
   include("database/connection.php");
//   $db_selected = mysqli_select_db($con,"teacher_$teacher_id");
   $result = mysqli_query($con,"show tables");

   echo "<div class='mdl-grid'>";

        while($table = mysqli_fetch_array($result)) {
            echo "<div class='mdl-cell mdl-cell--4-col'>";
            echo "<div class='mdl-card mdl-shadow--2dp demo-card-square'>";
            echo " <div class='mdl-card__title mdl-card--expand'>";
            $tablename1=ucwords($table[0]);
            echo " <h2 class='mdl-card__title-text'>$tablename1</h2>";
            echo " </div>";

            echo "<div class='mdl-card__actions mdl-card--border'>";
            echo("<a href='table_delete.php?q=`$table[0]`'  class='mdl-button mdl-js-button mdl-button--primary'>Delete Table</a>");
            echo("<a href='table_display.php?q=`$table[0]`'  class='mdl-button mdl-js-button mdl-button--primary'>Update Table</a>");
            echo "</div>";
            echo "</div>";
            echo "</div>";
            
        }

?>

                        <?php  echo "</div>";?>

                </div>
            </main>
        </div>


    </body>

    </html>
