<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Identity Card | Paperless System</title>

    <!--    CSS For Material Design-->
    <link rel="stylesheet" href="../css/material.blue-pink.min.css" />
    <script src="../material_js/material.js"></script>
    <link rel="stylesheet" href="../material_js/Material+Icons.css" />
    <link rel="stylesheet" href="../fonts/Roboto+300,400,500,700.css" />

    <!--  End of CSS For Material Design-->

    <link rel="stylesheet" href="../css/main.css">
    <link href='../certificates/css/StudentIdCard.css' rel='stylesheet'>

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
                <a href="index.php" class="mdl-layout__tab">Certificate</a>
                <a href="bonafied.php" class="mdl-layout__tab">Bonafide</a>
                <a href="nirgam_utara.php" class="mdl-layout__tab">Nirgam Utara</a>
                <a href="id_card.php" class="mdl-layout__tab  is-active">ID Card</a>
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
                     $reg_no1="";
                     $student_name="";
                     $current_class="";
                     $permanent_address="";
                     $exam_seat_no="";
       
                  
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
                          $permanent_address=$row['permanent_address'];
                          $exam_seat_no=$row['exam_seat_no'];
                          }
                   }
                  ?>



                    <div id="dvContents">
                        <div class="main mdl-shadow--4dp" id="mains">
                            <h4 class="headdata">ओळखपत्र</h4>
                            <div class="photo">
                                <!--                    <h6>PHOTO</h6>-->
                                <img src="images/student.png" class="image">

                            </div>
                            <table class="studentinfo">
                                <tr>
                                    <td>शैक्षणिक वर्ष</td>
                                    <td>: 2015-16</td>
                                </tr>
                                <tr>
                                    <td>शाळेचे नाव</td>
                                    <td>: संत नामदेव प्राथमिक/माध्यमिक/उच्चमाध्यमिक विद्यालय, लातूर</td>
                                </tr>
                                <tr>
                                    <td>विद्यार्थ्याचे  नाव</td>
                                    <td>
                                        : <?php echo "$student_name";?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>रजि क्रमांक</td>
                                    <td>
                                        : <?php echo "$reg_no1";?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>इयत्ता </td>
                                    <td>
                                        : <?php echo "$current_class";?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>पत्ता</td>
                                    <td>
                                        : <?php echo "$permanent_address";?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>परीक्षेचे नाव</td>
                                    <td>: </td>
                                </tr>
                                <tr>
                                    <td>बैठक क्रमांक</td>
                                    <td>
                                        : <?php echo "$exam_seat_no";?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>परीक्षा केंद्र क्रमांक</td>
                                    <td>: </td>
                                </tr>
                                <tr>
                                    <td>परीक्षा केंद्राचे नाव</td>
                                    <td>: </td>
                                </tr>

                                <tr>
                                    <td>दिनांक</td>
                                    <td>: </td>
                                </tr>
                                <tr>
                                    <td>वेळ</td>
                                    <td>: </td>
                                </tr>
                            </table>
                            <div class="signdiv">
                                <h5>विद्यार्थ्याची सही</h5>
                                <h5 class="principal">मुख्याध्यापक</h5>
                            </div>
                        </div>
                    </div>

                    <div class="submitButtonDiv">
                        <!--                  <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="print_bonafied" id="btnPrint">Print</button>-->

                        <button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary" id="btnPrint" value="Print">Print ID Card</button>
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
                frameDoc.document.write('<link href="style.css" rel="stylesheet" type="text/css" /><link href="../certificates/css/StudentIdCard.css" rel="stylesheet" type="text/css" />');
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
