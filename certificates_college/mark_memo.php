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


    <title>Mark Memo | Paperless System</title>

    <!--    CSS For Material Design-->
    <link rel="stylesheet" href="../css/material.teal-lime.min.css" />
    <script src="../material_js/material.js"></script>
    <link rel="stylesheet" href="../material_js/Material+Icons.css" />
    <link rel="stylesheet" href="../fonts/Roboto+300,400,500,700.css" />

    <!--  End of CSS For Material Design-->

    <link rel="stylesheet" href="../css/main.css">
    <link href='css/mark_memo.css' rel='stylesheet'>


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
                <a href="tc.php" class="mdl-layout__tab">TC</a>
                <a href="admission_form.php" class="mdl-layout__tab">Admission Form</a>
                <a href="mark_memo.php" class="mdl-layout__tab is-active">11th Mark Memo</a>
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
                <div class="mdl-shadow--2dp memo_info">
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

                            $student_name=""; 

                         


                  
                   if(isset($_POST['submit_student_info']))
                   {


                     $reg_no2=$_POST['reg_no'];
                
                          mysqli_query ($con,"set character_set_results='utf8'"); 
                          $query = mysqli_query($con,"SELECT * FROM master where reg_no='$reg_no2'") or die(mysqli_error());
                          while($row=mysqli_fetch_array($query))
                          {
                            $student_name=$row['student_name']; 
                          }
                   }
                  ?>


                    <div id="dvContents">
                        <div class="main mdl-shadow--4dp" id="mains">
                            <h5 class="community">व्यंकटेश बहुउध्येशिय शिक्षण प्रसारक मंडळ, घोसणी </h5>
                            <h3 class="schoolname">संत नामदेव उच्च माध्यमिक विद्यालय, आर्वी, लातूर </h3>
                            <h5 class="place">अंबाजोगाई रोड,लातूर ता.जि: लातूर -413 512</h5>
                            <h4 id="mark_memo_title1">11 वी वार्षिक परीक्षा - गुणपत्रक </h4>

                                 <table>
                                    <tr>
                                        <th> शाखा </td>
                                        <th> वर्ग </td>
                                        <th> आसन क्रमांक </td>
                                        <th> उच्च माध्यमिक क्रमांक</td>
                                        <th> परीक्षेचा महिना व वर्ष </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>XI</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
    <p>उमेदवाराचे संपूर्ण नाव ( आडनाव प्रथम ) / Candidate's Full Name ( Surname First ) :</p>
    <p id="student_name_p"><?php echo $student_name;?></p>
                            <div class="mark_memo_info1">
                               <table>
                                    <tr>
                                        <th colspan="2"> विषयाचा सांकेतिक क्रमांक व विषयाचे नाव <br/>Subject Code No. and Subject Name </td>
                                        <th> माध्यम<br/>Medium </td>
                                        <th> कमाल गुण <br/>Max Marks </td>
    <th colspan="2"> प्राप्त गुण / Marks Obtained<br/>In Figures| In Words</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"> 01 ENGLISH </td>
                                        <td> ENGLISH </td>
                                        <td> 100</td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2"> 54 PHYSICS </td>
                                        <td> ENGLISH </td>
                                        <td> 100</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                     <tr>
                                        <td colspan="2"> 55 CHEMISTRY</td>
                                        <td> ENGLISH </td>
                                        <td> 100</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"> 40 MATHEMATICS </td>
                                        <td> ENGLISH </td>
                                        <td> 100</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"> C2 ELECTRONICS </td>
                                        <td> ENGLISH </td>
                                        <td> 200</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <td colspan="2"> 31 ENVIRONMENT EDUCATION </td>
                                        <td> ENGLISH </td>
                                        <td> 50</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                     <tr>
                                        <td colspan="2"> 30 HEALTH SCIENCE & PHYSICAL EDUCATION ( GRADE ) </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td> 
                                    </tr> 
                                    <tr>
                                        <td> Result / निकाल <br/></td>
                                        <td> Percentage /  टक्केवारी <br/></td>
                                        <td> Total Marks / <br> एकूण गुण </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>

                            <div class="lastdiv">
                                <p id="principal1"> प्राचार्य </p>
                                <p class="principal"><br/>संत नामदेव उच्च मा. विद्यालय,<br/>आर्वी, अंबाजोगाई रोड, लातूर</p>
                            </div>

                        </div>
                    </div>

                    <div class="submitButtonDiv">

                        <button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary" id="btnPrint" value="Print">Print Bonafide Certificate</button>
                    </div>
                




            </div>
        </main>

    </div>
    <script type="text/javascript" src="../jquery/jquery-2.1.4.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#btnPrint").click(function() {
                var contents = $("#mains").html();
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
                frameDoc.document.write('<link href="css/mark_memo.css" rel="stylesheet" type="text/css" />');
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
