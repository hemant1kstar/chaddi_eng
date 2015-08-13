<?php
         include("database/connection.php");
        if (isset($_GET['q'])) {  //get value as table name from url
        $link=$_GET['q'];
        $query="DESCRIBE $link"; //build query for get column names from table
        $results=mysqli_query($con,$query) or die('Query error:'.mysql_error());
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="stylesheet" href="mdl/material.min.css">
    <link rel="stylesheet" href="css/add.css">
    <script src="mdl/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <title>Data Add Page</title>
</head>
<body>
    <form name="frmUser" method="post" action="">
        <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp dataadd">   
        <?php
            $columnname=array();
            $count=0;
                while($row1 = mysqli_fetch_array($results)) {
                    $columnname[$count]=$row1[0];
                    $count++;
                }
            $result=mysqli_query($con,"SELECT * FROM $link"); 
            $arraylen=sizeof($columnname); //find array length
            for($co=1;$co<$arraylen;$co++){
                $name=$columnname[$co];   
        ?>
        <tr>
        <td class="mdl-data-table__cell--non-numeric"><label><?php echo $name ?></label></td>
        <td><input type="text" name="cname[]" class="text" value=""></td>    
        </tr>
        <?php
            }
        ?>
            <?php
                if(isset($_POST["submit"])){
                    $k=1;
                    $colnames="";
                    foreach ($_POST["cname"] as $key => $value) {
                       $columnname[$k];
                        $vals[] = mysqli_real_escape_string($con, $value);
                        $colnames=$colnames."`".$columnname[$k]."`".",";
                        $k++;
                        }
                    $sqla=substr_replace($colnames, "", -1);
                    $colvals = "'".implode("', '", $vals)."'";
                    mysqli_query($con, "INSERT INTO $link ($sqla) VALUES ($colvals)"); 
                    unset($cols, $vals);
                    mysqli_close($con);
                  }
            ?>
        <tr>
            <td colspan="2"><input type="submit" name="submit" class="mdl-button mdl-js-button mdl-button--raised submitbtn">
            </td>
        </tr>
        </table>   
    </form>
</body>
</html>