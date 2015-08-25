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
                <span class="mdl-layout-title">Paperless System</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation. We hide it in small screens. -->
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="index.php">Home</a>
                </nav>

            </div>

        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Paperless System</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="index.php">Home</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
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
                </div>

            </div>

        </main>
    </div>

</body>

</html>
