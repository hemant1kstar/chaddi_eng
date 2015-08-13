<?php

        include("database/connection.php");

        if (isset($_GET['q'])) {  //get value as table name from url
        $link=$_GET['q'];
        
        $rowCount = count($_POST["id"]);
             echo $rowCount;
        for($i=0;$i<$rowCount;$i++) {
                mysqli_query($con,"DELETE FROM $link WHERE id='" . $_POST["id"][$i] . "'");
        }
        header("Location:table_display.php?q=$link");
        }
?>