<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Student Status | Paperless System</title>

    <!--    CSS For Material Design-->
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.blue-pink.min.css" />
    <script src="../material_js/material.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">

    <!--  End of CSS For Material Design-->

    <link rel="stylesheet" href="../css/main.css">
    <link href='../student_list/css/class_wise.css' rel='stylesheet'>

</head>

<body>
    <!--    Waterfall header-->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <!-- Top row, always visible -->
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Student List</span>
                
               
            </div>

            <div class="tabs mdl-js-ripple-effect">
                <a href="index.php" class="mdl-layout__tab">Class Wise</a>
                <a href="year_wise.php" class="mdl-layout__tab">Year Wise</a>
                <a href="caste_wise.php" class="mdl-layout__tab">Caste Wise</a>
                <a href="student_status.php" class="mdl-layout__tab is-active">Student Status</a>
                <a href="division_wise.php" class="mdl-layout__tab">Division Wise</a>
                <a href="aadhar_card_wise.php" class="mdl-layout__tab">Aadhar Card Wise</a>
                <a href="" class="mdl-layout__tab">BPL Wise</a>
                <a href="scholarship.php" class="mdl-layout__tab">Scholarship</a>
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


                <div class="student_list mdl-shadow--2dp">
                    <h2 id="form_header">Student Status</h2>
                    <form action="" method="post">

                        <div class="showDataDiv">
                            <label class="customLabel">Status :</label>
                            <select name="status1" class="dropdownOptions" required>
                                    <option value=""></option>
                                <option value="Present">Student Present</option>
                                    <option value="Left School">Student Left school</option>
                                </select>

                            <input type='submit' class="mdl-button mdl-js-button mdl-button--primary mdl-js-ripple-effect" id="showDataButton" name='submit_status' value='Submit'>
                        </div>
                    </form>
                </div>

                <div class="student_list mdl-shadow--2dp">
                        <?php
                            include("../database/connection.php");
                            if(isset($_POST['submit_status'])){
                              $status=$_POST['status1'];
                                if ($status == "Present")
                                {
                                    $status1 = "Current Students"; 
                                } else 
                                    $status1 = "Students who left school";
                                                                       
                           echo "<div id='dvContents'>";   
                                echo "<h2 id='form_header'>Students' List for: $status1</h2>";
                           echo  "<table class='mdl-data-table mdl-js-data-table  mdl-shadow--2dp'>";
                           echo  "<thead>";
                           echo "<tr>";
                           echo "<th>Reg. No.</th>";
                           echo "<th class='mdl-data-table__cell--non-numeric'>Student Name</th>";
                           echo "<th class='mdl-data-table__cell--non-numeric'>Gender</th>";
                           echo "<th class='mdl-data-table__cell--non-numeric'>Category</th>";
                           echo "<th class='mdl-data-table__cell--non-numeric'>Class</th>";
                           echo "<th class='mdl-data-table__cell--non-numeric'>Aadhar No.</th>";
                           echo "<th class='mdl-data-table__cell--non-numeric'>Permanent Address</th>";
                           echo "</tr>";
                           echo  "</thead>";
                           echo "<tbody>";
                              
                          mysqli_query ($con,"set character_set_results='utf8'"); 
                          $query = mysqli_query($con,"SELECT * FROM master where status='$status'") or die(mysqli_error());
                          while($row=mysqli_fetch_array($query))
                          {
                            $reg_no=$row['reg_no'];
                            $student_name=$row['student_name'];
                            $gender=$row['gender'];
                            $category=$row['category'];
                            $permanent_address=$row['permanent_address'];
                            $aadhar_no=$row['aadhar_no'];
                            $class=$row['current_class'];

                            echo "<tr>";
                            echo "<td>$reg_no</td>"; 
                            echo "<td class='mdl-data-table__cell--non-numeric'>$student_name</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$gender</td>"; 
                            echo "<td class='mdl-data-table__cell--non-numeric'>$category</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$class</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$aadhar_no</td>";
                            echo "<td class='mdl-data-table__cell--non-numeric'>$permanent_address</td>";
                            echo "</tr>";
                          }

                           echo "</tbody>";
                           echo "</table>";
                           echo "</div>";
                           echo "<div class='submitButtonDiv'>";
                           echo "<button type='button' class='mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary' id='btnPrint' value='Print'>Print List</button>";
                           echo "</div>";
                            }
                         ?>
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
                frameDoc.document.write('<link href="css/forPrinting.css" rel="stylesheet" type="text/css" />');
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
