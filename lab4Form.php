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
	<form name="userSearchBarForm" action="result.php" method="post">
		
		<span>Search: </span>
		<input type="text" id="email_Entry" name="Email" placeholder="Email">
		<input type="text" id="integer_Entry" name="Integer" placeholder="Any whole number">
		<input type="text" id="URL_Entry" name="URL" placeholder="Enter a URL">
		<br>
		<input type="submit" value="Submit" id="Btnsubmit">
		
	</form>
</div>	
';

print $page->getBottomSection();

?>
