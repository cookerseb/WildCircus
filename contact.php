<?php include("includes/settings.php"); ?>
<?php include("includes/header.php"); ?>
<h1>Contact Us</h1>
<?php
// form action
$human = $_POST['human']; // in more elaborate script I prefer use random numbers for addition and a session of the good answer to compare session and post answer
if ($_POST['submit']) {
	
	$name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
	$from = 'From: '.$sitename.''; // from includes/config.php
    $to = $fromemail;  // from includes/config.php
    $subject = 'New message from '.$sitename.' contact form';
	
	$body = "From: $name\n E-Mail: $email\n Message:\n $message";
	
    if ($name != '' && $email != '') {
        if ($human == '4') {				 
            if (mail ($to, $subject, $body, $from)) { 
	        echo '<p>Your message has been sent!</p>';
	    } else { 
	        echo '<p>Something went wrong, go back and try again!</p>'; 
	    } 
	} else if ($_POST['submit'] && $human != '4') {
	    echo '<p>You answered the anti-spam question incorrectly!</p>';
	}
    } else {
        echo '<p>You need to fill in all required fields!!</p>';
    }
}
?>
<form method="post" action="contact.php">
        
    <label>Name</label>
    <input name="name" placeholder="Type Here">
            
    <label>Email</label>
    <input name="email" type="email" placeholder="Type Here">
            
    <label>Message</label>
    <textarea name="message" placeholder="Type Here"></textarea>
    
    <label>*What is 2+2? (Anti-spam)</label>
	<input name="human" placeholder="Type Here">
            
    <input id="submit" name="submit" type="submit" value="Submit">
        
</form>

<?php include("includes/footer.php"); ?>
