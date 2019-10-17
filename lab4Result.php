<?php

require_once("Template.php");
extract($_POST);
$page = new Template("Result Page");
$page->addHeadElement('<link rel="stylesheet" type="text/css" href="stylesheet.css">');
$page->finalizeTopSection();
$page->finalizeBottomSection();

print $page->getTopSection();

print 	'<div class="topbar">
			<h1> CNMT 310 Lab 4 Sanitization</h1>
			<ul class="nav">
				<li><a href="lab4Form.php">Validation</a></li>
			</ul>
		</div>';
			
print		'<div class="content">
			<h2 class="action">Here are your form submission results! </h2>';
			
			

			//Validate the email adress the user entered.
			if(isset($email)) {
				//Validate E-mail (Make sure it is not blank and a valid E-mail Address.)
				if($email==""){
					$errors['email']= "PHP - E-mail Address is a required field.";
				}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
					$errors['email']= "PHP - Please enter an email address using the following format:&#13;   johnsmith@sample.com";
			}else{
				echo("ERROR: the EMAIL FIELD is blank"); 
			}//endif


			//Validate the integer input
			if(isset($url)) {
				if (filter_var($integer, FILTER_VALIDATE_INT) === 0 || filter_var($integer, FILTER_VALIDATE_INT)) {
					echo("Variable is an integer");
				} else {
					echo("Variable is not an integer");
				}//end if
			}else{
				echo("ERROR: the INETGER FIELD is blank"); 
			}//endif


			//Validate the Url
			if(isset($url)) {
				// Remove all illegal characters from a url
				$url = filter_var($url, FILTER_SANITIZE_URL);

				// Validate url
				if (filter_var($url, FILTER_VALIDATE_URL)) {
					echo("$url is a valid URL");
				} else {
					echo("$url is not a valid URL");
				}//end if
			}else{
				echo("ERROR: the URL FIELD is blank"); 
			}//endif

			
			
	print	'</div>';

print $page->getBottomSection();

?>
