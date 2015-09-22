<html>
<head>
    <title>Transpotation System</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.indigo-pink.min.css">
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  
  <link rel="stylesheet" href="css/styles.css">
          <!-- SweetAlert CSS and JavaScript files-->
        <script src="dist/sweetalert.min.js"></script>
        <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
</head>
    <body>
        <!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Transpotation System</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="../index.php">Home</a>
      </nav>
    </div>
    
      <div class="tabs mdl-js-ripple-effect">
                <a href="index.php" class="mdl-layout__tab is-active">Bus System</a>
                <a href="student_bus_status.php" class="mdl-layout__tab">Student Status</a>
                <a href="student_bus_reg.php" class="mdl-layout__tab">Register Student</a>
        </div>
  </header>

  <main class="mdl-layout__content">
    <div class="page-content">
      
<a class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored add_button" href="add_bus.php">
  <i class="material-icons">add</i>
</a>
      
  <?php
  include("../database/connection.php");
    ?>
      <div class="bus_list_div mdl-shadow--2dp">
      <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
  <thead>
    <tr>
        <th class="mdl-data-table__cell--non-numeric">Bus ID</th>
          <th class="mdl-data-table__cell--non-numeric">Bus Name</th>
          <th class="mdl-data-table__cell--non-numeric">Driver Name</th>
          <th class="mdl-data-table__cell--non-numeric">Pickup Time</th>
          <th class="mdl-data-table__cell--non-numeric">Drop Time</th>
          <th class="mdl-data-table__cell--non-numeric">Area</th>
          <th class="mdl-data-table__cell--non-numeric">Update</th>
          <th class="mdl-data-table__cell--non-numeric">Delete</th>
    </tr>
  </thead>
                                <?php
                            echo "<tbody>";
                            mysqli_query ($con,"set character_set_results='utf8'"); 
                            $result=mysqli_query($con,"SELECT * FROM bus_system");
                            while($row= mysqli_fetch_array($result)) {
                            $bus_id=$row['bus_id'];
                            $bus_name=$row['bus_name'];
                            $driver_name=$row['driver_name'];
                            $pickup_time=$row['pickup_time'];
                            $drop_time=$row['drop_time'];
                            $area=$row['area'];
                            echo "<tr>";
                            echo "<th class='mdl-data-table__cell--non-numeric'>$bus_id</th>";
                            echo "<th class='mdl-data-table__cell--non-numeric'>$bus_name</th>";
                            echo "<th class='mdl-data-table__cell--non-numeric'>$driver_name</th>";
                            echo "<th class='mdl-data-table__cell--non-numeric'>$pickup_time</th>";
                            echo "<th class='mdl-data-table__cell--non-numeric'>$drop_time</th>";
                            echo "<th class='mdl-data-table__cell--non-numeric'>$area</th>";
                              
                    echo "<th><a class='mdl-js-button mdl-js-ripple-effect' href='edit_bus.php?bus_id=".$bus_id."' title='Edit Data'><img src='images/ic_edit_24px.svg' /></a></th>";
                                
                                echo '<th><button class="mdl-js-button mdl-js-ripple-effect" onClick="myFunction_Delete_row(\''.$bus_id.'\')" title="Delete Data"><img src="images/ic_delete_24px.svg"/></button></th>';
                            echo "</tr>";
                            }
                           echo "</tbody>";
                      ?>
</table>
      </div>
      
    </div>
  </main>
</div>
            <script>
            function myFunction_Delete_row(row_id) {
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this data!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                }, function() {
                    swal("Deleted!", "Your  file has been deleted.", "success");
                    window.location = "bus_row_delete.php?row_id1=" + row_id;
                });
            }

        </script>  


    
    </body>
</html>