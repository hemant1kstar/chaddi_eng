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

    <link rel="stylesheet" href="css/master.css">


  </head>
  <body>
<!--    Scrollable header-->
              <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
                <header class="mdl-layout__header">
                  <!-- Top row, always visible -->
                  <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title">Entry Student Details</span>
                    <div class="mdl-layout-spacer"></div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                                mdl-textfield--floating-label mdl-textfield--align-right">
                      <label class="mdl-button mdl-js-button mdl-button--icon"
                             for="waterfall-exp">
                        <i class="material-icons">search</i>
                      </label>
                      <div class="mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input" type="text" name="sample"
                               id="waterfall-exp" />
                      </div>
                    </div>
                  </div>

              <div class="tabs mdl-js-ripple-effect">
                  <a href="master.php" class="mdl-layout__tab">Student Info</a>
                  <a href="tc_info_display.php" class="mdl-layout__tab">TC Information</a>
                  <a href="other_info_display.php" class="mdl-layout__tab is-active">Other Info</a>
                  <a href="student_grade_display.php" class="mdl-layout__tab">Student Grades</a>
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

                      <!-- Your content goes here -->
                    <div class="" id="masterTableBlock">
                         <h2 id="form_header">Other Details Table</h2>

                      <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" id="table1">
                        <thead>
                                <tr>
                                  <th>Sr No.</th>
                                  <th>Reg No.</th>
                                  <th class="mdl-data-table__cell--non-numeric">Student Name</th>
                                  <th>Aadhar No.</th>
                                  <th>Bank Account No.</th>
                                  <th class="mdl-data-table__cell--non-numeric">Bank/Branch</th>
                                  <th>Branch Code</th>
                                  <th>LIC No.</th>
                                </tr>
                        </thead>
                        <tbody>
        <?php
 include("connection.php");
        mysqli_query ($con,"set character_set_results='utf8'");
        $query = mysqli_query($con,"SELECT * FROM master") or die(mysqli_error());

        $sr_no=1;
        while($row=mysqli_fetch_array($query))
        {

          $reg_no=$row['reg_no'];
          $name=$row['student_name'];
          $aadhar_no=$row['aadhar_no'];
          $bank_account_no=$row['bank_account_no'];
          $bank_branch=$row['bank_branch'];
          $bank_branch_code=$row['bank_branch_code'];
          $lic_id_no=$row['lic_id_no'];


          echo "<tr>";
          echo "<td>$sr_no</td>";
          echo "<td>$reg_no</td>";
          echo "<td>$name</td>";
          echo "<td>$aadhar_no</td>";
          echo "<td>$bank_account_no</td>";
          echo "<td>$bank_branch</td>";
          echo "<td>$bank_branch_code</td>";
          echo "<td>$lic_id_no</td>";
          echo "</tr>";

           $sr_no++;
        }

        ?>

                        </tbody>
                      </table>

                    </div>
                  </main>

            </div>
  </body>
</html>
