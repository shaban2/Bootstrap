<?php

$name=$_POST['name'];
$subject=$_POST['subject'];
$email=$_POST['email'];

$message=$_POST['message'];



$Proposalcompanyname=$_POST['proposalcompanyname'];
$Proposalwebsite=$_POST['proposalwebsite'];
$Proposalindustry=$_POST['proposalindustry'];
$Proposalcompanydescription=$_POST['proposalcompanydescription'];
$Proposalcity=$_POST['proposalcity'];
$Proposaladdress=$_POST['proposaladdress'];
$FundingInfocapitalraised=$_POST['fundingInfocapitalraised'];
$FundingInfocapitalseeking=$_POST['fundingInfocapitalseeking'];
$FundingInfocurrentinvestors=$_POST['fundingInfocurrentinvestors'];
$Contactfirstname=$_POST['contactfirstname'];
$Contactlastname=$_POST['contactlastname'];
$Contactprefix=$_POST['contactprefix'];
$Contacttitle=$_POST['contacttitle'];
$Contactphone=$_POST['contactphone'];
$Contactemail=$_POST['contactemail'];
$Proposalhowyoufoundus=$_POST['proposalhowyoufoundus'];
$Proposalreferralname=$_POST['proposalreferralname'];
$Proposalsupplementarydocuments=$_POST['proposalsupplementarydocuments'];



$email_from='Idea Foundation';
$email_subject='Idea Foundation Message';
$email_body="Name:$name. \n".
"Email:$email. \n".
"Name:$name. \n".
"Subject:$subject. \n".

"Message:$message. \n".






"proposalcompanyname:$Proposalcompanyname. \n".
"proposalwebsite:$Proposalwebsite.            \n".
"proposalindustry:$Proposalindustry.   \n".
"proposalcompanydescription:$Proposalcompanydescription.  \n".
"proposalcity:$Proposalcity.    \n".
"proposaladdress:$Proposaladdress.   \n".
"fundingInfocapitalraised :$FundingInfocapitalraised.   \n".
"fundingInfocapitalseeking:$FundingInfocapitalseeking.   \n".
"fundingInfocurrentinvestors:$FundingInfocurrentinvestors.   \n".
"contactfirstname:$Contactfirstname.   \n".
"contactlastname:$Contactlastname.    \n".
"contactprefix:$Contactprefix.    \n".
"contacttitle:$Contacttitle.    \n".
"contactphone:$Contactphone.     \n".
"contactemail:$Contactemail.    \n".
"proposalhowyoufoundus:$Proposalhowyoufoundus.    \n".
"proposalreferralname:$Proposalreferralname.     \n".
"proposalsupplementarydocuments:$Proposalsupplementarydocuments.   \n";



$to="shabanlubanga@gmail.com";

$headers="From:$email_from \r\n";
$headers .="Replay-To:$email \r\n";

mail($to,$email_subject,$email_body,$headers);


header("location:Home.html");
?>
