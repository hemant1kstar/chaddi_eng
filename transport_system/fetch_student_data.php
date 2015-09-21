<?php
if(isset($_GET['stu_id']))
{
  include("db/connection.php");
$student_id=$_GET['stu_id'];
//echo "Student_id:$student_id";
                       $s_name="";
                       $s_class="";
                       $s_contact_no="";
                     mysqli_query ($con,"set character_set_results='utf8'"); 
                     $result=mysqli_query($con,"SELECT * FROM master where reg_no='$student_id'");
                     while($row= mysqli_fetch_array($result)) {
                       $s_name=$row['student_name'];
                       $s_class=$row['current_class'];
                       $s_contact_no=$row['contact_no'];
                            }
}
?>


    <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--6-col">
    <input class="mdl-textfield__input" type="text" id="student_name1" name="student_name1" value="<?php echo $s_name;?>"/>
    <label class="mdl-textfield__label" for="student_name1">Student Name</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--6-col">
    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="student_class1" name="student_class1" value="<?php echo $s_class;?>"/>
    <label class="mdl-textfield__label" for="student_class1">Class</label>
    <span class="mdl-textfield__error">Input is not a number!</span>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--6-col">
    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="student_no1" name="student_no1" value="<?php echo $s_contact_no;?>"/>
    <label class="mdl-textfield__label" for="student_no1">Contact Number</label>
    <span class="mdl-textfield__error">Input is not a number!</span>
  </div>