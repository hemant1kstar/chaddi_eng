<?php
         session_start();
         if(!$_SESSION['LoggedIn_SMS'])
           {
                 header("location:login/login.php?login_problem='Not Logged In'");
                     exit;
         }
?>

    <?php
 $comment = $comment1 = $url = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
   
   

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

  
     if (empty($_POST["comment1"])) {
     $comment1 = "";
   } else {
     $comment1 = test_input($_POST["comment1"]);
   }
    
 $comment1 = urlencode($comment1); 
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
    
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link rel="stylesheet" href="../css/material.blue_grey-light_blue.min.css" />            
            <script src="../material_js/material.min.js"></script>
            <link rel="stylesheet" href="../material_js/Material+Icons.css" />
            <link rel="stylesheet" href="../fonts/Roboto+300,400,500,700.css" />
            <title>SMS Panel</title>

            <!-- CSS and JS for Jquery datepicker -->
            <link rel="stylesheet" href="../jquery-ui-1.11.4.custom/jquery-ui.min.css" />
            <script src="../jquery/jquery-2.1.4.min.js"></script>
            <script src="../jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
            <!-- End of CSS and JS for Jquery datepicker -->
            <link rel="stylesheet" href="css/style.css">

            <!--        it must for checkbox select-->
            <script src="../jquery/jquery-2.1.4.min.js"></script>
        </head>

        <body>
            <!-- Always shows a header, even in smaller screens. -->
            <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
                <header class="mdl-layout__header">
                    <div class="mdl-layout__header-row">
                        <!-- Title -->
                        <span class="mdl-layout-title">SMS Panel</span>
                        <!-- Add spacer, to align navigation to the right -->
                        <div class="mdl-layout-spacer"></div>
                        <!-- Navigation. We hide it in small screens. -->
                        <nav class="mdl-navigation ">
                            <a class="mdl-navigation__link" href="index.php">Home</a>

                            <a class="mdl-navigation__link" href="login/smsgateway_logout.php">Logout</a>
                        </nav>
                    </div>
                </header>
<!--
                <div class="mdl-layout__drawer">
                    <span class="mdl-layout-title">SMS Panel</span>
                    <nav class="mdl-navigation">
                        <a class="mdl-navigation__link" href="index.php">Home</a>
                        <a class="mdl-navigation__link" href="login/smsgateway_logout.php">Logout</a>
                    </nav>
                </div>
-->
                <main class="mdl-layout__content">
                    <div class="page-content">
                        <!-- Your content goes here -->

                        <div id="get_student_div">

                            <form action="" method="post">
                                <div class="mdl-grid">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <label>Select the Class</label>
                                        <select name="student_class1" required>
                                            <option value=""></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <label class="customLabel">Date :</label>
                                        <input type="date" name="attendance_date" class="dropdownOptions" id="datepicker" required>

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                        <label class="customLabel"> Timing:
                                            <select name='attendance_timing' class="dropdownOptions" required>
                                                <option></option>
                                                <option value='Morning'>Morning</option>
                                                <option value='Afternoon'>Afternoon</option>
                                            </select>
                                        </label>

                                    </div>
                                </div>

                                <input type="submit" name="submit_details" value="Get Student" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">

                                <button id='button2' onClick='addallmob()' class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Get All Student</button>
                            </form>

                            <?php

if(isset($_POST['submit_details']))
{
                         $student_class=$_POST['student_class1'];
                         $student_attendance_date=$_POST['attendance_date'];
                         $student_attendance_timing=$_POST['attendance_timing'];
    
                        $student_attendance_date1= strtotime($student_attendance_date);
                        $student_attendance_date1=date('d/m/Y',  $student_attendance_date1);
                         echo "<h4>Absent Student List For date:$student_attendance_date1</h4>";
                         echo "<h6>Class : $student_class</h6>";
                         echo "<h6>Tming : $student_attendance_timing</h6>";
                         include("../database/connection.php");
                    mysqli_query ($con,"set character_set_results='utf8'");
                    $sql="SELECT * FROM attendance where date='$student_attendance_date' and timing='$student_attendance_timing'";
                    $result = mysqli_query($con,$sql);
//                    $reg_no_array="";
                    $count_regno=0;
                   while($row = mysqli_fetch_array($result)) {
                  $reg_no_array[$count_regno]=$row['reg_no'];
                  $count_regno++;
                  }

    
        if(isset($reg_no_array)){
            
             echo  "<div class='mdl-cell mdl-cell--8-col-tablet mdl-cell--12-col'>";
             echo "<table  class='mdl-data-table mdl-js-data-table mdl-shadow--2dp'>
                    <thead><tr><th>Reg No.</th>
                    <th class='mdl-data-table__cell--non-numeric'>Student Name</th>
                    <th>Mobile No.</th><th>ADD</th></tr></thead><tbody>";
            
    foreach($reg_no_array as $s_reg_no){
        mysqli_query ($con,"set character_set_results='utf8'");
        $sql1="SELECT * FROM master where current_class='$student_class'";
        $result1 = mysqli_query($con,$sql1);
         while($row1 = mysqli_fetch_array($result1)) {
                            $student_mob_no=$row1['contact_no'];
                            $student_name=$row1['student_name'];
                            $stud_reg_no=$row1['reg_no'];
             if($s_reg_no==$stud_reg_no)
             {
             echo "<tr><td>$stud_reg_no</td>";
             echo "<td>$student_name</td>";
             echo "<td>$student_mob_no</td>";
             echo "<td><button id='button1' onClick='addmob($student_mob_no)' class='mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect'>ADD</button></td></tr>";
             }
                  }
    
    }
    echo "</tbody></table>";
    echo "</div>";
}else{
        echo "Attendance list is Empty..";
        }

}
  ?>
                        </div>


                        <div id="student_display">

                            <h3>Bulk SMS Facility</h3>

                            <form method="post" action="send.php" name="myform" id="id2">
                                <b>Numbers:</b>
                                <br/>
                                <textarea name="comment" rows="5" cols="60" id="textarea1">
                                    <?php echo $comment;?>
                                </textarea>
                                <br>
                                <br>
                                <b> Message:</b>
                                <br/>
                                <textarea name="comment1" rows="15" cols="60">
                                    <?php echo $comment1;?>
                                </textarea>
                                <br>
                                <input type="reset" name="reset" value="Clear" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                                <input type="submit" name="submit" value="Send Message" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">

                            </form>


                            <!----End OF The Bulk SMS FORM---->


                        </div>



                    </div>
                </main>
            </div>


            <!--To Fetch Data From Table-->
            <script>
                //function showUser(str) {
                //    if (str == "") {
                //        document.getElementById("txtHint").innerHTML = "";
                //        return;
                //    } else { 
                //        if (window.XMLHttpRequest) {
                //            // code for IE7+, Firefox, Chrome, Opera, Safari
                //            xmlhttp = new XMLHttpRequest();
                //        } else {
                //            // code for IE6, IE5
                //            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                //        }
                //        xmlhttp.onreadystatechange = function() {
                //            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                //                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                //            }
                //        }
                //        xmlhttp.open("GET","get_student.php?s_class="+str,true);
                //        xmlhttp.send();
                //    }
                //}
                function addallmob() {
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.myform.textarea1.value += xmlhttp.responseText;

                        }
                    }
                    xmlhttp.open("GET", "allstud.php", true);
                    xmlhttp.send();
                }

            </script>


            <script>
                function addmob(mob1) {
                    document.myform.textarea1.value += mob1 + ',';
                }

            </script>

            <script>
                $(function() {
                    $('#datepicker').datepicker({
                        dateFormat: 'dd-mm-yy',
                        minDate: 0
                    });
                });

            </script>

        </body>

        </html>
