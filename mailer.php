<?php
// Get data from form 
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

$to = "jahidul.fci@gmail.com";
$subject = "New entry from Portfolio";

// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message 
$txt = "Name: $name\r\n" .
       "Email: $email\r\n" .
       "Message: $message";

$headers = "From: noreply@iamjahid.online";

if (!empty($email)) {
    $mail_sent = mail($to, $subject, $txt, $headers);
    if ($mail_sent) {
        // Add JavaScript alert and redirection
        echo "<script type='text/javascript'>
                    alert('Thanks for contact with me!');
                    window.location.href = '/';
              </script>";
    } else {
        echo "Failed to send email. Please try again later.";
    }
} 
?>
