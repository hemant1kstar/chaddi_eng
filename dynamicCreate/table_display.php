<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <link rel="stylesheet" href="mdl/material.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="mdl/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
        <title>Index Page</title>
        
<!--        it must for checkbox select-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    </head>
<body>
    
  <?php
        include("database/connection.php");
        if (isset($_GET['q'])) {  //get value as table name from url
        $link=$_GET['q'];
        mysqli_query ($con,"set character_set_results='utf8'"); 
        }
?>  
    
    
    <!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Dynamic Content</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="./index.php">Home</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Title</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="./index.php">Home</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">
        <!-- Your content goes here -->
            <div class="mdl-shadow--2dp">
        
        
            <table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp">
                       <thead>
                    <tr>
                        <?php
                             $query="DESCRIBE $link"; //build query for get column names from table
                             $results=mysqli_query($con,$query) or die('Query error:'.mysql_error());

                             $columnname=array();
                             $count=0;
                              while($row1= mysqli_fetch_array($results)) {
                                $columnname[$count]=$row1[0];
                                $columnname1=ucwords($row1[0]);
                                echo "<th class='mdl-data-table__cell--non-numeric'>$columnname1</th>";
                                $count++;
                              }
                          echo "<th class='mdl-data-table__cell--non-numeric'>Update</th>";
                          echo "<th class='mdl-data-table__cell--non-numeric'>Delete</th>";

                        ?>
                    </tr>
                  </thead>
                      <?php
                            echo "<tbody>";
                            $arraylen=sizeof($columnname); //find array length
                            $result=mysqli_query($con,"SELECT * FROM $link");//select value from perticular table
                            while($row2= mysqli_fetch_array($result)) {
                                
                                echo "<tr>";
                            for($co=0;$co<$arraylen;$co++){  
                                $col_value=$row2[$co];
                                $link1=$row2[0];
                                echo "<th class='mdl-data-table__cell--non-numeric'>$col_value</th>";
                         
                                 }
    echo "<th><a class='mdl-button mdl-js-button mdl-button--primary' href='edit_table_row.php?q=".$link."&Create_id=".$link1."'>Update</a></th>";
//           echo "<th><a class='mdl-button mdl-js-button mdl-button--primary' href='table_row_delete.php?q=".$link."&row_id=".$link1."'>Delete</a></th>";
                              echo "<th><button class='mdl-button mdl-js-button mdl-button--primary' onclick='myFunction_Delete()'>Delete</button></th>";
     

                                   echo "</tr>";
                                   $co++;
                            }
                           echo "</tbody>";
                      ?>
                 </table>
        
<?php
   echo "<a href='add_data.php?q=$link' class='mdl-button mdl-js-button mdl-button--primary'>Add Data</a>";
   echo "<a href='index.php' class='mdl-button mdl-js-button mdl-button--primary'>Back</a>";
?>
            

    </div>
        
      </div>
  </main>
</div>
    
    
<script>
function myFunction_Delete() {
    if (confirm("Do you want to delete!") == true) {
      window.location='table_row_delete.php?q=<?php echo $link;?>&row_id=<?php echo $link1?>';
    }
}
</script>

      
</body>
</html>  
    
    
    


