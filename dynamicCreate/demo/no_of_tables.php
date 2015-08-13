    <link rel="stylesheet" href="mdl/material.min.css">
    <link rel="stylesheet" href="css/add.css">
    <script src="mdl/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 

<?php
        include("database/connection.php");

$result = mysqli_query($con,"show tables");
        echo "<table class='mdl-data-table mdl-js-data-table  mdl-shadow--2dp dataadd'>";
        
        echo "<tr><th class='mdl-data-table__cell--non-numeric'>List Of Tables</th><th class='mdl-data-table__cell--non-numeric'></th></tr>";
        while($table = mysqli_fetch_array($result)) { 
            echo("<tr><td class='buttons'><button type='button' class='mdl-button mdl-js-button mdl-button--raised abutton'><a href='table_display.php?q=$table[0]'>$table[0]</a></button></td>");
        }
        echo "</tr></table>";
?>
