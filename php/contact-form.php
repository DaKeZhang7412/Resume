<?php 
$action=$_REQUEST['action']; 
               /* send the submitted data */ 
$name=$_REQUEST['name']; 
$email=$_REQUEST['email']; 
$subject=$_REQUEST['subject'];
$message=$_REQUEST['message']; 
$response="failed";
if (($name=="")||($email=="")||($subject=="")||($message=="")) 
	{ 
	echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
	} 
else{         
	$from="From: $name<$email>\r\nReturn-path: $email"; 
	$subject="Message sent using your contact form"; 
	mail("tribute.zhang@gmail.com", $subject, $subject, $message, $from); 
	$response="success";
	echo "Email sent!"; 
	} 
?> 