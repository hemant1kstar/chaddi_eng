<?php
         include("database/connection.php");
        if (isset($_GET['q'])) {  //get value as table name from url
        $link=$_GET['q'];
        $query="DESCRIBE $link"; //build query for get column names from table
        $results=mysqli_query($con,$query) or die('Query error:'.mysql_error());
        }
?>
<?php
        if(isset($_POST["submit"]) && $_POST["submit"]!="") {
            $apid=$_POST["id"];
            $count=1;
            foreach($_POST["cname"] as $cna=>$name1){
                $row2 = mysqli_fetch_array($results);
                $columnname1=$row2[0];
                mysqli_query($con,"UPDATE $link set $columnname1='$name1' WHERE id='$apid'"); 
            }
            $count++;
            header("Location:table_display.php?q=$link");
        }
?>
<html>
    <head>
    <link rel="stylesheet" href="mdl/material.min.css">
    <link rel="stylesheet" href="css/add.css">
    <script src="mdl/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
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
$dCreate_id=$_GET['Create_id'];
//            $rowCount = count($_POST["id"]); 
//            for($i=0;$i<$rowCount;$i++) {
//            $result=mysqli_query($con,"SELECT * FROM $link WHERE id='".$_POST["id"][$i]."'");
                  $result=mysqli_query($con,"SELECT * FROM $link WHERE id='$dCreate_id'");
            $row[$i]=mysqli_fetch_array($result);
                
            $arraylen=sizeof($columnname); //find array length
            for($co=0;$co<$arraylen;$co++){
                $name=$columnname[$co];   
        ?>
            <tr>
                <td class="mdl-data-table__cell--non-numeric"><label><?php echo $name ?></label></td>
                <td class="mdl-data-table__cell--non-numeric"><input type="hidden" name="id" class="txtField" value="<?php echo $row[$i]['id']; ?>">
                    <input type="text" name='cname[]' value="<?php echo $row[$i][$name]; ?>" class="text">
                </td>
            </tr>
        <?php
            }
//            }
        ?>
            <td></td>
            <td><input type="submit" name="submit" value="Submit" class="mdl-button mdl-js-button mdl-button--raised submitbtn"></td>
        </table>
    </form>
</body>
</html>