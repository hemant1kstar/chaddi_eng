<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mdl/material.min.css">
    <link rel="stylesheet" href="css/add.css">
    <script src="mdl/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
    <title>Create Tables Page</title>

    </head>
<body>
<?php
         include("database/connection.php");
?>
    <div class="mdl-shadow--2dp">
        <form action="createtable.php" method="post">
        <div class="mdl-grid">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                         <input class="mdl-textfield__input" type="text" id="table_name" name="table_name"/>
                         <label class="mdl-textfield__label" for="table_name">Enter Table Name</label>
                    </div>
          </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
           <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" id="btn_add_fields">
            Add Fields
           </button>
        </div>
      </div>
        
       <div class="mdl-grid" id="add_fields_div">
 

        </div>
        
        <div class="mdl-grid">
    <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" name="submit"/>
        </div>
        </form>
  </div>
<!--
    <form name="" method="post" action="createtable.php">

            <table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp dataadd" id="container">
                <tr>
                <th class='mdl-data-table__cell--non-numeric' colspan="2">Enter TAble Name</th>
                <th class='mdl-data-table__cell--non-numeric'>
                    <input type="text" class="mdl-textfield__input" name="table_name" required placeholder="Enter table name">
                </th>
                    <th class='mdl-data-table__cell--non-numeric'></th>
                </tr>
                
                <tr>
                    <th class='mdl-data-table__cell--non-numeric'></th>
                <th>
                    <button id="btnAddAddress"  class="mdl-button mdl-js-button mdl-button--raised" type="button">FIELDS ADD</button>
                </th>
                </tr>
            </table>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript">
            $("#btnAddAddress").click(function () {
              $("#container").append('<tr><td class="mdl-data-table__cell--non-numeric">Enter Column Name</td><td><input type="text" class="mdl-textfield__input" placeholder="Fields Name" name="check_list1[]" required></td><td><select name="datatype[]"><option value="INTEGER">int</option><option value="VARCHAR(255)">VARCHAR</option><option value="date">DATE</option></select></td></table>');
            });
        </script>
            <table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp submittable">  
                <tr>
                    <td class='mdl-data-table__cell--non-numeric'>
                 <input type="submit" name="submit"  class="mdl-button mdl-js-button mdl-button--raised sub">
                    </td>
                </tr>
            </table>  
    </form>
-->
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>   
    <script type="text/javascript">
            $("#btn_add_fields").click(function () {
              $("#add_fields_div").append('<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--6-col"><input class="mdl-textfield__input" type="text" id="column_name" name="check_list1[]"/><label class="mdl-textfield__label" for="column_name">Enter Filed Name</label></div><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--6-col"><select name="datatype[]"><option value="INTEGER">int</option><option value="VARCHAR(255)">VARCHAR</option><option value="date">DATE</option></select></div>');
            });
        </script>
</body>
</html>