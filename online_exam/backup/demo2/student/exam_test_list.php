<!DOCTYPE html>
<html>
  <head>
    <title>Student Exam Panel</title>
<!--    CSS For Material Design-->
<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.indigo-pink.min.css">
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!--    Custom Css-->
    <link rel="stylesheet" href="css/test_list.css">
    
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
    <div class="mdl-shadow--2dp test_list_div">
      
  <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" href="exam_subject_list.php">
  Back
</a>
      <?php
        include("../connection.php");
        $subid=$_GET['subid'];
        $rs1=mysqli_query($con,"select * from mst_subject where sub_id=$subid");
        $row1=mysqli_fetch_array($rs1);
        echo "<h3 class='test_heading'>$row1[1]</h3>";
        $rs=mysqli_query($con,"select * from mst_test where sub_id=$subid");
        if(mysqli_num_rows($rs)<1)
        {
            echo "<h4 class='test_sub_head'> No Quiz for this Subject </h4>";
            exit;
        }
        echo "<h4 class='test_sub_head'> Select Test</h4>";

        while($row=mysqli_fetch_row($rs))
        {
            echo "<a href='exam_start.php?testid=$row[0]&subid=$subid' class='mdl-button mdl-js-button  mdl-js-ripple-effect mdl-button--colored test_list'>$row[2]</a>";
        }
      ?>
    </div>

    </div>
  </main>
</div>
  </body>
</html>