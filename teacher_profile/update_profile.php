<?php
         session_start();
         if(!$_SESSION['LoggedIn'])
           {
                 header("location:login/login.php?problem='Not Logged In'");
                     exit;
         }
 $teacher_id=$_SESSION['teacher_id'];
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.orange-green.min.css">
        <script src="../material_js/material.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
        <title>Teacher Profile</title>

        <!--        it must for checkbox select-->
        <script src="../jquery/jquery-2.1.4.min.js"></script>

        <link rel="stylesheet" href="css/teacher_profile.css" />
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
                        <a class="mdl-navigation__link" href="teacher_profile.php">Profile</a>
                        
                        <a class="mdl-navigation__link" href="login/teacher_logout.php">Logout</a>
                    </nav>
                </div>
            </header>
            <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">Teacher Panel</span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="index.php">Home</a>
                    <a class="mdl-navigation__link" href="teacher_profile.php">Profile</a>
                    
                    <a class="mdl-navigation__link" href="login/teacher_logout.php">Logout</a>
                </nav>
            </div>
            <main class="mdl-layout__content">
                <div class="page-content">
                    <!-- Your content goes here -->
                    <h2 class="contentHeader">Update Profile</h2>
                    <div class="contentDiv mdl-shadow--2dp">
                        
                        <a href='teacher_profile.php' class='mdl-js-button mdl-js-ripple-effect backButton' title='Back'>
                            <img src="../images/dynamicTables/ic_arrow_back_24px.svg" alt="Back" />
                        </a>

                        <form action="php/teacher_update_profile.php" method="post">
                            <?php
                     include("../database/connection.php");
                      mysqli_query ($con,"set character_set_results='utf8'"); 
                     $sql="SELECT * from teacher_profile where teacher_id='$teacher_id'";
                     $result = mysqli_query($con,$sql);
                     while($row = mysqli_fetch_array($result))
                     {
                        $teacher_profile_name=$row['teacher_name'];
                         $qualification=$row['qualification'];
                         $designation=$row['designation'];
                         $experience=$row['experience'];
                         $subjects=$row['subjects'];
                         $other_info=$row['other_info'];
                         $training_info=$row['training_info'];
                         $date_of_appointment=$row['date_of_appointment'];
                         
                         echo "<div>";
                         echo "<table>";

                         echo "<tr>";
                         echo "<td>";
                         echo "<label>Teacher Name </label>";
                         echo "</td>";
                         echo "<td>";
                         echo "<input type='text' class='mdl-textfield__input' value='$teacher_profile_name' name='teacher_name'/>";
                         echo "</td>";
                         echo "</tr>";
                         
                         echo "<tr>";
                         echo "<td>";
                         echo "<label>Qualification </label>";
                         echo "</td>";
                         echo "<td>";
                         echo "<input type='text' class='mdl-textfield__input' value='$qualification' name='qualification'/>";
                         echo "</td>";
                         echo "</tr>";
                         
                         echo "<tr>";
                         echo "<td>";
                         echo "<label>Designation </label>";
                         echo "</td>";
                         echo "<td>";
                         echo "<input type='text' class='mdl-textfield__input' value='$designation' name='designation'/>";
                         echo "</td>";
                         echo "</tr>";
                         
                         echo "<tr>";
                         echo "<td>";
                         echo "<label>Experience </label>";
                         echo "</td>";
                         echo "<td>";
                         echo "<input type='text' class='mdl-textfield__input' value='$experience' name='experience'/>";
                         echo "</td>";
                         echo "</tr>";
                         
                         echo "<tr>";
                         echo "<td>";
                         echo "<label>Subjects </label>";
                         echo "</td>";
                         echo "<td>";
                         echo "<input type='text' class='mdl-textfield__input' value='$subjects' name='subjects'/>";
                         echo "</td>";
                         echo "</tr>";
                         
                         echo "<tr>";
                         echo "<td>";
                         echo "<label>Other Info </label>";
                         echo "</td>";
                         echo "<td>";
                         echo "<input type='text' class='mdl-textfield__input' value='$other_info' name='other_info'/>";
                         echo "</td>";
                         echo "</tr>";
                         
                         echo "<tr>";
                         echo "<td>";
                         echo "<label>Training Info </label>";
                         echo "</td>";
                         echo "<td>";
                         echo "<input type='text' class='mdl-textfield__input' value='$training_info' name='training_info'/>";
                         echo "</td>";
                         echo "</tr>";
                         
                         echo "<tr>";
                         echo "<td>";
                         echo "<label>Date of Appointment </label>";
                         echo "</td>";
                         echo "<td>";
                         echo "<input type='text' class='mdl-textfield__input' value='$date_of_appointment' name='date_of_appointment'/>";
                         echo "</td>";
                         echo "</tr>";
                         
                         echo "</table>";
                         echo "</div>";
                         
         
                     }
                     ?>

                                <div class="updateButton">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent mdl-js-ripple-effect" type="submit" name="teacher_profile_update">Update</button>
                                </div>
                        </form>
                    </div>

                    <h2 class="contentHeader">Update Profile Photo</h2>
                    <div class="mdl-shadow--2dp">
                        <form action="php/teacher_update_photo.php" method="post" enctype="multipart/form-data">
                            <input type='file' class='' name='profile_photo' required/>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent mdl-js-ripple-effect" type="submit" name="teacher_profile_photo">Upload</button>
                        </form>
                    </div>

                </div>
            </main>
        </div>


    </body>

    </html>
