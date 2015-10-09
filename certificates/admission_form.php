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


    <title>Primary Certificate | Paperless System</title>

    <!--    CSS For Material Design-->
    <link rel="stylesheet" href="../css/material.teal-lime.min.css" />
    <script src="../material_js/material.js"></script>
    <link rel="stylesheet" href="../material_js/Material+Icons.css" />
    <link rel="stylesheet" href="../fonts/Roboto+300,400,500,700.css" />

    <!--  End of CSS For Material Design-->

    <link rel="stylesheet" href="../css/main.css">
    <link href='../certificates/css/admission_form.css' rel='stylesheet'>

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
                <a href="index.php" class="mdl-layout__tab">Certificate</a>
                <a href="bonafied.php" class="mdl-layout__tab">Bonafide</a>
                <a href="nirgam_utara.php" class="mdl-layout__tab">Nirgam Utara</a>
                <a href="id_card.php" class="mdl-layout__tab">ID Card</a>
                <a href="tc.php" class="mdl-layout__tab">TC</a>
                <a href="admission_form.php" class="mdl-layout__tab is-active">Admission Form</a>

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



                <div id="dvContents">

                    <div class="main mdl-shadow--4dp" id="mains">
                        <h4 class="schoolname">संत नामदेव प्राथमिक / माध्यमिक / उच्चमाध्यमिक विद्यालय, लातूर</h4>
                        <h5 class="place">तालुका: लातूर, जिल्हा: लातूर</h5>
                        <h6 class="heading_title">शाळा दाखला अर्ज </h6>
                        <label class="section_label">Student Personal Information :</label>
                        <div class="mdl-grid personal_info">
                            <div class="mdl-cell mdl-cell--8-col mdl-cell--4-col-tablet" id="info1">
                                <div class="info_div">
                                    <span>नोंदणी  क्रमांक:</span>
                                    <span class="empty1"></span>
                                </div>

                                <div class="info_div">
                                    <span>विद्यार्थीचे नाव :</span>
                                    <span class="empty1"></span>
                                </div>
                                
                                <div class="info_div">
                                    <span> मातृभाषा: </span>
                                    <span class="empty1"></span>
                                    <span>लिंग :</span>
                                    <span class="empty1"></span>
                                  
                                </div>

                                <div class="info_div">
                                    <span>जन्मतारीख : </span>
                                    <span class="empty1"></span>
                                     <span>  राष्ट्रीयत्व: </span>
                                    <span class="empty1"></span>
                                </div>

                                <div class="info_div">
                                    <span> धर्म:</span>
                                    <span class="empty1"></span>
                                    <span>जात:</span>
                                    <span class="empty1"></span>
                                </div>
                                
                                  <div class="info_div">
                                    <span> उपजात :</span>
                                    <span class="empty1"></span>
                                    <span>केटगॉरी:</span>
                                    <span class="empty1"></span>
                                </div>
                                
                                <div class="info_div">
                                
                                    <span>जन्म ठिकाण :</span>
                                    <span class="empty1"></span>
                                    <span>जिल्हा:</span>
                                    <span class="empty1"></span>
                                </div>
                                
                            <div class="info_div">
                                    <span>राज्य  :</span>
                                    <span class="empty1"></span>
                                    <span>वय :</span>
                                    <span class="empty1"></span>
                                </div>

                                
                            <div class="info_div">
                                    <span>संपर्क क्रमाक :</span>
                                    <span class="empty1"></span>
                                    <span>माध्यम :</span>
                                    <span class="empty1"></span>
                                </div>
                                
                                        <div class="info_div">
                                    <span>प्रवेशाचा वर्ग :</span>
                                    <span class="empty1"></span>
                                    <span>प्रवेशाचा दिनांक  :</span>
                                    <span class="empty1"></span>
                                </div>
                     
                     

                            

                            </div>
                            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet" id="info2">
                                <div class="profile_img">Student Photo</div>
                            </div>
                        </div>

                        <label class="section_label">Family Information :</label>

                        <div class="mdl-grid family_info">
                            <div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet">
                                <div class="info_div">
                                    <span> वडिलांचे नाव :</span>
                                    <span class="empty1"></span>
                                </div>

                                <div class="info_div">
                                    <span>आईचे नाव :</span>
                                    <span class="empty1"></span>
                                </div>

                                <div class="info_div">
                                    <span> वडिलांचा  व्यवसाय :</span>
                                    <span class="empty1"></span>
                                    <span> वार्षिक उत्पन्न:</span>
                                    <span class="empty1"></span>
                                </div>

                                <div class="info_div">
                                    <span>कायमचा पत्ता :</span>
                                    <span class="empty1"></span>
                                </div>

                            </div>
                        </div>
                        <label class="section_label">Prev School Information :</label>
                        <div class="mdl-grid prev_school_info">
                            <div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet">
                                <div class="info_div">
                                    <span> पूर्वीच्या शाळेचे नाव :</span>
                                    <span class="empty1"></span>
                                </div>

                                <div class="info_div">
                                    <span>टीसी :</span>
                                    <span class="empty1"></span>
                                    <span>गुणपत्रिका :</span>
                                    <span class="empty1"></span>
                                </div>

                                <div class="info_div">
                                    <span>पूर्वीचा वर्ग :</span>
                                    <span class="empty1"></span>
                                    <span>नादार फी :</span>
                                    <span class="empty1"></span>
                                </div>
                            </div>
                        </div>
                        
                         <label class="section_label">Other Information :</label>
                        
                        <div class="mdl-grid other_info">
                            <div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet">
                                <div class="info_div">
                                    <span> आधार क्रमांक  :</span>
                                    <span class="empty1"></span>
                                        <span>बँक खाते क्रमांक :</span>
                                    <span class="empty1"></span>
                                </div>

                                <div class="info_div">
                                    <span> बँक शाखा :</span>
                                    <span class="empty1"></span>
                                    <span>बँक शाखा क्रमांक:</span>
                                    <span class="empty1"></span>
                                </div>

                                <div class="info_div">
                                    <span>एल आय सी क्रमांक :</span>
                                    <span class="empty1"></span>
                                       <span>अल्पसंख्याक तपशील :</span>
                                    <span class="empty1"></span>
                                  
                                </div>
                                
                                <div class="info_div">
                                   <span>फी सवलत :</span>
                                    <span class="empty1"></span>
                                      <span>अपंग :</span>
                                    <span class="empty1"></span>
                                </div>
                                   <div class="info_div">
                                   <span> शिष्यवृत्ती :</span>
                                    <span class="empty1"></span>
                                </div>
                                
                       
                            </div>
                        </div>
                        
                        <div class="lastdiv">
                            <p class="declare">मी माझ्या आणि वडिलांच्या / पालकांच्या संमतीने आपल्या प्राथमिक व उच्च प्राथमिक शाळेत प्रवेश घेत आहे . मी शाळेच्या नियमाचे व शिस्तीचे काटेकोरपणे पालन करीन . नियमाचे उलंघन केल्यास माझे नाव शाळेतून कमी करणायत यावे . </p>
                            <p class="date">दिनांक : <span class="space"></span></p>
                            <p class="place1">ठिकाण : <span class="space"></span></p>
                            <p class="signature">पालकांची सही </p>
                        </div>

                    </div>
                </div>


                <div class="submitButtonDiv">
                    <!--                  <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="print_bonafied" id="btnPrint">Print</button>-->

                    <button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary" id="btnPrint" value="Print">Print Certificate</button>
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
                frameDoc.document.write('<link href="style.css" rel="stylesheet" type="text/css" /><link href="../certificates/css/admission_form_print.css" rel="stylesheet" type="text/css" />');
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
