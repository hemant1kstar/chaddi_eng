<?php
         session_start();
         if(!$_SESSION['LoggedIn'])
           {
                 header("location:login/login.php?problem='Not Logged In'");
                     exit;
         }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <link rel="stylesheet" href="../material_js/material.min.css">
    <script src="../material_js/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <title>Teacher Profile</title>
        
<!--        it must for checkbox select-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    </head>
<body>
            <!-- Always shows a header, even in smaller screens. -->
            <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
                <header class="mdl-layout__header">
                    <div class="mdl-layout__header-row">
                        <!-- Title -->
                        <span class="mdl-layout-title">Teacher Panel</span>
                        <!-- Add spacer, to align navigation to the right -->
                        <div class="mdl-layout-spacer"></div>
                        <!-- Navigation. We hide it in small screens. -->
                        <nav class="mdl-navigation mdl-layout--large-screen-only">
                            <a class="mdl-navigation__link" href="index.php">Home</a>
                            <a class="mdl-navigation__link" href="teacher_profile.php">Teacher Profile</a>
                            <a class="mdl-navigation__link" href="update_profile.php">Update Profile</a>
                            <a class="mdl-navigation__link" href="login/teacher_logout.php">Logout</a>
                        </nav>
                    </div>
                </header>
                <div class="mdl-layout__drawer">
                    <span class="mdl-layout-title">Teacher Panel</span>
                    <nav class="mdl-navigation">
                       <a class="mdl-navigation__link" href="index.php">Home</a>
                       <a class="mdl-navigation__link" href="teacher_profile.php">Teacher Profile</a>
                       <a class="mdl-navigation__link" href="update_profile.php">Update Profile</a>
                       <a class="mdl-navigation__link" href="login/teacher_logout.php">Logout</a>
                    </nav>
                </div>
                <main class="mdl-layout__content">
                    <div class="page-content">
                        <!-- Your content goes here -->
                    </div>
                </main>
            </div>

      
</body>
</html>  
    