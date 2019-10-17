<?php

require_once("Template.php");

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
			<h2 class="action"> Thank you for submitting your answers! </h2>
			</div>';

print $page->getBottomSection();

?>