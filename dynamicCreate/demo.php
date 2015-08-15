<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--    CSS For Material Design-->
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.brown-light_green.min.css" />
    <script src="../material_js/material.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <!--  End of CSS For Material Design-->

    <link rel="stylesheet" href="css/style.css">
    <title>Index Page</title>

    <!--        it must for checkbox select-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
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
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="../index.php">Home</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Dynamic Content</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="../index.php">Home</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <!-- Your content goes here -->
                <?php
   include("database/connection.php");
   $result = mysqli_query($con,"show tables");

   echo "<div class='mdl-grid'>";

        while($table = mysqli_fetch_array($result)) {
            echo "<div class='mdl-cell mdl-cell--4-col'>";
            echo "<div class='mdl-card mdl-shadow--2dp'>";
            echo " <div class='mdl-card__title mdl-card--expand card1'>";
            $tablename1=ucwords($table[0]);
            echo " <h2 class='mdl-card__title-text'>$tablename1</h2>";
            echo " </div>";

            echo "<div class='mdl-card__actions mdl-card--border'>";
//            echo("<a href='table_delete.php?q=$table[0]'  class='mdl-button mdl-js-button mdl-button--primary'>Delete Table</a>");
            echo "<button class='mdl-button mdl-js-button mdl-button--primary' onclick='myFunction_Delete()'>Delete Table</button>";
            echo("<a href='table_display.php?q=$table[0]'  class='mdl-button mdl-js-button mdl-button--primary'>Update Table</a>");

            echo "</div>";
            echo "</div>";
            echo "</div>";
            
        }

?>
                <!-- Colored FAB button with ripple -->

                    <div class='mdl-cell mdl-cell--4-col'>

                        <div class="mdl-card mdl-shadow--2dp">
                            <div class="mdl-card__title mdl-card--expand card1">
                                <h2 class="mdl-card__title-text">Add Tables</h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                To add any dept info.
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <!-- Accent-colored raised button with ripple -->
                                <a href="create_table_layout.php" class="mdl-button mdl-js-button mdl-button--primary">
      Add Tables
    </a>
                            </div>
                        </div>
                    </div>
                    <?php  echo "</div>";?>
            </div>

        </main>
    </div>

<script>
function myFunction_Delete() {
    if (confirm("Do you want to delete!") == true) {
      window.location="table_delete.php?q=<?php echo $table[0]?>";
    }
}
</script>

<!--
    <script>
    $(document).ready(function() {
    $('.card1').each(function () {
    	var hue = 'rgb(' + (Math.floor((256-199)*Math.random()) + 200) + ',' + (Math.floor((256-199)*Math.random()) + 200) + ',' + (Math.floor((256-199)*Math.random()) + 200) + ')';
    	$(this).css("background-color", hue);
    });
});
    </script>
-->
   <script>
    $(document).ready(function() {
    $('.card1').each(function () {
    var colors = ["#2196F3", "#3F51B5", "#673AB7", "#F44336", "#E91E63","#9C27B0","#00BCD4","#03A9F4","#009688","#4CAF50","#FFEB3B","#FF5722"];
    var rand = Math.floor(Math.random() * colors.length);
    $(this).css("background-color", colors[rand]);
    });
});
    </script>
    
</body>

</html>
