<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--    CSS For Material Design-->
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.blue-pink.min.css" />
    <script src="material_js/material.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
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
                  <div class="mdl-card__title mdl-card--expand">
                    <h2 class="mdl-card__title-text">Information</h2>
                  </div>
                  <div class="mdl-card__supporting-text">
                     Get Student Information ..
                  </div>
                  <div class="mdl-card__actions mdl-card--border">
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="master_table/index.php">
                      Student Info
                    </a>
                  </div>
                </div>
            </div>
            
              <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card mdl-shadow--2dp cards_layout">
                  <div class="mdl-card__title mdl-card--expand">
                    <h2 class="mdl-card__title-text">Attendance</h2>
                  </div>
                  <div class="mdl-card__supporting-text">
                     Get Student attendance ..
                  </div>
                  <div class="mdl-card__actions mdl-card--border">
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="attendance/index.php">
                      Student Attendance
                    </a>
                  </div>
                </div>
            </div>
                
            <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card mdl-shadow--2dp cards_layout">
                  <div class="mdl-card__title mdl-card--expand">
                    <h2 class="mdl-card__title-text">Certificates</h2>
                  </div>
                  <div class="mdl-card__supporting-text">
                     Get Student Certificates ..
                  </div>
                  <div class="mdl-card__actions mdl-card--border">
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="certificates/index.php">
                      Student Certificates
                    </a>
                  </div>
                </div>
            </div>
                
                    
          <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card mdl-shadow--2dp cards_layout">
                  <div class="mdl-card__title mdl-card--expand">
                    <h2 class="mdl-card__title-text">Student List</h2>
                  </div>
                  <div class="mdl-card__supporting-text">
                     Get Student List ..
                  </div>
                  <div class="mdl-card__actions mdl-card--border">
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="student_list/index.php">
                      Student List
                    </a>
                  </div>
                </div>
         </div>
                
                    
        <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card mdl-shadow--2dp cards_layout">
                  <div class="mdl-card__title mdl-card--expand">
                    <h2 class="mdl-card__title-text">Teacher Profile</h2>
                  </div>
                  <div class="mdl-card__supporting-text">
                     Teacher Profile ..
                  </div>
                  <div class="mdl-card__actions mdl-card--border">
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="teacher_profile/index.php">
                      Teacher Profile
                    </a>
                  </div>
                </div>
        </div>
             
                    
        <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
            <div class="mdl-card mdl-shadow--2dp cards_layout">
                  <div class="mdl-card__title mdl-card--expand">
                    <h2 class="mdl-card__title-text">Dynamic Information</h2>
                  </div>
                  <div class="mdl-card__supporting-text">
                     Get Dynamic Information ..
                  </div>
                  <div class="mdl-card__actions mdl-card--border">
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="dynamicCreate/index.php">
                      Dynamic Info
                    </a>
                  </div>
                </div>
                </div>
        </div>

            </div>

        </main>
    </div>

</body>

</html>
