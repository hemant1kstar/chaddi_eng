<?php
include("database/connection.php");
if (isset($_GET['q'])) {  //get value as table name from url
    $link=$_GET['q'];
    
}
$links = trim($link,'`');
$linksTitle = strtoupper($links);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../css/material.brown-light_green.min.css" />
        <script src="../material_js/material.min.js"></script>
        <link rel="stylesheet" href="../material_js/Material+Icons.css" />
        <link rel="stylesheet" href="../fonts/Roboto+300,400,500,700.css" />
        <title>
            <?php echo $linksTitle; ?> | Paperless System
        </title>

        <link rel="stylesheet" href="css/table_display.css">

        <!--        it must for checkbox select-->
        <script src="../jquery/jquery-2.1.4.min.js"></script>

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
            <main class="mdl-layout__content" id="dvContents">
                <div class="page-content">
                    <h2 class="contentHeader"><?php echo $links; ?></h2>

                    <div class="contentDiv">
                        <!-- Your content goes here -->
                        <a href='index.php' class='mdl-js-button mdl-js-ripple-effect backButton' title='Back'>
                            <img src="../images/dynamicTables/ic_arrow_back_24px.svg" alt="Back" />
                        </a>
                        <div class="">
                            <table class="mdl-data-table mdl-js-data-table tabledata" id="dvContents">
                                <thead>
                                    <tr>
                                        <?php
                             $query="DESCRIBE $link"; //build query for get column names from table
//                                mysqli_query ($con,"set character_set_results='utf8'"); 

                             $results=mysqli_query($con,$query) or die('Query error:'.mysql_error());

                             $columnname=array();
                             $count=0;
                              while($row1= mysqli_fetch_array($results)) {
                                $columnname[$count]=$row1[0];
                                $columnname1=ucwords($row1[0]);
                                if($row1[0]=='id'){
                                
                                }else
                                {
                                 echo "<th class='mdl-data-table__cell--non-numeric'>$columnname1</th>";
                                }
                                $count++;
                              }
                          echo "<th class='mdl-data-table__cell--non-numeric divhide'>Update</th>";
                          echo "<th class='mdl-data-table__cell--non-numeric divhide'>Delete</th>";

                        ?>
                                    </tr>
                                </thead>
                                <?php
                            echo "<tbody>";
                            $arraylen=sizeof($columnname); //find array length
                            mysqli_query ($con,"set character_set_results='utf8'"); 
                            $result=mysqli_query($con,"SELECT * FROM $link");//select value from perticular table
                            while($row2= mysqli_fetch_array($result)) {
                                
                                echo "<tr>";
                            for($co=1;$co<$arraylen;$co++){  
                                $col_value=$row2[$co];
                                $link1=$row2[0];
                                echo "<th class='mdl-data-table__cell--non-numeric'>$col_value</th>";
                         
                                 }
                                echo "<th class='divhide'><a class='mdl-js-button mdl-js-ripple-effect' href='edit_table_row.php?q=".$link."&Create_id=".$link1."' title='Edit Data'><img src='../images/dynamicTables/ic_edit_24px.svg' /></a></th>";
                                echo '<th class="divhide"><button class="mdl-js-button mdl-js-ripple-effect deleteRowButton" onClick="myFunction_Delete_row(\''.$link.'\',\''.$link1.'\')" title="Delete Complete Row"><img src="../images/dynamicTables/ic_delete_24px.svg" /></button></th>';
//           echo "<th><a class='mdl-button mdl-js-button mdl-button--primary' href='table_row_delete.php?q=".$link."&row_id=".$link1."'>Delete</a></th>";
                                   echo "</tr>";
                                   $co++;
                            }
                           echo "</tbody>";
                      ?>
                            </table>

                            <?php
   echo "<a href='add_data.php?q=$link' class='mdl-button mdl-js-button mdl-button--primary divhide'>Add Data</a>";
?>
                                <button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary divhide" id="btnPrint" value="Print">Print </button>
                            
                             <?php
   echo "<a href='add_Fields_layout.php?q=$link' class='mdl-button mdl-js-button mdl-button--primary divhide'>Fields Add</a>";
?>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <script>
            function myFunction_Delete_row(t_name, r_name) {
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
                    window.location = "table_row_delete.php?t_name=" + t_name + "&row_id=" + r_name;
                });
            }

        </script>

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
                    frameDoc.document.write('<link href="style.css" rel="stylesheet" type="text/css"/><link href="css/styles_for_print.css" rel="stylesheet" type="text/css"/>');
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
