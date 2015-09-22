<?php
         session_start();
         if(!$_SESSION['LoggedIn_user'])
           {
                 header("location:login_panel/login.php?problem='Not Logged In'");
                 exit;
         }
    $user_name=$_SESSION['user_name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--    CSS For Material Design-->
    <link rel="stylesheet" href="css/material.red-blue.min.css" />
    <script src="material_js/material.js"></script>
    <link rel="stylesheet" href="material_js/Material+Icons.css" />
    <link rel="stylesheet" href="fonts/Roboto+300,400,500,700.css" />
    <!--  End of CSS For Material Design-->

    <link rel="stylesheet" href="css/styles.css">
    <title>Paperless System</title>

    <!--        it must for checkbox select-->
    <script src="jquery/jquery-2.1.4.min.js"></script>


</head>

<body>



    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Sant Namdev Vidyalaya, Paperless System</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation. We hide it in small screens. -->
                <nav class="mdl-navigation ">
                    <a class="mdl-navigation__link" href="login_panel/logout.php">Logout</a>
                </nav>

            </div>

        </header>
<!--
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Paperless System</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="index.php">Home</a>
            </nav>
        </div>
-->
        <main class="mdl-layout__content">
                           <h5 class="user_name">Hello ,<?php echo $user_name;?></h5>
            <div class="page-content">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                        <div class="mdl-card mdl-shadow--2dp cards_layout">
                            <a href="master_table/index.php" class="mdl-card__title mdl-card--expand mdl-button mdl-js-button mdl-js-ripple-effect" id="studentInformation">
                                <h2 class="mdl-card__title-text">Student Information</h2>
                            </a>
                            <div class="mdl-card__supporting-text">
                                Get Student Information..
                            </div>
                        </div>
                    </div>

                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                        <div class="mdl-card mdl-shadow--2dp cards_layout">
                            <a href="attendance/index.php" class="mdl-card__title mdl-card--expand mdl-button mdl-js-button mdl-js-ripple-effect" id="attendance">
                                <h2 class="mdl-card__title-text"> Student Attendance</h2>
                            </a>
                            <div class="mdl-card__supporting-text">
                                Get Student attendance..
                            </div>
                        </div>
                    </div>

                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                        <div class="mdl-card mdl-shadow--2dp cards_layout">
                            <a href="certificates/index.php" class="mdl-card__title mdl-card--expand mdl-button mdl-js-button mdl-js-ripple-effect" id="certificates">
                                <h2 class="mdl-card__title-text">Student Certificates</h2>
                            </a>
                            <div class="mdl-card__supporting-text">
                                Get Student Certificates..
                            </div>
                        </div>
                    </div>


                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                        <div class="mdl-card mdl-shadow--2dp cards_layout">
                            <a href="student_list/index.php" class="mdl-card__title mdl-card--expand mdl-button mdl-js-button mdl-js-ripple-effect" id="studentLists">
                                <h2 class="mdl-card__title-text">Student List</h2>
                            </a>
                            <div class="mdl-card__supporting-text">
                                Get Student List ..
                            </div>
                        </div>
                    </div>


                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                        <div class="mdl-card mdl-shadow--2dp cards_layout">
                            <a href="teacher_profile/index.php" class="mdl-card__title mdl-card--expand mdl-button mdl-js-button mdl-js-ripple-effect" id="teacherProfile">
                                <h2 class="mdl-card__title-text">Teacher Profile</h2>
                            </a>
                            <div class="mdl-card__supporting-text">
                                Teacher Profile ..
                            </div>
                        </div>
                    </div>


                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                        <div class="mdl-card mdl-shadow--2dp cards_layout">
                            <a href="dynamicCreate/index.php" class="mdl-card__title mdl-card--expand mdl-button mdl-js-button mdl-js-ripple-effect" id="dynamicTables">
                                <h2 class="mdl-card__title-text">Dynamic Information</h2>
                            </a>
                            <div class="mdl-card__supporting-text">
                                Get Dynamic Information ..
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                        <div class="mdl-card mdl-shadow--2dp cards_layout">
                            <a href="sms_gateway/index.php" class="mdl-card__title mdl-card--expand mdl-button mdl-js-button mdl-js-ripple-effect" id="smsGateway">
                                <h2 class="mdl-card__title-text">SMS</h2>
                            </a>
                            <div class="mdl-card__supporting-text">
                                Send SMS to students
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                        <div class="mdl-card mdl-shadow--2dp cards_layout">
                            <a href="monthly_food_report/index.php" class="mdl-card__title mdl-card--expand mdl-button mdl-js-button mdl-js-ripple-effect" id="foodReport">
                                <h2 class="mdl-card__title-text">Food Report</h2>
                            </a>
                            <div class="mdl-card__supporting-text">
                                Get reports on food and grocery
                            </div>
                        </div>
                    </div>
                    
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                        <div class="mdl-card mdl-shadow--2dp cards_layout">
                            <a href="library_system/index.php" class="mdl-card__title mdl-card--expand mdl-button mdl-js-button mdl-js-ripple-effect" id="libraryManagement">
                                <h2 class="mdl-card__title-text">Library Management</h2>
                            </a>
                            <div class="mdl-card__supporting-text">
                                Manage library
                            </div>
                        </div>
                    </div>
                    
                              
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                        <div class="mdl-card mdl-shadow--2dp cards_layout">
                            <a href="transport_system/index.php" class="mdl-card__title mdl-card--expand mdl-button mdl-js-button mdl-js-ripple-effect" id="transportSystem">
                                <h2 class="mdl-card__title-text">Transport System</h2>
                            </a>
                            <div class="mdl-card__supporting-text">
                                Manage transpotation
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <p class="madeBy">Made by <a href="http://www.resoneuronance.com">Team Resoneuronance</a></p>


        </main>

    </div>
    


</body>

</html>
