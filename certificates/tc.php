<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>TC Certificate | Paperless System</title>

    <!--    CSS For Material Design-->
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.blue-pink.min.css" />
    <script src="../material_js/material.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">

    <!--  End of CSS For Material Design-->

    <link rel="stylesheet" href="../css/main.css">
    <link href='../certificates/css/tc.css' rel='stylesheet'>


</head>

<body>
    <!--    Waterfall header-->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <!-- Top row, always visible -->
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Certificates</span>
                
                
            </div>

            <div class="tabs mdl-js-ripple-effect">
                <a href="index.php" class="mdl-layout__tab">Certificate</a>
                <a href="bonafied.php" class="mdl-layout__tab">Bonafide</a>
                <a href="nirgam_utara.php" class="mdl-layout__tab">Nirgam Utara</a>
                <a href="id_card.php" class="mdl-layout__tab">ID Card</a>
                <a href="tc.php" class="mdl-layout__tab is-active">TC</a>
            </div>

        </header>



        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Paperless System</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="master.php">Master</a>
                <a class="mdl-navigation__link" href="index.php">Entry</a>
            </nav>
        </div>



        <main class="mdl-layout__content">
            <div class="page-content">
                <!-- Your content goes here -->
                <div class="mdl-shadow--2dp reg_info">
                    <form action="" method="post">
                        <div>
                            <label class="customLabel" id="displayTableRegistrationLabel">Registration No for test:</label>
                            <?php
include("../connection.php");
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
                            $tc_no="";
                            $reg_no1="";
                            $date_issued="";
                            $student_name=""; 
                            $motername="";
                            $religion="";
                            $caste=""; 
                            $nationality="";
                            $birth_place="";
                            $birth_district="";
                            $birth_state="";
                            $birthdate="";
                            $prev_school_name="";
                            $admission_date=""; 
                            $student_progress="";
                            $behaviour="";
                            $date_leaving="";
                            $reason="";
                            $class="";
                            $remark="";
                         


                  
                   if(isset($_POST['submit_student_info']))
                   {


                     $reg_no2=$_POST['reg_no'];
                
                          mysqli_query ($con,"set character_set_results='utf8'"); 
                          $query = mysqli_query($con,"SELECT * FROM master where reg_no='$reg_no2'") or die(mysqli_error());
                          while($row=mysqli_fetch_array($query))
                          {
                            $tc_no=$row['tc_no'];
                            $reg_no1=$row['reg_no'];
                            $date_issued=$row['tc_date'];
                            $student_name=$row['student_name']; 
                            $motername=$row['mother_name'];
                            $religion=$row['religion'];
                            $caste=$row['caste'];
//                            $nationality=$row['nationality'];
                            $birth_place=$row['birth_place'];
                            $birth_district=$row['district'];
                            $birth_state=$row['state'];
                            $birthdate=$row['birthdate'];
                            $prev_school_name=$row['prev_school_name'];
                            $admission_date=$row['admission_date']; 
                            $student_progress=$row['student_progress'];
                            $behaviour=$row['behaviour'];
                            $date_leaving=$row['school_leaving_date'];
                            $reason=$row['school_leaving_reason'];
                            $class=$row['school_leaving_class'];
                            $remark=$row['tc_remark'];
                         
                          }
                   }
                  ?>


                    <div id="dvContents">
                        <div class="main mdl-shadow--4dp" id="mains">
                            <h3 class="schoolname">संत नामदेव प्राथमिक / माध्यमिक / उच्चमाध्यमिक विद्यालय, लातूर </h3>
                            <h5 class="place">तालुका: लातूर, जिल्हा: लातूर </h5>
                            <div class="numbersDiv">
                                <p id="tcNumberDiv">नंबर  : <?php echo"$tc_no";?></p>
                                <p id="registerNumberDiv">रेजिस्टर नंबर  :  <?php echo"$reg_no1";?></p>
                                <p id="dateNumberDiv">दिनांक  :  <?php echo"$date_issued";?></p>
                            </div>
                            <div class="tc_info1">
                                <p><span>१) विधाथ्याचे संपूर्ण नाव  :   </span><?php echo"$student_name"?></p>
                                <p><span>२) आईचे नाव  :   </span><?php echo "$motername";?></p>
                                <p><span>३) धर्म व जात (उपजातीसह) :  </span><?php echo "$religion-$caste";?></p>
                                <p><span>४) राष्ट्रीयत्व  :  भारतीय</span></p>
                                <p><span>५) जन्मस्थान  : </span><?php echo "$birth_place,$birth_district,$birth_state";?></p>
                                <p><span>६) जन्मदिनांक अंक व अक्षरी  : </span><?php echo "$birthdate";?></p>
                                <p><span>७) पूर्वी शिकत असलेली शाळा  : </span><?php echo "$prev_school_name";?></p>
                                <p><span>८) प्रवेश दिनांक  : </span><?php echo "$admission_date";?></p>
                                <p><span>९) प्रगती  : </span><?php echo "$student_progress";?></p>
                                <p><span>१०) वर्तणूक  : </span><?php echo "$behaviour";?></p>
                                <p><span>११) शाळा सोडण्याचा दिनांक  : </span><?php echo "$date_leaving";?></p>
                                <p><span>१२) शाळा सोडण्याचे कारण   : </span><?php echo "$reason";?></p>
                                <p><span>१३) कोणत्या वर्गात शिकत होता, केव्हापासून   : </span><?php echo "$class";?></p>
                                <p><span>१४) शेरा    : </span><?php echo "$remark";?></p>
                            </div>
                            <p>प्रमाणित करण्यात येते की, वरील सर्व माहिती शाळेच्या अधिकृत नोंदणीप्रमाणे देण्यात आली आहे.</p>

                            <div class="lastdiv">
                                <p class="lipic">मुख्य लिपिक</p>
                                <p class="class_teacher">वर्ग शिक्षक</p>
                                <p class="principal">मुख्याध्यापक</p>
                            </div>
                            
                        </div>
                    </div>

                    <div class="submitButtonDiv">
                        <!--                  <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="print_bonafied" id="btnPrint">Print</button>-->

                        <button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary" id="btnPrint" value="Print">Print Bonafide Certificate</button>
                    </div>


            </div>
        </main>

    </div>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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
                frameDoc.document.write('<link href="../certificates/css/tc.css" rel="stylesheet" type="text/css" /><link href="../certificates/css/tcForPrinting.css" rel="stylesheet" type="text/css" />');
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
