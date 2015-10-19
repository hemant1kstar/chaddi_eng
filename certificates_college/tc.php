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


    <title>TC Certificate | Paperless System</title>

    <!--    CSS For Material Design-->
    <link rel="stylesheet" href="../css/material.teal-lime.min.css" />
    <script src="../material_js/material.js"></script>
    <link rel="stylesheet" href="../material_js/Material+Icons.css" />
    <link rel="stylesheet" href="../fonts/Roboto+300,400,500,700.css" />

    <!--  End of CSS For Material Design-->

    <link rel="stylesheet" href="../css/main.css">
    <link href='css/tc.css' rel='stylesheet'>
     <link href='css/tc1.css' rel='stylesheet'>


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
                <a href="nirgam_utara.php" class="mdl-layout__tab">Nirgam Utara</a>
                <a href="id_card.php" class="mdl-layout__tab">ID Card</a>
                <a href="tc.php" class="mdl-layout__tab is-active">TC</a>
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
                            <label class="customLabel" id="displayTableRegistrationLabel">Registration No:</label>
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
$birthdate_inwords="";
$admission_class="";
                         


                  
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
                              $admission_class=$row['admission_class'];
                            $remark=$row['tc_remark'];
                              $birthdate_inwords=$row['birthdate_inwords'];
                         
                          }
                   }
                  ?>


                    <div id="dvContents">
                        <div class="main mdl-shadow--4dp" id="mains">
                            <h3 class="schoolname">संत नामदेव महाविद्यालय, लातूर </h3>
                            <h5 class="place">लातूर - ४१३५१२ (महाराष्ट्र )</h5>
                            <h4 id="tc_title1">हस्तांतरण प्रमाणपत्र ( महाविद्यालय )</h4>
                            <h5 id="tc_org"> मूळ प्रत  </h5>
                            <div class="numbersDiv">
                                <p id="tcNumberDiv">T.C. नंबर :
                                    <?php echo"$tc_no";?>
                                </p>
                                <p id="registerNumberDiv">रेजिस्टर नंबर :
                                    <?php echo"$reg_no1";?>
                                </p>
                                <p id="dateNumberDiv">दिनांक :
                                    <?php echo"$date_issued";?>
                                </p>
                            </div>
                            <div class="tc_info1">
                                 <p id="tc_note">No change in any entry in this certificates shall be made except by the authority issuing it and any infringement of this requirement is liable to involve the imposition of penality such as that of rustication and pental offence.</p>
                                
                                <p><span>१) विधाथ्याचे संपूर्ण नाव  :   </span>
                                    <?php echo"$student_name"?>
                                </p>
                                <p><span>२) आईचे नाव  :   </span>
                                    <?php echo "$motername";?>
                                </p>
                                <p><span>३) धर्म व जात (उपजातीसह) :  </span>
                                    <?php echo "$religion-$caste";?>
                                </p>
                             
                                 <p><span>४) जन्मदिनांक अंक व अक्षरी  : </span>
                                    <?php echo "$birthdate";?> ,<?php echo "$birthdate_inwords";?>
                                </p>
                                <p><span>५) जन्मस्थान  : </span>
                                    <?php echo "$birth_place,$birth_district,$birth_state";?>
                                </p>
                                
                                 <p><span>६) राष्ट्रीयत्व  :  भारतीय</span></p>
                               
                                <p><span>७) पूर्वी शिकत असलेली शाळा / महाविद्यालय  : </span>
                                    <?php echo "$prev_school_name";?>
                                </p>
                                <p><span>८) प्रवेश दिनांक  : </span>
                                    <?php echo "$admission_date";?>  (<span> वर्ग :</span><?php echo "$admission_class";?>)
                                </p>
                                
                                <p><span>९) महाविद्यालय सोडण्याचा दिनांक  : </span>
                                    <?php echo "$date_leaving";?> (<span> वर्ग :</span><?php echo "$class";?>)
                                </p>
                                
                                <p><span>१०) प्रगती व  वर्तणूक  : </span>
                                    <?php echo "$student_progress";?>,<?php echo "$behaviour";?>
                                </p>
                                <p><span>११) विद्यापीठाची परीक्षा दिलेली आहे का ? : </span>
                                    
                                </p>
                                 <p><span>१२) महाविद्यालयाची फीस भरलेली आहे का ?  : </span>
                                    
                                </p>
                                 <p><span>१३) विषय देऊ केलेले  : </span>
                                    
                                </p>
                                
                                <p><span>१४) महाविद्यालय सोडण्याचे कारण   : </span>
                                    <?php echo "$reason";?>
                                </p>
                               <p><span>१५) पात्रता प्रमाणपत्र  नंबर  : </span>
                                
                                </p>
                                <p><span>१६) शेरा    : </span>
                                    <?php echo "$remark";?>
                                </p>
                            </div>
                            <p>प्रमाणित करण्यात येते की, वरील सर्व माहिती महाविद्यालयाच्या अधिकृत नोंदणीप्रमाणे देण्यात आली आहे.</p>

                            <div class="lastdiv">
                                <p class="lipic">मुख्य लिपिक</p>
                                <p class="class_teacher">वर्ग शिक्षक</p>
                                <p class="principal">प्राचार्य</p>
                            </div>

                        </div>
                    </div>

                    <div class="submitButtonDiv">
                        <!--                  <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="print_bonafied" id="btnPrint">Print</button>-->

                        <button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary" id="btnPrint" value="Print">Print Bonafide Certificate</button>
                    </div>
                
                               <div id="dvContents1">
                        <div class="main mdl-shadow--4dp" id="mains">
                            <h3 id="schoolname1">Sant Namdev Mahavidhayalaya, Latur </h3>
                            <h5 class="place">Latur-413512 </h5>
                                   <h4 id="tc_title1">Transfer Certificate (Senior College)</h4>
                                   <h5 id="tc_org">Original </h5>
                            <div class="numbersDiv">
                                <p id="tcNumberDiv">T.C. No :
                                    <?php echo"$tc_no";?>
                                </p>
                                <p id="registerNumberDiv">Gen.Reg.No :
                                    <?php echo"$reg_no1";?>
                                </p>
                                <p id="dateNumberDiv">Date :
                                    <?php echo"$date_issued";?>
                                </p>
                            </div>
                            <div class="tc_info1">
                                <p id="tc_note">No change in any entry in this certificates shall be made except by the authority issuing it and any infringement of this requirement is liable to involve the imposition of penality such as that of rustication and pental offence.</p>
                                <p><span>1. Student Full Name  :   </span>
                                    <?php echo"$student_name"?>
                                </p>
                                <p><span>2. Mother's Name  :   </span>
                                    <?php echo "$motername";?>
                                </p>
                                <p><span>3. Religion,Caste and Category :  </span>
                                    <?php echo "$religion-$caste";?>
                                </p>
                                 <p><span>4. Date of Bith ( in figures ) and ( in words )  : </span>
                                    <?php echo "$birthdate";?>,<br/>
                                    <?php echo "$birthdate_inwords";?>
                                </p>
                                <p><span>5. Place of Birth  : </span>
                                    <?php echo "$birth_place,$birth_district,$birth_state";?>
                                </p>
                                <p><span>6. Nationality :  INDIAN</span></p>
                                
                               
                                <p><span>7. Last School / College Attended : </span>
                                    <?php echo "$prev_school_name";?>
                                </p>
                                <p><span>8. Date of Admission  : </span>
                                    <?php echo "$admission_date";?> (<span> Class :</span><?php echo "$admission_class";?>)
                                </p>
                                
                                  <p><span>9. Date of Leaving : </span>
                                    <?php echo "$date_leaving";?> (<span> Class :</span><?php echo "$class";?>)
                                </p>
                                <p><span>10. Coduct and Progress  : </span>
                                   <?php echo "$behaviour";?>, <?php echo "$student_progress";?>
                                </p>
                             
                              
                                <p><span>11. Whether Attended the University Examination : </span>
                                 
                                </p>
                                <p><span>12. Whether Paid College dues :</span>
                        
                                </p>
                                <p><span>13. Subjects Offered :</span>
                        
                                </p>
                                <p><span>14. Reason of Leaving : </span>
                                    <?php echo "$reason";?>
                                </p>
                                
                                 <p><span>15. Eligibility Certificate No. :</span>
                        
                                </p>
                                <p><span>16. Remarks   : </span>
                                    <?php echo "$remark";?>
                                </p>
                            </div>
                            <p id="bottom_line">Certified that the above information is in accordance with the college record.</p>

                            <div class="lastdiv">
                                <p class="lipic">Clerk</p>
                                <p class="class_teacher">Register</p>
                                <p class="principal">Principal</p>
                            </div>

                        </div>
                    </div>

                    <div class="submitButtonDiv">
                        <!--                  <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="print_bonafied" id="btnPrint">Print</button>-->

                        <button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary" id="btnPrint1" value="Print">Print Bonafide Certificate</button>
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
                frameDoc.document.write('<link href="css/tc.css" rel="stylesheet" type="text/css" /><link href="css/tcForPrinting.css" rel="stylesheet" type="text/css" />');
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
            
                $("#btnPrint1").click(function() {
                var contents = $("#dvContents1").html();
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
                frameDoc.document.write('<link href="css/tc.css" rel="stylesheet" type="text/css" /><link href="css/tcForPrinting.css" rel="stylesheet" type="text/css" />');
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
