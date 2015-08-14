<html>
    <head>
        
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <link rel="stylesheet" href="mdl/material.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="mdl/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
        <title>Index Page</title>
        
<!--        it must for checkbox select-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    </head>
<body>
<?php
   include("database/connection.php");
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
            echo("<a href='table_display.php?q=$table[0]'  class='mdl-button mdl-js-button mdl-button--primary'>Update Table</a>");
            echo "</div>";
            echo "</div>";
            echo "</div>";
            
        }
    
?>

<div class='mdl-cell mdl-cell--4-col'>
    
<div class="mdl-card mdl-shadow--2dp demo-card-square">
  <div class="mdl-card__title mdl-card--expand">
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
    
    </div>
    
    
    </body>
</html>