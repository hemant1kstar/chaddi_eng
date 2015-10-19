<?php
         session_start();
         if(!$_SESSION['LoggedIn_user'])
           {
                 header("location:../login_panel/login.php?problem='Not Logged In'");
                 exit;
         }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Nirgam Utara | Paperless System</title>

    <!--    CSS For Material Design-->
    <link rel="stylesheet" href="../css/material.teal-lime.min.css" />
    <script src="../material_js/material.js"></script>
    <link rel="stylesheet" href="../material_js/Material+Icons.css" />
    <link rel="stylesheet" href="../fonts/Roboto+300,400,500,700.css" />

    <!--  End of CSS For Material Design-->

    <link rel="stylesheet" href="../css/main.css">
    <link href='css/utara.css' rel='stylesheet'>

</head>

<body>

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <!-- Top row, always visible -->
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Certificates</span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation"> <a class="mdl-navigation__link" href="../index.php">Home</a> </nav>


            </div>

            <div class="tabs mdl-js-ripple-effect">
                <a href="index.php" class="mdl-layout__tab">Bonafide</a>
                <a href="nirgam_utara.php" class="mdl-layout__tab is-active">Nirgam Utara</a>
                <a href="id_card.php" class="mdl-layout__tab">ID Card</a>
                <a href="tc.php" class="mdl-layout__tab">TC</a>
                <a href="admission_form.php" class="mdl-layout__tab">Admission Form</a>
                <a href="mark_memo.php" class="mdl-layout__tab">11th Mark Memo</a>

            </div>

        </header>



<!--
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Paperless System</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="../index.php">Home</a>
            </nav>
        </div>
-->



        <main class="mdl-layout__content">
            <div class="page-content">
                <!-- Your content goes here -->
                <div class="mdl-shadow--2dp reg_info">
                    <form action="" method="post">
                        <div>
                            <label class="customLabel" id="displayTableRegistrationLabel">Registration No :</label>
                            <?php
include("../database/connection.php");
              $result = mysqli_query($con,"SELECT * FROM master"); 
echo "<select name='reg_no' class='dropdownOptions' required>";
             echo "<option value=''></option>";
            while($row = mysqli_fetch_array($result)){
              $reg_no1=$row['reg_no'];
             echo "<option value='$reg_no1'>$reg_no1</option>";
            }
             echo "</select>";
          ?>
                                <button class="mdl-button mdl-js-button mdl-button--primary mdl-js-ripple-effect" name="submit_student_info" type="submit" id="showCertificateButton">Submit</button>
                        </div>
                    </form>
                </div>

                <?php
                            $reg_no="";;
                            $student_name="";
                            $mother_name="";
                            $religion="";
                            $caste="";
                            $Mother_tongue="";
                            $birth_place="";
                            $birthdate="";
                            $prev_school_name="";
                            $prev_class="";
                            $admission_class="";
                            $admission_date="";
                            $student_progress="";
                            $behaviour="";
                            $school_leaving_class="";
                            $reason="";
                            $date_leaving="";
                            $remark="";
                   if(isset($_POST['submit_student_info']))
                   {


                     $reg_no2=$_POST['reg_no'];
                
                          mysqli_query ($con,"set character_set_results='utf8'"); 
                          $query = mysqli_query($con,"SELECT * FROM master where reg_no='$reg_no2'") or die(mysqli_error());
                          while($row=mysqli_fetch_array($query))
                          {
                            $reg_no=$row['reg_no'];
                            $student_name=$row['student_name'];
                            $mother_name=$row['mother_name'];
                            $religion=$row['religion'];
                            $caste=$row['caste'];
                            $Mother_tongue=$row['Mother_tongue'];
                            $birth_place=$row['birth_place'];
                            $birthdate=$row['birthdate'];
                            $prev_school_name=$row['prev_school_name'];
                            $prev_class=$row['prev_class'];
                            $admission_class=$row['admission_class'];
                            $admission_date=$row['admission_date'];
                            $student_progress=$row['student_progress'];
                            $behaviour=$row['behaviour'];
                            $school_leaving_class=$row['school_leaving_class'];
                            $reason=$row['school_leaving_reason'];
                            $date_leaving=$row['school_leaving_date'];
                            $remark=$row['tc_remark'];
                          }
                   }
                  ?>

                    <div id="dvContents">
                        <div class="main mdl-shadow--4dp" id="mains">
                            <h4 class="headname">विद्यार्थी प्रवेश निर्गम उतारा</h4>
                            <h4 class="schoolname">संत नामदेव  उच्च माध्यमिक विद्यालय, लातूर</h4>
                            <h5 class="place">तालुका: लातूर, जिल्हा: लातूर</h5>
                            <table class="tabledata mdl-data-table mdl-js-data-table">
                                <tr>
                                    <th> रेजिस्ट्रेशन नंबर</th>
                                    <th> विद्यार्थ्याचे नाव </th>
                                    <th>आईचे नाव </th>
                                    <th>धर्म व जात </th>
                                    <th>मातृभाषा </th>
                                    <th>जन्म ठिकाण </th>
                                    <th>जन्म दिनांक (अंकात)</th>
                                    <!--                            <th>जन्म दिनांक (अक्षरी)</th>-->
                                    <th>पूर्वीची शाळा/महाविद्यालय  </th>
                                    <th>पूर्वीचा वर्ग </th>
                                    <th>प्रवेश घेतलेला वर्ग </th>
                                    <th>प्रवेश दिनांक </th>
                                    <th>प्रगती </th>
                                    <th>वर्तणूक </th>
                                    <th> महाविद्यालय सोडल्याचा वर्ग </th>
                                    <th> महाविद्यालय सोडल्याचा दिनांक </th>
                                    <th> महाविद्यालय सोडल्याचे कारण </th>
                                    <th>शेरा</th>
                                </tr>
                                <?php
                       echo "<tr>";
                       echo "<td>$reg_no</td>";
                       echo "<td>$student_name</td>";
                       echo "<td>$mother_name</td>";
                       echo "<td>$religion,$caste</td>";
                       echo "<td>$Mother_tongue</td>";
                       echo "<td>$birth_place</td>";
                       echo "<td>$birthdate</td>";
                       echo "<td>$prev_school_name</td>";
                       echo "<td>$prev_class</td>";
                       echo "<td>$admission_class</td>";
                       echo "<td>$admission_date</td>";
                       echo "<td>$student_progress</td>";
                       echo "<td>$behaviour</td>";
                       echo "<td>$school_leaving_class</td>";
                       echo "<td>$date_leaving</td>";
                       echo "<td>$reason</td>";
                       echo "<td>$remark</td>";
                       echo "</tr>";
                        ?>
                            </table>
                            <h5 class="info">प्रमाणित करण्यात येते की वरील माहिती महाविद्यालयाच्याा नोंदवहीनुसार आहे.</h5>
                            <h5 class="principal">प्राचार्य</h5>
                        </div>
                    </div>

                    <div class="submitButtonDiv">
                        <!--                  <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="print_bonafied" id="btnPrint">Print</button>-->

                        <button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary" id="btnPrint" value="Print">Print Nirgam Utara</button>
                    </div>


            </div>
        </main>

    </div>
    <script type="text/javascript" src="../jquery/jquery-2.1.4.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#btnPrint").click(function() {
                var contents = $("#dvContents").html();
                var frame1 = $('<iframe />');
                frame1[0].name = "frame1";
                frame1.css({
                    "position": "absolute",
                    "top": "-1000000px"
                });
                $("body").append(frame1);
                var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
                frameDoc.document.open();
                //Create a new HTML document.
                frameDoc.document.write('<html><head><title></title>');
                frameDoc.document.write('</head><body>');
                //Append the external CSS file.
                frameDoc.document.write('<link href="css/utara.css" rel="stylesheet" type="text/css" /><link href="css/utaraForPrinting.css" rel="stylesheet" type="text/css" />');
                //Append the DIV contents.
                frameDoc.document.write(contents);
                frameDoc.document.write('</body></html>');
                frameDoc.document.close();
                setTimeout(function() {
                    window.frames["frame1"].focus();
                    window.frames["frame1"].print();
                    frame1.remove();
                }, 500);
            });
        });

    </script>
</body>

</html>
