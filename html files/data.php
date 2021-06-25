<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST('enquiry')))
{
$n=$_POST['t1'];
$e=$_POST['ADDRESS'];
$enq=$_POST['enquiry'];
$p=$_POST['LINE 1'];
$cp=$_POST['LINE 2'];
$d=$_POST['description of yourself'];
$file=fopen("data.txt","a");
$data=$n."         ".$e."         ".$enq."n"     ".$p."    ".$d.";
$fwrite($file,$data);
$fclose($file);
echo"<h3>Your Enquiry Has Been Submitted. </h3>";
?>