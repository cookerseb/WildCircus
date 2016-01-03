<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo stripslashes($metatitle); ?></title>
<meta name="description" content="<?php echo stripslashes($metadescription); ?>" />
<meta name="keywords" content="<?php echo stripslashes($metakeywords); ?>" />
<meta name="generator" content="Sebastien Carrouget" />
<meta name="robots" content="index,follow" />
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/social.css" rel="stylesheet" type="text/css">
<?php 
// we suppose this lines are activate by a module system activate in an administration area (ex a flip image module, a zoom image module, a slide image module) to make different styles and presentations of the show.php page
if(preg_match("/show.php/i", $_SERVER['PHP_SELF'])){ ?>
<link href="css/flipimg.css" rel="stylesheet" type="text/css">
<link href="css/zoomimg.css" rel="stylesheet" type="text/css">
<link href="css/slideimg.css" rel="stylesheet" type="text/css">
<script src="js/jquery-1.4.2.min.js"></script>
<?php } ?>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function () {
 
    // Open in new window
    $(".show").click(function () {
        window.open($(this).find("a:first").attr("href"));
        return false;
    });
 
    // Show URL on Mouse Hover
    $(".show").hover(function () {
        window.status = $(this).find("a:first").attr("href");
    }, function () {
        window.status = "";
    });
 
});
</script>
</head>
<body>
<div class="core">
  <div class="header_nav">
  	<div class="topmenu"><img src="images/menu-btn.png" alt=""></div>
  	<div class="toplink">
    	<ul>
        	<li><a href="nextshow.html" title="Find and locate the next nearest show to you">next show</a></li>
            <li><a href="booking.html" title="Book your tickets, buy your place">booking</a></li>
            <li><a href="contact.html" title="Contact Us">contact</a></li>
        </ul>
    </div>
  </div>
  <div class="header">
  	<div class="sitename">Wild<br />Circus</div>
  </div>
  <div class="nav">
  	<ul>
    	<li class="home"><a href="index.html" title="Return to home">home</a></li>
        <li><a href="visit.html" title="Visit our capitals and the corridors of wild circus">visit</a></li>
        <li><a href="artists.html" title="Our artists and their specialties">artists</a></li>
        <li><a href="animals.html" title="The animals that are wild circus of the most amazing show">animals</a></li>
        <li><a href="history.html" title="The history and evolution of wild circus since its creation">history</a></li>
    </ul>
  </div>
  <div class="content">
  