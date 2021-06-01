<?php

if(isset($_POST['send']))
{
	$name=$_POST['name'];
	$mailFrom=$_POST['mail'];
	$message=$_POST['message'];
	
	$mailTo="shagunagrawal0123@gmail.com.com";
	$headers="From: :.$mailFrom;
	$txt="You have received an e-mail from ".$name.".\n\n".$message;
	
	mail($mailTo,$txt,$headers);
	header("Location : index.pp?mailsend");
}