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
            echo "<div class='mdl-card mdl-shadow--2dp demo-card-square'>";
            echo " <div class='mdl-card__title mdl-card--expand'>";
            $tablename1=ucwords($table[0]);
            echo " <h2 class='mdl-card__title-text'>$tablename1</h2>";
            echo " </div>";
            echo "<div class='mdl-card__actions mdl-card--border'>";
//            echo("<a href='table_delete.php?q=$table[0]'  class='mdl-button mdl-js-button mdl-button--primary'>Delete Table</a>");
            echo "<button class='mdl-button mdl-js-button mdl-button--primary' onclick='myFunction_Delete()'>Delete</button>";
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
<!--                </div>-->
              </main>
</div>
  
  
<script>
function myFunction_Delete() {
    if (confirm("Do you want to delete!") == true) {
      window.location="table_delete.php?q=<?php echo $table[0] ;?>";
    }
}
</script>
    
    </body>
</html>