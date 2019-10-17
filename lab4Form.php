<?php

require_once("Template.php");

$page = new Template("Form Page");
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

print	'
<div class="content">
	<form name="userSearchBarForm" action="lab4Result.php" method="post">
		
		<span>Search: </span>
		<br>
		<input type="text" id="email_Entry" name="email" placeholder="Email"><br>
		<input type="text" id="integer_Entry" name="integer" placeholder="Any whole number"><br>
		<input type="text" id="URL_Entry" name="url" placeholder="Enter a URL">
		<br>
		<input type="submit" value="Submit" id="Btnsubmit">
		
	</form>
</div>	
';

print $page->getBottomSection();

?>
