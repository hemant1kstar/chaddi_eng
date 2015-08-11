<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Paperless System</title>

    <!--    CSS For Material Design-->
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.blue-pink.min.css" />
    <script src="material_js/material.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <!--  End of CSS For Material Design-->

    <link rel="stylesheet" href="css/main.css">


</head>

<body>
    <!--    Waterfall header-->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <!-- Top row, always visible -->
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Entry Student Details</span>
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
            <!-- Bottom row, not visible on scroll -->
            <!--
                  <div class="mdl-layout__header-row">
                    <div class="mdl-layout-spacer"></div>
                     Navigation 
                    <nav class="waterfall-demo-header-nav mdl-navigation">
                      <a class="mdl-navigation__link" href="index.php">Basic Info</a>
                      <a class="mdl-navigation__link" href="">TC</a>
                      <a class="mdl-navigation__link" href="">Other Info</a>
                      <a class="mdl-navigation__link" href="student_grade.php">Grade</a>
                    </nav>
                  </div>
-->

            <div class="tabs mdl-js-ripple-effect">
                <a href="index.php" class="mdl-layout__tab">Student Info</a>
                <a href="tc_info.php" class="mdl-layout__tab">TC Information</a>
                <a href="other_info.php" class="mdl-layout__tab">Other Info</a>
                <a href="student_grade.php" class="mdl-layout__tab is-active">Student Grades</a>
                <a href="update.php" class="mdl-layout__tab">Update Student Info</a>
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

            <?php
    include("connection.php");
?>

                <?php
     if(isset($_POST['submit_student_grade']))
     {

        $reg_no=$_POST['reg_no'];
        $exam_seat_no=$_POST['exam_seat_no'];
        $class10_percentage=$_POST['class10_percentage'];
        $class9_percentage=$_POST['class9_percentage'];
        $class8_grade=$_POST['class8_grade'];
        $class7_grade=$_POST['class7_grade'];
        $class6_grade=$_POST['class6_grade'];
        $class5_grade=$_POST['class5_grade'];
        $class4_grade=$_POST['class4_grade'];
        $class3_grade=$_POST['class3_grade'];
        $class2_grade=$_POST['class2_grade'];
        $class1_grade=$_POST['class1_grade'];

      

      
      
      mysqli_query ($con,"set character_set_results='utf8'");      
      mysqli_query($con,"UPDATE master SET   exam_seat_no=N'$exam_seat_no',10_percentage=N'$class10_percentage',9_percentage=N'$class9_percentage',8_grade=N'$class8_grade',7_grade=N'$class7_grade',6_grade=N'$class6_grade',5_grade=N'$class5_grade',4_grade=N'$class4_grade',3_grade=N'$class3_grade',2_grade=N'$class2_grade',1_grade=N'$class1_grade' WHERE reg_no='$reg_no'");
      echo "Student Grades inserted successfully...";
     }
    ?>


                    <div class="page-content">
                        <!-- Your content goes here -->
                        <div class="mdl-shadow--2dp student_info_form">
                            <h2 id="form_header">Student Grade System</h2>
                            <form action="" method="post">


                                <div class="mdl-grid">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <label class="customLabel">Registration No :</label>
                                        <?php
              $result = mysqli_query($con,"SELECT * FROM master"); 
echo "<select name='reg_no' class='dropdownOptions' required>";
             echo "<option value=''></option>";
            while($row = mysqli_fetch_array($result)){
              $reg_no1=$row['reg_no'];
             echo "<option value='$reg_no1'>$reg_no1</option>";
            }
             echo "</select>";
          ?>

                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="exam_seat_no" name="exam_seat_no" required/>
                                        <label class="mdl-textfield__label" for="exam_seat_no">Exam Seat No.</label>

                                    </div>

                                </div>



                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="class10_percentage" name="class10_percentage" required/>
                                        <label class="mdl-textfield__label" for="class10_percentage">Class 10 Percentage</label>

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="class9_percentage" name="class9_percentage" />
                                        <label class="mdl-textfield__label" for="class9_percentage">Class 9 Percentage</label>

                                    </div>
                                </div>


                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="class8_grade" name="class8_grade" required/>
                                        <label class="mdl-textfield__label" for="class8_grade">Class 8 Grade</label>

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="class7_grade" name="class7_grade" />
                                        <label class="mdl-textfield__label" for="class7_grade">Class 7 Grade</label>

                                    </div>
                                </div>


                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="class6_grade" name="class6_grade" required/>
                                        <label class="mdl-textfield__label" for="class6_grade">Class 6 Grade</label>

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="class5_grade" name="class5_grade" />
                                        <label class="mdl-textfield__label" for="class5_grade">Class 5 Grade</label>

                                    </div>
                                </div>

                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="class4_grade" name="class4_grade" required/>
                                        <label class="mdl-textfield__label" for="class4_grade">Class 4 Grade</label>

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="class3_grade" name="class3_grade" />
                                        <label class="mdl-textfield__label" for="class3_grade">Class 3 Grade</label>

                                    </div>
                                </div>

                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="class2_grade" name="class2_grade" required/>
                                        <label class="mdl-textfield__label" for="class2_grade">Class 2 Grade</label>

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="class1_grade" name="class1_grade" />
                                        <label class="mdl-textfield__label" for="class1_grade">class 1 Grade</label>

                                    </div>
                                </div>


                                <!-- Accent-colored raised button with ripple -->
                                <div class="submitButtonDiv">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="submit_student_info" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>


                    </div>
        </main>

    </div>
</body>

</html>
