<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../css/material.orange-green.min.css" />
    <script src="../../material_js/material.min.js"></script>
    <link rel="stylesheet" href="../../material_js/Material+Icons.css" />
    <link rel="stylesheet" href="../../fonts/Roboto+300,400,500,700.css" />
    <title>Teacher Profile</title>

    <!-- CSS and JS for Snackbar -->
    <link href="css/snackbar.min.css" rel="stylesheet">
    <link href="material_js/material_for_snackbar.css" rel="stylesheet">
    <script src="material_js/snackbar.min.js" type="text/javascript"></script>
    <!-- End of CSS and JS for Snackbar -->

    <!--        it must for checkbox select-->
    <script src="../../jquery/jquery-2.1.4.min.js"></script>

    <link rel="stylesheet" href="../css/login.css" />
</head>

<body>
    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Teacher Login</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation. We hide it in small screens. -->
                <nav class="mdl-navigation ">
                    <a class="mdl-navigation__link" href="../../index.php">Home</a>
                </nav>
            </div>
        </header>
<!--
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Login</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="../../index.php">Home</a>
            </nav>
        </div>
-->
        <main class="mdl-layout__content">
            <div class="page-content">
                <!-- Your content goes here -->

                <div class="loginBlock mdl-shadow--2dp">
                    <h2>Login</h2>
                    <!-- Textfield with Floating Label -->

                    <form action="<?php echo htmlspecialchars('welcome.php');?>" method="post">
                        <div class="inputDiv">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="username" name="teachuser" />
                                <label class="mdl-textfield__label" for="username">Username</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                                <input class="mdl-textfield__input" type="password" id="password" name="teachpass" />
                                <label class="mdl-textfield__label" for="password">Password</label>
                            </div>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" name="submitteacher">Submit</button>
                        </div>
                    </form>

                </div>

                <p class="loginStatus">
                    <?php
                      if (isset($_GET["problem"]))
                        {
                           $problem=$_GET["problem"];
                           echo $problem; 
//                           echo "<script type='text/javascript'> $( document ).ready(function() {
//                        $.snackbar({content: 'Student details were entered successfully', timeout: 5000});});
//                           </script>" ;

                         }
                   ?>
                </p>
            </div>
        </main>
    </div>


</body>

</html>
