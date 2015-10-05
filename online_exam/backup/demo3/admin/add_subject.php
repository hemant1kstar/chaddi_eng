<!DOCTYPE html>
<html>
  <head>
    <title>Admin Panel</title>
<!--    CSS For Material Design-->
<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.indigo-pink.min.css">
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!--    Custom Css-->
    <link rel="stylesheet" href="css/add_subject.css">
    
  </head>
  <body>
  <!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Admin Panel</span>
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
  <?php
      if(isset($_GET['success_info']))
      {
        $success_info=$_GET['success_info'];
        echo "$success_info";
      }
      ?>
      <div class="add_subject_menu mdl-shadow--2dp">
        <h5>Enter the subject name</h5>
              <form action="add_subject_confirm.php" method="post">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="subject_name" id="subject_name" name="subject_name" required/>
                  <label class="mdl-textfield__label" for="subject_name">Subject Name</label>
                </div>
                
          <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="add_sub">
  Submit
</button>
              </form>
      </div>
    </div>
  </main>
</div>
  </body>
</html>