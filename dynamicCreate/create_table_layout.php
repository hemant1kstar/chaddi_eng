<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mdl/material.min.css">
    <script src="mdl/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
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
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="./index.php">Home</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Title</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="./index.php">Home</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">
        <!-- Your content goes here -->
        <form  method="post" action="create_table.php">
                    
              <div class='mdl-grid'>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                    <input type="text" class="mdl-textfield__input" name="table_name" required placeholder="Enter table name">
                </div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                    <button id="btnAddAddress"  class="mdl-button mdl-js-button mdl-button--primary" type="button">FIELDS ADD</button>
                </div>
      

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript">
            $("#btnAddAddress").click(function () {
              $("#container").append('<div class="mdl-grid"><div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet"><input type="text" class="mdl-textfield__input" placeholder="Enter Field Name" name="check_list1[]" required></div><div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet"><select name="datatype[]"><option value="INTEGER">int</option><option value="VARCHAR(255)">VARCHAR</option><option value="date">DATE</option></select></div></div>');
            });
        </script>
          
          </div>
          
          <div id="container">
          </div>
          
          <div class='mdl-grid'>
    <input type="submit" name="submit"  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
          </div>
    </form>
 
        
      </div>
  </main>
</div>
       
 
    
</body>
</html>