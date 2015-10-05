<?php
         session_start();
         if(!$_SESSION['LoggedIn_user'])
           {
                 header("location:../../login_panel/login.php?problem='Not Logged In'");
                 exit;
         }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Master Table | Paperless System</title>

    <!--    CSS For Material Design-->
    <link rel="stylesheet" href="../../css/material.blue-pink.min.css" />
    <script src="../../material_js/material.js"></script>
    <link rel="stylesheet" href="../../material_js/Material+Icons.css" />
    <link rel="stylesheet" href="../../fonts/Roboto+300,400,500,700.css" />

    <!--  End of CSS For Material Design-->

    <link rel="stylesheet" href="css/master_update.css">



</head>





<body>
    <!--    Scrollable header-->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <!-- Top row, always visible -->
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">All Student Details</span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="../index.php">Entry</a>
                    <a class="mdl-navigation__link" href="../../index.php">Home</a>
                </nav>


            </div>

            <div class="tabs mdl-js-ripple-effect">
                <a href="../master.php" class="mdl-layout__tab">Student Info</a>
                <a href="../tc_info_display.php" class="mdl-layout__tab">TC Information</a>
                <a href="../other_info_display.php" class="mdl-layout__tab">Other Info</a>
                <a href="../student_grade_display.php" class="mdl-layout__tab is-active">Student Grades</a>
            </div>


        </header>



        <!--
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Paperless System</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="../index.php">Home</a>
                <a class="mdl-navigation__link" href="master.php">Master</a>
                <a class="mdl-navigation__link" href="index.php">Entry</a>
            </nav>
        </div>
-->



        <main class="mdl-layout__content">

            <!-- Your content goes here -->
            <div class="masterUpdateBlock">
                <h2 id="form_header">Update</h2>
                
                 <?php
                include("../../database/connection.php");
if(isset($_GET['row_id']))
{
$r_id=$_GET['row_id'];
     mysqli_query ($con,"set character_set_results='utf8'"); 
    $query="select * from master where reg_no='$r_id'";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result))
    {
        $reg_no=$row['reg_no'];
        $exam_seat_no=$row['exam_seat_no'];
        $class10_percentage=$row['10_percentage'];
        $class9_percentage=$row['9_percentage'];
        $class8_grade=$row['8_grade'];
        $class7_grade=$row['7_grade'];
        $class6_grade=$row['6_grade'];
        $class5_grade=$row['5_grade'];
        $class4_grade=$row['4_grade'];
        $class3_grade=$row['3_grade'];
        $class2_grade=$row['2_grade'];
        $class1_grade=$row['1_grade'];

    }
}
                
?>
                            <form action="student_grade_update.php" method="post">


                                <div class="mdl-grid">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <label class="customLabel">Registration No :</label>
           <input class="mdl-textfield__input" type="text" id="student_name" name="reg_no" value="<?php echo "$reg_no";?>"  readonly/>

                                    </div>

                                    
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                    <label class="customLabel" for="exam_seat_no">Exam Seat No.</label>
                    <input class="mdl-textfield__input" type="text" id="exam_seat_no" name="exam_seat_no" value="<?php echo $exam_seat_no;?>" placeholder="Exam Seat No." required/>
                                      

                                    </div>

                                </div>



                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                <label class="customLabel" for="class10_percentage">Class 10 Percentage</label>
                                        <input class="mdl-textfield__input" type="text" id="class10_percentage" name="class10_percentage" value="<?php echo $class10_percentage;?>" placeholder="Class 10 Percentage"  required/>
            

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                                <label class="customLabel"  for="class9_percentage">Class 9 Percentage</label>
                                        <input class="mdl-textfield__input" type="text" id="class9_percentage" name="class9_percentage" value="<?php echo $class9_percentage;?>" placeholder="Class 9 Percentage"  required/>
                                

                                    </div>
                                </div>


                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                                    <label class="customLabel"  for="class8_grade">Class 8 Grade</label>
                                        <input class="mdl-textfield__input" type="text" id="class8_grade" name="class8_grade" value="<?php echo $class8_grade;?>" placeholder="Class 8 Grade"  required/>
                            

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                              <label class="customLabel"  for="class7_grade">Class 7 Grade</label>
                                        <input class="mdl-textfield__input" type="text" id="class7_grade" name="class7_grade" value="<?php echo $class7_grade;?>" placeholder="Class 7 Grade"  required/>
                                  

                                    </div>
                                </div>


                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                                   <label class="customLabel"  for="class6_grade">Class 6 Grade</label>
                                        <input class="mdl-textfield__input" type="text" id="class6_grade" name="class6_grade" value="<?php echo $class6_grade;?>" placeholder="Class 6 Grade"  required/>
                             

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                               <label class="customLabel"  for="class5_grade">Class 5 Grade</label>
                                        <input class="mdl-textfield__input" type="text" id="class5_grade" name="class5_grade" value="<?php echo $class5_grade;?>" placeholder="Class 5 Grade"  required />
                                 

                                    </div>
                                </div>

                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                                         <label class="customLabel"  for="class4_grade">Class 4 Grade</label>
                                        <input class="mdl-textfield__input" type="text" id="class4_grade" name="class4_grade" value="<?php echo $class4_grade;?>" placeholder="Class 4 Grade"  required/>
                       

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                                    <label class="customLabel"  for="class3_grade">Class 3 Grade</label>
                                        <input class="mdl-textfield__input" type="text" id="class3_grade" name="class3_grade" value="<?php echo $class3_grade;?>" placeholder="Class 3 Grade"  required/>
                            

                                    </div>
                                </div>

                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                    <label class="customLabel" for="class2_grade">Class 2 Grade</label>
                                        <input class="mdl-textfield__input" type="text" id="class2_grade" name="class2_grade" value="<?php echo $class2_grade;?>" placeholder="Class 2 Grade"  required/>
       

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                          <label class="customLabel"  for="class1_grade">class 1 Grade</label>
                                        <input class="mdl-textfield__input" type="text" id="class1_grade" name="class1_grade" value="<?php echo $class1_grade;?>" placeholder="Class 1 Grade"  required/>
                                      

                                    </div>
                                </div>


                                <!-- Accent-colored raised button with ripple -->
                                <div class="submitButtonDiv">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="submit_student_grade" type="submit">Submit</button>
                                </div>
                            </form>
                
            </div>
        </main>

    </div>
</body>

</html>