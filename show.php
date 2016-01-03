<?php 
if(!isset($_GET['item']))
{
	header('Location: ./erreur.php?erreur=404');
    exit();
}
else
{
	require('includes/settings.php');
	$show = htmlentities($_GET['item']);
	// get mysql show data
	$thisShow = GetShow($show);
	// SEO
	$metatitle = stripslashes($thisShow['meta_title']);
	$metadescription = stripslashes($thisShow['meta_description']);
	$metakeywords = stripslashes($thisShow['meta_keywords']);
	// display page contents
	include("includes/header.php");
	//print_r($thisShow);
	// display results (we suppose the content in div was created in an admin area with a text editor)
	echo "<h1>".stripslashes($thisShow['meta_title'])."</h1>\n";
	echo "   <div style=\"width:786px; display:inline-block;\">".stripslashes($thisShow['contents'])."</div>\n";
	include("includes/footer.php");	
	// NOTES
	// in futur developement I prefer set a session or a cache for $thisShow to limit system ressources of the server and mysql requetes
}
?>