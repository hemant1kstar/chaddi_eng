<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/material.brown-light_green.min.css" />
    <script src="../material_js/material.js"></script>
    <link rel="stylesheet" href="../material_js/Material+Icons.css" />
        <link rel="stylesheet" href="../fonts/Roboto+300,400,500,700.css" />

    
    <link rel="stylesheet" href="css/create_table_layout.css" />
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
                    <nav class="mdl-navigation ">
                        <a class="mdl-navigation__link" href="./index.php">Home</a>
                    </nav>
                </div>
            </header>
<!--
            <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">Title</span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="./index.php">Home</a>
                </nav>
            </div>
-->
            <main class="mdl-layout__content">
                <div class="page-content">
                    <!-- Your content goes here -->

                    <h2 class="contentHeader">Create New Table</h2>
                    <div class="contentDiv">
                        <a href='index.php' class='mdl-js-button mdl-js-ripple-effect backButton' title='Back'>
                            <img src="../images/dynamicTables/ic_arrow_back_24px.svg" alt="Back" />
                        </a>
                        <form method="post" action="create_table.php">

                            <div class="mdl-textfield mdl-js-textfield">
                                <input type="text" class="mdl-textfield__input" name="table_name" placeholder="Enter table name" required />
                                <label class="mdl-textfield__label"></label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield">
                                <input type="text" class="mdl-textfield__input" name="check_list1[]" placeholder="Enter Field Name" required>
                            </div>
                            <input type="hidden" name="datatype[]" value="VARCHAR(255)">

                            <div id="container">
                            </div>

                            <button id="btnAddAddress" class="mdl-button mdl-js-button mdl-button--primary" type="button">ADD more Fields</button>


                            <div id="submitButton">
                                <input type="submit" name="submit" value="Create" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                            </div>

                        </form>
                    </div>

                </div>
            </main>
        </div>

        <script type="text/javascript" src="../jquery/jquery-2.1.4.min.js"></script>
        <script type="text/javascript">
            $("#btnAddAddress").click(function() {
                $("#container").append('<div class="mdl-textfield mdl-js-textfield"><input type="text" class="mdl-textfield__input" name="check_list1[]" placeholder="Enter Field Name" required></div><input type="hidden" name="datatype[]" value="VARCHAR(255)">');
            });

        </script>

</body>

</html>
