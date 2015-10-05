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
                <a href="../tc_info_display.php" class="mdl-layout__tab is-active">TC Information</a>
                <a href="../other_info_display.php" class="mdl-layout__tab">Other Info</a>
                <a href="../student_grade_display.php" class="mdl-layout__tab">Student Grades</a>
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
        $school_leaving_class=$row['school_leaving_class'];
        $date_leaving=$row['school_leaving_date'];
        $student_progress=$row['student_progress'];
        $leaving_reason=$row['school_leaving_reason'];
        $tc_no=$row['tc_no'];
        $behaviour=$row['behaviour'];
        $date=$row['tc_date'];
        $remark=$row['tc_remark'];

    }
}
                
?>
                                            <form action="edit_tc_update.php" method="post">

                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col">
                                        <label class="customLabel">Registration No :</label>
           <input class="mdl-textfield__input" type="text" id="student_name" name="reg_no" value="<?php echo "$reg_no";?>"  readonly/>

                                    </div>
                                </div>

                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="school_leaving_class" name="school_leaving_class"  value="<?php echo $school_leaving_class;?>" placeholder="School Leaving Class" />


                                    </div>
                                    <div class="mdl-cell mdl-cell-8-col-tablet mdl-cell--6-col">
                                        <label class="customLabel">Date Leaving :</label>
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input datepicker" type="date" id="date_leaving" name="date_leaving" required/>
                                        </div>
                                    </div>
                                </div>

                                <div class="mdl-grid">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="student_progress" name="student_progress" value="<?php echo $student_progress;?>"  placeholder="Student Progress" />
<!--                                        <label class="mdl-textfield__label" for="student_progress">Student Progress</label>-->

                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="leaving_reason" name="leaving_reason" value="<?php echo $leaving_reason;?>" placeholder="Leaving Reason"  />
<!--                                        <label class="mdl-textfield__label" for="leaving_reason">Leaving Reason</label>-->

                                    </div>
                                </div>

                                <div class="mdl-grid">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="tc_no" name="tc_no" value="<?php echo $tc_no;?>"  placeholder="TC No"/>
<!--                                        <label class="mdl-textfield__label" for="tc_no">TC No</label>-->
                                        <span class="mdl-textfield__error">Input is not a number!</span>
                                    </div>

                                    <div class="mdl-cell mdl-cell-8-col-tablet mdl-cell--6-col">
                                        <label class="customLabel">TC Date :</label>
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input datepicker" type="date" id="tc_date" name="tc_date" required/>
                                        </div>
                                    </div>
                                </div>

                                <div class="mdl-grid">


                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--6-col">
                                        <input class="mdl-textfield__input" type="text" id="behaviour" name="behaviour" value="<?php echo $behaviour;?>"  placeholder="Behaviour"/>
<!--                                        <label class="mdl-textfield__label" for="behaviour">Behaviour</label>-->

                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col-tablet mdl-cell--6-col"> 
                                        <input class="mdl-textfield__input" type="text" id="remark" name="remark"   value="<?php echo $remark;?>"  placeholder="Remark"/>
<!--                                        <label class="mdl-textfield__label" for="remark">Remark</label>-->

                                    </div>
                                </div>


                                <!-- Accent-colored raised button with ripple -->

                                <div class="submitButtonDiv">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="submit_tc_info" type="submit">
                                        Submit
                                    </button>
                                </div>
                            </form>
                
            </div>
        </main>

    </div>
</body>

</html>