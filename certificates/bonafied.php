<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Bonafide Certificate | Paperless System</title>

    <!--    CSS For Material Design-->
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.blue-pink.min.css" />
    <script src="../material_js/material.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">

    <!--  End of CSS For Material Design-->

    <link rel="stylesheet" href="../css/main.css">
    <link href='../certificates/css/bonafide.css' rel='stylesheet'>


</head>

<body>
    <!--    Waterfall header-->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header mdl-layout__header--scroll">
            <!-- Top row, always visible -->
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Certificates</span>
                <div class="mdl-layout-spacer"></div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                                mdl-textfield--floating-label mdl-textfield--align-right">
                    <label class="mdl-button mdl-js-button mdl-button--icon" for="waterfall-exp">
                        <i class="material-icons">search</i>
                    </label>
                    <div class="mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input" type="text" name="sample" id="waterfall-exp" />
                    </div>
                </div>
            </div>

            <div class="tabs mdl-js-ripple-effect">
                <a href="index.php" class="mdl-layout__tab">Certificate</a>
                <a href="bonafied.php" class="mdl-layout__tab is-active">Bonafide</a>
                <a href="nirgam_utara.php" class="mdl-layout__tab">Nirgam Utara</a>
                <a href="id_card.php" class="mdl-layout__tab">ID Card</a>

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
                            <label class="customLabel" id="displayTableRegistrationLabel">Registration No :</label>
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
                     $reg_no1="";
                     $student_name="";
                     $current_class="";
                     $birth_place="";
                     $district="";
                     $state="";
                     $birthdate="";
                     $caste="";
                  
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
                          }
                   }
                  ?>


                    <div id="dvContents">
                        <div class="main mdl-shadow--2dp" id="mains">
                            <h3 class="schoolname">संत नामदेव प्राथमिक / माध्यमिक / उच्चमाध्यमिक विद्यालय, लातूर </h3>
                            <h5 class="place">तालुका: लातूर, जिल्हा: लातूर </h5>
                            <h4 class="bonafide">BONAFIDE CERTIFICATE</h4>
                            <p class="regino">
                                जनरल रजि क्र. <span class="space"><?php echo "$reg_no1";?></span>
                            </p>
                            <p class="context">प्रमाणित करण्यात येते की, <span class="space"><?php echo "$student_name";?></span> ही/हा या विद्यालयाचा विद्यार्थी आहे. व शैक्षणिक वर्ष <span class="space">2015-16</span> मध्ये इयत्ता <span class="space"><?php echo"$current_class"; ?></span> वी मध्ये शिकत आहे. शाळेच्या सर्वसाधारण नोंदवहीतील क्रमांक <span class="space"></span> वरील नोंदीनुसार तिचा/त्याचा जन्म <span class="space"><?php echo"$birth_place"; ?></span>, जिल्हा: <span class="space"><?php echo"$district";?></span>, राज्य: <span class="space"><?php echo"$state"; ?></span>, येथे झाला असून जन्मदिनांक: <span class="space"><?php echo "$birthdate";?></span> (अक्षरी : <span class="space"></span>) आणि जात: <span class="space"><?php echo "$caste";?></span>, असे नोंदविलेली आहे. या विद्यार्थीची शाळेतील प्रगती व वर्तणूक चांगली आहे. सदर प्रमाणपत्र शाळेच्या नोंदवहीनुसार देण्यात येत आहे.</p>

                            <div class="lastdiv">
                                <p class="last">ठिकाण : <span class="space">लातूर</span></p>
                                <p class="last">दिनांक : <span class="space"></span></p>
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
                frameDoc.document.write('<link href="style.css" rel="stylesheet" type="text/css" /><link href="../certificates/css/bonafide.css" rel="stylesheet" type="text/css" />');
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
