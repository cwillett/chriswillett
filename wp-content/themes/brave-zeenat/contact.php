<?php
$to = $_REQUEST['sendto'] ;
$from = $_REQUEST['Email'] ;
$name = $_REQUEST['Name'] ;
$headers = "From: $from";
$subject = "Email from Dizeno Company";

$fields = array();
$fields{"Name"} = "Name";
$fields{"Email"} = "Email";
$fields{"Website"} = "Website";
$fields{"Message"} = "Message";

$body = "You have received the following information from your website:\n\n"; foreach($fields as $a => $b){ $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

$headers2 = "From: dizenoco@gmail.com";
$subject2 = "Thank you for contacting us";
$autoreply = "Thank you for contacting us. Somebody will get back to you as soon as possible, usualy within 48 hours. If you have any more questions, please consult our website at www.oursite.com";

if($from == '') {print "You have not entered an email, please go back and try again";}
else {
if($name == '') {print "You have not entered a name, please go back and try again";}
else {
$send = mail($to, $subject, $body, $headers);
$send2 = mail($from, $subject2, $autoreply, $headers2);
if($send)
{header( "Location: http://www.dizenoco.com/demo/thank-you/" );}
else
{print "We encountered an error sending your mail, please notify webmaster@YourCompany.com"; }
}
}
?> 

