<?php
         session_start();
         if(!$_SESSION['LoggedIn_teacher'])
           {
                 header("location:../login_panel/login.php?problem='Not Logged In'");
                 exit;
         }
    $user_name=$_SESSION['user_name'];
    $teacher_id=$_SESSION['teacher_id'];
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../css/material.orange-green.min.css" />
        <script src="../material_js/material.min.js"></script>
        <link rel="stylesheet" href="../material_js/Material+Icons.css" />
        <link rel="stylesheet" href="../fonts/Roboto+300,400,500,700.css" />
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
                    <nav class="mdl-navigation ">
                        <a class="mdl-navigation__link" href="index.php">Home</a>
                        <a class="mdl-navigation__link" href="teacher_profile.php">Profile</a>
                        
                        <a class="mdl-navigation__link" href="../login_panel/teacher_logout.php">Logout</a>
                    </nav>
                </div>
            </header>
<!--
            <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">Teacher Panel</span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="index.php">Home</a>
                    <a class="mdl-navigation__link" href="teacher_profile.php">Profile</a>
                    
                    <a class="mdl-navigation__link" href="login/teacher_logout.php">Logout</a>
                </nav>
            </div>
-->
            <main class="mdl-layout__content">
                <h5 class="user_name">Hello,<?php echo $user_name;?></h5>
                <div class="page-content">
                    <!-- Your content goes here -->

                    <?php
                         if (isset($_GET["success_info"]))
                                    {
                                $str=$_GET["success_info"];
                                echo "<div>";
                                echo "$str";
                                echo "</div>";
                         }
                        ?>

                    <div class="contentDiv mdl-shadow--2dp">
                        <a href='index.php' class='mdl-js-button mdl-js-ripple-effect backButton' title='Back'>
                            <img src="../images/dynamicTables/ic_arrow_back_24px.svg" alt="Back" />
                        </a>
                        
                        <a class='editProfile mdl-js-button mdl-js-ripple-effect' href='update_profile.php' title='Edit your profile'>
                            <img class='' src='../images/dynamicTables/ic_edit_24px.svg' alt='Edit Profile'>
                        </a>
                        
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
                         $profile_photo_url=$row['profile_photo_url'];
                         
                         echo "<img class='profilePicture' src='$profile_photo_url' title='Hi, $teacher_profile_name!'  alt='Profile Picture'>";
                         echo "<div>";
                         echo "<table>";
                         
                         echo "<tr>";
                         echo "<td>";
                         echo "<label>Name </label>";
                         echo "</td>";
                         echo "<td>";
                         echo "$teacher_profile_name";
                         echo "</td>";
                         echo "</tr>";
                         
                         echo "<tr>";
                         echo "<td>";
                         echo "<label>Qualification </label>";
                         echo "</td>";
                         echo "<td>";
                         echo "$qualification";
                         echo "</td>";
                         echo "</tr>";
                         
                         echo "<tr>";
                         echo "<td>";
                         echo "<label>Designation </label>";
                         echo "</td>";
                         echo "<td>";
                         echo "$designation";
                         echo "</td>";
                         echo "</tr>";
                         
                         echo "<tr>";
                         echo "<td>";
                         echo "<label>Experience </label>";
                         echo "</td>";
                         echo "<td>";
                         echo "$experience";
                         echo "</td>";
                         echo "</tr>";
                         
                         echo "<tr>";
                         echo "<td>";
                         echo "<label>Subjects </label>";
                         echo "</td>";
                         echo "<td>";
                         echo "$subjects";
                         echo "</td>";
                         echo "</tr>";
                         
                         echo "<tr>";
                         echo "<td>";
                         echo "<label>Other Info </label>";
                         echo "</td>";
                         echo "<td>";
                         echo "$other_info";
                         echo "</td>";
                         echo "</tr>";
                         
                         echo "<tr>";
                         echo "<td>";
                         echo "<label>Training Info </label>";
                         echo "</td>";
                         echo "<td>";
                         echo "$training_info";
                         echo "</td>";
                         echo "</tr>";
                         
                         echo "<tr>";
                         echo "<td>";
                         echo "<label>Date of Appointment </label>";
                         echo "</td>";
                         echo "<td>";
                         echo "$date_of_appointment";
                         echo "</td>";
                         echo "</tr>";                         
                    
                         echo "</table>";
                         echo "</div>";
                     }
                     ?>

                        </div>

                </div>
            </main>
        </div>


    </body>

    </html>
