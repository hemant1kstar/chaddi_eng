<?php
        include("database/connection.php");
         // Make my_db the current database
         $db_selected = mysqli_select_db($con,"teacher_.$teacher_id.");

            if (!$db_selected) {
            // If we couldn't, then it either doesn't exist, or we can't see it.
              $db_sql = "CREATE DATABASE teacher_$teacher_id";
            mysqli_query($con,$db_sql);
             }
?>