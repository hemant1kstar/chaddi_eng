<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.brown-light_green.min.css">
    <link rel="stylesheet" href="css/add.css">
    <script src="../material_js/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <title>Data Add Page</title>
</head>
<body>
    
    <?php
         include("database/connection.php");
        if (isset($_GET['q'])) {  //get value as table name from url
        $link=$_GET['q'];
        $query="DESCRIBE $link"; //build query for get column names from table
        $results=mysqli_query($con,$query) or die('Query error:'.mysql_error());
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
      <form method="post" action="">
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
                    $query1=mysqli_query($con, "INSERT INTO $link ($sqla) VALUES ($colvals)");
                        if($query1)
                        {
                                header("Location:table_display.php?q=$link");
                        }else{
                             echo "error in inserting row";
                        }
                    
                }
                  
            ?>
        <tr>
            <td colspan="2">
                <input type="submit" name="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" value="Add">
            </td>
        </tr>
        </table>   
    </form>
        
      </div>
  </main>
</div>



</body>
</html>