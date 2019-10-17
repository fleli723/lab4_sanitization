<?php

require_once("Template.php");

$page = new Template("Search Page");
$page->addHeadElement('<link rel="stylesheet" type="text/css" href="stylesheet.css">');
$page->finalizeTopSection();
$page->finalizeBottomSection();

print $page->getTopSection();

print 	'<div class="topbar">
			<h1> CNMT 310 Lab 4 Sanitization</h1>
			<ul class="nav">
				<li><a href="lab4Result.php">Home</a></li>
			</ul>
		</div>';

print	'
<div class="content">
	<form name="userSearchBarForm" onsubmit="return ValidateUserSearch()" action="result.php" method="post">
		
		<span>Search: </span>
		<input type="text" id="SearchBar" name="Search_Bar_Name" placeholder="Title or Artist Name">
		<br>
		<input type="submit" value="Submit" id="Btnsubmit">
		
	</form>
</div>	
';

print $page->getBottomSection();

?>