<?php
         session_start();
         if(!$_SESSION['LoggedIn_SMS'])
           {
                 header("location:login/login.php?login_problem='Not Logged In'");
                     exit;
         }
?>

<?php
 $comment = $comment1 = $url = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
   
   

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

  
     if (empty($_POST["comment1"])) {
     $comment1 = "";
   } else {
     $comment1 = test_input($_POST["comment1"]);
   }
    
 $comment1 = urlencode($comment1); 
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
    
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../css/material.orange-green.min.css" />
        <script src="../material_js/material.min.js"></script>
        <link rel="stylesheet" href="../material_js/Material+Icons.css" />
        <link rel="stylesheet" href="../fonts/Roboto+300,400,500,700.css" />
        <title>SMS Panel</title>
        <link rel="stylesheet" href="css/style.css">

        <!--        it must for checkbox select-->
        <script src="../jquery/jquery-2.1.4.min.js"></script>
    </head>

    <body>
        <!-- Always shows a header, even in smaller screens. -->
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <header class="mdl-layout__header">
                <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title">SMS Panel</span>
                    <!-- Add spacer, to align navigation to the right -->
                    <div class="mdl-layout-spacer"></div>
                    <!-- Navigation. We hide it in small screens. -->
                    <nav class="mdl-navigation mdl-layout--large-screen-only">
                        <a class="mdl-navigation__link" href="index.php">Home</a>
                        
                        <a class="mdl-navigation__link" href="login/smsgateway_logout.php">Logout</a>
                    </nav>
                </div>
            </header>
            <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">SMS Panel</span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="index.php">Home</a>         
                    <a class="mdl-navigation__link" href="login/smsgateway_logout.php">Logout</a>
                </nav>
            </div>
            <main class="mdl-layout__content">
                <div class="page-content">
                    <!-- Your content goes here -->
         
                <div id="get_student_div">
                            <label>Select the Class</label>
                            <select name="users" onchange="showUser(this.value)" id="select1">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>


                            <button id='button2' onClick='addallmob()'>All Student</button>
                            <br/>

                            <br>
                            <div id="txtHint" style="width:450px; float:left;"><b>Student info will be listed here...</b></div>
            </div>

    
                        <div id="student_display">

                            <h1>Bulk SMS Facility</h1>

                            <form method="post" action="send.php" name="myform" id="id2">
                                <b>Numbers:</b>
                                <br/>
                                <textarea name="comment" rows="5" cols="60" id="textarea1">
                                    <?php echo $comment;?>
                                </textarea>
                                <br>
                                <br>
                                <b> Message:</b>
                                <br/>
                                <textarea name="comment1" rows="15" cols="60"><?php echo $comment1;?></textarea>
                                <br>
                                <input type="reset" name="reset" value="Clear">
                                <input type="submit" name="submit" value="Send">

                            </form>


                            <!----End OF The Bulk SMS FORM---->


                        </div>
                    
                    
                    
                </div>
            </main>
        </div>

        
      <!--To Fetch Data From Table-->  
    <script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","get_student.php?s_class="+str,true);
        xmlhttp.send();
    }
}
     function addallmob() {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      document.myform.textarea1.value +=xmlhttp.responseText;
        
            }
        }
        xmlhttp.open("GET","allstud.php",true);
        xmlhttp.send();
}

  
</script>

    
       <script> 
           function addmob(mob1)
           {
document.myform.textarea1.value += mob1+',';
            }
       </script> 

    </body>

    </html>
