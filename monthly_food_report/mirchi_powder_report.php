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
    <title>Monthly Food Report | Paperless System</title>
    <!--    CSS For Material Design-->
    <link rel="stylesheet" href="../css/material.deep_orange-indigo.min.css" />
    <script src="../material_js/material.js"></script>
    <link rel="stylesheet" href="../material_js/Material+Icons.css" />
    <link rel="stylesheet" href="../fonts/Roboto+300,400,500,700.css" />
    <link rel="stylesheet" href="../fonts/Roboto+300,400,500,700.css" />
    <!--  End of CSS For Material Design-->




    <!-- CSS and JS for Jquery datepicker -->
    <link rel="stylesheet" href="../jquery-ui-1.11.4.custom/jquery-ui.min.css" />
    <script src="../jquery/jquery-2.1.4.min.js"></script>
    <script src="../jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <!-- End of CSS and JS for Jquery datepicker -->

    <!-- CSS and JS for Snackbar -->
    <link href="../css/snackbar.min.css" rel="stylesheet">
    <link href="../material_js/material_for_snackbar.css" rel="stylesheet">
    <script src="../material_js/snackbar.min.js" type="text/javascript"></script>
    <!-- End of CSS and JS for Snackbar -->


    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="css/rice_report.css">

    <!-- FUnction for the datepicker -->
    <script>
        $(function() {
            $(".datepicker").datepicker({
                dateFormat: 'dd-mm-yy'
            });
        });

    </script>


</head>

<body>

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <!-- Top row, always visible -->
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">शालेय पोषण आहार </span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="../index.php">Home</a>
                </nav>


            </div>

            <div class="tabs mdl-js-ripple-effect">
                <a href="index.php" class="mdl-layout__tab">तांदुळाचे हिशोब </a>
                <a href="mugdal_report.php" class="mdl-layout__tab">मुगडाळ हिशोब </a>
                <a href="turdal_report.php" class="mdl-layout__tab"> तुरडाळ हिशोब </a>
                <a href="masurdal_report.php" class="mdl-layout__tab"> मसूरडाळ हिशोब</a>
                <a href="sugar_report.php" class="mdl-layout__tab">गुळ / साखर हिशोब </a>
                <a href="matki_report.php" class="mdl-layout__tab">मटकी हिशोब </a>
                <a href="mug_report.php" class="mdl-layout__tab"> मुग हिशोब </a>
                <a href="chavli_report.php" class="mdl-layout__tab"> चवली हिशोब </a>
                <a href="harbara_report.php" class="mdl-layout__tab"> हरभरा हिशोब </a>
                <a href="vatana_report.php" class="mdl-layout__tab"> वाटाणा हिशोब </a>
                <a href="jire_report.php" class="mdl-layout__tab"> जिरे हिशोब </a>
                <a href="mohari_report.php" class="mdl-layout__tab"> मोहरी हिशोब </a>
                <a href="halad_report.php" class="mdl-layout__tab"> हळद हिशोब </a>
                <a href="mirchi_powder_report.php" class="mdl-layout__tab is-active">  मिर्ची पावडर हिशोब </a>
                <a href="soyabin_tel_report.php" class="mdl-layout__tab"> सोयाबीन तेल हिशोब </a>
                <a href="salt_report.php" class="mdl-layout__tab"> मीठ हिशोब </a>
                <a href="vegetables_report.php" class="mdl-layout__tab"> भाजीपाला हिशोब </a>
                <a href="monthly_stock.php" class="mdl-layout__tab">मासिक स्टॉक</a>
            </div>


        </header>
        <!--
<div class="mdl-layout__drawer">
    <span class="mdl-layout-title"> शालेय पोषण आहार </span>
    <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="../index.php">Home</a>
        <a class="mdl-navigation__link" href="master.php">Master Report</a>
        <a class="mdl-navigation__link" href="index.php">Entry Report</a>
    </nav>
</div>
-->
        <main class="mdl-layout__content">

            <div class="page-content">
                <!-- Your content goes here -->
                <?php
            include("../database/connection.php");
if(isset($_GET['success1']))
{
                   echo "<script type='text/javascript'>
                    $( document ).ready(function() {
                        $.snackbar({content: 'Data was entered successfully', timeout: 5000});
                    });
                </script>" ;
}
        ?>

         <?php
                  $result12=mysqli_query($con,"select * from food_daily_stock where food_name='mirchi_powder'");
                $result_set=mysqli_fetch_array($result12);
                $mirchi_powder_remaining=$result_set['last_month_stock'];
                $mirchi_powder_current_month=$result_set['current_month_stock'];
                $total_current_mirchi_powder=$mirchi_powder_remaining+$mirchi_powder_current_month;
                
                ?>
          
                        <div class="mdl-shadow--2dp contentDiv">

                            <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect" id="tabs1">
                                <div class="mdl-tabs__tab-bar">
                                    <a href="#mirchi_powder_entry_panel" class="mdl-tabs__tab is-active">Daily mirchi powder Entry</a>
                                    <a href="#mirchi_powder_report_panel" class="mdl-tabs__tab">mirchi powder Report</a>
                                </div>
                                <div class="mdl-tabs__panel is-active" id="mirchi_powder_entry_panel">
                                    <div class="mirchi_powder_entry_div">
                                        <h2 id="form_header">Daily mirchi powder Entry Form</h2>
                                        <form action="mirchi_powder_daily_report_submit.php" method="post">
                                    <div class="mdl-grid">
                                        
                                            <div class="mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                                <label class="Customlabel">select the student category</label>
                                                <select name="student_category1" class="option12" required>
                                                    <option></option>
                                                    <option value="6to8">६ ते ८</option>
                                                    <option value="1to5">१ ते ५</option>
                                                </select>
                                        </div>
                                                                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="per_student_material" name="per_student_material" required/>
                                                    <label class="mdl-textfield__label" for="per_student_material"> प्रती विद्यार्थी वस्तू (ग्राम मध्ये )</label>
                                                    <span class="mdl-textfield__error">Input is not a number!</span>
                                                </div>
                                                                              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="per_student_expense" name="per_student_expense" required/>
                                            <label class="mdl-textfield__label" for="per_student_expense"> प्रती विद्यार्थी खर्च </label>
                                                    <span class="mdl-textfield__error">Input is not a number!</span>
                                                </div>
                                    </div>
                                            <div class="mdl-grid">
                                                <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell-8-col-tablet mdl-cell--4-col">
                                                    <label class="customLabel">Date :
                                                        <input class="datepicker" type="text" name="entry_date" required/>
                                                    </label>
                                                </div>
                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="total_student" name="total_student" required/>
                                                    <label class="mdl-textfield__label" for="total_student"> पटसंख्या</label>
                                                    <span class="mdl-textfield__error">Input is not a number!</span>
                                                </div>
                                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="total_plates" name="total_plates"  onchange="myFunction2(this.value)" required/>
                                                    <label class="mdl-textfield__label" for="total_plates"> लाभाथ्री संख्या ( ताटांची संख्या )</label>
                                                    <span class="mdl-textfield__error">Input is not a number!</span>
                                                </div>
                                               
                                            </div>
                                            <div class="mdl-grid">
                                                 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                                      <label class="" for="prev_month_remain_mirchi_powder"> मागील महिना शिल्लक मिर्ची पावडर </label>
                                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="prev_month_remain_mirchi_powder" name="prev_month_remain_mirchi_powder" value="<?php echo $mirchi_powder_remaining;?>" required/>
                                                   
                                                    <span class="mdl-textfield__error">Input is not a number!</span>
                                                </div>
                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                                         <label class="" for="mirchi_powder_got"> चालू महिना प्राप्त मिर्ची पावडर </label>
                                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="mirchi_powder_got" name="mirchi_powder_got" value="<?php echo $mirchi_powder_current_month;?>" required/>
                                               
                                                    <span class="mdl-textfield__error">Input is not a number!</span>
                                                </div>
                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                                          <label class="" for="total_mirchi_powder"> एकून मिर्ची पावडर </label>
                                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="total_mirchi_powder" name="total_mirchi_powder" value="<?php echo $total_current_mirchi_powder;?>" required/>
                                              
                                                    <span class="mdl-textfield__error">Input is not a number!</span>
                                                </div>
                                        
                                            </div>
                                            <div class="mdl-grid">
                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                             <label class="" for="cooked_mirchi_powder">मिर्ची पावडर वापरली</label>
                                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="cooked_mirchi_powder" name="cooked_mirchi_powder" required/>
                                          
                                                    <span class="mdl-textfield__error">Input is not a number!</span>
                                                </div>
                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                             <label class="" for="remaining_mirchi_powder"> महिना अखेर शिल्लक मिर्ची पावडर </label>
                                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="remaining_mirchi_powder" name="remaining_mirchi_powder" required/>
                                                 
                                                    <span class="mdl-textfield__error">Input is not a number!</span>
                                                </div>
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col">
                                 <label class="" for="total_expense"> एकूण खर्च </label>
                                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="total_expense" name="total_expense" required/>
       
                                                    <span class="mdl-textfield__error">Input is not a number!</span>
                                                </div>

                                            </div>
                                            <!-- Accent-colored raised button with ripple -->
                                            <div class="submitButtonDiv">
                                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="daily_mirchi_powder_info" type="submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                <div class="mdl-tabs__panel" id="mirchi_powder_report_panel">

                                    <div class="mirchi_powder_report_div">
                                        <h2 id="form_header">Monthly mirchi powder  Report</h2>
                                        <div class="">
                                            <div class="mdl-grid">
                                                <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell-8-col-tablet mdl-cell--4-col">
                                                    <label>Select Year :</label>
                                                    <select name="report_year" id="report_year" onChange="showReport()">
                                                        <option value=""></option>
                                                        <option value="2015">2015</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2010">2010</option>
                                                    </select>
                                                </div>
                                                <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell-8-col-tablet mdl-cell--4-col">
                                                    <label>Select Month :</label>
                                                    <select name="report_month" onChange="showReport()" id="report_month">
                                                        <option value=""></option>
                                                        <option value="01">Jan</option>
                                                        <option value="02">Feb</option>
                                                        <option value="03">March</option>
                                                        <option value="04">April</option>
                                                        <option value="05">May</option>
                                                        <option value="06">Jun</option>
                                                        <option value="07">July</option>
                                                        <option value="08">Aug</option>
                                                        <option value="09">Sept</option>
                                                        <option value="10">Oct</option>
                                                        <option value="11">Nov</option>
                                                        <option value="12">Deb</option>
                                                    </select>
                                                </div>
                                                
                                                <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell-8-col-tablet mdl-cell--4-col">
                                                  <label>select the student category</label>
                                                <select name="student_category12" onChange="showReport()" id="student_category12" required>
                                                    <option></option>
                                                    <option value="6to8">६ ते ८</option>
                                                    <option value="1to5">१ ते ५</option>
                                                </select>
                                                </div>

                                            </div>

                                        </div>
                                        <div id="dvContents">

                                        </div>

                                        <div class="printButtonDiv">
                                            <button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary" id="btnPrint" value="Print">Print Report</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

            </div>
        </main>
    </div>

    <script>
        function showReport() {

            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("dvContents").innerHTML = xmlhttp.responseText;
                }
            }
            str1 = document.getElementById("report_year").value;
            str2 = document.getElementById("report_month").value;
            str3 = document.getElementById("student_category12").value;
            xmlhttp.open("GET", "php/monthly_mirchi_powder_report.php?s_year=" + str1 + "&s_month=" + str2 +"&s_category=" + str3, true);
            xmlhttp.send();
        }

    </script>

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
                frameDoc.document.write('<link href="css/rice_report_print.css" rel="stylesheet" type="text/css" />');
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
    
            <script>
function myFunction2(val) {
    var per_student_quantity=document.getElementById("per_student_material").value;
    var per_student_expense=document.getElementById("per_student_expense").value;
    var student_served=document.getElementById("total_plates").value;
    var used_stock1=(per_student_quantity*student_served)/1000;
    var expense1=(per_student_expense*student_served);
    document.getElementById("cooked_mirchi_powder").value=used_stock1;
    document.getElementById("total_expense").value=expense1;
    
    
    var total_stock=document.getElementById("total_mirchi_powder").value;
    var used_stock=document.getElementById("cooked_mirchi_powder").value;
    var remaining_stock=total_stock-used_stock;
    
    if (remaining_stock >= 0) {
      document.getElementById("remaining_mirchi_powder").value=remaining_stock;
    }else{
      alert("used stock is more than total stock available");
    }
   

}
</script>
    
    <script>
function myFunction1(val) {
//    alert("The input value has changed. The new value is: " + val);
    var total_stock=document.getElementById("total_mirchi_powder").value;
    var used_stock=document.getElementById("cooked_mirchi_powder").value;
    var remaining_stock=total_stock-used_stock;
    if (remaining_stock >= 0) {
      document.getElementById("remaining_mirchi_powder").value=remaining_stock;
    }else{
      alert("used stock is more than total stock available");
    }
}
</script>

</body>

</html>
