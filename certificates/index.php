<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Primary Certificate | Paperless System</title>

        <!--    CSS For Material Design-->
        <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.blue-pink.min.css" />
        <script src="../material_js/material.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">

        <!--  End of CSS For Material Design-->

        <link rel="stylesheet" href="../css/main.css">
        <link href='../certificates/css/ShikshAbhiyan.css' rel='stylesheet'>

    </head>

    <body>
        
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <header class="mdl-layout__header">
                <!-- Top row, always visible -->
                <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title">Certificates</span>
                    
                    
                </div>

                <div class="tabs mdl-js-ripple-effect">
                    <a href="index.php" class="mdl-layout__tab is-active">Certificate</a>
                    <a href="bonafied.php" class="mdl-layout__tab">Bonafide</a>
                    <a href="nirgam_utara.php" class="mdl-layout__tab">Nirgam Utara</a>
                    <a href="id_card.php" class="mdl-layout__tab">ID Card</a>
                    <a href="tc.php" class="mdl-layout__tab">TC</a>
                    <a href="admission_form.php" class="mdl-layout__tab">Admission Form</a>

                </div>

            </header>



            <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">Paperless System</span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="../index.php">Home</a>
                </nav>
            </div>



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
$student_name="";
$prev_class1="";
$admission_class1="";
if(isset($_POST['submit_student_info']))
{


    $reg_no2=$_POST['reg_no'];

    mysqli_query ($con,"set character_set_results='utf8'");
    $query = mysqli_query($con,"SELECT * FROM master where reg_no='$reg_no2'") or die(mysqli_error());
    while($row=mysqli_fetch_array($query))
    {
        $reg_no=$row['reg_no'];
        $student_name=$row['student_name'];
        $prev_class1=$row['prev_class'];
        $admission_class1=$row['admission_class'];
    }
}
                    ?>

                    <div class="">
                        <div id="dvContents">

                            <div class="main mdl-shadow--4dp" id="mains">
                                <h3 class="headname">महाराष्ट्र बालकांचा मोफत आणि सक्तीच्या शिक्षणाच्या नियम २०११, परीशिस्त - दोन </h3>
                                <h3 class="namuna">नमुना - ३</h3>
                                <div class="pramanptra">
                                    <h3>प्राथमिक शिक्षणपूर्तता प्रमाणपत्र </h3> </div>
                                <h4 class="schoolname">संत नामदेव प्राथमिक / माध्यमिक / उच्चमाध्यमिक विद्यालय, लातूर</h4>
                                <h5 class="place">तालुका: लातूर, जिल्हा: लातूर</h5>

                                <p class="data">प्रमाणित करण्यात येते की, <span class="space"><?php echo "$student_name";?></span> हिने /ह्याने बालकाचा मोफत आणि सक्तीच्या शिक्षणाचा हक्क अधिनियम २००९ मधील कलम २९ मध्ये विहित केलेल्या निकषानुसार आपले इयत्ता <span class="space"><?php echo "$prev_class1";?></span> प्राथमिक शिक्षण पूर्ण केले आहे. या विद्यार्थ्याने इयत्ता <span class="space"><?php echo "$admission_class1";?></span> अर्हता व विद्याविषयक कौशल्ये प्राप्त केले आहेत.
                                </p>
                                <div class="lastdiv">
                                    <p class="last">दिनांक : <span class="space"></span></p>

                                    <p class="principal">मुख्याध्यापक</p>
                                </div>
                                <img class="logoimage" src="../certificates/images/Sarva-Shiksha-Abhiyan.jpg">
                            </div>
                        </div>


                        <div class="submitButtonDiv">
                            <!--                  <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="print_bonafied" id="btnPrint">Print</button>-->

                            <button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary" id="btnPrint" value="Print">Print Certificate</button>
                        </div>

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
                    frameDoc.document.write('<link href="style.css" rel="stylesheet" type="text/css" /><link href="../certificates/css/ShikshAbhiyan.css" rel="stylesheet" type="text/css" />');
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
