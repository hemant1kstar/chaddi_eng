<!DOCTYPE html>
<html>
  <head>
    <title>Student Exam Panel</title>
<!--    CSS For Material Design-->
<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.indigo-pink.min.css">
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!--    Custom Css-->
    <link rel="stylesheet" href="css/sub_list.css">
    
  </head>
  <body>
  <!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Student Exam Panel</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="index.php">Home</a>
        <a class="mdl-navigation__link" href="">Signout</a>
      </nav>
    </div>
  </header>
<!--
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Title</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
    </nav>
  </div>
-->
  <main class="mdl-layout__content">
    <div class="page-content">
   <div class="mdl-shadow--2dp subject_list_div">
  
     <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" href="index.php">
  Back
</a>
     <h3 class="sublist_heading"> Online Test : Subject List</h3>
     <?php
include("../../database/connection.php");
$rs=mysqli_query($con,"select * from mst_subject");

echo "<div class='mdl-grid'>";
while($row=mysqli_fetch_row($rs))
{
  
        echo "<div class='menu_list mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col'>";
        echo "<div class='mdl-card__title'>";
        echo "<h2 class='mdl-card__title-text'>$row[1]</h2>";
        echo "</div>";
        echo "<div class='mdl-card__actions mdl-card--border'>";
        echo "<a class='mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect' href='exam_test_list.php?subid=$row[0]'>";
        echo "Get Started </a>";
        echo "</div>";
        echo "</div>";
}
echo "</div>";

?>
      </div>

    </div>
  </main>
</div>
  </body>
</html>