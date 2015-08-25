<body bgcolor='skyblue'>
<?php
if(isset($_POST['submit']))
{
   $comment=$_POST['comment'];
       $comment1=$_POST['comment1'];
//header( "Location: http://bhashsms.com/api/sendmsg.php?user=7350182285&pass=a5c84b9&sender=ALMALA&phone=$comment&text=$comment1&priority=ndnd&smstype=normal"); 

//$username = (isset($_POST['username']) ) ? $_POST['username'] : '';
//$password = (isset($_POST['password']) ) ? $_POST['password'] : '';
//$sender = (isset($_POST['sender']) ) ? $_POST['sender'] : '';
//$recipient = (isset($_POST['recipient']) ) ? $_POST['recipient'] : '';
//$message = (isset($_POST['message']) ) ? $_POST['message'] : '';
 
 
 
 
// $Curl_Session = curl_init('http://bhashsms.com/api/sendmsg.php');commented
 curl_setopt ($Curl_Session, CURLOPT_POST, 1);
curl_setopt ($Curl_Session, CURLOPT_POSTFIELDS, "user=7350182285&pass=a5c84b9&sender=ALMALA&phone=$comment&text=$comment1&priority=ndnd&smstype=normal");
 //curl_setopt ($Curl_Session, CURLOPT_FOLLOWLOCATION, 1);
 curl_setopt($Curl_Session, CURLOPT_RETURNTRANSFER,1);
 $result=curl_exec ($Curl_Session);
//Print($result);
 curl_close ($Curl_Session);
    
    $Curl_Session3 = curl_init('http://bhashsms.com/api/recdlr.php');
 curl_setopt ($Curl_Session3, CURLOPT_POST, 1);
curl_setopt ($Curl_Session3, CURLOPT_POSTFIELDS, "user=7350182285&msgid=$result&phone=$comment");
 //curl_setopt ($Curl_Session3, CURLOPT_FOLLOWLOCATION, 1);
 curl_setopt($Curl_Session3, CURLOPT_RETURNTRANSFER,1);
 $result3=curl_exec ($Curl_Session3);
echo "Message :".$result3;
 curl_close ($Curl_Session3);
    
    
     $Curl_Session1 = curl_init('http://bhashsms.com/api/checkbalance.php');
 curl_setopt ($Curl_Session1, CURLOPT_POST, 1);
curl_setopt ($Curl_Session1, CURLOPT_POSTFIELDS,"user=7350182285&pass=a5c84b9");
// curl_setopt ($Curl_Session1, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($Curl_Session1, CURLOPT_RETURNTRANSFER,1);
$result1=curl_exec($Curl_Session1);
    echo "<br/>";
echo "The remaining SMS are :".$result1;
 curl_close ($Curl_Session1);
 
    
}   
 ?>
</body>