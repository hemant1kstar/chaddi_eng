<?php
         include("database/connection.php");
?>
<html>
    <head>
    <link rel="stylesheet" href="mdl/material.min.css">
    <link rel="stylesheet" href="css/add.css">
    <script src="mdl/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
    <title>Create Tables Page</title>
    
<!--        it must for checkbox select-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    </head>
<body>
    <form name="" method="post" action="createtable.php">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
</body>
</html>