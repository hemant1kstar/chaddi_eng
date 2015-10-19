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


    <title>Bonafide Certificate | Paperless System</title>

    <!--    CSS For Material Design-->
    <link rel="stylesheet" href="../css/material.teal-lime.min.css" />
    <script src="../material_js/material.js"></script>
    <link rel="stylesheet" href="../material_js/Material+Icons.css" />
    <link rel="stylesheet" href="../fonts/Roboto+300,400,500,700.css" />

    <!--  End of CSS For Material Design-->

    <link rel="stylesheet" href="../css/main.css">
    <link href='css/bonafide.css' rel='stylesheet'>
    <link href='css/bonafide1.css' rel='stylesheet'>


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
                <a href="index.php" class="mdl-layout__tab is-active">Bonafide</a>
                <a href="nirgam_utara.php" class="mdl-layout__tab">Nirgam Utara</a>
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
                     $reg_no1="";
                     $student_name="";
                     $current_class="";
                     $birth_place="";
                     $district="";
                     $state="";
                     $birthdate="";
                     $caste="";
 $birthdate_inwords="";
$admission_date="";
$admitted_division="";
                  
                   if(isset($_POST['submit_student_info']))
                   {


                     $reg_no2=$_POST['reg_no'];
                
                          mysqli_query ($con,"set character_set_results='utf8'"); 
                          $query = mysqli_query($con,"SELECT * FROM master where reg_no='$reg_no2'") or die(mysqli_error());
                          while($row=mysqli_fetch_array($query))
                          {
                          $reg_no1=$row['reg_no'];
                          $student_name=$row['student_name'];
                          $current_class=$row['current_class'];
                          $birth_place=$row['birth_place'];
                          $district=$row['district'];
                          $state=$row['state'];
                          $birthdate=$row['birthdate'];
                          $caste=$row['caste'];
                               $birthdate_inwords=$row['birthdate_inwords'];
                              $admission_date=$row['admission_date'];
                              $admitted_division=$row['admitted_division'];
                          }
                   }
                  ?>


                    <div id="dvContents">
                        <div class="main mdl-shadow--4dp" id="mains">
                            <h3 class="schoolname">संत नामदेव उच्च माध्यमिक विद्यालय, लातूर </h3>
                            <h5 id="certificate_title1"> महाविद्यालयात शिकत असल्याचे प्रमाणपत्र </h5>
                            <h4 id="bonafide">( BONAFIDE CERTIFICATE )</h4>
                             <div class="numbersDiv">
                                <p id="bonafideNumberDiv"> नंबर : </p>
                                <p id="dateNumberDiv">दिनांक :</p>
                            </div>
                            <p class="context">प्रमाणित करण्यात येते की, चि./कु. <span class="space"><?php echo "$student_name";?></span>  रजि क्र.:<span class="space"><?php echo "$reg_no1";?></span> प्रवेश दिनांक: <span class="space"><?php echo"$admission_date"; ?></span>  हा /ही या महाविद्यालयात शैक्षणिक वर्ष <span class="space">2015-16</span> मध्ये इयत्ता <span class="space"><?php echo"$current_class"; ?></span> तुकडी : <span class="space"><?php echo"$admitted_division"; ?></span> मध्ये शिकत आहे/होता/होती . </P>
                                <P>त्याचा/तिचा जन्म <span class="space"><?php echo"$birth_place"; ?></span>, जिल्हा: <span class="space"><?php echo"$district";?></span>, राज्य: <span class="space"><?php echo"$state"; ?></span>, येथे झाला असून जन्मदिनांक: <span class="space"><?php echo "$birthdate";?></span> (अक्षरी : <span class="space"><?php echo "$birthdate_inwords";?></span>) आणि जात: <span class="space"><?php echo "$caste";?></span>, असे नोंदविलेली आहे. सदर प्रमाणपत्र महाविद्यालयाच्या नोंदवहीनुसार देण्यात येत आहे. </p>

                            <div class="lastdiv">
                    
                                <label class="lipik">लिपिक</label>
                                <label class="princi">प्राचार्य </label>
                            </div>

                        </div>

                    </div>
            
            

                    <div class="submitButtonDiv">
                        <button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary" id="btnPrint" value="Print">Print Bonafide Certificate</button>
                    </div>
            
                    <div id="dvContents1">
                        <div class="main mdl-shadow--4dp" id="mains">
                            <h3 class="schoolname">Sant Namdev Junior College, Latur </h3>
                            <h5 id="certificate_title1">Latur-413512 </h5>
                            <h4 id="bonafide">( BONAFIDE CERTIFICATE )</h4>
                            <div class="numbersDiv">
                                <p id="bonafideNumberDiv">No : </p>
                                <p id="dateNumberDiv">Date :</p>
                            </div>
                        <p class="context">This is to certify that Kumar/Kumari <span class="space"><?php echo "$student_name";?></span>  is / was a bonafide student of this college studying in Std.<span class="space"><?php echo"$current_class"; ?></span> Div. <span class="space"><?php echo"$admitted_division"; ?> </span> In the year<span class="space"> 2015-16</span>. His/ Her birthdate on the General Register is <span class="space"><?php echo "$birthdate";?></span> ( In words: <span class="space"><?php echo "$birthdate_inwords";?></span>).He /She /is /was regular in attendance.</p>

                            <div class="lastdiv">
                                <label class="lipik">CLEARK</label>
                                <label class="princi">PRINCIPAL </label>
                            </div>

                        </div>

                    </div>

                    <div class="submitButtonDiv">

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
                frameDoc.document.write('<link href="css/bonafide.css" rel="stylesheet" type="text/css" /><link href="css/bonafide1.css" rel="stylesheet" type="text/css" /><link href="css/ShikshAbhiyanForPrinting.css" rel="stylesheet" type="text/css" />');
                //Append the DIV contents.
                frameDoc.document.write(contents);
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
                frameDoc.document.write('<link href="css/bonafide.css" rel="stylesheet" type="text/css" /><link href="css/bonafide1.css" rel="stylesheet" type="text/css" /><link href="css/ShikshAbhiyanForPrinting.css" rel="stylesheet" type="text/css" />');
                //Append the DIV contents.
                frameDoc.document.write(contents);
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
