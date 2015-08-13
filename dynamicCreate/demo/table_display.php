
<?php
        include("database/connection.php");
        if (isset($_GET['q'])) {  //get value as table name from url
        $link=$_GET['q'];
        $result=mysqli_query($con,"SELECT * FROM $link");//select value from perticular table
        $query="DESCRIBE $link"; //build query for get column names from table
        $results=mysqli_query($con,$query) or die('Query error:'.mysql_error());
        }
?>
<html>
    <head>
    <link rel="stylesheet" href="mdl/material.min.css">
    <link rel="stylesheet" href="css/add.css">
    <script src="mdl/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
    
<!--        it must for checkbox select-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
            
        <!--        update-->
            <script type="text/javascript">
                $(document).ready(function(){
                    $('#checkBtn').click(function(){
                      checked = $("input[type=checkbox]:checked").length;
                           
                      if(!checked) {
                        alert("You must check at least one checkbox for update.");
                        return false;
                      }else{
                      }
                    });
                });
            </script>
        <!--        delete-->
            <script type="text/javascript">
                $(document).ready(function(){
                    $('#checkBtn1').click(function(){
                      checked = $("input[type=checkbox]:checked").length;
                           
                      if(!checked) {
                        alert("You must check at least one checkbox for Delete.");
                        return false;
                      }else{
                      }
                    });
                });
            </script>
    </head>
<body>
    <form name="frmUser" method="post" action="edit_user.php?q=<?php echo $link; ?>">
            <table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp dataadd">
                <?php
                    echo "<tr><th class='mdl-data-table__cell--non-numeric'></th>";
                    $columnname=array();
                    $count=0;
                    while($row1 = mysqli_fetch_array($results)) {
                        $columnname[$count]=$row1[0];
                        echo "<th class='mdl-data-table__cell--non-numeric'>$columnname[$count].</th>";//all column names in this array
                        $count++;
                    }
                     echo"</tr>";
                ?>
                <?php
                    $i=0;
                    $arraylen=sizeof($columnname); //find array length
                while($row = mysqli_fetch_array($result)) {  
                ?>
                <tr>
                    <td><input type="checkbox" name="id[]" class="mdl-data-table--selectable" value="<?php echo $row["id"];?>">
                    </td>
                <?php
                    for($co=0;$co<$arraylen;$co++){
                        $name=$columnname[$co];       
                ?> 
                <td><?php echo $row[$name];?></td>
                <?php
                    $i++;
                    }
                ?>
                 </tr>
                <?php
                    $co++;
                }
                ?>
                <tr>
                    <td class="buttons" colspan="4">
                         <input type="submit" name="update" value="Update"  id="checkBtn" class="mdl-button mdl-js-button mdl-button--raised submitbtn"/>  
                    <?php
                         echo "<button type='button' class='mdl-button mdl-js-button mdl-button--raised abutton'><a href='addData.php?q=$link' >Add</a></button>";
                         echo "<button type='button' class='mdl-button mdl-js-button mdl-button--raised abutton'><a href='table_for_delete.php?q=$link' id='checkBtn1' >Delete</a></button>";
                    ?> 
                    </td>
                    <td></td>
                </tr>
            </table>
    </form>
</body>
</html>